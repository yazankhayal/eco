@extends("layouts.app")

@section("content")

    <div class="starter-template">
        <h1>Return a random breed</h1>
        <p class="lead">https://dog.ceo/dog-api/documentation/random</p>

        <div class="row">
            <div class="col-6"><div id="results"></div></div>
            <div class="col-6"><div class="row" id="results1"></div></div>
        </div>

    </div>

@endsection

@section("js")
<script>
    $(document).ready(function () {
        data();
        data1();
    });
    var data =function () {
        $.ajax({
            url:"https://dog.ceo/api/breeds/image/random",
            success: function(json) {
                if(json.status == "success"){
                    var item = json.message;
                    $("#results").html("<img src='"+item+"' class='img-thumbnail' alt='"+item+"'>");
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
    var data1 =function () {
        $.ajax({
            url:"https://dog.ceo/api/breeds/image/random/3",
            success: function(json) {
                if(json.status == "success"){
                    var item = json.message;
                    $.each( item, function( key, val ) {
                        $("#results1").append("<img src='"+val+"' class='col-4 img-thumbnail' alt='"+val+"'>");
                    });
                }
                else{
                    $("#results1").html("<div class='alert alert-danger'>No API</div>");
                }
            },
            error: function(e) {
                $("#results1").html("<div class='alert alert-danger'>No API</div>");
            }
        });
    };
</script>
@endsection
