<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 1</title>
    <style>
        body{
            font-size: 20px;
            font-weight: bold;
        }
        th {
            text-align: center;
            background-color: #4e4e4e;
            color: #FFF;
            padding: 5px 0;
        }
        th.red {
            background-color: #ff0000;
            color: #fff;
        }

        td {
            text-align: center;
            vertical-align: top;
            padding: 20px;
            font-size: 25px;
            width: 120px;
            text-align: center;
            border: 1px solid #000;
        }

        .red {
            color: #ff0000;
        }

        .error{
            background-color: #ffa0a0;
            color: #7a0000;
            padding: 12px 18px;
            font-size: 20px;

        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>
