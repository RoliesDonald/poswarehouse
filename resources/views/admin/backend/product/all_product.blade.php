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
                            <a href="{{ route('add.product') }}"
                                class="btn btn-warning rounded-pill waves-effect waves-light">Add New Product
                            </a>
                        </ol>
                    </div>
                    <h4 class="page-title">All Product</h4>
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
                                    <th class="text-center">No</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Code</th>
                                    <th class="text-center">Category</th>
                                    <th class="text-center">Supplier</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($product as $key=> $item)
                                <tr class="align-middle p-md-0">
                                    <td class="text-center">{{ $key + 1 }}</td>
                                    <td class="text-center">
                                        <img id="image" class="rounded-circle avatar-lg img-thumbnail"
                                            src="{{ (!empty($item->product_image)) ? url(''.$item->product_image) : url('upload/no_image.jpg') }}"
                                            style="width: 50px; height: 50px" />
                                    </td>
                                    <td class="text-center">
                                        {{ $item->product_name }}
                                    </td>
                                    <td class="text-center">
                                        {{ $item->product_code }}
                                    </td>
                                    <td class="text-center">
                                        {{ $item["categ"]["category_name"] }}
                                    </td>
                                    <td class="text-center">
                                        {{ $item["suppli"]["name"] }}
                                    </td>
                                    <td class="text-center">
                                        {{ $item->selling_price }}
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('edit.product', $item->id) }}"
                                            class="btn btn-blue rounded-pill waves-effect waves-light"><i
                                                class="mdi mdi-book-edit-outline font-22 p-0"></i></a>
                                        <a href="{{ route('barcode.product', $item->id) }}"
                                            class="btn btn-info rounded-pill waves-effect waves-light"><i
                                                class="mdi mdi-barcode font-22 p-0"></i></a>
                                        <a href="{{ route('delete.product', $item->id) }}" id="delete"
                                            class="btn btn-danger rounded-pill waves-effect waves-light"><i
                                                class="mdi mdi-delete-circle-outline font-22 p-0"></i></a>
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