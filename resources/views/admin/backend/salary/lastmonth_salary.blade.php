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
                            <a href="{{ route('add.advansalary') }}"
                                class="btn btn-primary rounded-pill waves-effect waves-light">Last Month Salary
                            </a>
                        </ol>
                    </div>
                    <h4 class="page-title">Last Month Salary</h4>
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
                                    <th>Month</th>
                                    <th>Paid Salary</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($paidsalary as $key=> $item)
                                <tr class="align-middle p-md-0">
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <img id="image" class="rounded-circle avatar-lg img-thumbnail"
                                            src="{{ (!empty($item->employee->image)) ? url(''.$item->employee->image) : url('upload/no_image.jpg') }}"
                                            style="width: 50px; height: 50px" />
                                    </td>
                                    <td>{{ $item["employee"]["name"] }}</td>
                                    <td class="text-truncate">
                                        {{ $item->salary_month }}
                                    </td>
                                    @php
                                    $amount=$item->employee->salaray + $item->employee->advance_salary;
                                    @endphp
                                    <td>

                                        <span class="badge bg-danger p-1 font-14">{{ $amount }}</span>
                                        {{-- {{ $item->employee->salaray }} --}}
                                    </td>

                                    <td>
                                        @if ($item->advance_salary == NULL)
                                        <span class="badge bg-success p-1">
                                            Full Paid
                                        </span>
                                        @else
                                        {{ $item->advance_salary }}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-blue rounded-pill waves-effect waves-light"><i
                                                class="mdi mdi-account-edit-outline font-22 p-0"></i></a>

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