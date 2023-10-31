<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h2{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
        }
        body{
            background-color: black;
            display: flex;
            justify-content: center;
        }
        .container{
            margin-top: 20%; 
            text-align: center;
            width: 35vw;
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Error, {{$message}}</h2>
    </div>
</body>
</html>