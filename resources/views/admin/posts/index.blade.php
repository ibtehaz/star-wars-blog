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
            <h1 class="text-center text-2xl font-bold text-gray-800">Manage Post</h1>

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
                                                        <!-- <a href="/admin/posts/{{$post->id}}/delete" class="text-indigo-600 hover:text-indigo-900">
                                                            Delete
                                                        </a> -->
                                                        <form method="POST" action="/admin/posts/{{$post->id}}">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button class="text-xs text-gray-400">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <!-- <div class="px-5 bg-white py-5 flex flex-col xs:flex-row items-center xs:justify-between">
                        <div class="flex items-center">
                            <button type="button" class="w-full p-4 border text-base rounded-l-xl text-gray-600 bg-white hover:bg-gray-100">
                                <svg width="9" fill="currentColor" height="8" class="" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1427 301l-531 531 531 531q19 19 19 45t-19 45l-166 166q-19 19-45 19t-45-19l-742-742q-19-19-19-45t19-45l742-742q19-19 45-19t45 19l166 166q19 19 19 45t-19 45z">
                                    </path>
                                </svg>
                            </button>
                            <button type="button" class="w-full px-4 py-2 border-t border-b text-base text-indigo-500 bg-white hover:bg-gray-100 ">
                                1
                            </button>
                            <button type="button" class="w-full px-4 py-2 border text-base text-gray-600 bg-white hover:bg-gray-100">
                                2
                            </button>
                            <button type="button" class="w-full px-4 py-2 border-t border-b text-base text-gray-600 bg-white hover:bg-gray-100">
                                3
                            </button>
                            <button type="button" class="w-full px-4 py-2 border text-base text-gray-600 bg-white hover:bg-gray-100">
                                4
                            </button>
                            <button type="button" class="w-full p-4 border-t border-b border-r text-base  rounded-r-xl text-gray-600 bg-white hover:bg-gray-100">
                                <svg width="9" fill="currentColor" height="8" class="" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>


            </section>
        </div>
    </div>


</x-layout>