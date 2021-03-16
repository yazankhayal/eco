@extends("layouts.app")
@section("content")

    <div class="starter-template">
        <h1>User Edit - {{$item->name}}</h1>

        <div class="row">
            <div class="col-12">
                <form method="post" action="{{route('user_update')}}">
                    {{csrf_field()}}
                    <input id="id" name="id" value="{{$item->id}}" type="hidden">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control"  value="{{$item->name}}" id="name" name="name" aria-describedby="nameHelp" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="location_id">Location</label>
                        <select class="form-control" id="location_id" name="location_id">
                            <option>Location</option>
                            @foreach($location_id as $value)
                                <option value="{{$value->id}}" {{$value->id == $item->location_id ? "selected" : ""}}>{{$value->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="dog_id">Dog</label>
                        <select class="form-control" id="dog_id" name="dog_id">
                            <option>Dog</option>
                            @foreach($dog_id as $value)
                                <option value="{{$value->id}}" {{$value->id == $item->dog_id ? "selected" : ""}}>{{$value->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>

@endsection
