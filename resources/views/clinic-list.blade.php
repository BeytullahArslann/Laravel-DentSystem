<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Klinik Listesi</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="..images/favicon.ico" />
    <link rel="stylesheet" href="../css/backend-plugin.min.css" />
    <link rel="stylesheet" href="../css/backend.css?v=1.0.0" />
    <link
        rel="stylesheet"
        href="../vendor/@fortawesome/fontawesome-free/css/all.min.css"
    />
    <link
        rel="stylesheet"
        href="../vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css"
    />
    <link
        rel="stylesheet"
        href="../vendor/remixicon/fonts/remixicon.css"
    />
</head>
<body class="">
<!-- loader Start -->
<div id="loading">
    <div id="loading-center"></div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">
    <div class="iq-sidebar sidebar-default">
        <div
            class="
            iq-sidebar-logo
            d-flex
            align-items-center
            justify-content-between
          "
        >
            <a href="{{url('admin')}}" class="header-logo">
                <img
                    src="../images/logo2.jpg"
                    class="img-fluid rounded-normal light-logo"
                    alt="logo"
                />
                <h5 class="logo-title light-logo ml-3">{{session("compName")}}</h5>
            </a>
            <div class="iq-menu-bt-sidebar ml-0">
                <i class="las la-bars wrapper-menu"></i>
            </div>
        </div>
        <div class="data-scrollbar" data-scroll="1">
            <nav class="iq-sidebar-menu">
                <ul id="iq-sidebar-toggle" class="iq-menu">
                    <li class="">
                        <a href="{{url('admin')}}" class="svg-icon">
                            <svg  class="svg-icon" id="p-dash1" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line>
                            </svg>
                            <span class="ml-4">Panel</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="#product" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <svg class="svg-icon" id="p-dash8" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            <span class="ml-4">Klinikler</span>
                            <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round">
                                <polyline points="10 15 15 20 20 15"></polyline>
                                <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                            </svg>
                        </a>
                        <ul id="product" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="active">
                                <a href="{{url('admin/clinic-list')}}">
                                    <i class="las la-minus"></i><span>Klinik Listesi</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{url('admin/clinic-add')}}">
                                    <i class="las la-minus"></i><span>Klinik Ekle</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="#category" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <svg class="svg-icon" id="p-dash3" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                            </svg>
                            <span class="ml-4">Sipari??ler</span>
                            <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                            </svg>
                        </a>
                        <ul id="category" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="">
                                <a href="{{url('admin/order-list')}}">
                                    <i class="las la-minus"></i><span>Sipari?? Listesi</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{url('admin/order-add')}}">
                                    <i class="las la-minus"></i><span>Sipari?? Ekle</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="#sale" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <svg class="svg-icon" id="p-dash4" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                            </svg>
                            <span class="ml-4">??deme</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{url("admin/report")}}" class="">
                            <svg class="svg-icon" id="p-dash7" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                            <span class="ml-4">Rapor</span>
                        </a>
                        <ul id="reports" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        </ul>
                    </li>
                </ul>
            </nav>

            <div class="p-3"></div>
        </div>
    </div>
    <div class="iq-top-navbar">
        <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <div
                    class="
                iq-navbar-logo
                d-flex
                align-items-center
                justify-content-between
              "
                >
                    <i class="ri-menu-line wrapper-menu"></i>
                    <a href="../backend/index.html" class="header-logo">
                        <img
                            src="../images/logo2.jpg"
                            class="img-fluid rounded-normal"
                            alt="logo"
                        />
                        <h5 class="logo-title ml-3">{{session("compName")}}</h5>
                    </a>
                </div>
                <div class="iq-search-bar device-search"></div>
                <div class="d-flex align-items-center">
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-label="Toggle navigation"
                    >
                        <i class="ri-menu-3-line"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-list align-items-center">
                            {{--<li>
                                <a
                                    href="#"
                                    class="btn border add-btn shadow-none mx-2 d-none"
                                    style="display: block !important"
                                    data-toggle="modal"
                                    data-target="#new-order"
                                ><i class="las la-plus mr-2"></i>H??zl?? ??deme</a
                                >
                            </li>--}}
                            <li class="nav-item nav-icon dropdown caption-content">
                                <a
                                    href="#"
                                    class="search-toggle dropdown-toggle"
                                    id="dropdownMenuButton4"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                    <img
                                        src="../images/user/1.png"
                                        class="img-fluid rounded"
                                        alt="user"
                                    />
                                </a>
                                <div
                                    class="iq-sub-dropdown dropdown-menu"
                                    aria-labelledby="dropdownMenuButton"
                                >
                                    <div class="card shadow-none m-0">
                                        <div class="card-body p-0 text-center">
                                            <div class="media-body profile-detail text-center">
                                                <img
                                                    src="../images/page-img/profile-bg.jpg"
                                                    alt="profile-bg"
                                                    class="rounded-top img-fluid mb-4"
                                                />
                                                <img
                                                    src="../images/user/1.png"
                                                    alt="profile-img"
                                                    class="rounded profile-img img-fluid avatar-70"
                                                />
                                            </div>
                                            <div class="p-3">
                                                <h5 class="mb-1">{{session('username')}}</h5>
                                                <div
                                                    class="
                                d-flex
                                align-items-center
                                justify-content-center
                                mt-3
                              "
                                                >
                                                    <a href="{{url('logout')}}" class="btn border"
                                                    >????k????</a
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!--PopUp-->
    <div
        class="modal fade"
        id="new-order"
        tabindex="-1"
        role="dialog"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <h4 class="mb-3">H??zl?? ??deme</h4>
                        <form>
                            <div class="content create-workform bg-body">
                                <div class="pb-12">
                                    <label class="mb-2">Klinik</label>
                                    <select
                                        name="klinik"
                                        id="klinik"
                                        class="form-control col-12"
                                        required
                                    >
                                        <option selected disabled value="">Klinik</option>
                                        <option id="1">Doktor Xxx</option>
                                    </select>
                                    <label class="mb-2">??deme</label>
                                    <input
                                        type="number"
                                        class="form-control col-12"
                                        placeholder="Tutar?? Giriniz"
                                        required
                                    />
                                    <label class="mb-2">Para Birimi</label>
                                    <select
                                        name="klinik"
                                        id="klinik"
                                        class="form-control col-12"
                                        required
                                    >
                                        <option selected disabled value="">Para Birimi</option>
                                        <option id="1">TL</option>
                                        <option id="1">Euro</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 mt-4">
                                    <div
                                        class="
                          d-flex
                          flex-wrap
                          align-items-ceter
                          justify-content-center
                        "
                                    >
                                        <button type="submit" class="btn btn-primary mr-2">
                                            ??demeyi Kaydet
                                        </button>
                                        <button type="reset" class="btn btn-danger">
                                            Reset
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div
                        class="
                  d-flex
                  flex-wrap
                  align-items-center
                  justify-content-between
                  mb-4
                "
                    >
                        <div>
                            <h4 class="mb-3">Klinik Listesi</h4>
                            <p class="mb-0"></p>
                        </div>
                        {{--<a

                            href="page-add-customers.html"
                            class="btn btn-primary add-list"
                        >
                            <i class="las la-plus mr-3"></i>Klinik Ekle
                        </a>--}}
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive rounded mb-3">
                        <table class="data-table table mb-0 tbl-server-info">
                            <thead class="bg-white text-uppercase">
                            <tr class="ligth ligth-data">
                                <th>Klinik Ad??:</th>
                                <th>Email:</th>
                                <th>Telefon No:</th>
                                <th>????lemler:</th>
                            </tr>
                            </thead>
                            <tbody class="ligth-body">
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->username}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>
                                        <div class="d-flex align-items-center list-action">
                                            <button
                                                type="button"
                                                class="btn btn-primary mr-2 btn-info"
                                                title="G??ncelle"
                                            >
                                                ???
                                            </button>
                                            <button
                                                type="button"
                                                class="btn btn-primary mr-2 btn-danger"
                                                title="Sil"
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="16"
                                                    height="16"
                                                    fill="currentColor"
                                                    class="bi bi-trash"
                                                    viewBox="0 0 16 16"
                                                >
                                                    <path
                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"
                                                    />
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                                                    />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Page end  -->
        </div>
        <!-- Modal Edit -->
        <div
            class="modal fade"
            id="edit-note"
            tabindex="-1"
            role="dialog"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup text-left">
                            <div class="media align-items-top justify-content-between">
                                <h3 class="mb-3">Product</h3>
                                <div class="btn-cancel p-0" data-dismiss="modal">
                                    <i class="las la-times"></i>
                                </div>
                            </div>
                            <div class="content edit-notes">
                                <div
                                    class="
                        card card-transparent card-block card-stretch
                        event-note
                        mb-0
                      "
                                >
                                    <div class="card-body px-0 bukmark">
                                        <div
                                            class="
                            d-flex
                            align-items-center
                            justify-content-between
                            pb-2
                            mb-3
                            border-bottom
                          "
                                        >
                                            <div class="quill-tool"></div>
                                        </div>
                                        <div id="quill-toolbar1">
                                            <p>
                                                Virtual Digital Marketing Course every week on
                                                Monday, Wednesday and Saturday.Virtual Digital
                                                Marketing Course every week on Monday
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-footer border-0">
                                        <div
                                            class="
                            d-flex
                            flex-wrap
                            align-items-ceter
                            justify-content-end
                          "
                                        >
                                            <div
                                                class="btn btn-primary mr-3"
                                                data-dismiss="modal"
                                            >
                                                Cancel
                                            </div>
                                            <div
                                                class="btn btn-outline-primary"
                                                data-dismiss="modal"
                                            >
                                                Save
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Wrapper End-->
<footer class="iq-footer">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="../backend/privacy-policy.html">Privacy Policy</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="../backend/terms-of-service.html">Terms of Use</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-right">
                <span class="mr-1"
                ><script>
                    document.write(new Date().getFullYear());
                  </script>
                  ??</span
                >
                        <a href="#" class="">POS Dash</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Backend Bundle JavaScript -->
<script src="../js/backend-bundle.min.js"></script>

<!-- Table Treeview JavaScript -->
<script src="../js/table-treeview.js"></script>

<!-- Chart Custom JavaScript -->
<script src="../js/customizer.js"></script>

<!-- Chart Custom JavaScript -->
<script async src="../js/chart-custom.js"></script>

<!-- app JavaScript -->
<script src="../js/app.js"></script>
</body>
</html>
