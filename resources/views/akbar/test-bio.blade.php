<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body><br><br>

<center>
<h1>Data Biodata</h1><br>

    <div class="container">
<table class="table table-bordered">
    <tr class="bg-primary">
        <th>ID</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Agama</th>
        <th>Umur</th>
        <th>Hobi</th>
    </tr>
    @foreach ($query as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->bornDate }}</td>
        <td>{{ $item->gender }}</td>
        <td>{{ $item->address }}</td>
        <td>{{ $item->religion }}</td>
        <td>{{ $item->age }}</td>
        <td>{{ $item->hobby }}</td>
    </tr>
    @endforeach
    </table>
    </div>
    </center>
</body>
</html>