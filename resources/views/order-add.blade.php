<!DOCTYPE html>
<style>
    body {
        background-color: #e74c3c;
        font-family: 'Source Sans Pro', sans-serif;

    }
    .demo {
        margin: 100px auto;
    }

    .dropdown-container {
        width: 250px;
        margin: 100px auto;
        position: relative;
    }

    select {
        width: 100%;
        height: 50px;
        font-size: 100%;
        font-weight: bold;
        cursor: pointer;
        border-radius: 0;
        border: none;
        border-bottom: 2px solid #66b6d2;
        color: black;
        appearance: none;
        padding: 10px;
        padding-right: 38px;
        -webkit-appearance: none;
        -moz-appearance: none;
        transition: color 0.3s ease, background-color 0.3s ease, border-bottom-color 0.3s ease;
    }

    /* For IE <= 11 */
    select::-ms-expand {
        display: none;
    }

    .select-icon {
        position: absolute;
        top: 4px;
        right: 4px;
        width: 30px;
        height: 36px;
        pointer-events: none;
        border: 2px solid #962d22;
        padding-left: 5px;
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }
    .select-icon svg.icon {
        transition: fill 0.3s ease;
        fill: white;
    }

    select:hover,
    select:focus {
        color: #66b6d2;
        background-color: white;
        border-bottom-color: #DCDCDC;
    }
    select:hover ~ .select-icon,
    select:focus ~ .select-icon {
        background-color: white;
        border-color: #DCDCDC;
    }
    select:hover ~ .select-icon svg.icon,
    select:focus ~ .select-icon svg.icon {
        fill: #c0392b;
    }

