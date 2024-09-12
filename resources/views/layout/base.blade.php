<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style2.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style3.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style4.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style5.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style6.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/datatable/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/fontawesome/css/all.min.css') }}">
    <title>E_Candidat</title>
</head>


<body>
    @yield('layout')
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/datatable/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>

</body>

</html>
