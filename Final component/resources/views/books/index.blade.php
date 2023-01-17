@extends('books.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2> Books section</h2>
            </div>
            <div class="pull-right">
                @can('administrator')
                <a class="btn btn-success" href="{{ route('books.create') }}"> Create New Book</a>
                @endcan
                <a class="btn btn-info" href="{{ route('cds.index') }}"> Cds</a>
                <a class="btn btn-info" href="{{ route('games.index') }}"> Games</a>
                <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
           
            <th>ID</th>
            <th>Author</th>
            <th>Title</th>
            <th>Pages</th>
            <th>Price</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->pages }}</td>
            <td>{{ $book->price }}</td>

            <td>
                @can('administrator')
                <form action="{{ route('books.destroy',$book->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('books.show',$book->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('books.edit',$book->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endcan
        @endforeach
        

    </table>
    {{ $books->links() }}


@endsection