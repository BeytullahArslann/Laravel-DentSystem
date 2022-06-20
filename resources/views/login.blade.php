<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>{{session("compName")}} Giriş</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/favicon.ico" />
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

<div class="wrapper">
    <section class="login-content">
        <div class="container">
            <div
                class="
              row
              align-items-center
              justify-content-center
              height-self-center
            "
            >
                <div class="col-lg-8">
                    <div class="card auth-card">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center auth-content">
                                <div class="col-lg-7 align-self-center">
                                    <div class="p-3">
                                        <h2 class="mb-2">Giriş Yapın</h2>
                                        <p></p>
                                        <form action="userAuth" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="floating-label form-group">
                                                        <input
                                                            class="floating-input form-control"
                                                            type="text"
                                                            placeholder=" "
                                                            name="username"
                                                        />
                                                        <label>Kullanıcı Adı</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="floating-label form-group">
                                                        <input
                                                            class="floating-input form-control"
                                                            type="password"
                                                            name="password"
                                                            placeholder=" "
                                                        />
                                                        <label>Şifre</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="customCheck1"
                                                        />
                                                        <label
                                                            class="custom-control-label control-label-1"
                                                            for="customCheck1"
                                                        >Beni Hatırla</label>
                                                        {{session("log")}}
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a
                                                        href="auth-recoverpw.html"
                                                        class="text-primary float-right"
                                                    >Şifremi Unuttum</a
                                                    >
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">
                                                Giriş Yap
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-5 content-right">
                                    <img
                                        src="../images/logo2.jpg"
                                        class="image-right"
                                        width= 100%
                                        height= auto
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

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
