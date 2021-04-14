<!doctype html>

<title>My blog</title>
<link rel="stylesheet" href="app.css">

<body>
    @foreach ($posts as $post)
    <article class="{{$loop->even ? "mb-6" : ''}}">
        <h1>
            <a href="posts/{{ $post->slug}}">
                {{$post->title}}
            </a>
        </h1>

        <div>{!!$post->body!!}</div>
    </article>
    @endforeach

</body>
