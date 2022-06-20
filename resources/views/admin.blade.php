<!doctype html>
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <link rel="stylesheet" href="../css/backend-plugin.min.css">
    <link rel="stylesheet" href="../css/backend.css">
    <link rel="stylesheet" href="../vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="../vendor/remixicon/fonts/remixicon.css">  </head>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<body class="  " onload="Load();">
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">

    <div class="iq-sidebar  sidebar-default ">
        <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
            <a href="{{url('admin')}}" class="header-logo">
                <img src="../images/logo2.jpg" class="img-fluid rounded-normal light-logo" alt="logo">
                <h5 class="logo-title light-logo ml-3">{{session("compName")}}</h5>
            </a>
            <div class="iq-menu-bt-sidebar ml-0">
                <i class="las la-bars wrapper-menu"></i>
            </div>
        </div>
        <div class="data-scrollbar" data-scroll="1">
            <nav class="iq-sidebar-menu">
                <ul id="iq-sidebar-toggle" class="iq-menu">
                    <li class="active">
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
                            <li class="">
                                <a href="admin/order-add">
                                    <i class="las la-minus"></i><span>Sipariş Ekle</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="{{url("admin/purchase-list")}}"  >
                            <svg class="svg-icon" id="p-dash4" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                            </svg>
                            <span class="ml-4">Ödemeler</span>
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
    </div> <div class="iq-top-navbar">
        <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                    <i class="ri-menu-line wrapper-menu"></i>
                    <a href="../backend/index.html" class="header-logo">
                        <img src="../images/logo2.jpg" class="img-fluid rounded-normal" alt="logo">
                        <h5 class="logo-title ml-3">{{session("compName")}}</h5>


                    </a>
                </div>
                <div class="iq-search-bar device-search">
                </div>
                <div class="d-flex align-items-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-label="Toggle navigation">
                        <i class="ri-menu-3-line"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-list align-items-center">
                            <li class="nav-item nav-icon dropdown caption-content">
                                <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton4"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="../images/user/1.png" class="img-fluid rounded" alt="user">
                                </a>
                                <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="card shadow-none m-0">
                                        <div class="card-body p-0 text-center">
                                            <div class="media-body profile-detail text-center">
                                                <img src="../images/page-img/profile-bg.jpg" alt="profile-bg"
                                                     class="rounded-top img-fluid mb-4">
                                                <img src="../images/user/1.png" alt="profile-img"
                                                     class="rounded profile-img img-fluid avatar-70">
                                            </div>
                                            <div class="p-3">
                                                <h5 class="mb-1">{{session('username')}}</h5>
                                                <div class="d-flex align-items-center justify-content-center mt-3">
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
    <div class="modal fade" id="new-order" tabindex="-1" role="form" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <h4 class="mb-3">Sipariş Düzenleme</h4>
                        <div class="col-md-12">
                                <div class="content create-workform bg-body">
                                    <div class="card-body">
                                        <form
                                            action="{{url('/order_update')}}"
                                            method="post"
                                            data-toggle="validator"
                                            id="formUpdate"
                                            name="formUpdate"
                                        >
                                            @csrf
                                            <input type="text" style="display: none;" id="orderId" name="orderId">
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
                                                            id="id"
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
                                                    </div>
                                                    <div class="row align-items-start">
                                                        <select
                                                            name="work"
                                                            id="work_title"
                                                            class="col"
                                                            data-style="py-0"
                                                            required
                                                            onchange="setSubs();"
                                                        >
                                                            <option selected disabled value="">
                                                                İşlem
                                                            </option>
                                                            @foreach ($works as $work)
                                                                <option value="{{$work->work_id}}">{{$work->work_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="row align-items-start">
                                                        <select
                                                            name="sub_work"
                                                            id="sub_work_title"
                                                            class="col"
                                                            data-style="py-0"
                                                            required
                                                            onchange="setAtts();"
                                                        >
                                                            <option selected disabled value="">
                                                                Alt İşlem
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
                                                            id="inpToothNo"
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
                                                            id="color"
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
                                            <div style="color:#FF0000;">
                                                @foreach($errors->all() as $error) <li>{{$error}}</li> @endforeach
                                            </div>

                                            <div class="col-lg-12 mt-4">
                                                <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                                    <button type="submit" class="btn btn-primary mr-2" id="sbmtBTN" name="sbmtBTN">Siparişi Güncelle</button>
                                                    <button type="reset" class="btn btn-danger">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>      <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4 card-total-sale">
                                        <div class="icon iq-icon-box-2 bg-info-light">
                                            <img src="../images/product/TL.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <p class="mb-2">Toplam Borç TL</p>
                                            <h4>{{session('sumTL')}} ₺</h4>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="iq-progress-bar mt-2">
                                    <span class="bg-info iq-progress progress-1" data-percent="100">
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4 card-total-sale">
                                        <div class="icon iq-icon-box-2 bg-danger-light">
                                            <img src="../images/product/USD.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <p class="mb-2">Toplam Borç USD</p>
                                            <h4>{{session('sumUSD')}} $</h4>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="iq-progress-bar mt-2">
                                    <span class="bg-danger iq-progress progress-1" data-percent="100">
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4 card-total-sale">
                                        <div class="icon iq-icon-box-2 bg-success-light">
                                            <img src="../images/product/EUR.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <p class="mb-2">Toplam Borç EUR</p>
                                            <h4>{{session('sumEUR')}} €</h4>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="iq-progress-bar mt-2">
                                    <span class="bg-success iq-progress progress-1" data-percent="100">
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="card-title col-12 mb-4" >Ödenmemiş Siparişler:</h4>

                <form action="{{url("admin/filter")}}" method="post" id="filterForm">
                    @csrf
                    <input type="checkbox" style="display: none;" id="getPaid" name="getPaid">
                    <input type="checkbox" style="display: none;" id="getUnPaid" name="getUnPaid" checked>
                    <table>
                        <tr>
                            <td>
                                <h6 class=" align-self-center text-right" for="dob">Başlangıç:</h6>
                            </td>
                            <td>
                                <input
                                    class=" form-control mb-2"
                                    type="date"
                                    id="startDate"
                                    name="startDate"
                                    required
                                />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class=" align-self-center text-right" for="dob">Bitiş:</h6>
                            </td>
                            <td>
                                <input
                                    class=" form-control mb-3"
                                    type="Date"
                                    id="endDate"
                                    name="endDate"
                                    required
                                />
                            </td>
                            <td>
                                <button
                                    type="submit"
                                    class=" btn  btn-outline-primary mb-3 ml-2"
                                    title="Filtrele"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </table>
                </form>
                <p>{{session('Log')}}</p>
                {{--Display none area--}}
                <input type="text" style="display: none;" id="isUpdated" value="{{session('isUpdated')}}">
                <input type="text" style="display: none;" id="isPaid" value="{{session('isPaid')}}">
                <input type="text" style="display: none;" id="isDeleted" value="{{session('isDeleted')}}">
                <input type="text" style="display: none;" id="start" value="{{session('start')}}">
                <input type="text" style="display: none;" id="end" value="{{session('end')}}">
                <div class="table-responsive col-lg-12 ">
                    <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12"><table id="datatable" class="table data-tables table-striped dataTable" role="grid" aria-describedby="datatable_info">
                                    <thead>
                                    <tr class="ligth" role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 265.438px;">Doktor</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 411.266px;">Miktar</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 197.656px;">Diş No</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 83px;">İşlem Tipi</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 181.828px;">Renk</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 172.812px;">Kampanya</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 172.812px;">Tutar</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 172.812px;">₺/€/$</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 172.812px;">Sipariş Tarihi</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 172.812px;">İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(session("orders") as $order)
                                        <tr class="odd">
                                            <td class="sorting_1">{{$order->username}}</td>
                                            <td>{{$order->quantity}}</td>
                                            <td>{{$order->tooth_no}}</td>
                                            <td>{{$order->work}}</td>
                                            <td>{{$order->color}}</td>
                                            <td>{{$order->offer}}</td>
                                            <td>{{$order->loc_sum}}</td>
                                            <td>{{$order->currency}}</td>
                                            <td>{{date('Y/m/d', strtotime($order->date))}}</td>
                                            <td>
                                                <div class="d-flex align-items-center list-action">
                                                    <form action="{{url('payOrder',$order->id)}}" methot="GET">
                                                    <button
                                                        type="submit"
                                                        class="btn btn-primary mr-2"
                                                        title="Ödendi"
                                                    >
                                                        ✓
                                                    </button>
                                                    </form>
                                                    <button style="display: block !important;" data-toggle="modal" data-target="#new-order"
                                                        type="submit"
                                                        id="{{$order->id}}"
                                                        class="btn btn-primary mr-2 btn-info"
                                                        name="Güncelle"
                                                        title="Güncelle"
                                                            onclick="modalSetter(this);"
                                                    >
                                                        ✎
                                                    </button>
                                                    <form action="{{url('delOrder',$order->id)}}" methot="GET">
                                                    <button
                                                        type="submit"
                                                        id="{{$order->id}}"
                                                        class="btn btn-primary mr-2 btn-danger"
                                                        name="Sil"
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
                                                        </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr class="ligth" role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 265.438px;">Doktor</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 411.266px;">Miktar</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 197.656px;">Diş No</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 83px;">İşlem Tipi</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 181.828px;">Renk</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 172.812px;">Kampanya</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 172.812px;">Tutar</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 172.812px;">₺/€/$</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 172.812px;">Sipariş Tarihi</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 172.812px;">İşlemler</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="row"><div class="col-sm-12 col-md-5">
                            </div>
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
<script src="sweetalert2.min.js"></script>
<script src="../js/app.js"></script>

<script>
    function modalSetter(e){
        var elDate = document.getElementById("date");
        var elUser = document.getElementById("id");
        var elWork = document.getElementById("work_title");
        var elSubWork = document.getElementById("sub_work_title");
        var elTNo = document.getElementById("inpToothNo");
        var elColor = document.getElementById("color");
        var elQuantity = document.getElementById("quantity");
        var elLoc_Sum = document.getElementById("price");
        var elCurrency = document.getElementById("currency");
        document.getElementById("orderId").value = e.id;
        $.getJSON('http://127.0.0.1:8000/getWorkInfo/'+e.id, function(data) {

            work = data[1].work_id;
            subWork = data[0].sub_work_id;

            $.getJSON('http://127.0.0.1:8000/getOrder/'+e.id, function(data) {
                elDate.value = data[0].date;
                elUser.value = data[0].user_id;
                elWork.value = work;

                for(i = elSubWork.options.length; i > 0; i--) {
                    elSubWork.remove(i);
                }

                $.getJSON('http://127.0.0.1:8000/getSub/'+elWork.value, function(data) {
                    data.forEach(function (item){
                        var opt = document.createElement("option");
                        opt.value = item.sub_work_id;
                        opt.text = item.sub_work_name;
                        elSubWork.options.add(opt);
                    });
                    elSubWork.value=subWork;
                });

                elTNo.value = data[0].tooth_no;
                elColor.value = data[0].color;
                elQuantity.value = data[0].quantity;
                elLoc_Sum.value = data[0].loc_sum;
                if(data[0].currency=="TL"){
                    elCurrency.value = 0;
                }
                else if(data[0].currency=="EUR"){
                    elCurrency.value = 1;
                }
                else{
                    elCurrency.value = 2;
                }

            });
        });
    }

    function setAtts(){
        var selectedType = document.getElementById("sub_work_title").value;
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

    function setSubs(){
        for(i = document.getElementById("sub_work_title").options.length; i > 0; i--) {
            document.getElementById("sub_work_title").remove(i);
        }

        var el = document.getElementById("work_title");
        $.getJSON('http://127.0.0.1:8000/getSub/'+el.value, function(data) {
            data.forEach(function (item){
                var opt = document.createElement("option");
                opt.value = item.sub_work_id;
                opt.text = item.sub_work_name;
                document.getElementById("sub_work_title").options.add(opt);

            });
        });

    }

    function updateSwal(){

        isUpdated();
        isPaid();
        isDeleted()
        $.get('http://127.0.0.1:8000/resetSwal/')

    }

    function isUpdated(){
        var el = document.getElementById("isUpdated");
        if(el.value === '1'){
            Swal.fire({
                title: 'Sipariş Güncellendi',
                icon: 'success',
                confirmButtonText: '✓'
            }).then(function() {
                var elFrm = document.getElementById("filterForm");
                elFrm.submit();
            });
        }
        else if (el.value === '0'){
            Swal.fire({
                title: 'Sipariş Güncellenemedi',
                icon: 'error',
                confirmButtonText: 'X'
            });
        }
        else{

        }
    }

    function isPaid(){
        var el = document.getElementById("isPaid");
        if(el.value === '1'){
            Swal.fire({
                title: 'Sipariş Ödendi',
                icon: 'success',
                confirmButtonText: '✓'
            }).then(function() {
                var elFrm = document.getElementById("filterForm");
                elFrm.submit();
            });
        }
        else if (el.value === '0'){
            Swal.fire({
                title: 'Sipariş Ödenemedi',
                icon: 'error',
                confirmButtonText: 'X'
            });
        }
        else{

        }
    }

    function isDeleted(){
        var el = document.getElementById("isDeleted");
        if(el.value === '1'){
            Swal.fire({
                title: 'Sipariş Silindi',
                icon: 'success',
                confirmButtonText: '✓'
            }).then(function() {
                var elFrm = document.getElementById("filterForm");
                elFrm.submit();
            });
        }
        else if (el.value === '0'){
            Swal.fire({
                title: 'Sipariş Silindi',
                icon: 'error',
                confirmButtonText: 'X'
            });
        }
        else{

        }
    }

    function filter(){
        var date = new Date();

        var start = document.getElementById('start');
        var end = document.getElementById('end');

        var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
        var lastDay = new Date(date.getFullYear(), date.getMonth(), date.getDate());

        var elStart = document.getElementById('startDate');
        var elEnd = document.getElementById('endDate');

        if (! (start.value.length < 1)){
            elStart.value=start.value;
        }
        else{
            elStart.value= moment(firstDay).format('YYYY-MM-DD');
        }

        if (! (end.value.length < 1)){
            elEnd.value =end.value;
        }
        else{
            elEnd.value = moment(lastDay).format('YYYY-MM-DD');
        }


    }

    function Load(){
        filter();
        updateSwal();
    }
</script>

</script>
</body>
</html>
