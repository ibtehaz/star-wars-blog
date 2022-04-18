<x-layout>
    
    <div class="mt-10 max-w-md mx-auto border border-gray-200 p-6 rounded-xl">
        <h1 class="text-center text-2xl font-bold text-gray-800">Create Post</h1>
        
    <section class="px-6 py-8">
        
        
        {{-- x-data is using AlpineJS for dynamic rendering of slugs  --}}

        <form method="POST" action="/admin/posts"  x-data="{ title: '' }" enctype="multipart/form-data">
            @csrf

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                    Title
                </label>

                <input class="border border-gray-400 p-2 w-full" x-model="title" type="text" name="title" id="title"
                    value="{{ old('title') }}" required>

                @error('title')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="slug"
                >
                    URL Slug
                </label>

                <input class="border border-gray-400 p-2 w-full"
                       type="text"
                       name="slug"
                       id="slug"
                       {{-- value="{{ old('slug') }}" --}}
                       :value="title.toLowerCase().replace(/[^\w ]+/g, '').replace(/ +/g, '-');"
                       required
                >

                @error('slug')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="thumbnail" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Thumbnail
                </label>
                <input type="file" name="thumbnail" id="thumbnail" class="border border-gray-400 p-2 w-full" required>
            </div>


            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="excerpt"
                >
                    Excerpt
                </label>

                <textarea class="border border-gray-400 p-2 w-full"
                       name="excerpt"
                       id="excerpt"
                       required
                >{{ old('excerpt') }}</textarea>

                @error('excerpt')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="body"
                >
                    Body
                </label>

                <textarea class="border border-gray-400 p-2 w-full"
                       name="body"
                       id="body"
                       required
                >{{ old('body') }}</textarea>

                @error('body')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="category_id"
                >
                    Category
                </label>

                <select name="category_id" id="category_id">
                    @foreach (\App\Models\Category::all() as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }}
                        >{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>

                @error('category')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

           <button type="submit" class="bg-red-500 text-white uppercase font-bold text-xs py-2 px-10 rounded-2xl hover:bg-red-600">Publish</button>
        </form>
    </section>
</div>


</x-layout>
