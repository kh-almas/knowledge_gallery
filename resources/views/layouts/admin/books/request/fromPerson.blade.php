<x-app-layout>
    <x-header title="{{ __('Book Request from Another Person') }}" button="{{ __('Book Request') }}" link="{{ route('book_request') }}"></x-header>
    <x-pages.books.request.fromLibraryTable />
</x-app-layout>
