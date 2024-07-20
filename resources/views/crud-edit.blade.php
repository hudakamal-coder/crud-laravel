<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{route('crud.update',$products['id'])}}">
        @csrf
        @method('PUT')
       <div>
        <label>NAME</label>
        <input type="text" name="name" value="{{ $products['name'] }}">
       </div>
       <div>
        <label>PRICE</label>
        <input type="text" name="price" value="{{ $products['price'] }}">
       </div>
       <div>
        <label>NOTE</label>
        <input type="text" name="note" value="{{ $products['note'] }}">
       </div>
       <button>EDIT</button>
    </form>
</body>
</html>