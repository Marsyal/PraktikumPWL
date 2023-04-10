<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Daftar Mahasiswa</h1>
        <ul>
            <li>
                Nama : Andy Septiawan Saragih<br>
                NIM : 221402053<br>
                Jurusan : Teknologi Informasi
                <form action="/detail_mahasiswa" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary">Lihat Detail Mahasiswa [POST]</button>
                </form>
                <br>
                <form action="/detail_mahasiswa" method="get">
                    @csrf
                    <button type="submit" class="btn btn-primary">Lihat Detail Mahasiswa [GET]</button>
                </form>
            </li>
            <li>
                Nama : Gylbert Chrismiguel<br>
                NIM : 221402025<br>
                Jurusan : Teknologi Informasi
            </li>
        </ul>
    </div>
    
</body>
</html>