</style>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Sipariş Ekle</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <link rel="stylesheet" href="../css/backend-plugin.min.css" />
    <link rel="stylesheet" href="../css/backend.css?v=1.0.0" />
    <link rel="stylesheet" href="../css/jquery.toasts.css" />
    <link rel="stylesheet" href="sweetalert2.min.css">
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
<body class="" onload="swal();">
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
                            <li class="">
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
                            <span class="ml-4">Siparişler</span>
                            <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                            </svg>
                        </a>
                        <ul id="category" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="">
                                <a href="{{url('admin/order-list')}}">
                                    <i class="las la-minus"></i><span>Sipariş Listesi</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="{{url('admin/order-add')}}">
                                    <i class="las la-minus"></i><span>Sipariş Ekle</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="{{url("admin/purchase-list")}}">
                            <svg class="svg-icon" id="p-dash4" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                            </svg>
                            <span class="ml-4">Ödeme</span>
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
                                ><i class="las la-plus mr-2"></i>Hızlı Ödeme</a
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
                                                    class="d-flex
                                                           align-items-center
                                                           justify-content-center
                                                           mt-3">
                                                    <a href="{{url('logout')}}" class="btn border">Çıkış</a>
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
                        <h4 class="mb-3">Hızlı Ödeme</h4>
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
                                    <label class="mb-2">Ödeme</label>
                                    <input
                                        type="number"
                                        class="form-control col-12"
                                        placeholder="Tutarı Giriniz"
                                        required
                                    />
                                    <label class="mb-2">Para Birimi</label>
                                    <select
                                        name="curr"
                                        id="curr"
                                        class="form-control col-12"
                                        required
                                    >
                                        <option selected disabled value="">Para Birimi</option>
                                        <option id="1">TL</option>
                                        <option id="1">EUR</option>
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
                                            Ödemeyi Kaydet
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
        <div class="container-fluid add-form-list">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Sipariş Ekle</h4>
                                <input type="text" style="display: none;" id="isAdded" value="{{session('isAdded')}}">

                            </div>
                        </div>
                        <div class="card-body">
                            <form
                                action="{{url("/order_add")}}"
                                method="POST"
                                data-toggle="validator"
                                id="form"
                            >
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="dob">Tarih *</label>
                                            <input
                                                type="date"
                                                class="form-control"
                                                id="date"
                                                name="date"
                                                required
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Klinik*</label>
                                            <select
                                                name="id"
                                                class=""
                                                data-style="py-0"
                                                required
                                            >
                                                <option selected disabled value="">
                                                    Klinik Seç
                                                </option>
                                                @foreach ($users as $user)
                                                    @if ($user->id != 1)
                                                    <option value="{{$user->id}}">{{$user->username}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row align-items-start">
                                            <label class="col">İşlem Başlıgı</label>
                                            <label class="col">İşlem</label>
                                        </div>
                                        <div class="row align-items-start">
                                                <select
                                                    name="work"
                                                    id="work"
                                                    class="col"
                                                    data-style="py-0"
                                                    required
                                                    onchange="setSubs();"
                                                >
                                                    <option selected disabled value="">
                                                        İşlem Seç
                                                    </option>
                                                    @foreach ($works as $work)
                                                        <option value="{{$work->work_id}}">{{$work->work_name}}</option>
                                                    @endforeach
                                                </select>
                                                <select
                                                    name="sub_work"
                                                    id="sub_work"
                                                    class="col"
                                                    data-style="py-0"
                                                    required
                                                    onchange="setAtts();"
                                                >
                                                    <option selected disabled value="">
                                                        İşlem Seç
                                                    </option>
                                                </select>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Diş No *</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="Diş No"
                                                required
                                                name="inpToothNo"
                                            />
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Adet *</label>
                                            <input
                                                type="number"
                                                class="form-control"
                                                placeholder="Adet"
                                                required
                                                name="quantity"
                                                id="quantity"
                                                min="1"
                                                value="1"
                                                oninput="setAtts();"
                                            />
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Renk *</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="Renk"
                                                name="color"
                                                required
                                            />
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group" id="offer">
                                            <label>Toplam Tutar *</label>
                                            <input
                                                type="number"
                                                class="form-control"
                                                placeholder="Fiyat"
                                                required
                                                name="price"
                                                id="price"
                                                step="0.01"
                                            />
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="mb-2">Para Birimi*</label><br>
                                        <select
                                            name="currency"
                                            id="currency"
                                            class=" col-4"
                                            required
                                        >
                                            <option selected disabled value="">
                                                Para Birimi
                                            </option>
                                            <option value="0">TL</option>
                                            <option value="1">EUR</option>
                                            <option value="2">USD</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Not</label>
                                            <div id="quill-tool">
                                                <button
                                                    class="ql-bold"
                                                    data-toggle="tooltip"
                                                    data-placement="bottom"
                                                    title="Bold"
                                                ></button>
                                                <button
                                                    class="ql-underline"
                                                    data-toggle="tooltip"
                                                    data-placement="bottom"
                                                    title="Underline"
                                                ></button>
                                                <button
                                                    class="ql-italic"
                                                    data-toggle="tooltip"
                                                    data-placement="bottom"
                                                    title="Add italic text <cmd+i>"
                                                ></button>
                                            </div>
                                            <div id="quill-toolbar"></div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">
                                    Siparişi Kaydet
                                </button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <div style="color:#FF0000;">
                                    @foreach($errors->all() as $error) <li>{{$error}}</li> @endforeach
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page end  -->
        </div>
    </div>
</div>
<!-- Wrapper End-->
<!-- Backend Bundle JavaScript -->
<script src="../js/backend-bundle.min.js"></script>

<!-- Table Treeview JavaScript -->
<script src="../js/table-treeview.js"></script>

<!-- Chart Custom JavaScript -->
<script src="../js/customizer.js"></script>

<!-- Chart Custom JavaScript -->
<script async src="../js/chart-custom.js"></script>

<!-- app JavaScript -->
<script src="../js/jquery.toast.js"></script>
<script type="text/javascript" src="../jquery-3.6.0.min.js"></script>
<script src="sweetalert2.min.js"></script>
<script src="../js/app.js"></script>


<script>
    function setSubs(){
        for(i = document.getElementById("sub_work").options.length; i > 0; i--) {
            document.getElementById("sub_work").remove(i);
        }

        var el = document.getElementById("work");
        $.getJSON('http://127.0.0.1:8000/getSub/'+el.value, function(data) {

            data.forEach(function (item){
                var opt = document.createElement("option");
                opt.value = item.sub_work_id;
                opt.text = item.sub_work_name;
                document.getElementById("sub_work").options.add(opt);

            });
        });

    }

    function setAtts(){
        var selectedType = document.getElementById("sub_work").value;
        var qu = document.getElementById("quantity").value;
        $.getJSON('http://127.0.0.1:8000/getPrice/'+selectedType, function(data) {
            document.getElementById("price").value= (data[0][0].unit_price * qu);
            if(data[1][0].currency == "TL"){
                document.getElementById("currency").value= 0 ;
            }
            else if(data[1][0].currency == "EUR"){
                document.getElementById("currency").value= 1 ;
            }
            else{
                document.getElementById("currency").value= 2 ;
            }

        });
    }

    function swal(){
        var el = document.getElementById("isAdded");
        if(el.value === '1'){
            Swal.fire({
                title: 'Sipariş Eklendi',
                icon: 'success',
                confirmButtonText: '✓'
            });
        }
        else if (el.value === '0'){
            Swal.fire({
                title: 'Sipariş Eklenemedi',
                icon: 'error',
                confirmButtonText: 'X'
            });
        }
        else{

        }

        $.get('http://127.0.0.1:8000/resetSwal/')

    }

</script>

@section('script')
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>


@endsection
</body>
</html>
