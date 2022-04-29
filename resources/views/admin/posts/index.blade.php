<x-layout>
    <div class="flex mt-10 max-w-4xl mx-auto">

        <aside class="w-48">

            <h4 class="font-semibold mb-4">
                Links
            </h4>

            <ul>
                <li>
                    <a href="/admin/posts" class="{{ request()->is('admin/posts')?'text-blue-500':''}}">
                        All Posts
                    </a>
                </li>
                <li>
                    <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create')?'text-blue-500':''}}">
                        New Post
                    </a>
                </li>
            </ul>

        </aside>
        <div class="flex-1 border border-gray-600 bg-gray-100 p-6 rounded-xl">

            <h1 class="text-center text-2xl font-bold text-gray-800">
                Manage Post
            </h1>

            <section class="px-6 py-4">
                <div class="container mx-auto px-4 sm:px-8 max-w-3xl">
                    <div class="py-2">
                        <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full">
                            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">

                                    <table class="min-w-full leading-normal">
                                        <tbody>
                                            
                                            @foreach ($posts as $post)

                                            <tr>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <div class="flex items-center">
                                                        <div class="ml-3">
                                                            <p class="text-gray-900 whitespace-no-wrap">
                                                                <a href="/posts/{{$post->slug}}">{{$post->title}}</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>

                                                <!-- <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                            <span aria-hidden="true" class="absolute inset-0 bg-green-200 opacity-50 rounded-full">
                                                            </span>
                                                            <span class="relative">
                                                                Published
                                                            </span>
                                                        </span>
                                                    </td> -->

                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <a href="/admin/posts/{{$post->id}}/edit" class="text-indigo-600 hover:text-indigo-900">
                                                        Edit
                                                    </a>
                                                </td>

                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <form method="POST" action="/admin/posts/{{$post->id}}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="text-xs text-red-500">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </div>


</x-layout>