@extends('layout')

@section('content')

    <body>
  
    
    <form method="POST" action="/blogs/{{$blog->id}}">
    
    {{method_field('DELETE')}}
        {{ csrf_field() }}
        <div>
            <h1> {{$blog->title}}</h1>
        
        </div>
        <div>
         <h2>{{$blog->content}}</h2>
        </div>
        <div>
            <button type="submit">Delete blog</button>
        </div>
    </form>
    </body>

@endsection