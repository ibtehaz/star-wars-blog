<nav class=" border border-black border-opacity-5 md:flex md:justify-between md:items-center top-0 p-2 pt-4 pb-4 rounded-xl" style="color:rgb(237, 242, 244);background-color: rgb(43, 45, 66);">
    <div>
        <a href="/">
            <!--Change logo-->
            <!-- <img src="/images/star-wars-logo.png" alt="Star Wars Logo" width="165" height="16"> -->
            <header class="text-2xl font-extrabold">Star Wars Blog</header>
        </a>
    </div>

    <div class="mt-8 md:mt-0 flex items-center">
        @auth
        <x-dropdown>
            <x-slot name="trigger">
                <button class="text-xs font-bold">
                    Welcome, {{ auth()->user()->name }}!
                </button>
            </x-slot>

          
                <x-dropdown-item
                    href="/posts"
                    :active="request()->is('admin/posts')"
                >
                    Dashboard
                </x-dropdown-item>

                <x-dropdown-item
                    href="/admin/posts/create"
                    :active="request()->is('admin/posts/create')"
                >
                    New Post
                </x-dropdown-item>
        

            <x-dropdown-item
                href="#"
                x-data="{}"
                @click.prevent="document.querySelector('#logout-form').submit()"
            >
                Log Out
            </x-dropdown-item>

            <form id="logout-form" method="POST" action="/logout" class="hidden">
                @csrf
            </form>
        </x-dropdown>

        @else
        <a href="/register" class="text-xs font-bold uppercase">Register</a>
        <a href="/login" class="text-xs font-bold uppercase ml-6">Login</a>
        @endauth

        <a href="#newsletter" class=" ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 hover:bg-red-800" style="background-color: rgb(239, 35, 60);">
            Join Newsletter
        </a>
    </div>
</nav>