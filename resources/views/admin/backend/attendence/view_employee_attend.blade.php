@extends('admin.template') @section('admin')

<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0"></ol>
                    </div>
                    <h4 class="page-title">All Employee Attendance</h4>
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
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Attend Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($detailsAttend as $key=> $item)
                                <tr class="align-middle p-md-0">
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <img id="image" class="rounded-circle avatar-lg img-thumbnail"
                                            src="{{ (!empty($item['employee']['image'])) ? url(''.$item['employee']['image']) : url('upload/no_image.jpg') }}"
                                            style="width: 50px; height: 50px" />
                                    </td>
                                    <td>{{ $item['employee']['name'] }}</td>
                                    <td class="text-truncate">
                                        {{ date('d-M-Y',strtotime($item->date))}}
                                    </td>
                                    <td>{{ $item->attend_status }}</td>

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