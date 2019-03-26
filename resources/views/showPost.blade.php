<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
        <a href="create" class="btn btn-success mt-4">Add Post</a>
@foreach ($post as $item) 

<div class="container mt-4">     
    <div class="card">
        <div class="card-header" >{{$item['title']}}</div>
        <div class="card-body" >
            {{$item['body']}}
        </div>
    </div>
<form  action="" method="post">
    @csrf
    <a href=""  data-toggle="modal" data-target="#deleteModal" data-title="{{$item['title']}}" data-id="{{$item['id']}}"  class="btn btn-danger">Delete</a>
    <a href="edit/{{$item->id}}" class="btn btn-info btn">Update </a>
     <p>{{$item->created_at->diffForHumans()}}</p>
</form>
    <br>   
</div>
@endforeach
</div>

</div>


<div class="modal" tabindex="-1" role="dialog" id="deleteModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure to delete.</p>
        <small id="delete"></small>
      </div>
      <div class="modal-footer">
        <form id="fdelete" action="" method="post">
         @method('delete')
         @csrf 
        <button type="submit" class="btn btn-secondary" >No</button>
        <button type="submit" class="btn btn-primary">Yes</button>
      </form>
      </div>
    </div>
  </div>
</div>
<script src="{{asset('js/app.js')}}">  
</script>
<script>
  $('#deleteModal').on('show.bs.modal', function (event) {
    console.log("Modal is open"); 
    var button = $(event.relatedTarget)
    var id = button.data('id') 
    console.log(id)
    var title = button.data('title')
    var modal = $(this)
    modal.find('#delete').text(title)
    var url="{{url('delete')}}/"+id;
    //console.log(url);
    $('#fdelete').attr('action',url);
})
</script>














































</body>
</html>