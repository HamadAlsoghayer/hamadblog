<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>Create a new Blog</h1>
    
    <form method="POST" action="/blogs">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="title">
        
        </div>
        <div>
         <textarea name="content" placeholder="content" cols="30" rows="10"></textarea>
        </div>
        <div>
            <button type="submit">submit blog</button>
        </div>
    </form>
    </body>