<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Belajar Blog ajax Crud - mubarakabaz</title>

    <script src="{{ assets('js/app.js') }}" defer></script>
    <link href="{{ assets('css/app.css') }}" rel="stylesheet">

</head>

<body>

        <main class="py-4">
            @yield('content')
        </main>
    

    <script>
        var root_url = <?php echo json_encode(route('data')) ?>;
        var store = <?php echo json_encode(route('company.store')) ?>;
    </script>
    @stack('ajax_crud')
</body>

</html>
