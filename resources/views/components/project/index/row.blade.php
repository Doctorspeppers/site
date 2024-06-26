<div class="mt-3 lg:flex-col grid grid-cols-4 gap-4">
    <div class=" align-self-center">
        <h2 class="align-middle text-md font-semibold text-black dark:text-white">{{ $title }} </h2>({{ $dates }})
    </div>
    <div class="text-center">
        <img  class="lg:flex-col  h-1/2"
        src="https://skillicons.dev/icons?i={{ $skills }}" />
    </div>
    <div class="lg:flex-col text-center h-1/4">
        {{ $links->count() }}
    </div>
    <div class="grid grid-cols-3">
        <a href="{{ route('projects.attach', ['project' => $id]) }}" class="text-white text-center bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
            Attach
        </a>
        <a href="{{ route('projects.edit', ['project' => $id]) }}" class="text-white text-center bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
            Edit
        </a>
        <a href="{{ route('projects.delete', ['project' => $id]) }}" class="text-white text-center bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
            Delete
        </a>
    </div>
</div>
