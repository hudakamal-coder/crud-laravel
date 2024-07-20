 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootfile/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/icons.css">
    <title>Document</title>
 </head>
 <body>
    <script src="css/bootfile/js/bootstrap.min.js"></script>
    @extends('layouts.public')
     @section('content')

    
    {{--@foreach ($data as $row)
     <p>{{ $row->name }} am datayanay tedaya</p>
      @foreach ($row->posts as $row2)
          <p>{{ $row2->title }}</p>
      @endforeach
      @endforeach --}}

 @foreach ($data as $row)
     <p>{{ $row->title}}</p>
      <p>{{ $row->category?->name }}</p>
      @endforeach 

     
     <a href="{{ route('login') }}">login</a>
<br>

        @if(1==1)
           true
           @else
           false 
        @endif
<br>

@for($i = 0; $i < 10; $i++)
    <p>{{ 'test' }}</p>
@endfor

<br>

@php
    $i=0;
@endphp
@while ($i<100)
    {{ $i }}
    @php
        $i++;
    @endphp

   
@endwhile

<br><br>












@endsection
 </body>
 </html>