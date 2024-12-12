<h2>{{ $post->title }}</h2>
<img src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->title }}" class="post-image" width="500" height="auto">
<p>{{ $post->content }}</p>

<h3>Комментарии:</h3>
@foreach ($post->comments as $comment)
    <p>{{ $comment->content }}</p>
@endforeach

<form action="{{ route('comments.store', $post) }}" method="POST">
    @csrf
    <textarea name="content" placeholder="Your comment..." required></textarea>
    <button type="submit">Submit</button>
</form>
