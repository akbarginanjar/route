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
    <h2>Data Pesanan</h2>
</center>
<div class="container">
<table class="table table-bordered" border=1>
    <tr class="bg-primary">
        <th>Id Pesanan</th>
        <th>Nama Pelanggan</th>
        <th>Nama Barang</th>
        <th>Qty</th>
        <th>Tanggal Pesan</th>
    </tr>
    @foreach ($data as $item)
    <tr>
        <td>{{ $item->id_pesanan }}</td>
        <td>{{ $item->nama_pelanggan }}</td>
        <td>{{ $item->nama_barang }}</td>
        <td>{{ $item->qty }}</td>
        <td>{{ $item->tgl_pesan }}</td>
    </tr>
    @endforeach
    </table>
    </div>
</body>
</html>