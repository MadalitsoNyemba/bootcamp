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
    <h3>Edit {{$todo->item}}</h3>
    <form action="{{route('editItem')}}" method="POST">
                @csrf
            <input type="text" name="item" value="{{$todo->item}}" class="form-control" placeholder="Item">
            <input type="hidden" name="item_id" value="{{$todo->id}}">
                    <br>
                    <input type="submit" class="btn btn-block btn-primary" value="Edit Item">
                </form>

      
        <script src="/js/app.js"></script>
    </body>
</html>
