@extends("layouts.app")

@section("content")

    <div class="starter-template">
        <h1>Return an image by breed</h1>
        <p class="lead">https://dog.ceo/dog-api/documentation/breed</p>

        <div class="row">
            <div class="col-12"><div class="row" id="results"></div></div>
        </div>

    </div>

@endsection

@section("js")
<script>
    $(document).ready(function () {
        data();
    });
    var data =function () {
        $.ajax({
            url:"https://dog.ceo/api/breed/hound/images",
            success: function(json) {
                if(json.status == "success"){
                    var item = json.message;
                    $.each( item, function( key, val ) {
                        $("#results").append("<img src='"+val+"' class='col-3 img-thumbnail' alt='"+val+"'>");
                    });
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
