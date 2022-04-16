<nav class=" border border-black border-opacity-5 md:flex md:justify-between md:items-center top-0 p-2 pt-4 pb-4 rounded-xl" style="color:rgb(237, 242, 244);background-color: rgb(43, 45, 66);">
    <div>
        <a href="/">
            <!--Change logo-->
            <!-- <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16"> -->
            <header class="text-2xl font-extrabold">Star Wars Blog</header>
        </a>
    </div>

    <div class="mt-8 md:mt-0 flex items-center">
        @auth
        <span class="text-xs font-bold">Welcome, {{ auth()->user()->name }}</span>
        <form method="POST" action="/logout" class="text-xs font-semibold text-blue-500 ml-6">
            @csrf
            <button type="submit">Logout</button>
        </form>
        @else
        <a href="/register" class="text-xs font-bold uppercase">Register</a>
        <a href="/login" class="text-xs font-bold uppercase ml-6">Login</a>
        @endauth

        <a href="#" class=" ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 hover:bg-red-800" style="background-color: rgb(239, 35, 60);">
            Join Newsletter
        </a>
    </div>
</nav>