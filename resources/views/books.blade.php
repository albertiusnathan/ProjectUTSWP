@extends('layout')

@section('content')
<div class="container">
    <h2 class="text-center bg-warning">
        Book List
    </h2>

    <div class="text-center">
        <table class="text-dark table-bordered table-striped">
            <thead>
                <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Publisher</th>
                        <th>Year Released</th>
                        <th>Book Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $books)
                    <tr>
                        <td>{{$books->title}}</td>
                        <td>{{$books->category}}</td>
                        <td>{{$books->author}}</td>
                        <td>{{$books->publisher}}</td>
                        <td>{{$books->year}}</td>
                        <td><a href={{route('books.show',$books->id)}}>To Book Detail</a></td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>
<br>
@endsection