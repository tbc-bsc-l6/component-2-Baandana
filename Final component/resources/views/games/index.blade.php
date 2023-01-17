@extends('games.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2> Games section</h2>
            </div>
            <div class="pull-right">
                @can('administrator')
                <a class="btn btn-success" href="{{ route('games.create') }}"> Create New Game</a>
                @endcan
                <a class="btn btn-info" href="{{ route('cds.index') }}"> Cds</a>
                <a class="btn btn-info" href="{{ route('books.index') }}"> Books</a>
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
            <th>Console</th>
            <th>Title</th>
            <th>Pegi</th>
            <th>Price</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($games as $game)
        <tr>
            <td>{{ $game->id }}</td>
            <td>{{ $game->console }}</td>
            <td>{{ $game->title }}</td>
            <td>{{ $game->pegi }}</td>
            <td>{{ $game->price }}</td>

            <td>
                @can('administrator')
                <form action="{{ route('games.destroy',$game->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('games.show',$game->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('games.edit',$game->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endcan
        @endforeach
        

    </table>
    {{ $games->links() }}


@endsection