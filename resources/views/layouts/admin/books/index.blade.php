<x-app-layout>
    <x-header title="{{ __('All Books') }}" button="{{ __('Create Books') }}" link="{{ __(route('books.create')) }}"></x-header>
    <x-pages.books.booksTable />
</x-app-layout>
