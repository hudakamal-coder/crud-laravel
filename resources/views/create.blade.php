<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    this is create crud<br><br>
    <form action="{{ route('create.store') }}" method="POST">
        @csrf
        <div>
            <label for="">NAME</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">PRICE</label>
            <input type="text" name="price">
        </div>
        <div>
            <label for="">NOTE</label>
            <input type="text" name="note">
        </div>
        <button>SEND</button>
    </form><br><br>
<table>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>PRICE</th>
        <th>NOTE</th>
        <th>ACTION</th>
    </tr>
    @foreach ($creates as $row )
        <tr>
            <td>{{ $row['id'] }}</td>
            <td>{{ $row['name'] }}</td>
            <td>{{ $row['price'] }}</td>
            <td>{{ $row['note'] }}</td>
            <td>
                <a href="{{ route('create.edit',$row['id']) }}">EDIT</a>
                <form action="{{ route('create.destroy',$row['id']) }}" method="POST">
                 @csrf
                 @method('DELETE')
                 <button>DELETE</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>