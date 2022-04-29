<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Login</h1>

            <form method="POST" action="/login" class="mt-10">
                @csrf


            

                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Email
                    </label>
                    <input type="email" class="border border-gray-400 p-2 w-full" name="email" id="email"
                        value="{{ old('email') }}" required>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Password
                    </label>
                    <input type="password" class="border border-gray-400 p-2 w-full" name="password" id="password"
                        required>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit" class="bg-red-400 text-white rounded py-2 px-4 hover:bg-red-500">
                        Login
                    </button>
                </div>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <li class="text-sm text-gray-500">{{ $error }}</li>
                    @endforeach
                @endif
            </form>

        </main>
    </section>
</x-layout>
