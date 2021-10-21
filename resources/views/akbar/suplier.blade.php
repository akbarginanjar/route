<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>

<center>
    <h2>Data Suplier</h2>
</center>
<div class="container">
<table class="table table-bordered" border=1>
    <tr class="bg-primary">
        <th>Id Suplier</th>
        <th>Nama Suplier</th>
        <th>Alamat</th>
        <th>Kode Pos</th>
        <th>Kota</th>
    </tr>
    @foreach ($data as $item)
    <tr>
        <td>{{ $item->id_suplier }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->alamat }}</td>
        <td>{{ $item->kode_pos }}</td>
        <td>{{ $item->kota }}</td>
    </tr>
    @endforeach
    </table>
    </div>
</body>
</html>