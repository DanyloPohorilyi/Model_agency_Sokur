<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    echo "<style>";
        echo "#menu li:nth-child(5n+ $page) {";
        echo "font-weight: 600;";
        echo "}";
        echo "</style>";
        ?>
        <link rel="icon" href="{{ asset('assets/images/SMA.svg')}}">    
        
        
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
</head>

<body>
    @include('header')
    <main>
        @yield('content')
    </main>
    @include('footer')
</body>
{{-- @if ($page == 3)
<script>
    var btn = document.getElementById("send");
    var btnAccept = document.getElementById('btn');
    btn.addEventListener("click", ShowAccept, false);
    btnAccept.addEventListener("click", CloseAccept, false);


    function ShowAccept(e) {
        if (document.getElementById("accept").style.opacity == 0) {
            setTimeout( function Clear(){
            var inputs = document.querySelectorAll('input');
            for (var i = 0; i < inputs.length; i++) {
                inputs[i].value = null;
            }},500);
            document.getElementById("accept").style.opacity = 1;
            document.getElementById("accept").style.visibility = 'visible';
        }
    }

    function CloseAccept(e) {
        document.getElementById("accept").style.visibility = 'hidden';
        document.getElementById("accept").style.opacity = 0;
    }
</script>
@endif --}}
</html>