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
    <h2>Data Pembelian</h2>
</center>
<div class="container">
<table class="table table-bordered" border=1>
    <tr class="bg-primary">
        <th>Id Pembelian</th>
        <th>Nama Barang</th>
        <th>Nama Suplier</th>
        <th>Qty</th>
        <th>Tanggal</th>
    </tr>
    @foreach ($data as $item)
    <tr>
        <td>{{ $item->id_pembelian }}</td>
        <td>{{ $item->nama_barang }}</td>
        <td>{{ $item->nama_suplier }}</td>
        <td>{{ $item->qty }}</td>
        <td>{{ $item->tgl }}</td>
    </tr>
    @endforeach
    </table>
    </div>
</body>
</html>