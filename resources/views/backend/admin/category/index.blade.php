@extends('backend.layouts.backend_master')

@section('title', 'Category')

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card planned_task">
            <div class="header">
                <h2>Category</h2>
                <ul class="header-dropdown dropdown">
                    <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                </ul>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#createModal">Create</button>
                <!-- Modal with btn -->
                <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Create Model</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <form id="createForm" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Category Name</label>
                                        <input type="text" class="form-control" name="category_name" placeholder="Category Name">
                                        <span class="text-danger error-text category_name_error"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Category Photo</label>
                                        <input type="file" class="form-control" name="category_photo" id="storeImage">
                                        <span class="text-danger error-text category_photo_error"></span> <br>
                                        <img src="" alt="category_photo" id="storeImagePreview" width="80" height="80" class="mt-3">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary theme-bg gradient">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#trashedModal">Trashed</button>
                <!-- Modal with btn -->
                <div class="modal fade" id="trashedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-striped table-hover table-borderless table-primary align-middle" id="trashedDataTable" style="width: 100%">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-lg-3">
                        <label class="form-label"></label>
                        <select class="form-control filter_data" id="status">
                            <option value="">-- Select Status --</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="allDataTable">
                        <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Category Name</th>
                                <th>Category Photo</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Sl No</th>
                                <th>Category Name</th>
                                <th>Category Photo</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <form id="editForm" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div class="modal-body">
                                                <input type="hidden" id="category_id">
                                                <div class="mb-3">
                                                    <label class="form-label">Category Name</label>
                                                    <input type="text" class="form-control" name="category_name" id="category_name">
                                                    <span class="text-danger error-text update_category_name_error"></span>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Category Photo</label>
                                                    <input type="file" class="form-control" name="category_photo" id="updateImage">
                                                    <span class="text-danger error-text update_category_photo_error"></span> <br>
                                                    <img src="" alt="category_photo" id="updateImagePreview" width="80" height="80" class="mt-3">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary theme-bg gradient">Edit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Store Image Preview
        $('#storeImage').change(function(){
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#storeImagePreview').attr('src', e.target.result).show();
            }
            reader.readAsDataURL(this.files[0]);
        });

        // Store Image Preview
        $('#updateImage').change(function(){
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#updateImagePreview').attr('src', e.target.result).show();
            }
            reader.readAsDataURL(this.files[0]);
        });

        // Read Data
        $('#allDataTable').DataTable({
            processing: true,
            serverSide: true,
            searching: true,
            ajax: {
                url: "{{ route('admin.category.index') }}",
                "data":function(e){
                    e.status = $('#status').val();
                },
            },
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'category_name', name: 'category_name' },
                { data: 'category_photo', name: 'category_photo' },
                { data: 'status', name: 'status' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });

        // Filter Data
        $(document).on('change', '.filter_data', function(e){
            e.preventDefault();
            $('#allDataTable').DataTable().ajax.reload();
        })

        // Store Data
        $('#createForm').on('submit', function (e) {
            e.preventDefault();
            const formData = new FormData(this);
            $.ajax({
                url: "{{ route('admin.category.store') }}",
                type: "POST",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                beforeSend:function(){
                    $(document).find('span.error-text').text('');
                },
                success: function (response) {
                    if(response.status == 400){
                        $.each(response.error, function(prefix, val){
                            $('span.'+prefix+'_error').text(val[0]);
                        })
                    }else{
                        $('#createForm')[0].reset();
                        $("#createModal").modal('hide');
                        $('#allDataTable').DataTable().ajax.reload();
                        toastr.success(response.message);
                    }
                },
            });
        });

        // Edit Data
        $(document).on('click', '.editBtn', function () {
            var id = $(this).data('id');
            var url = "{{ route('admin.category.edit', ":id") }}";
            url = url.replace(':id', id)
            $.ajax({
                url: url,
                type: "GET",
                success: function (response) {
                    $('#category_id').val(response.id);
                    $('#category_name').val(response.category_name);
                    $('#updateImagePreview').attr('src', "{{ asset('uploads/category_photo') }}"+"/"+ response.category_photo);
                },
            });
        });

        // Update Data
        $('#editForm').on('submit', function (e) {
            e.preventDefault();
            var id = $('#category_id').val();
            var url = "{{ route('admin.category.update', ":id") }}";
            url = url.replace(':id', id)
            const formData = new FormData(this);
            $.ajax({
                url: url,
                type: "POST",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                beforeSend:function(){
                    $(document).find('span.error-text').text('');
                },
                success: function (response) {
                    if(response.status == 400){
                        $.each(response.error, function(prefix, val){
                            $('span.update_'+prefix+'_error').text(val[0]);
                        })
                    }else{
                        $('#allDataTable').DataTable().ajax.reload();
                        $("#editModal").modal('hide');
                        toastr.success(response.message);
                    }
                },
            });
        });

        // Delete Data
        $(document).on('click', '.deleteBtn', function(){
            var id = $(this).data('id');
            var url = "{{ route('admin.category.destroy', ":id") }}";
            url = url.replace(':id', id)
            Swal.fire({
                title: 'Are you sure?',
                text: "You will be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: url,
                        method: 'DELETE',
                        success: function(response) {
                            $('#allDataTable').DataTable().ajax.reload();
                            toastr.warning('Category delete successfully.');
                            $('#trashedDataTable').DataTable().ajax.reload();
                        }
                    });
                }
            })
        })

        // Trashed Data
        $('#trashedDataTable').DataTable({
            processing: true,
            serverSide: true,
            searching: true,
            ajax: {
                url: "{{ route('admin.category.trash') }}",
            },
            columns: [
                { data: 'category_name', name: 'category_name' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });

        // Restore Data
        $(document).on('click', '.restoreBtn', function () {
            var id = $(this).data('id');
            var url = "{{ route('admin.category.restore', ":id") }}";
            url = url.replace(':id', id);
            $.ajax({
                url: url,
                type: "GET",
                success: function (response) {
                    $("#trashedModal").modal('hide');
                    $('#allDataTable').DataTable().ajax.reload();
                    $('#trashedDataTable').DataTable().ajax.reload();
                    toastr.success('Category restore successfully.');
                },
            });
        });

        // Force Delete Data
        $(document).on('click', '.forceDeleteBtn', function(){
            var id = $(this).data('id');
            var url = "{{ route('admin.category.force.delete', ":id") }}";
            url = url.replace(':id', id)
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: url,
                        method: 'GET',
                        success: function(response) {
                            $("#trashedModal").modal('hide');
                            $('#trashedDataTable').DataTable().ajax.reload();
                            toastr.error('Category force delete successfully.');
                        }
                    });
                }
            })
        })

        // Status Change Data
        $(document).on('click', '.statusBtn', function () {
            var id = $(this).data('id');
            var url = "{{ route('admin.category.status', ":id") }}";
            url = url.replace(':id', id)
            $.ajax({
                url: url,
                type: "GET",
                success: function (response) {
                    $('#allDataTable').DataTable().ajax.reload();
                    toastr.success('Category status change successfully.');
                },
            });
        });
    })
</script>
@endsection
