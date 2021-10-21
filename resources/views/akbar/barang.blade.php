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
    <h2>Data Barang</h2>
</center>
<div class="container">
<table class="table table-bordered" border=1>
    <tr class="bg-primary">
        <th>Id barang</th>
        <th>Nama</th>
        <th>Varian</th>
        <th>Harga Beli</th>
        <th>Harga Jual</th>
    </tr>
    @foreach ($data as $item)
    <tr>
        <td>{{ $item->id_barang }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->varian }}</td>
        <td>{{ $item->harga_beli }}</td>
        <td>{{ $item->harga_jual }}</td>
    </tr>
    @endforeach
    </table>
    </div>
</body>
</html>
