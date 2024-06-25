<div class="flex  mb-5 mx-auto">
    <div class="text-center mx-auto w-1/3">
        <label for="dates[init]" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">De</label>
        <input @if(isset($dates['init'])) value="{{ $dates['init']->format('Y-m-d')  }}" @endif  type="date" placeholder="De" name="dates[init]"
        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-sm  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700  dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
    </div>
    <div class="w-1/3 text-center  mx-auto">
        <label for="dates[end]" class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">Até</label>

        <input @if(isset($dates['end'])) value="{{ $dates['end']->format('Y-m-d')  }}" @endif type="date" placeholder="Até" name="dates[end]"
        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-sm  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700  dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
    </div>

</div>
<div class=" text-center  mx-auto">
    <label for="dates[format]" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Formato</label>
    <input value="{{ $dates['format'] ?? '' }}"  type="text" placeholder="format: DD/MM/YYYY" name="dates[format]"
    class="block w-2/6  mx-auto p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-sm  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700  dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
</div>
