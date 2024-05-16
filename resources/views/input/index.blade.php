@extends('welcome')

@section('content')

@foreach ($inputs as $input)
{{-- essa sintaxe permite imprimir o texto estilizado --}}
{!! $input->content !!}
@endforeach

@endsection


