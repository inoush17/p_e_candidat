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
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('js/jquery.min.js') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/fontawesome/css/all.min.css') }}">
    <title>E_Candidat</title>
</head>


<body>
    @yield('layout')
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/datatable/datatables.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'print', 'word'
                ],
            });
        });
    </script>
    <script>
        // Initialisation de DataTable
        $(document).ready(function() {
            let table = new DataTable('#datatable');
            table.on('click', 'tbody tr', function() {
                let data = table.row(this).data();

                let baseUrl = "admins/show/";
                let id = data[0];
                let urlWithParams =
                    `${baseUrl}?id=${encodeURIComponent(id)}`;
                console.log(urlWithParams);

                window.location.href = urlWithParams; // Redirection vers la page du groupe /${id}
            });

        });
    </script>

    <script>
        $(document).ready(function() {
            // Cacher la première partie et afficher la deuxième
            $('#suivant').click(function() {
                $('#part1').addClass('d-none'); // Cacher la première partie
                $('#part2').removeClass('d-none'); // Afficher la deuxième partie
            });

            // Revenir à la première partie
            $('#precedent').click(function() {
                $('#part2').addClass('d-none'); // Cacher la deuxième partie
                $('#part1').removeClass('d-none'); // Afficher la première partie
            });
        });
    </script>

</body>

</html>
