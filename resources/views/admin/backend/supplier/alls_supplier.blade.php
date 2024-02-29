@extends('admin.template') @section('admin')

<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <a href="{{ route('add.supplier') }}"
                                class="btn btn-warning rounded-pill waves-effect waves-light">Add Supplier
                            </a>
                        </ol>
                    </div>
                    <h4 class="page-title">All Supplier</h4>
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
                                    <th>Logo</th>
                                    <th>Shop Name</th>
                                    <th>AE Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Tax</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($supplier as $key=> $item)
                                <tr class="align-middle p-md-0">
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <img id="image" class="rounded-circle avatar-lg img-thumbnail"
                                            src="{{ (!empty($item->image)) ? url(''.$item->image) : url('upload/no_image.jpg') }}"
                                            style="width: 50px; height: 50px" />
                                    </td>
                                    <td>{{ $item->shopname }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td class="text-truncate">
                                        {{ $item->email }}
                                    </td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>
                                        <a href="{{ route('edit.supplier', $item->id) }}" title="Edit"
                                            class="btn btn-blue rounded-pill waves-effect waves-light"><i
                                                class="mdi mdi-book-edit-outline font-22 p-0"></i></a>
                                        <a href="{{ route('delete.supplier', $item->id) }}" id="delete" title="Delete"
                                            class="btn btn-danger rounded-pill waves-effect waves-light"><i
                                                class="mdi mdi-delete-circle-outline font-22 p-0"></i></a>
                                        <a href="{{ route('detail.supplier', $item->id) }}" title="Detail"
                                            class="btn btn-success rounded-pill waves-effect waves-light"><i
                                                class="mdi mdi-file-eye-outline font-22 p-0"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- end card body-->
                </div>
                <!-- end card -->
            </div>
            <!-- end col-->
        </div>
        <!-- end row-->
    </div>
    <!-- container -->
</div>
<!-- content -->
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