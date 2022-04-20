<x-layout>

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
            <h1 class="text-center text-2xl font-bold text-gray-800">Edit Post: {{$post->title}} </h1>

            <section class="px-6 py-8">


                {{-- x-data is using AlpineJS for dynamic rendering of slugs  --}}

                <form method="POST" action="/admin/posts/{{$post->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <x-form.input name="title" :value="old('title', $post->title)" required />

                    <x-form.input name="slug" :value="old('slug', $post->slug)" required />

                    <div class="flex mt-6">
                        <div class="flex-1">
                            <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)" />
                        </div>

                        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl ml-6" width="100">
                    </div>


                    <x-form.textarea name="excerpt" required>{{ old('excerpt', $post->excerpt) }}</x-form.textarea>

                    <x-form.textarea name="body" required>{{ old('body', $post->body) }}</x-form.textarea>


                    <x-form.field>
                        <x-form.label name="category" />

                        <select name="category_id" id="category_id">
                            @foreach (\App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}" {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>{{ ucwords($category->name) }}</option>
                            @endforeach
                        </select>

                        <x-form.error name="category" />
                    </x-form.field>
                    <x-form.button>Update</x-form.button>
        </div>

        
        </form>
        </section>
    </div>
    </div>

</x-layout>