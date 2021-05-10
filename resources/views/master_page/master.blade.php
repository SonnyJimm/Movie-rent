!<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>{{$title}}</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar fixed-top navbar navbar-dark bg-dark">
       <a class="navbar-brand" >Home</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarText">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
             <a class="nav-link" href="">Special<span class="sr-only"></span></a>
           </li>

           <li class="nav-item">
             <a class="nav-link" href="">About us</a>
           </li>

           <li class="nav-item">
             <a class="nav-link" href="">New Post</a>
           </li>

         </ul>


       </div>
     </nav>

    <div class="container">
      @yield("content")
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  </body>
</html>
