@foreach ($posts as $post)
<h2><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
    <img src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->title }}" width="500" height="auto">
    <p>{{ $post->content }}</p>
    @if ($post->is_published)
        <form action="{{ route('posts.unpublish', $post) }}" method="POST">
            @csrf
            <button type="submit">Unpublish</button>
        </form>
    @else
        <form action="{{ route('posts.publish', $post) }}" method="POST">
            @csrf
            <button type="submit">Publish</button>
        </form>
    @endif
    <hr>
@endforeach
