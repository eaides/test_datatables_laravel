@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Eloquent Collection</div>
                    <div class="panel-body">
                        <table id="users-table" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('body_scripts')
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- DataTables -->
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

    <script>
        $(function () {
            $('#users-table').DataTable({
                serverSide: true,
                processing: true,
                ajax: '/eloquent/collection-data',
                columns: [
                    {data: 'id'},
                    {data: 'name'},
                    {data: 'email'},
                    {data: 'created_at'},
                    {data: 'updated_at'},
                    {data: 'action', orderable: false, searchable: false}
                ]
            });

            $(document).on('click', '.dt_edit', function(e) {
                e.preventDefault();
                var id = $(this).parents('tr').attr('id');
                alert('edit ' + id);
            })

            $(document).on('click', '.dt_remove', function(e) {
                e.preventDefault();
                var id = $(this).parents('tr').attr('id');
                alert('remove ' + id);
            })

        });
    </script>
@endpush

@push('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset("css/font-awesome.min.css") }}">
@endpush