 <!DOCTYPE html>
 <html>
 <head>
   
   
     <title>Index</title>
 </head>
 <body>
     <h1>Blogs</h1>
     <ul>
         @foreach($blogs as $blog)
            <li> <a href="/blogs/{{$blog->id}}/show">{{$blog->title}}</a> </li>
         @endforeach
     </ul>
 </body>
 </html>