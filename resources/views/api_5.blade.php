@extends("layouts.app")

@section("content")

    <div class="starter-template">
        <h1>Return saved data via the API if it exists, if it does not exist then access the dog.ceo API for the
            data</h1>
        <p class="lead">https://dog.ceo/dog-api/documentation/ </p>

        <div class="row">
            <div class="col-12">
                <ul class="list-group">
                    @if($items->count() != 0)
                        @foreach($items as $item)
                            <li class="list-group-item">{{$item->name}}</li>
                        @endforeach
                    @else
                        <li class="list-group-item">No found</li>
                    @endif
                </ul>
                {{$items->render()}}
            </div>
        </div>

    </div>

@endsection
