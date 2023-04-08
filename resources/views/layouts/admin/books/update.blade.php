<x-app-layout>
    <x-header title="{{ __('Update books') }}"></x-header>
    <x-card>
        <form action="" method="post">
            <div>
                <x-label for="book_id" value="{{ __('Book ID') }}" />
                <x-input class="block mt-1 w-full " id="book_id" type="text" name="book_id" :value="old('book_id')" required autofocus />
            </div>

            <div class="mt-4">
                <x-button class="w-full">
                    {{ __('SEARCH BOOK FOR UPDATE') }}
                </x-button>
            </div>
        </form>
    </x-card>
    <x-pages.books.updateForm />
</x-app-layout>
