<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('tieude')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <style>
        #header {
            height: 200px;
            background-color: red;
        }

        #footer {
            height: 50px;
            background-color: saddlebrown;
        }

        #content {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="" id="header">
            Phan Header
        </div>
        <div class="" id="content">
            @yield('noidung')
        </div>
        <div class="" id="footer">
            Footer
        </div>
    </div>
</body>

</html>