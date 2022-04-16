@props(['comment'])
<article class=" space-x-4 border border-black border-opacity-5 flex p-6 rounded-xl" style="color:rgb(237, 242, 244);background-color: rgb(43, 45, 66);">
    <div class="flex-shrink-0">
        <!-- profile img -->
        <img src="https://i.pravatar.cc/60?u={{ $comment->user_id}}" alt="" width="60" class="rounded-xl">
    </div>
    <div>
        <header class="mb-4">
            <h3 class="font-bold">
                <!-- name -->
                {{ $comment->author->username}}
            </h3>
            <p class="text-xs">
                Posted
                <time>
                    <!-- timestamp of posted date -->
                    {{$comment->created_at->format('F j, Y, g:i a')}}
                </time>
            </p>
        </header>
        <p>
            <!-- comment -->
            {{$comment->body}}
        </p>
    </div>
</article>