@extends('welcome')

@section('content')



@foreach ($products as $product)
<br>
{{$product->name}}
<br>
{{$product->price}}
<br>
{{$product->description}}
<br>
@endforeach


@endsection
