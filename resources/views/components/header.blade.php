<!-- Page Heading -->
<header class="bg-white dark:bg-gray-800 shadow dark:text-white">
    <div class="flex justify-between max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        @if (isset($title))
            <div>{{ $title }}</div>
        @endif

        @if (isset($button))
            <a class="font-semibold text-gray-800 dark:text-gray-200 leading-tight border px-4 py-2 border border-gray-700 hover:border-gray-500 rounded" href={{ $link }}>{{ $button }}</a>
        @endif
    </div>
</header>
