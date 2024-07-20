<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('create.update',$creates['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="">NAME</label>
            <input type="text" name="name" value="{{ $creates['name'] }}">
        </div>
        <div>
            <label for="">PRICE</label>
            <input type="text" name="price" value="{{ $creates['price'] }}">
        </div>
        <div>
            <label for="">NOTE</label>
            <input type="text" name="note" value="{{ $creates['note'] }}">
        </div>
        <button>SEND</button>
    </form><br><br>  
</body>
</html>