@extends('welcome')

@section('content')
    create


    <div class="bg-red-300">
        <form action="/products" method="POST">
            @csrf

            <div>
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name">
            </div>

            <div>
                <label for="price">Preço:</label>
                <input type="number" name="price" id="price">
            </div>

            <div>
                <label for="content">Descrição:</label>
                <input type="text" name="content" id="content">
            </div>

            <button type="submit">criar</button>

        </form>
    </div>
@endsection
