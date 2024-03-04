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
                    <h4 class="page-title">New Product</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <!-- end timeline content-->

                        <div class="tab-pane" id="settings">
                            <form id="productform" method="post" action="{{ route('update.product') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <h5 class="mb-4 text-camelcase text-warning">
                                    <i class="mdi mdi-account-circle me-1 text-warning"></i>
                                    New Product Form Registration
                                </h5>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="firstname" class="form-label">Product Name</label>
                                            <input type="text" name="product_name" class="form-control"
                                                value="{{ $product->product_name }}" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="firstname" class="form-label">Supplier
                                            </label>
                                            <select name="supplier_id" class="form-select" id="example-select">
                                                <option selected disabled>
                                                    Select Supplier
                                                </option>
                                                @foreach ( $supplier as $supp )
                                                <option value="{{ $supp->id }}" {{ $supp->id == $product->supplier_id
                                                    ? 'selected':'' }}>
                                                    {{ $supp->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="firstname" class="form-label">Category
                                            </label>
                                            <select name="category_id" class="form-select" id="example-select">
                                                <option selected disabled>
                                                    Select Category
                                                </option>
                                                @foreach ( $category as $categ )
                                                <option value="{{ $categ->id }}" {{ $categ->id == $product->category_id
                                                    ? 'selected':'' }}>
                                                    {{ $categ->category_name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="firstname" class="form-label">Product Code - SNA
                                            </label>
                                            <input type="text" name="product_code" class="form-control"
                                                value="{{ $product->product_code }}" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="firstname" class="form-label">Product Garage
                                            </label>
                                            <input type="text" name="product_garage" class="form-control"
                                                value="{{ $product->product_garage }}" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="firstname" class="form-label">Product Store
                                            </label>
                                            <input type="text" name="product_store" class="form-control"
                                                value="{{ $product->product_store }}" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="firstname" class="form-label">Buying Date
                                            </label>
                                            <input type="date" id="basic-datepicker" name="buying_date"
                                                class="form-control" placeholder="Buying Date"
                                                value="{{ $product->buying_date }}" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="firstname" class="form-label">Expired Date
                                            </label>

                                            <input type="date" id="basic-datepicker" name="expired_date"
                                                class="form-control" value="{{ $product->expired_date }}" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="firstname" class="form-label">Buying Price
                                            </label>
                                            <input type="text" name="buying_price" class="form-control"
                                                value="{{ $product->buying_price }}" />
                                        </div>
                                    </div>
                                    <hr class="bg-danger border-2 border-top border-warning" />
                                    <h4>Selling Price</h4>
                                    <hr />
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="firstname" class="form-label">Selling Price 1
                                                    </label>
                                                    <input type="text" name="selling_price" class="form-control"
                                                        value="{{ $product->selling_price }}" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="firstname" class="form-label">Min Sale
                                                    </label>
                                                    <input type="text" name="min_sell" class="form-control" value="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="example-fileinput" class="form-label">
                                                Product Image</label>
                                            <input type="file" name="product_image" id="image" class="form-control" />
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="example-fileinput" class="form-label">
                                            </label>
                                            <img id="showImage"
                                                src="{{(!empty($product->product_image))? url('', $product->product_image):url('upload/no_image.jpg')}}"
                                                class="rounded-circle avatar-lg img-thumbnail" alt="profile-image" />
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="text-end">
                                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2">
                                        <i class="mdi mdi-content-save"></i>
                                        Save Product
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
        $("#productform").validate({
            rules: {
                product_name: {
                    required: true,
                },
                category_id: {
                    required: true,
                },
                supplier_id: {
                    required: true,
                },
                product_code: {
                    required: true,
                },
                product_garage: {
                    required: true,
                },
                product_store: {
                    required: true,
                },
                buying_date: {
                    required: true,
                },
                expired_date: {
                    required: true,
                },
                buying_price: {
                    required: true,
                },
                selling_price: {
                    required: true,
                },
            },
            messages: {
                product_name: {
                    required: "Please Enter Product Name",
                },
                category_id: {
                    required: "Please Select Product Category",
                },
                supplier_id: {
                    required: "Please Select Supplier Name",
                },
                product_code: {
                    required: "Please Enter Product Code",
                },
                product_garage: {
                    required: "Please Enter Product Garage",
                },
                product_store: {
                    required: "Please Enter Product Store",
                },
                buying_date: {
                    required: "This field is required",
                },
                expired_date: {
                    required: "Please Enter Expired Date",
                },
                buying_price: {
                    required: "Please Enter Your Buying Price",
                },
                selling_price: {
                    required: "Please Enter Your Selling Price",
                },
            },
            errorElement: "span",
            errorPlacement: function (error, element) {
                error.addClass("invalid-feedback");
                element.closest(".form-group").append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass("is-invalid");
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass("is-invalid");
            },
        });
    });
</script>

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