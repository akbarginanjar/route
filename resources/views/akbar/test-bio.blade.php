<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>Data Biodata</h1></center>
    @foreach ($query as $data)
    Id : {{ $data->id }} <br>
    Nama : {{ $data->name }} <br>
    Tanggal Lahir : {{ $data->bornDate }} <br>
    Jenis Kelamin : {{ $data->gender }} <br>
    Alamat : {{ $data->address }} <br>
    Agama : {{ $data->religion }} <br>
    Umur : {{ $data->age }} <br>
    Hobi : {{ $data->hobby }} <br>
    <hr>
    @endforeach
</body>
</html>