<footer id='newsletter' class=" border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16" style="background-color: rgb(43, 45, 66);color:rgb(237, 242, 244);">
    <img src="/images/star-wars-logo.png" alt="" class="animate-bounce mx-auto -mb-6" style="width: 145px;">

    <p class="text-sm mt-5">We use the force to keep your inbox clean.</p>

    <div class="mt-10">
        <div class="relative inline-block mx-auto rounded-full border border-red-500">

            <form method="POST" action="/newsletter" class="lg:flex text-sm">
                @csrf
                <div class="lg:py-3 lg:px-5 flex items-center">
                    <label for="email" class="hidden lg:inline-block">
                        <!-- Get rid of image -->
                        <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                    </label>

                  
                        <input id="email" name="email" autocomplete="off" type="text" placeholder="Your email address" class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                    
                   
                    
                </div>
                @error('email')
                    <p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>
                    @enderror

                <button type="submit" class="transition-colors duration-300 hover:bg-red-800 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8" style="background-color: rgb(239, 35, 60);">
                    Subscribe
                </button>
            </form>
        </div>
    </div>
</footer>