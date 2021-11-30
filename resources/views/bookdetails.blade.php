@extends('layout')

@section('content')
<div class="container">
    <h2 class="text-center bg-warning">
        Book Detail
    </h2>

    <div class="text-left">
        <div>
            <p>Title : {{$books->title}} <br></p>
            <p>Author : {{$books->author}} <br></p>
            <p>Publisher : {{$books->publisher}} <br></p>
            <p>Year : {{$books->year}} <br></p>
            <p>Description : {{$books->description}} <br></p>
        </div>
    </div>
</div>
<br>
@endsection