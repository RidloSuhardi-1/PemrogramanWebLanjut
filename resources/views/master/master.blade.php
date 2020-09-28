<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master View | @yield('header')</title>

    <style>
        * {
            margin: 0;
            padding: 0;

            font: 15px/22px arial sans-serif;
            box-sizing: border-box;
        }

        .container {
            width: 900px;
            margin: 20px auto;
        }

        h1 {
            background: #555;
            color: #fff;
            font-size: 15px;
            font-weight: normal;
            text-align: center;          
            padding: 10px;
        }

        h2 {
            font-size: 25px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .sidebar { 
            width: 30%;
            background: #eee;
            text-align: center;
        }

        .content {
             width: 70%; 
             background: #e1e1e1;
        }

        .content p { text-align: justify; }

        .sidebar, .content {
            float: left;
            padding: 20px;
            height: 300px;
            overflow: hidden;
        }

        .footer {
            color: #fff;
            background: #333;
            text-align: center;
            padding: 10px;
            clear: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- header -->
        <h1>
            Pemrograman Web Lanjut - <span style="font-weight: bold; text-transform: capitalize;">@yield('header')</span>
        </h1>

        <!-- sidebar -->
        <div class="sidebar">
            @section('sidebar')
            @show
        </div>

        <!-- konten -->
        <div class="content">
            @yield('konten')
        </div>

        <!-- footer -->
        <p class="footer">Hak cipta oleh <span style="font-weight: bold;">@yield('user')</span> 2020</p>
    </div>
</body>
</html>