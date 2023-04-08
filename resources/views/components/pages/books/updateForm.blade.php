<x-card>
    <h2 class="text-white mb-8 text-center text-3xl">Update Book Information</h2>
    <form method="POST" action="">
        @csrf
        <div class="mb-3">
            <x-label for="book_id" value="{{ __('Book ID') }}" />
            <x-input id="book_id" class="block mt-1 w-full" type="text" name="book_id" :value="old('book_id')" required autofocus />
        </div>

        <div class="mb-3">
            <x-label for="title" value="{{ __('Title') }}" />
            <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
        </div>

        <div class="mb-3">
            <x-label for="author" value="{{ __('Author') }}" />
            <x-input id="author" class="block mt-1 w-full" type="text" name="author" :value="old('author')" required autofocus />
        </div>

        <div class="mb-3">
            <x-label for="cost" value="{{ __('Cost') }}" />
            <x-input id="cost" class="block mt-1 w-full" type="text" name="cost" :value="old('cost')" required autofocus />
        </div>

        <div class="mb-3">
            <x-label for="quantity" value="{{ __('Quantity') }}" />
            <x-input id="quantity" class="block mt-1 w-full" type="text" name="quantity" :value="old('quantity')" required autofocus />
        </div>

        <div class="mt-4">
            <x-button class="w-full">
                {{ __('UPDATE BOOKS') }}
            </x-button>
        </div>
    </form>
</x-card>
