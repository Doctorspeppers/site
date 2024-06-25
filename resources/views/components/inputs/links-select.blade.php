<!-- for improve remove laravel Livewire, this is problem with alpinejs -->
<div x-data="linksController()" @if (!empty($values)) x-init='loadLinks(@json($values))' @endif >
    <template x-for="(link, index) in links" :key="index">
        <div class="my-2 p-1 flex  ">
            <div class="flex  flex-auto flex-wrap">
                <div class="flex-1">
                    <input x-model="link.label"  placeholder="Label" name="links[labels][]"  class="rounded bg-white p-1 px-2 outline-none h-full w-full text-gray-800">
                </div>
            </div>
            <div class="flex ml-5 flex-auto flex-wrap">
                    <div class="flex-1">
                        <input x-model="link.link" placeholder="Link" name="links[links][]" type="text" class="rounded-s-lg bg-white p-1 px-2 outline-none h-full w-full text-gray-800">
                    </div>
                <div class="bg-white text-gray-900 w-8 py-1 pl-2 pr-1 border-l flex items-center border-gray-200">
                    <button @click="addLink()" type="button" class="text-center cursor-pointer w-6 h-6 text-gray-900 outline-none focus:outline-none">
                        <h1>+</h1>
                    </button>

                </div>
                <div class="bg-white text-gray-900 rounded-r-lg w-8 py-1 pl-2 pr-1 border-l flex items-center border-gray-200">
                    <button @click="removeLink(link)" type="button" class="text-center cursor-pointer w-6 h-6 text-gray-900 outline-none focus:outline-none">
                        <h1>-</h1>
                    </button>
                </div>
            </div>
        </div>
    </template>

</div>

@push('scripts')
    <script>
        let linksController = function() {
            return{
                    links: [
                        {
                            'label': '',
                            'link': ''
                        }
                    ],
                    loadLinks: function loadLinks(links) {
                        this.links = Object.keys(links).map(function (key) {
                            return {'label': key, 'link': links[key]};
                        });
                    },
                    addLink: function addLink(label = '', link = '') {
                        this.links.push({'label': label, 'link': link})
                    },
                    removeLink: function removeLink(link) {
                        if(this.links.length > 1){
                            this.links.splice(this.links.indexOf(link), 1)
                        }
                    }
                }
            }
    </script>
@endpush
