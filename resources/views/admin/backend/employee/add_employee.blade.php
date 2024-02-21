@extends('admin.template')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active"></li>
                        </ol>
                    </div>
                    <h4 class="page-title">Employee Profile</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">


            <div class="col-lg-8 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ $adminData->name }}" />
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="{{ $adminData->email }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            value="{{ $adminData->phone }}" />
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="new_password" class="form-label">Nationality</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password"
                                                class="form-control @error('new_password') is-invalid @enderror"
                                                id="new_password" name="new_password" />
                                            @error('new_password')
                                            <span class="text-danger">
                                                {{ $message }}</span>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="new_password" class="form-label">ID Card Number</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password"
                                                class="form-control @error('new_password') is-invalid @enderror"
                                                id="new_password" name="new_password" />
                                            @error('new_password')
                                            <span class="text-danger">
                                                {{ $message }}</span>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="new_password" class="form-label">Active Since</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password"
                                                class="form-control @error('new_password') is-invalid @enderror"
                                                id="new_password" name="new_password" />
                                            @error('new_password')
                                            <span class="text-danger">
                                                {{ $message }}</span>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="new_password" class="form-label">Descriptions</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password"
                                                class="form-control @error('new_password') is-invalid @enderror"
                                                id="new_password" name="new_password" />
                                            @error('new_password')
                                            <span class="text-danger">
                                                {{ $message }}</span>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="select-code-language" class="form-label">Employee Status</label>
                                        <select id="select-code-language" class="selectize-drop-header"
                                            placeholder="Select">
                                            <option value=" txt">Executive officer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="select-code-language" class="form-label">Positions</label>
                                        <select id="select-code-language" class="selectize-drop-header"
                                            placeholder="Select">
                                            <option value=" permanent">Permanent</option>
                                            <option value=" contract">Contract</option>
                                            <option value=" interns">Interns</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="old_password" class="form-label">Old Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password"
                                                class="form-control @error('old_password') is-invalid @enderror"
                                                id="old_password" name="old_password" />
                                            @error('old_password')
                                            <span class="text-danger">
                                                {{ $message }}</span>
                                            @enderror
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="new_password" class="form-label">New Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password"
                                                class="form-control @error('new_password') is-invalid @enderror"
                                                id="new_password" name="new_password" />
                                            @error('new_password')
                                            <span class="text-danger">
                                                {{ $message }}</span>
                                            @enderror
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="select-code-language" class="form-label">Company Name</label>
                                        <select id="select-code-language" class="selectize-drop-header"
                                            placeholder="Select a language...">
                                            <option value="txt">PT. Gemilang Abadi Sashana</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="example-fileinput" class="form-label">Admin Profile Image</label>
                                    <input type="file" name="photo" id="image" class="form-control" />
                                </div>
                            </div>

                            <!-- end row -->

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="example-fileinput" class="form-label">
                                    </label>
                                    <img id="showImage"
                                        src="{{ (!empty($adminData->photo)) ? url('upload/admin_images/'.$adminData->photo) : url('upload/no_image.jpg') }}"
                                        class="rounded-circle avatar-lg img-thumbnail" alt="profile-image" />
                                </div>
                            </div>

                            <!-- end row -->

                            <div class="text-end">
                                <button type="submit" class="btn btn-success waves-effect waves-light mt-2">
                                    <i class="mdi mdi-content-save"></i>
                                    Save
                                </button>
                            </div>
                        </form>
                        <!-- end tab-content -->
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