@extends('components.layout')

@section('title', 'Ingredients')

@section('content')

<h1>Ingredients list</h1>

@include('components.alert.success_message')

    <div class="row">
        <div class="col">
            <a href="{{ url('admin/ingredients/create') }}" class="btn btn-primary">Create</a>
        </div>
    </div>

    <table class="table">
        <tr>
            <th scope="col" width="100">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Recipe(s) with this ingredient</th>
            <th scope="col">Is active?</th>
            <th scope="col" width="100">Edit</th>
            <th scope="col" width="100">Delete</th>
        </tr>

        @foreach($ingredients as $ingredient)
            <tr>
                <th scope="row">{{ $ingredient->id }}</th>

                <td class="list-group-flush">
                    <a href="{{ url('admin/ingredients', ['id' => $ingredient->id]) }}" class="list-group-item list-group-item-action">{{ $ingredient->name }}</a>
                </td>

                <td>


                <td>
                    @if($ingredient->is_active) {{'Yes'}}
                    @else{{'No'}}
                    @endif
                </td>
                
                <td>
                    <a href="{{ route('admin.edit_ingredient', ['id' => $ingredient->id]) }}" class="btn btn-primary">Edit</a>
                </td>

                <td>
                    <form action="{{ route('admin.delete_ingredient', ['id' => $ingredient->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <div class="row">
        <div class="col">
            {{ $ingredients->links()}}
        </div>
    </div>
@endsection