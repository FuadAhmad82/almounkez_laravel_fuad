<h1>Create</h1>


<form action="{{route('post.insert')}}" method="POST">
    @csrf

    <input type="text" name="title">
    <input type="text" name="body">
    <button type="submit">Insert</button>
</form>

