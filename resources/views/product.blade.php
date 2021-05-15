@extends("master_page.master",['title'=>$title])
@section("content")
<p>{{$product->id}}</p>
<p>{{$product->name}}</p>
<p>{{$product->author}}</p>
<p>{{$product->producer}}</p>
<p>{{$product->banner_image}}</p>
<p>{{$product->genre}}</p>
<p>{{$product->length}}</p>
<p>{{$product->rented_time}}</p>
<p>{{$product->trailer}}</p>

<p>{{$product->type->type}}</p>
<p>{{$product->type->price}}</p>
<p>{{$product->branch->branch_name}}</p>
<p>{{$product->branch->branch_location}}</p> 
@endsection("content")
