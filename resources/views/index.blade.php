@extends("master_page.master",['title'=>$title])
@section("content")
<link href="{{asset('css/styles.css')}}" rel="stylesheet">
<section class ='items'>
@foreach($products as $product)
         <div class ='card'>
           <img src="{{asset('tumbnail/'.$product->banner_image)}}"  alt="{{$product->name}}">
           <p>Rented : {{$product->rented_time}}</p>
           <p>Movie :{{$product->name}}</p>
           <a href="{{url('product/'.$product->id)}}" class="stretched-link"></a>
         </div>
@endforeach
   </section>
@endsection("content")
