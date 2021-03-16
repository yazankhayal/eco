@extends("layouts.app")

@section("content")

    <div class="starter-template">
        <h1>Return all breeds</h1>
        <p class="lead">https://dog.ceo/dog-api/documentation/ </p>

        <div id="results"></div>

    </div>

@endsection

@section("js")
<script>
    $(document).ready(function () {
        data();
    });
    var data =function () {
        $.ajax({
            url:"https://dog.ceo/api/breeds/list/all",
            success: function(json) {
                $("#results").html("<div class='alert alert-danger'>No API</div>");
                if(json.status == "success"){
                    var count = json.message.length;
                    var item = json.message;
                    var results = "";
                    $.each( item, function( key, val ) {
                        results += "<li class='list-group-item list-group-item-action'>" + key + "</li>";
                    });
                    $("#results").html("<ul class='list-group'>"+results+"</ul>");
                }
                else{
                    $("#results").html("<div class='alert alert-danger'>No API</div>");
                }
            },
            error: function(e) {
                $("#results").html("<div class='alert alert-danger'>No API</div>");
            }
        });
    };
</script>
@endsection
