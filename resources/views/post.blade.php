<x-header />
    <article>
    <div class="container">
            <div class="row">
                <x-sidebar />
                <h1>{{ $post->title}}</h1>
                <p>
                    By <a href="/authors/{{$post->author->username }}">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a>                   
                </p>
                <div>
                    {!! $post->body !!}
                </div>
                <a href="/">Go back</a>
            </div>
        </div>
        
        
    </article>
    

</body>
</html>