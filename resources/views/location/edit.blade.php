@extends("layouts.app")
@section("content")

    <div class="starter-template">
        <h1>Location Edit - {{$item->name}}</h1>

        <div class="row">
            <div class="col-12">
                <form method="post" action="{{route('location_update')}}">
                    {{csrf_field()}}
                    <input id="id" name="id" value="{{$item->id}}" type="hidden">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" value="{{$item->name}}" id="name" name="name" aria-describedby="nameHelp" placeholder="Name">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>

@endsection
