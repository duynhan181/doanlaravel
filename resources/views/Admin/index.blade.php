<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Doan</title>

    <!-- Custom fonts for this template-->
    @vite(['public/vendor/fontawesome-free/css/all.min.css'])
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    @vite(['public/css/sb-admin-2.min.css'])
    
    @vite(['public/css/all.min.css'])
    
</head>

<body class="bg-gradient-primary" id="page-top">

    @yield('content')

    <!-- Bootstrap core JavaScript-->
    @vite(['public/vendor/jquery/jquery.min.js'])
    @vite(['public/vendor/bootstrap/js/bootstrap.bundle.min.js'])

    <!-- Core plugin JavaScript-->
    @vite(['public/vendor/jquery-easing/jquery.easing.min.js'])

    <!-- Custom scripts for all pages-->
    @vite(['public/js/sb-admin-2.min.js'])

    <!-- Page level plugins -->
    @vite(['public/vendor/chart.js/Chart.min.js'])

    <!-- Page level custom scripts -->
    @vite(['public/js/demo/chart-area-demo.js'])
    @vite(['public/js/demo/chart-pie-demo.js'])

</body>

</html>

