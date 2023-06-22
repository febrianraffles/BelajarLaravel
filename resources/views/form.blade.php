<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Selamat datang di Website saya<br>
    Silahkan Masukkan Nama dan NRP anda
    <form action="/user" method="post">
        @csrf
        <input type="text" name="Nama" id="Nama">
        <input type="number" name="NRP" id="NRP"> 
        <button type="submit">submit</button>
    </form><br><br>

    daftar pengguna aktif :<br>

    @foreach ($data as $d)
    {{$d->Nama}}
    {{$d->NRP}}
    <br>
        
    @endforeach
</body>
</html>