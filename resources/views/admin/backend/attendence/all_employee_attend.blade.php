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
                            <a href="{{ route('add.employee.attend') }}"
                                class="btn btn-warning rounded-pill waves-effect waves-light">Add Employee Attendence
                            </a>
                        </ol>
                    </div>
                    <h4 class="page-title">All Employee Attendence</h4>
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
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($allAttendData as $key=> $item)
                                <tr class="align-middle p-md-0">
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{date('Y-m-d', strtotime($item->date)) }}</td>
                                    <td>
                                        <a href="{{ route('edit.customer', $item->id) }}"
                                            class="btn btn-blue rounded-pill waves-effect waves-light"><i
                                                class="mdi mdi-book-edit-outline font-22 p-0"></i></a>
                                        <a href="{{ route('delete.customer', $item->id) }}"
                                            class="btn btn-danger rounded-pill waves-effect waves-light">View</a>
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