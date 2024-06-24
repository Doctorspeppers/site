<div>

    <div class="mb-6">
        <label for="subtitle" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subtitle</label>
        <input type="text" name="subtitle" id="subtitle"  value="{{ $curriculum->subtitle ?? '' }}"
        class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-red-500 dark:focus:border-red-500">
    </div>
    <div class="mb-6" >
        <x-preview-mark-down label="Resume" input="resume" preview="previewResume">
            {{ $curriculum->resume ?? '' }}
        </x-preview-mark-down>
    </div>
    <div class="mb-6">
        <label for="skills" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Skills</label>
        <x-curriculum.fields.skills-select selected="{{ $curriculum->skills ?? '' }}"  name='skills'/>
    </div>
</div>
