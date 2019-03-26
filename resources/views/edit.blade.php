<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Document</title>
</head>
<body>
  <div class="container mt-4">
   
          .<div class="card">
              <div class="card-header mb-4">

                  Add Post
              </div>
          
        <form action="{{url('update/'.$post->id)}}" method="post">
              
              @method('PATCH')
            <div class="form-group">
                    @csrf
              <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="{{$post->title}}" placeholder="Enter post" required>
            </div>
            
            <div class="form-group">
                <textarea name="body" id="" cols="100" rows="5"   class="form-control"  required>{{$post->body}}</textarea>
             
            </div>
            <button type="submit" class="btn btn-primary btn-block" >Save</button>
            
            
          
          </form>
        </div>
    </div>
</body>
</html>