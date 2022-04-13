<x-header />
    <?php foreach 
    ($posts as $post): ?>
       <div class="container">
            <div class="row">
            <x-sidebar />
                <article>
                    <h1>
                        <a href="/posts/{{ $post->slug }}">
                            {{ $post -> title }}
                        </a>
                    </h1>
                    <p>
                    By <a href="/authors/{{$post->author->username }}">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a>
                    </p>
                    <div>
                        {{ $post -> excerpt }}
                    </div>
                </article>
            </div>
        </div>
    <?php endforeach; ?>

</body>
</html>