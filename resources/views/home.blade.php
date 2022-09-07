@extends('layouts.app')
@section('content')
    @forelse ($comics as $comic)
        <div class="col-2 thumb p-4">
            <div class="img-cutter">
                <img src="{{$comic->image}}" alt="series"></div>
            <h5>{{$comic->title}} </h5>
        </div>

        @empty
            <h1>Non sono presenti serie</h1>
    @endforelse

@endsection
