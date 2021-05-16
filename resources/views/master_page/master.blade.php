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
       <a class="navbar-brand"  href="{{url('')}}" >Home</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarText">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
             <a class="nav-link" href="">Special<span class="sr-only"></span></a>
           </li>
          @if(Auth::guard("staff")->check())
           <li class="nav-item">
             <a class="nav-link" href="">Add Item</a>
           </li>
          @endif
         </ul>
       </div>

       <span class="navbar-text" style="margin-left:15px">
         @if(Auth::guard("customer")->check() OR Auth::guard("staff")->check())
              <a class="navbar-brand"  href="{{url('logout')}}" >LogOut</a>
         @else
              <a class="navbar-brand"  href="{{url('login')}}" >Login</a>
              <a class="navbar-brand"  href="{{url('staff/login')}}" >Login Staff</a>
         @endif
      </span>
     </nav>

    <div class="container" style="margin-top: 75px;">

      @yield("content")
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  </body>
</html>
