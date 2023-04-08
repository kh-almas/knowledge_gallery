<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-blue-900 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-500 inline-flex justify-center items-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
