<x-card>
    <h2 class="text-white mb-8 text-center text-3xl">Send a Request</h2>
    <div class="flex flex-wrap dark:text-white">
        <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-4">
            <div class="shadow-md rounded-lg p-6">
                <div class="mb-4">
                    <img src="https://via.placeholder.com/100" alt="Profile Picture" class="w-full h-auto rounded-md">
                </div>
                <div class="mt-4">
                    <h2 class="text-2xl font-bold mb-2">John Doe</h2>
                    <p class="text-gray-600 dark:text-white">Front-end Developer</p>
                </div>
                <div class="mt-4">
                    <h3 class="text-lg font-semibold mb-2">Email</h3>
                    <p class="text-gray-600 dark:text-white">john.doe@example.com</p>
                </div>
                <div class="mt-4">
                    <h3 class="text-lg font-semibold mb-2">Phone</h3>
                    <p class="text-gray-600 dark:text-white">(123) 456-7890</p>
                </div>
                <div class="mt-4">
                    <h3 class="text-lg font-semibold mb-2">Location</h3>
                    <p class="text-gray-600 dark:text-white">New York City, USA</p>
                </div>
                <div class="mt-4">
                    <h3 class="text-lg font-semibold mb-2">Website</h3>
                    <p class="text-gray-600 dark:text-white">www.johndoe.com</p>
                </div>
                <div class="mt-4">
                    <h3 class="text-lg font-semibold mb-2">Interested</h3>
                    <p class="text-gray-600 dark:text-white">HTML</p>
                </div>
                <div class="mt-4">
                    <h3 class="text-lg font-semibold mb-2">About Me</h3>
                    <p class="text-gray-600 dark:text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>

    <form method="POST" action="" class="mt-6">
        @csrf
        <div class="mb-3">
            <x-label for="book_id" value="{{ __('Book ID') }}" />
            <x-input id="book_id" class="block mt-1 w-full" type="text" name="book_id" :value="old('book_id')" required autofocus />
        </div>

        <div class="mb-3">
            <x-label for="letter" value="{{ __('Letter') }}" />
            <x-textarea id="letter" class="block mt-1 w-full" type="text" name="letter" :value="old('letter')" required autofocus></x-textarea>
        </div>

        <div class="mt-4">
            <x-button class="w-full">
                {{ __('Send Request') }}
            </x-button>
        </div>
    </form>
</x-card>
