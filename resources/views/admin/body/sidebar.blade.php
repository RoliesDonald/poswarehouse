<div class="left-side-menu">
    <div class="h-100" data-simplebar>
        <!--- Sidemenu -->
        @php $id = Auth::user()->id; $adminData = App\Models\User::find($id);
        @endphp
        <div id="sidebar-menu">
            <ul id="side-menu">
                <li class="menu-title">Welcome, {{ $adminData->name }}</li>
                <li>
                    <a href="{{ url('/dashboard') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Manage</li>

                <!-- Employee -->
                <li>
                    <a href="#sidebarEmployee" data-bs-toggle="collapse">
                        <i class="mdi mdi-human-male-female"></i>
                        <span>Manage Employee</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEmployee">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.employee') }}"
                                    >All Employee</a
                                >
                            </li>
                            <li>
                                <a href="{{ route('add.employee') }}"
                                    >Add New Employee</a
                                >
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Customer -->
                <li>
                    <a href="#sidebarCustomer" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-multiple-plus-outline"></i>
                        <span>Manage Customer</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCustomer">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.customer') }}"
                                    >All Customer</a
                                >
                            </li>
                            <li>
                                <a href="{{ route('add.customer') }}"
                                    >Add New Customer</a
                                >
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Supplier -->
                <li>
                    <a href="#sidebarSupplier" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-supervisor-outline"></i>
                        <span>Manage Supllier</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarSupplier">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('alls.supplier') }}"
                                    >All Supplier</a
                                >
                            </li>
                            <li>
                                <a href="{{ route('add.supplier') }}"
                                    >Add New Supplier</a
                                >
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Salary -->
                <li>
                    <a href="#sidebarSalary" data-bs-toggle="collapse">
                        <i class="mdi mdi-cash-100"></i>
                        <span>Employee Salary</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarSalary">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.advansalary') }}"
                                    >All Advance Salary</a
                                >
                            </li>
                            <li>
                                <a href="{{ route('add.advansalary') }}"
                                    >Add Advance Salary</a
                                >
                            </li>
                            <li>
                                <a href="{{ route('pay.salary') }}"
                                    >Pay Salary</a
                                >
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title mt-2">Master Data</li>

                <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span>Manage Product </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="ecommerce-dashboard.html">Dashboard</a>
                            </li>
                            <li>
                                <a href="ecommerce-products.html">Products</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="apps-companies.html">
                        <i class="mdi mdi-domain"></i>
                        <span> Companies </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Manage Super Admin</li>
                <li>
                    <a href="apps-companies.html">
                        <i class="mdi mdi-domain"></i>
                        <span> Companies </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
