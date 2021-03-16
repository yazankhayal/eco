@extends("layouts.app")

@section("content")

    <div class="starter-template">
        <h1>Save the data provided by the dog.ceo API</h1>
        <p class="lead">Save into model Dog</p>

        <div class="row">
            <div class="col-12">
                @if($msg == "success")
                    <div class="alert alert-primary">
                        Successfully Updated
                    </div>
                @else
                    <div class="alert alert-warning">
                        Successfully Error
                    </div>
                @endif
            </div>
        </div>

    </div>

@endsection

