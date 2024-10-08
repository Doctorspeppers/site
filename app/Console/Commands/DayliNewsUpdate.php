<?php

namespace App\Console\Commands;

use App\Models\NewsIntegration;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use App\Models\News;
use Carbon\Carbon;

class DayliNewsUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:news-update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    public function __invoke(): void {
        $this->handle();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->aggregatorsRequest();

        NewsIntegration::where('is_active', 1)->get()->each(function ($integration) {
            $this->newsRequest($integration);
        });
    }

    public function newsRequest($integration){

        News::where('highlighted', 1)->get()->each(function ($news) {
            if($news->date < now()->startOfDay()){
                $news->highlighted = 0;
                $news->save();
            }
        });

        $client = new \GuzzleHttp\Client();
        for ($i=0; $i < 10; $i++) {
            $response = json_decode($client->request('GET',  env("SCRAPPER_URL", "https://localhost:5000").'/news/'.$integration->aggregator."/".$i)->getBody(), true);
            foreach ($response  as $key => $news) {
                try{
                    unset($news['cves']);
                    $newNews = News::firstOrNew($news);

                    if($newNews->date == Carbon::today()){
                        $newNews->highlighted = 1;
                    }
                    $newNews->newsIntegration()->associate($integration->id)->save();
                    $newNews->save();

                } catch (\Exception $exception){
                    Log::error($exception);
                }
            }
        }

        return $response;
    }

    public function aggregatorsRequest(){

        $client = new \GuzzleHttp\Client();
        $response = json_decode($client->request('GET', env("SCRAPPER_URL", "https://localhost:5000").'/aggregators')->getBody(), true);

        foreach ($response['aggregators']  as $key => $aggregator) {
            try{
                NewsIntegration::firstOrNew($aggregator)->save();
            } catch (\Exception $exception){
                Log::error($exception);
            }
        }
        return $response;
    }
}
