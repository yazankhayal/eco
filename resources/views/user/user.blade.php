@extends("layouts.app")
@section("css")
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
@endsection

@section("content")

    <div class="starter-template">
        <h1>User model CURD</h1>

        <div class="row">
            <div class="col-12">
                <a class="btn btn-success" href="{{route('user_create')}}">
                    Create new
                </a>
                <hr>
                <table id='table' class="table table-bordered" width='100%' border="1" style='border-collapse: collapse;'>
                    <thead>
                    <tr>
                        <td>#</td>
                        <td>Name</td>
                        <td>Location</td>
                        <td>Dog</td>
                        <td>Option</td>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{route('user_delete')}}">
                    {{csrf_field()}}
                    <input id="id" name="id" type="hidden">
                    <div class="modal-body">
                        <p class="text-danger">Are you sure</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Understood</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section("js")
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            // DataTable
            data();

            $(document).on("click",".btn_delete",function () {
                var name = $(this).data("name");
                var id = $(this).data("id");
                $(".modal-title").html(name);
                $("#id").val(id);
            });

        });
        var data = function () {
            $('#table').DataTable({
                processing: true,
                serverSide: true,
                "columnDefs": [{
                    "targets": [4],
                    "orderable": false
                }],
                ajax: "{{route('user_ajax')}}",
                columns: [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'location_id' },
                    { data: 'dog_id' },
                    { data: 'option' },
                ]
            });
        };
    </script>
@endsection

