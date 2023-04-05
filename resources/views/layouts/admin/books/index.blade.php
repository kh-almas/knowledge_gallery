<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('All Books') }}
        </h2>
    </x-slot>
    <x-slot name="button">
        <span class="font-semibold text-gray-800 dark:text-gray-200 leading-tight border px-4 py-2 border border-gray-700 hover:border-gray-500 rounded">
            {{ __('Create Books') }}
        </span>
    </x-slot>
    <x-slot name="link">{{ __('create.php') }}</x-slot>
</x-app-layout>
