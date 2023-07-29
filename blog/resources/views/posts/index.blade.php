<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>



<table class="table">
    <thead>
    <tr>
        <th scope="col">No.</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
    <tr>
        <th scope="row">1</th>
        <td>{{$post->title}}</td>
        <td>{{$post->body}}</td>
        <td><a href="{{route('post.edit',$post->id)}}">Edit</a></td>
        <td><a href="{{route('post.delete',$post->id)}}">Delete</a></td>
    </tr>
    @endforeach
    </tbody>
</table>


</body>
</html>








