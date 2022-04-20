<div class="flex mt-10 max-w-4xl mx-auto">
    <aside class="w-48">
        <h4 class="font-semibold mb-4">Links</h4>
        <ul>
            <li>
                <a href="/admin/posts" class="{{ request()->is('admin/posts')?'text-blue-500':''}}">All Posts</a>
            </li> 
            <li>
                <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create')?'text-blue-500':''}}">New Post</a>
            </li>
        </ul>
    </aside>
    <div class="flex-1 border border-gray-200 p-6 rounded-xl">
        <h1 class="text-center text-2xl font-bold text-gray-800">Create Post</h1>
        
        <section class="px-6 py-8">
        
        
            {{-- x-data is using AlpineJS for dynamic rendering of slugs  --}}
        
            <form method="POST" action="/admin/posts"  x-data="{ title: '' }" enctype="multipart/form-data">
                @csrf
        
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                        Title
                    </label>
        
                    <input class="border border-gray-200 p-2 w-full rounded-l" x-model="title" type="text" name="title" id="title"
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
        
                    <input class="border border-gray-200 p-2 w-full rounded-l"
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
                    <input type="file" name="thumbnail" id="thumbnail" class="border border-gray-200 p-2 w-full rounded-l" required>
                </div>
        
        
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="excerpt"
                    >
                        Excerpt
                    </label>
        
                    <textarea class="border border-gray-200 p-2 w-full rounded-l"
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
        
                    <textarea class="border border-gray-200 p-2 w-full rounded-l"
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
</div>