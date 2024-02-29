@extends('admin.template') @section('admin')
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
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Profile Page</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-4 col-xl-4">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{
                                (!empty($adminData->photo))? url('upload/admin_images/'.$adminData->photo): url('upload/no_image.jpg')
                            }}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image" />

                        <h4 class="mb-0">{{ $adminData->name }}</h4>
                        <p class="text-muted">@webdesigner</p>

                        <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">
                            Follow
                        </button>
                        <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">
                            Message
                        </button>

                        <div class="text-start mt-3">
                            <p class="text-muted mb-2 font-13">
                                <strong>Full Name :</strong>
                                <span class="ms-2">{{ $adminData->name }}</span>
                            </p>

                            <p class="text-muted mb-2 font-13">
                                <strong>Mobile :</strong><span class="ms-2">{{ $adminData->phone }}</span>
                            </p>

                            <p class="text-muted mb-2 font-13">
                                <strong>Email :</strong>
                                <span class="ms-2">{{ $adminData->email }}</span>
                            </p>

                            <p class="text-muted mb-1 font-13">
                                <strong>Location :</strong>
                                <span class="ms-2">USA</span>
                            </p>
                        </div>

                        <ul class="social-list list-inline mt-3 mb-0">
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i
                                        class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-success text-success"><i
                                        class="mdi mdi-google"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i
                                        class="mdi mdi-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col-->

            <div class="col-lg-8 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data">
                            @csrf
                            <h5 class="mb-4 text-uppercase">
                                <i class="mdi mdi-account-circle me-1"></i>
                                Personal Info
                            </h5>
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
                                <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="row">
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
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="re_password" class="form-label">Re-Enter New Password</label>

                                        <div class="input-group input-group-merge">
                                            <input type="password"
                                                class="form-control @error('re_password') is-invalid @enderror"
                                                id="re_password" name="re_password" />
                                            @error('re_password')
                                            <span class="text-danger">
                                                {{ $message }}</span>
                                            @enderror
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="companyname" class="form-label">Company Name</label>
                                        <input type="text" class="form-control" id="companyname"
                                            placeholder="Enter company name" />
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