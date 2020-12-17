<html>
<head>
<title>Zona Siswa</title>
</head>
<body>
<p>test jika ini diarahkan ke blog</p>

nama : {{$nama}}
matkul
<ul>
@foreach($matkul as $m)
<li>{{ $m }}</li>
@endforeach
</ul>
</body>
</html>
