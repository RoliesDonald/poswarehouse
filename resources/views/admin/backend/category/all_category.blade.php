@extends('admin.template')
@section('admin')

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#categoryname-modal">Create New Category</button>
                        </ol>
                    </div>
                    <h4 class="page-title">All Category</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">


                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach($category as $key=> $item)
                                <tr class="align-middle p-md-0">
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->category_name }}</td>
                                    <td>
                                        <a href="{{ route('edit.category',$item->id) }}"
                                            class="btn btn-blue rounded-pill waves-effect waves-light"><i
                                                class="mdi mdi-book-edit-outline font-22 p-0"></i></a>
                                        <a href="{{ route('delete.category',$item->id) }}" id="delete"
                                            class="btn btn-danger rounded-pill waves-effect waves-light"><i
                                                class="mdi mdi-delete-circle-outline font-22 p-0"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->

    </div> <!-- container -->
</div> <!-- content -->
<!-- SignIn modal content -->
<div id="categoryname-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center mt-2 mb-4">
                    <div class="auth-logo">
                        <h4>Create New Category</h4>
                    </div>
                </div>
                <form action="{{ route('category.store') }}" method="post" class="px-3">
                    @csrf
                    <div class="mb-3">
                        <label for="categoryname" class="form-label">Category Name</label>
                        <input class="form-control" type="text" name="categoryname" placeholder="Type Your Category">
                    </div>
                    <div class="mb-2 text-end">
                        <button class="btn rounded-pill btn-warning" type="submit">Create</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script type="text/javascript">
    $(document).ready(function () {
        $("#image").change(function (e) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#showImage").attr("src", e.target.result);
            };
            reader.readAsDataURL(e.target.files["0"]);
        });
    });
</script>

@endsection