<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        <h1>BNCCBook</h1>
        <h2>Social Media Komunitas Komputer Binus Bandung</h2>
        <p>Belajar dan Berbagi dengan sesama</p>
        <h2>Benefit Join di BNCCBook</h2>
        <ul>
            <li>Mendapatkan motivasi dari sesama tech enthusiast</li>
            <li>Sharing knowledge dari para pengajar</li>
            <li>Dibuat oleh calon web developer terbaik</li>
        </ul>
        <h2>Cara Bergabung ke BNCCBook</h2>
        <ol>
            <li>Mengunjungi website ini</li>
            <li>Mendaftar di <a href="{{ url('/register')}}">Form Sign Up</a></li>
            <li>Selesai</li>
        </ol>
    </body>
</html>
