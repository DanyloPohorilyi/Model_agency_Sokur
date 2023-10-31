<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    
    echo "<style>";
        echo "#menu li:nth-child(6n+ $page) {";
        echo "font-weight: 600;";
        echo "}";
        echo "</style>";
        ?>
        <link rel="icon" href="{{ asset('assets/images/SMA.svg')}}">    
        
    <link rel="stylesheet" href="{{ asset('css/style7.css') }}">
</head>

<body>
    @include('headerGallery')
    <main>
        @yield('content')
    </main>
    @include('footerAdmin')
</body>
</html>