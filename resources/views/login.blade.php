@extends("master_page.master",['title'=>$title])
@section("content")
<form action="{{url("/login")}}" method="post">
{{csrf_field()}}
  <div class="form-group">
    <label for="from">User Name</label>
    <input type="text" class="form-control" name="user_name" aria-describedby="" placeholder="">
  </div>
  <div class="form-group">
    <label for="to" style="margin-top:15px" >Password</label>
    <input type="password" class="form-control" name="password" aria-describedby="" placeholder="">
  </div>

  <button type="submit" style="margin-top:15px" class="btn btn-primary">Log in</button>
</form>
@endsection("content")
