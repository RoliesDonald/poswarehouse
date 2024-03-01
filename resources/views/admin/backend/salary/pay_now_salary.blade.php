@extends('admin.template') @section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="javascript: void(0);"></a>
                            </li>
                        </ol>
                    </div>
                    <h4 class="page-title">Paid Salary</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12 col-xl-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- end timeline content-->

                        <div class="tab-pane" id="settings">
                            <form method="post" action="{{ route('employee.salary.store') }}"
                                enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $paysalary->id }}">

                                <h5 class="mb-4 text-uppercase text-warning">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    Paid Salary Form
                                </h5>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Employee Name
                                            </label>
                                            <h2>{{$paysalary->name}}</h2>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Month
                                            </label>
                                            <h2>
                                                {{date("F",strtotime("-1 month"))}}
                                            </h2>
                                            <input type="hidden" name="month" value="{{
                                                date(
                                                " F", strtotime("-1 month") ) }}">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Basic Salary
                                            </label>
                                            <h4>{{ $paysalary->salaray }}</h4>
                                            <input type="hidden" name="salary_month" value="{{ $paysalary->salaray }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Potongan
                                            </label>
                                            <h4>
                                                {{
                                                $paysalary["advance"][
                                                "advance_salary"
                                                ]
                                                }}
                                            </h4>
                                            {{-- <input type="hidden" name="advance_salary" value="{{
                                                $paysalary[" advance"][ "advance_salary" ] }}"> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Tunjangan
                                            </label>
                                            <h4>
                                                {{-- {{
                                                $paysalary["advance"][
                                                "advance_salary"
                                                ]
                                                }} --}}
                                            </h4>
                                        </div>
                                    </div>
                                    @php $total=$paysalary->salaray -
                                    $paysalary['advance']['advance_salary'];
                                    @endphp
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Total
                                            </label>
                                            <h4>
                                                {{ round($total) }}
                                                {{-- @if ($paysalary['advance']['advance_salary']==!NULL)
                                                <span>No Salary</span>
                                                @else
                                                {{ round($total) }}
                                                @endif --}}
                                            </h4>
                                            <input type="hidden" name="total" value=" {{ round($total) }}">
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="text-end">
                                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2">
                                        <i class="mdi mdi-content-save"></i>
                                        Paid
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- end settings content-->
                    </div>
                </div>
                <!-- end card-->
            </div>
            <!-- end col -->
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

<script type="text/javascript">
    $(document).ready(function () {
        $(".datepickeryearonly").datepicker({
            autoclose: true,
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years",
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $(".datepickermonthonly").datepicker({
            autoclose: true,
            format: "MM",
            viewMode: "month",
            minViewMode: 1,
        });
    });
</script>

@endsection