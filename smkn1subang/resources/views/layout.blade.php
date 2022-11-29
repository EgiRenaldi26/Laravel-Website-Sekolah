<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Tes</title>
</head>
<body>
    <nav>
        <ul>
            <h1>Website Smkn 1 subang | @yield('title')</h1>
            <li><a href="{{url ('home')}}">Home</a></li>
            <li><a href="{{url ('tentang')}}">Tentang</a></li>
            <li><a href="{{url ('pesertadidik')}}">Peserta Didik</a></li>
            <li><a href="{{url ('eskul')}}">Eskul</a></li>
        </ul>
    </nav>
    <hr>
    <div>
        @yield('content')
    </div>
</body>
</html>