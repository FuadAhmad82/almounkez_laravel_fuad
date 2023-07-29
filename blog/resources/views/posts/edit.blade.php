<h1>Edit post</h1>


<form action="{{route('post.update',$post->id)}}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{$post->title}}">
    <input type="text" name="body" value="{{$post->body}}">
    <button type="submit">Update</button>
</form>
