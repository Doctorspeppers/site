<div>

    <div class="mb-6">
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
        <input type="text" name="title" id="title"  value="{{ $project->title ?? '' }}"
        class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-red-500 dark:focus:border-red-500">
    </div>
    <div class="mb-6" >
        <x-inputs.preview-mark-down label="Text" input="text" preview="previewText">
            {{ $project->text ?? '' }}
        </x-inputs.preview-mark-down>
    </div>
    <div class="mb-6">
        <label for="skills" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Skills</label>
        <x-inputs.skills-select selected="{{ $project->skills ?? '' }}"  name='skills'/>
    </div>
    <div class="mb-6">
        <label for="skills" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Skills</label>
        <x-inputs.links-select  name='links'/>
    </div>
</div>
