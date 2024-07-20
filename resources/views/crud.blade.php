<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <title>Document</title>
</head>
<body>
    this is crud <br><br><br><br>

    <br><br>
    <form method="POST" action="{{ route('crud.store') }}">
        @csrf
       <div>
        <label>NAME</label>
        <input type="text" name="name"><br>
        @error('name')
            {{ $message }}
        @enderror
       </div>
       <div>
        <label>PRICE</label>
        <input type="text" name="price"><br>
        @error('price')
         {{ $message }}    
        @enderror
       </div>
       <div>
        <label>NOTE</label>
        <input type="text" name="note"><br>
        @error('note')
            {{ $message }}
        @enderror
       </div>
       <button>SEND</button>


       @if($errors->any())
        <ul>
            @foreach ($errors->all()  as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
       @endif
    </form>

    
    <br><br>
    <table>
        <tr>
            <th>#</th>
            <th>NAME</th>
            <th>PRICE</th>
            <th>NOTE</th>
            <th>ACTION</th>
        </tr>
        @foreach ($products as $row )
            <tr>
                <td>{{ $row['id'] }}</td>
                <td>{{ $row['name'] }}</td>
                <td>{{ $row['price'] }}</td>
                <td>{{ $row['note'] }}</td>
                <td>
                    <a href="{{ route('crud.edit', $row['id']) }}">EDIT</a>
                    <form action="{{ route('crud.destroy', $row['id']) }}" method="POST">
                       @csrf
                       @method('DELETE')
                       
                       <BUtton>DELETE</BUtton>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>