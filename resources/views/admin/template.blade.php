<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | {{ config("app.name") }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}" />

    <!-- third party css -->
    <link href="{{
                asset(
                    'backend/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css'
                )
            }}" rel="stylesheet" type="text/css" />
    <link href="{{
                asset(
                    'backend/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css'
                )
            }}" rel="stylesheet" type="text/css" />
    <link href="{{
                asset(
                    'backend/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css'
                )
            }}" rel="stylesheet" type="text/css" />
    <link href="{{
                asset(
                    'backend/assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css'
                )
            }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- Plugins css -->
    <link href="{{
                asset('backend/assets/libs/flatpickr/flatpickr.min.css')
            }}" rel="stylesheet" type="text/css" />
    <link href="{{
                asset(
                    'backend/assets/libs/selectize/css/selectize.bootstrap3.css'
                )
            }}" rel="stylesheet" type="text/css" />
    <link href="{{
                asset('backend/assets/libs/mohithg-switchery/switchery.min.css')
            }}" rel="stylesheet" type="text/css" />
    <link href="{{
                asset('backend/assets/libs/multiselect/css/multi-select.css')
            }}" rel="stylesheet" type="text/css" />
    <link href="{{
                asset('backend/assets/libs/select2/css/select2.min.css')
            }}" rel="stylesheet" type="text/css" />
    <link href="{{
                asset(
                    'backend/assets/libs/selectize/css/selectize.bootstrap3.css'
                )
            }}" rel="stylesheet" type="text/css" />
    <link href="{{
                asset(
                    'backend/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css'
                )
            }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/libs/clockpicker/bootstrap-clockpicker.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('backend/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}"
        rel="stylesheet" type="text/css" />

    <!-- Bootstrap css -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
    <!-- icons -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Head js -->
    <script src="{{ asset('backend/assets/js/head.js') }}"></script>
    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet" type="text/css" />
</head>

<!-- body start -->

<body data-layout-mode="default" data-theme="dark" data-topbar-color="dark" data-menu-position="fixed"
    data-leftbar-color="dark" data-leftbar-size="default" data-sidebar-user="false">
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Topbar Start -->
        @include('admin.body.header')
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->

        <!-- Left Sidebar End -->
        @include('admin.body.sidebar')
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            @yield('admin')
            <!-- content -->

            <!-- Footer Start -->
            @include('admin.body.footer')
            <!-- end Footer -->
        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link py-2" data-bs-toggle="tab" href="#chat-tab" role="tab">
                        <i class="mdi mdi-message-text d-block font-22 my-1"></i>
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content pt-0">
                <div class="tab-pane" id="chat-tab" role="tabpanel">
                    <form class="search-bar p-3">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search..." />
                            <span class="mdi mdi-magnify"></span>
                        </div>
                    </form>

                    <h6 class="fw-medium px-3 mt-2 text-uppercase">
                        Group Chats
                    </h6>

                    <div class="p-2">
                        <a href="javascript: void(0);" class="text-reset notification-item ps-3 mb-2 d-block">
                            <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-success"></i>
                            <span class="mb-0 mt-1">App Development</span>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item ps-3 mb-2 d-block">
                            <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-warning"></i>
                            <span class="mb-0 mt-1">Office Work</span>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item ps-3 mb-2 d-block">
                            <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-danger"></i>
                            <span class="mb-0 mt-1">Personal Group</span>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item ps-3 d-block">
                            <i class="mdi mdi-checkbox-blank-circle-outline me-1"></i>
                            <span class="mb-0 mt-1">Freelance</span>
                        </a>
                    </div>

                    <h6 class="fw-medium px-3 mt-3 text-uppercase">
                        Favourites
                        <a href="javascript: void(0);" class="font-18 text-danger"><i
                                class="float-end mdi mdi-plus-circle"></i></a>
                    </h6>

                    <div class="p-2">
                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="{{
                                                asset(
                                                    'backend/assets/images/users/user-10.jpg'
                                                )
                                            }}" class="rounded-circle avatar-sm" alt="user-pic" />
                                    <i class="mdi mdi-circle user-status online"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">
                                        Andrew Mackie
                                    </h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">
                                            It will seem like simplified
                                            English.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="{{
                                                asset(
                                                    'backend/assets/images/users/user-1.jpg'
                                                )
                                            }}" class="rounded-circle avatar-sm" alt="user-pic" />
                                    <i class="mdi mdi-circle user-status away"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">
                                        Rory Dalyell
                                    </h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">
                                            To an English person, it will
                                            seem like simplified
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="{{
                                                asset(
                                                    'backend/assets/images/users/user-9.jpg'
                                                )
                                            }}" class="rounded-circle avatar-sm" alt="user-pic" />
                                    <i class="mdi mdi-circle user-status busy"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">
                                        Jaxon Dunhill
                                    </h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">
                                            To achieve this, it would be
                                            necessary.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <h6 class="fw-medium px-3 mt-3 text-uppercase">
                        Other Chats
                        <a href="javascript: void(0);" class="font-18 text-danger"><i
                                class="float-end mdi mdi-plus-circle"></i></a>
                    </h6>

                    <div class="p-2 pb-4">
                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="{{
                                                asset(
                                                    'backend/assets/images/users/user-2.jpg'
                                                )
                                            }}" class="rounded-circle avatar-sm" alt="user-pic" />
                                    <i class="mdi mdi-circle user-status online"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">
                                        Jackson Therry
                                    </h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">
                                            Everyone realizes why a new
                                            common language.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="{{
                                                asset(
                                                    'backend/assets/images/users/user-4.jpg'
                                                )
                                            }}" class="rounded-circle avatar-sm" alt="user-pic" />
                                    <i class="mdi mdi-circle user-status away"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">
                                        Charles Deakin
                                    </h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">
                                            The languages only differ in
                                            their grammar.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="{{
                                                asset(
                                                    'backend/assets/images/users/user-5.jpg'
                                                )
                                            }}" class="rounded-circle avatar-sm" alt="user-pic" />
                                    <i class="mdi mdi-circle user-status online"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">
                                        Ryan Salting
                                    </h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">
                                            If several languages coalesce
                                            the grammar of the resulting.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="{{
                                                asset(
                                                    'backend/assets/images/users/user-6.jpg'
                                                )
                                            }}" class="rounded-circle avatar-sm" alt="user-pic" />
                                    <i class="mdi mdi-circle user-status online"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">
                                        Sean Howse
                                    </h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">
                                            It will seem like simplified
                                            English.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="{{
                                                asset(
                                                    'backend/assets/images/users/user-7.jpg'
                                                )
                                            }}" class="rounded-circle avatar-sm" alt="user-pic" />
                                    <i class="mdi mdi-circle user-status busy"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">
                                        Dean Coward
                                    </h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">
                                            The new common language will be
                                            more simple.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="{{
                                                asset(
                                                    'backend/assets/images/users/user-8.jpg'
                                                )
                                            }}" class="rounded-circle avatar-sm" alt="user-pic" />
                                    <i class="mdi mdi-circle user-status away"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">
                                        Hayley East
                                    </h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">
                                            One could refuse to pay
                                            expensive translators.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="text-center mt-3">
                            <a href="javascript:void(0);" class="btn btn-sm btn-white">
                                <i class="mdi mdi-spin mdi-loading me-2"></i>
                                Load more
                            </a>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tasks-tab" role="tabpanel">
                    <h6 class="fw-medium p-3 m-0 text-uppercase">
                        Working Tasks
                    </h6>
                    <div class="px-2">
                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                            <p class="text-muted mb-0">
                                App Development<span class="float-end">75%</span>
                            </p>
                            <div class="progress mt-2" style="height: 4px">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 75%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                            <p class="text-muted mb-0">
                                Database Repair<span class="float-end">37%</span>
                            </p>
                            <div class="progress mt-2" style="height: 4px">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 37%"
                                    aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                            <p class="text-muted mb-0">
                                Backup Create<span class="float-end">52%</span>
                            </p>
                            <div class="progress mt-2" style="height: 4px">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 52%"
                                    aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>
                    </div>

                    <h6 class="fw-medium px-3 mb-0 mt-4 text-uppercase">
                        Upcoming Tasks
                    </h6>

                    <div class="p-2">
                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                            <p class="text-muted mb-0">
                                Sales Reporting<span class="float-end">12%</span>
                            </p>
                            <div class="progress mt-2" style="height: 4px">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 12%"
                                    aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                            <p class="text-muted mb-0">
                                Redesign Website<span class="float-end">67%</span>
                            </p>
                            <div class="progress mt-2" style="height: 4px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 67%"
                                    aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                            <p class="text-muted mb-0">
                                New Admin Design<span class="float-end">84%</span>
                            </p>
                            <div class="progress mt-2" style="height: 4px">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 84%"
                                    aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>
                    </div>

                    <div class="p-3 mt-2 d-grid">
                        <a href="javascript: void(0);" class="btn btn-success waves-effect waves-light">Create Task</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="{{ asset('backend/assets/js/vendor.min.js') }}"></script>

    <script src="{{
                asset(
                    'backend/assets/libs/selectize/js/standalone/selectize.min.js'
                )
            }}"></script>
    <script src="{{
                asset('backend/assets/libs/mohithg-switchery/switchery.min.js')
            }}"></script>
    <script src="{{
                asset(
                    'backend/assets/libs/multiselect/js/jquery.multi-select.js'
                )
            }}"></script>
    <script src="{{
                asset('backend/assets/libs/select2/js/select2.min.js')
            }}"></script>
    <script src="{{
                asset(
                    'backend/assets/libs/jquery-mockjax/jquery.mockjax.min.js'
                )
            }}"></script>
    <script src="{{
                asset(
                    'backend/assets/libs/devbridge-autocomplete/jquery.autocomplete.min.js'
                )
            }}"></script>
    <script src="{{
                asset(
                    'backend/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js'
                )
            }}"></script>
    <script src="{{
                asset(
                    'backend/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js'
                )
            }}"></script>

    <!-- Plugins js-->
    <script src="{{
                asset('backend/assets/libs/flatpickr/flatpickr.min.js')
            }}"></script>
    <script src="{{
                asset('backend/assets/libs/apexcharts/apexcharts.min.js')
            }}"></script>

    <script src="{{
                asset(
                    'backend/assets/libs/selectize/js/standalone/selectize.min.js'
                )
            }}"></script>
    <script src="{{
                asset(
                    'backend/assets/libs/jquery-sparkline/jquery.sparkline.min.js'
                )
            }}"></script>
    <script src="{{
                asset(
                    'backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js'
                )
            }}"></script>
    <script src="{{
                asset(
                    'backend/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js'
                )
            }}"></script>

    <script src="{{ asset('backend/assets/libs/clockpicker/bootstrap-clockpicker.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

    <!-- Dashboar 1 init js-->
    <script src="{{
                asset('backend/assets/js/pages/dashboard-1.init.js')
            }}"></script>

    <!-- Dashboard 2 init -->
    <script src="{{
                asset('backend/assets/js/pages/dashboard-2.init.js')
            }}"></script>

    <!-- third party js -->
    <script src="{{
                asset(
                    'backend/assets/libs/datatables.net/js/jquery.dataTables.min.js'
                )
            }}"></script>
    <script src="{{
                asset(
                    'backend/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js'
                )
            }}"></script>
    <script src="{{
                asset(
                    'backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js'
                )
            }}"></script>
    <script src="{{
                asset(
                    'backend/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js'
                )
            }}"></script>
    <script src="{{
                asset(
                    'backend/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js'
                )
            }}"></script>
    <script src="{{
                asset(
                    'backend/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js'
                )
            }}"></script>
    <script src="{{
                asset(
                    'backend/assets/libs/datatables.net-buttons/js/buttons.html5.min.js'
                )
            }}"></script>
    <script src="{{
                asset(
                    'backend/assets/libs/datatables.net-buttons/js/buttons.flash.min.js'
                )
            }}"></script>
    <script src="{{
                asset(
                    'backend/assets/libs/datatables.net-buttons/js/buttons.print.min.js'
                )
            }}"></script>
    <script src="{{
                asset(
                    'backend/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js'
                )
            }}"></script>
    <script src="{{
                asset(
                    'backend/assets/libs/datatables.net-select/js/dataTables.select.min.js'
                )
            }}"></script>
    <script src="{{
                asset('backend/assets/libs/select2/js/select2.min.js')
            }}"></script>
    <script src="{{
                asset('backend/assets/libs/pdfmake/build/pdfmake.min.js')
            }}"></script>
    <script src="{{
                asset('backend/assets/libs/pdfmake/build/vfs_fonts.js')
            }}"></script>
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="{{
                asset('backend/assets/js/pages/datatables.init.js')
            }}"></script>

    <!-- Init js-->
    <script src="{{
                asset('backend/assets/js/pages/form-advanced.init.js')
            }}"></script>
    <script src="{{ asset('backend/assets/js/pages/form-pickers.init.js') }}"></script>

    <!-- Toastr js-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if(Session::has('message'))
                    toastr.options = {
                        "progressBar" : true,
                        "closeButton" : true,
                    }
                    var type = "{{ Session::get('alert-type','info') }}"
                    switch(type){
                       case 'info':
                       toastr.info(" {{ Session::get('message') }} ");
                       break;

                       case 'success':
                       toastr.success(" {{ Session::get('message') }} ",'OK Success!',{timeOut:2000});
                       break;

                       case 'warning':
                       toastr.warning(" {{ Session::get('message') }} ");
                       break;

                       case 'error':
                       toastr.error(" {{ Session::get('message') }} ");
                       break;
                    }
                    @endif
    </script>

    <!-- App js-->
    <script src="{{ asset('backend/assets/js/app.min.js') }}"></script>
</body>

</html>