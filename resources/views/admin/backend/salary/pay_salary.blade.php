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
                            <a href="" class=""> </a>
                        </ol>
                    </div>
                    <h4 class="page-title">Pay Salary</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title pb-2">{{ date("F Y") }}</h4>
                        {{--
                        <hr />
                        --}}
                        <table id="basic-datatable" class="table dt-responsive table-hover table-bordered nowrap w-100">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Month</th>
                                    <th class="text-center">Salary</th>
                                    <th class="text-center">Potongan</th>
                                    <th class="text-center">Total</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($employee as $key=> $item)
                                <tr class="align-middle p-md-0">
                                    <td class="text-center">{{ $key + 1 }}</td>
                                    <td class="text-center">
                                        <img id="image" class="rounded-circle avatar-lg img-thumbnail"
                                            src="{{ (!empty($item->image)) ? url(''.$item->image) : url('upload/no_image.jpg') }}"
                                            style="width: 50px; height: 50px" />
                                    </td>
                                    <td class="text-center">
                                        {{ $item->name}}
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-primary p-1 font-14">{{
                                            date(
                                            "F Y",
                                            strtotime("-1 month")
                                            )
                                            }}</span>
                                    </td>
                                    <td class="text-end">
                                        {{ $item->salaray }}
                                    </td>
                                    <td class="text-end">
                                        @if ($item['advance']['advance_salary'] == NULL)
                                        <span class="badge bg-blue p-1 font-14">
                                            No Advance
                                        </span>
                                        @else
                                        <span class="badge bg-warning p-1 font-14">
                                            {{
                                            $item["advance"][
                                            "advance_salary"
                                            ]
                                            }}</span>
                                        @endif
                                    </td>
                                    <td class="text-end">
                                        @php $amount=$item->salaray -
                                        $item['advance']['advance_salary'] ;
                                        @endphp
                                        <span class="badge bg-danger p-1 font-14">{{ $amount }}</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('pay.now.salary', $item->id) }}"
                                            class="btn btn-success rounded-pill waves-effect waves-light"><i
                                                class="mdi mdi-check-outline"></i>
                                            Pay Now</a>
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