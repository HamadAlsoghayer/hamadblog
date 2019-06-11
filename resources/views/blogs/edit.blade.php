@extends('layout')

@section('content')

    <body>
        <h1>Edit a  Blog</h1>
    
    <form method="POST" action="/blogs/{{$blog->id}}">
    
    {{method_field('PATCH')}}
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="title" value="{{ $blog->title }}">
        
        </div>
        <div>
         <textarea name="content" placeholder="content" cols="30" rows="10">{{$blog->content}}</textarea>
        </div>
        <div>
            <button type="submit">submit blog</button>
        </div>
    </form>
    </body>

@endsection