
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Widget</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="{{ asset('admin/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
</head>

<body class="bg-primary">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="index.html"><span>Carent</span></a>
                        </div>
                        <div class="login-form">
                            <h4>Register Akun</h4>
                            <form>
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" class="form-control" placeholder="User Name">
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control" rows="3" placeholder="Alamat"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <input type="number" class="form-control" placeholder="No Telepon">
                                </div>
                                <div class="form-group">
                                    <label>Nomor Sim</label>
                                    <input type="number" class="form-control" placeholder="No Sim">
                                </div>

                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                                <div class="register-link m-t-15 text-center">
                                    <p>Already have account ? <a href="{{('/')}}"> Sign in</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>