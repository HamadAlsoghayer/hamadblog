@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                           
                        </div>
                    @endif
                    <ul>
     @foreach($blogs as $blog)
     
         <li> <a href="/blogs/{{$blog->id}}/show">{{$blog->title}}</a> </li>
         @endforeach
     </ul>
 <a href="/blogs/create"><button>Create a blog</button></a>
                    You are logged in!

                    @foreach($notifications as $bc)
     
     <li> <p>{{$bc->data}}</p> </li>
     @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
