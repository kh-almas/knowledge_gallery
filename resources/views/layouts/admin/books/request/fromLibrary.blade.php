<x-app-layout>
    <x-header title="{{ __('Book Request from Library') }}" button="{{ __('Book Request') }}" link="{{ route('book_request') }}"></x-header>
    <x-pages.books.request.fromLibraryTable />
</x-app-layout>
