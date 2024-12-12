<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="Title">
    <textarea name="content" placeholder="Content"></textarea>
    <input type="file" name="image">
    <button type="submit">Create Post</button>
</form>
