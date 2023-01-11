@extends('cds.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2> Cds section</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('cds.create') }}"> Create New Cd</a>
                <a class="btn btn-info" href="{{ route('games.index') }}"> Games</a>
                <a class="btn btn-info" href="{{ route('books.index') }}"> Books</a>
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
            <th>Artist</th>
            <th>Title</th>
            <th>Duration</th>
            <th>Price</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($cds as $cd)
        <tr>
            <td>{{ $cd->id }}</td>
            <td>{{ $cd->artist }}</td>
            <td>{{ $cd->title }}</td>
            <td>{{ $cd->duration }}</td>
            <td>{{ $cd->price }}</td>

            <td>
                <form action="{{ route('cds.destroy',$cd->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('cds.show',$cd->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('cds.edit',$cd->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    {{ $cds->links() }}


@endsection