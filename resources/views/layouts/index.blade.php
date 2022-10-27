@if (!\Session::has('username'))
    <script>
        window.location.href = "/";
    </script>
@endif

@if (session('status'))
<script>
    alert('{{session('status')}}');
</script>
@endif

@if (session('Status'))
<script>
    alert('{{session('Status')}}');
</script>
@endif

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/Logo.ico" type="image/ico" />

    <title>@yield('title')</title>
    <!-- Bootstrap -->
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="../../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="../../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Datatables -->

    <link href="../../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">
     <!-- swal -->
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        <style>.zoom {
            padding: 50px;
            background-color: green;
            transition: transform .2s;
            /* Animation */
            width: 200px;
            height: 200px;
            margin: 0 auto;
        }

        .zoom:hover {
            transform: scale(1.5);
            /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }

    </style>
    </style>
</head>

<body class="nav-md">

    <!-- The Modal -->
    <div class="modal" id="passwd">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Change Password</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Current Password</label>
                            <input type="password" id="p1" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>New Password</label>
                            <input type="password" id="p2" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>New Password Confirmation</label>
                            <input type="password" id="p3" class="form-control">
                        </div>
                    </div>
                    <p id="passwordChange" class="text-center mt-5"></p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="shadow btn btn-sm btn-primary" onclick="changePassword()">
                        <i class="fa fa-key"></i> Update</button>
                    <button type="button" class="shadow btn btn-sm btn-danger" data-dismiss="modal"><i
                            class="fa fa-remove"></i> Close</button>
                </div>

            </div>
        </div>
        <script>
            function changePassword() {
                if ($('#p1').val() != '' && $('#p2').val() != '' && $('#p3').val() != '') {

                    $.ajax({
                        type: "get",
                        url: "/password",
                        data: {
                            'p1': $('#p1').val(),
                            'p2': $('#p2').val(),
                            'p3': $('#p3').val()
                        },
                        success: function(response) {
                            if (response == 'error1') {
                                $('#passwordChange').removeClass('text-success text-danger');
                                $('#passwordChange').addClass('text-danger');
                                $('#passwordChange').text('The Given Password is Wrong.');
                            } else if (response == 'error2') {
                                $('#passwordChange').removeClass('text-success text-danger');
                                $('#passwordChange').addClass('text-danger');
                                $('#passwordChange').text("New Password and New Password Confirmation Doesn't Match.");
                            } else {
                                $('#passwordChange').removeClass('text-success text-danger');
                                $('#passwordChange').addClass('text-success');
                                $('#passwordChange').text("New Password Has Been Set For This Account.");
                            }
                        }
                    });
                } else {
                    $('#passwordChange').removeClass('text-success text-danger');
                    $('#passwordChange').addClass('text-danger');
                    $('#passwordChange').text("Please make sure all of the field above is filled.");
                }
            }
        </script>
    </div>

    <div class="container body">
        <div class="main_container">

            @include('layouts.sidebar')

            @include('layouts.topnav')

            <!-- page content -->
            <div class="right_col" role="main">
                @yield('content')
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2022 | <a
                        href="https://msubianto.blogspot.com" target="_blank">M. Subianto</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    @include('layouts.scripts')

</body>

</html>
