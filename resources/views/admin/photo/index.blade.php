<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Photo</title>
</head>
<body>
        <div class="container" style="width: 50%">
            <h1>Show Photos</h1>
            <table class="table" >
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Photo</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($photos as $photo)
                  <tr>
                    <th scope="row">{{$photo->id}}</th>
                    <input type="text" hidden value="{{$photo->id}}">
                    <td><img src="/storage/{{$photo->image}}" alt="" height="100px" width="150px"></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div style="display: flex;justify-content: space-between;">

                <a class="btn btn-success" href="/admin/photo/?page=@if($page>0){{$page-1}}@else 5 @endif">Previous</a>
                <a class="btn btn-success" href="/admin/photo/?page={{$page+1}}">Next</a>
              </div>
        </div>
</body>
</html>
