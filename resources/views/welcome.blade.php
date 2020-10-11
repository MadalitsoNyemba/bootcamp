<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BootCamp ToDo List</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body style="padding: 20px">
        <div class="row">
            <div class="col-md-6">
            <form action="{{route('addItem')}}" method="POST">
                @csrf
                    <input type="text" name="item" class="form-control" placeholder="Item">
                    <br>
                    <input type="submit" class="btn btn-block btn-primary" value="Add Item">
                </form>
            </div>

            <div class="col-md-6">
            <table class="table">
                <thead>
                  <tr>
                    <th >#</th>
                    <th >Item</th>
                    <th >Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($todos as $todo)
                  <tr>
                  <th >{{$loop->iteration}}</th>
                    <td>{{$todo->item}}</td>
                  <td><a href="{{route('showEdit', ['item_id' => $todo->id])}}" class="btn btn-primary">Edit</a> <a href="{{route('deleteItem', ['item_id' => $todo->id])}}" class="btn btn-danger">Delete</a></td>
                    
                  </tr>
                  @endforeach
                 
                </tbody>
              </table>
            </div>


    </div>
      
        <script src="/js/app.js"></script>
    </body>
</html>
