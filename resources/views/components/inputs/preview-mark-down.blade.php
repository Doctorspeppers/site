<div x-data="markdownController">
                    <label  for="{{ $input }}" class=" mb-2 text-md font-medium ">{{ $label }}</label>

                    <div x-init="editorJSController.init('{{ $input }}')" id="{{ $input }}" name="{{ $input }}" type="text" id="{{ $input }}"
                    class=" !text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-red-500 dark:focus:border-red-500"> {{ $slot }} </div>
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
