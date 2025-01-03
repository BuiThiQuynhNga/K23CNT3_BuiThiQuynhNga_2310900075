<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <title>@yield('title')</title>
    <style>
        body {
            background-size: cover;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            transition: background 0.5s ease; /* Tạo hiệu ứng mượt mà cho background */
        }

        .sideBar{
            width: 350px;
            background: white;
        }
        .wrapper{
            width: calc(100% - 50px );
            background: none;
        }
    </style>
</head>
<body style="background: while">
    <section class="container-fluid d-flex">
       
        <section class="wrapper m-1">
            <header class="my-1">
                @include('_layouts.admins._headerTitle')           
            </header>
             <nav class="sideBar m-1">
            @include('_layouts.admins._menu')
            </nav><br>
            <br>
            <hr>
             <br>
             <section class="content-body my-1">
                @yield('content-body')
            </section>
        </section>
    </section>
</body>
</html>