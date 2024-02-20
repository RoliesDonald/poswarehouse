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
                            <li class="breadcrumb-item"><a href="{{ route('add.employee') }}"
                                    class="btn btn-success rounded-pill waves-effect waves-light">
                                    <span class="btn-label"><i class="mdi mdi-plus-circle-outline"></i></span>Add
                                    Employee
                                </a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">All Employee</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row  ">
            <div class="col-12">
                <div class="card ">
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Salary</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ( $employee as $key->$item )
                                <tr>
                                    <td><img src="{{ asset($item-image) }}" style="width:50px; height:40px;"></td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->salary }}</td>
                                    <td>Manager</td>
                                    <td>PT. PAM</td>
                                    <td>
                                        <a href="" class="btn btn-danger rounded-pill waves-effect waves-light"><i
                                                class="mdi mdi-close"></i></a>
                                        <a href="" class="btn btn-blue rounded-pill waves-effect waves-light"><i
                                                class="mdi mdi-close"></i></a>
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

@endsection
