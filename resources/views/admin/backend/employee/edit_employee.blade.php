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
                    <h4 class="page-title">New Employee Form Registration</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-8 col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <!-- end timeline content-->

                        <div class="tab-pane" id="settings">
                            <form method="post" action="{{ route('employee.update') }}" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $employee->id }}" />
                                <h5 class="mb-4 text-uppercase">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    Add Employee
                                </h5>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Full Name</label>
                                            <input type="text" name="name" value="{{ $employee->name }}"
                                                class="form-control @error('name') is-invalid @enderror" />
                                            @error('name')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Email</label>
                                            <input type="email" name="email" value="{{ $employee->email }}"
                                                class="form-control @error('email') is-invalid @enderror" />
                                            @error('email')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Phone
                                            </label>
                                            <input type="text" name="phone" value="{{ $employee->phone }}"
                                                class="form-control @error('phone') is-invalid @enderror" />
                                            @error('phone')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Nationality
                                            </label>
                                            <input type="text" name="nationality" value="{{ $employee->nationality }}"
                                                class="form-control @error('nationality') is-invalid @enderror" />
                                            @error('nationality')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Id Card Number
                                            </label>
                                            <input type="text" name="idcard_num" value="{{ $employee->identitycard }}"
                                                class="form-control @error('idcard_num') is-invalid @enderror" />
                                            @error('idcard_num')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Address
                                            </label>
                                            <input type="text" name="address" value="{{ $employee->address }}"
                                                class="form-control @error('address') is-invalid @enderror" />
                                            @error('address')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Gender
                                            </label>
                                            <select name="gender" class="form-select" id="example-select">
                                                <option selected disabled>
                                                    Select Year
                                                </option>
                                                <option value="Male" {{ $employee->
                                                    gender == 'Male' ?
                                                    'selected': ''}}>Male
                                                </option>
                                                <option value="Female" {{ $employee->
                                                    gender == 'Female' ?
                                                    'selected': ''}}>Female
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Experience
                                            </label>
                                            <select name="experience" class="form-select" id="example-select">
                                                <option selected disabled>
                                                    Select Year
                                                </option>
                                                <option value="1 Year" {{ $employee->
                                                    experience == '1 Year' ?
                                                    'selected': ''}}>1 Year
                                                </option>
                                                <option value="2 Year" {{ $employee->
                                                    experience == '2 Year' ?
                                                    'selected': ''}}>2 Year
                                                </option>
                                                <option value="3 Year" {{ $employee->
                                                    experience == '3 Year' ?
                                                    'selected': ''}}>3 Year
                                                </option>
                                                <option value="4 Year" {{ $employee->
                                                    experience == '4 Year' ?
                                                    'selected': ''}}>4 Year
                                                </option>
                                                <option value="5 Year" {{ $employee->
                                                    experience == '5 Year' ?
                                                    'selected': ''}}>5 Year
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Salary
                                            </label>
                                            <input type="text" name="salary" value="{{ $employee->salaray }}"
                                                class="form-control @error('salary') is-invalid @enderror" />
                                            @error('salary')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Vacation
                                            </label>
                                            <input type="text" name="vacation" value="{{ $employee->vacation }}"
                                                class="form-control @error('vacation') is-invalid @enderror" />
                                            @error('vacation')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">
                                                City
                                            </label>
                                            <input type="text" name="city" value="{{ $employee->city }}"
                                                class="form-control @error('city') is-invalid @enderror" />
                                            @error('city')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="example-fileinput" class="form-label">
                                                Image</label>
                                            <input type="file" name="image" id="image" class="form-control" />
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="example-fileinput" class="form-label">
                                            </label>
                                            <img id="showImage"
                                                src="{{(!empty($employee->image))? url('', $employee->image):url('upload/no_image.jpg')}}"
                                                class="rounded-circle avatar-lg img-thumbnail" alt="profile-image" />
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="text-end">
                                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2">
                                        <i class="mdi mdi-content-save"></i>
                                        Update
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

@endsection