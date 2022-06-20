<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Doctor Dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <link rel="stylesheet" href="../css/backend-plugin.min.css">
    <link rel="stylesheet" href="../css/backend.css">
    <link rel="stylesheet" href="../vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="../vendor/remixicon/fonts/remixicon.css">  </head>
<body class=" color-light ">
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">
    <div class="content-page-non-side-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1" id="navbarSupportedContent">
                    <div style="padding-left: 45%;">
                        <a href="#"  class="search-toggle dropdown-toggle" id="dropdownMenuButton4" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <img src="../images/user/1.png" class="img-fluid-second rounded" alt="user">
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
                    </div>
                </div>
                <!--Kartlar Başlangıç-->
                <div class="col-md-1"></div>
                <div class="col-md-8">
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
                <div class="col-1"></div>

                <!--Buton-->

                <!-- Tablo Başlangıç-->
                <div class="table-responsive col-lg-12 ">
                    <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12"><table id="datatable" class="table data-tables table-striped dataTable" role="grid" aria-describedby="datatable_info">
                                    <thead>
                                    <tr class="ligth" role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 265.438px;">Miktar</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 197.656px;">Diş No</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 83px;">İşlem Tipi</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 181.828px;">Renk</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 172.812px;">Kampanya</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 172.812px;">Tutar</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 172.812px;">₺/€/$</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 172.812px;">Sipariş Tarihi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $order)
                                        <tr class="odd">
                                            <td class="sorting_1">{{$order->quantity}}</td>
                                            <td>{{$order->tooth_no}}</td>
                                            <td>{{$order->work}}</td>
                                            <td>{{$order->color}}</td>
                                            <td>{{$order->offer}}</td>
                                            <td>{{$order->loc_sum}}</td>
                                            <td>{{$order->currency}}</td>
                                            <td>{{date('d/m/Y', strtotime($order->created_at))}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr class="ligth" role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 265.438px;">Miktar</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 197.656px;">Diş No</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 83px;">İşlem Tipi</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 181.828px;">Renk</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 172.812px;">Kampanya</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 172.812px;">Tutar</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 172.812px;">₺/€/$</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 172.812px;">Sipariş Tarihi</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="row"><div class="col-sm-12 col-md-5">
                            </div>
                        </div>
                    </div>
                </div></div>


            </div>
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
<script src="../js/app.js"></script>
</body>
</html>
