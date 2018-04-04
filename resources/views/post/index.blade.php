  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Laravel Crud</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

  <div class="container">
    <h2>Form</h2>
  <form action="/post/add" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{isset($edit->id)? $edit->id :''
  }}">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" value="{{isset($edit->id)? $edit->name :''
    }}" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="email">City:</label>
      <input type="text" class="form-control" value="{{isset($edit->id)? $edit->city :''
    }}"  placeholder="Enter city" name="city">
    </div>
    <div class="form-group">
    <label for="exampleFormControlFile1">Image Upload</label>
    <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
  </div>
    <button type="submit" class="btn btn-default" >Submit</button>
  </form>
  <div class="conatiner" style="margin-top:10px">
<table border="2">
<tr>
  <th>Name</th>
  <th>City</th>
  <th>Image</th>
  <th>Edit</th>
  <th>Delete</th>
</tr>
 @foreach($posts as $post)
<tr>
  <td>{{$post->name}}</td>
  <td>{{$post->city}}</td>
  <td><img src="{{$post->abc}}" height="60px" width="60px"></td>
  <td><a href="post/edit/{{$post->id}}">edit<a></td>
  <td><a href="post/delete/{{$post->id}}">delete<a></td>
</tr>
@endforeach
</table>
  </div>
</div>

</body>
</html>
