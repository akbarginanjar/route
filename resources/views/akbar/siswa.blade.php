<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<ul>
    @foreach ($siswa as $data)
    id : {{$data['id']}} <br>
    nama : {{$data['nama']}} <br>
    username : {{$data['username']}} <br>
    email : {{$data['email']}} <br>
    alamat : {{$data['alamat']}} <br>

    @foreach($data['mapel'] as $value)
    <ul>
    <li>{{$value}}</li>
    </ul>
    @endforeach
    <hr>
    @endforeach
</ul>
    
</body>
</html>