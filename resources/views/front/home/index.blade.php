@extends('components.min_layout')
    
@section('content')
    <div class="row">
        @foreach($recipes as $recipe)
            <div class="col-3 m-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $recipe->name }}</h5>
                        <h6 class="card-subtitle text-muted">
                            @if($recipe->category)
                                {{ $recipe->category->name }}
                            @endif
                        </h6>
                        <a href="{{ url('admin.show_recipe', ['id' => $recipe->id]) }}">Link</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection