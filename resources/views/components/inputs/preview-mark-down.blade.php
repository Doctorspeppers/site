<div x-data="markdownController">
    <div @click='previewMarkdown("{{ $input }}", "{{ $preview }}")' class="float-right bg-red-700 text-white  hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 select-none dark:bg-red-800 dark:hover:bg-red-700 dark:focus:ring-red-700 dark:border-red-700"> Preview </div>
                    <label  for="{{ $input }}" class="block mb-2 text-md font-medium ">{{ $label }}</label>
                    <div class="m-5 hidden markdown-body" id="{{ $preview }}">
                    </div>
                    <textarea name="{{ $input }}" type="text" id="{{ $input }}" class="block w-full p-4 !text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-red-500 dark:focus:border-red-500"> {{ $slot }} </textarea>
</div>


@push('scripts')
    <script>
        let markdownController =  {
            previewMarkdown: function(inputId, previewId) {
                let input = document.getElementById(inputId);
                let preview = document.getElementById(previewId);

                if(input.classList.contains('hidden')){

                    input.classList.remove('hidden');
                    preview.classList.add('hidden');
                    return;
                }

                var text = input.value;
                var html = document.marked(text, {sanitize: true});
                preview.innerHTML = document.DOMPurify.sanitize(html);

                preview.classList.remove('hidden');
                input.classList.add('hidden');
            }
        }



    </script>
@endpush
