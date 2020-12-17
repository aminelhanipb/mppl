<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset('home.css')}}">
    <title>Home Siswa</title>
  </head>
  <body>
	  <header>
	  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Zona Siswa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Jadwal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pengumuman</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
		<li class ="nav-item">
			<button type="button" class="btn btn-danger">Keluar</button>
		</li>
    </ul>
  </div>
</nav>
	  </header>
    <div class="container ">
	  <div class="row siswa">
		<div class="col-md-9 nama">
		  <div class="nama">
			<h5>Selamat datang</h5>
			</div>
		  <h4>Amin Elhan</h4>
		</div>
		<div class="col-md-3 kelas">
		  <h4>12 MIPA 2</h4>
		</div>
	   </div>
	   <div class="row body-pelajaran">
		   <a href="course.html">

		 <div class="card btn" style="width: 16rem;">
           <a href="http://localhost:8000/siswa/materi"><img src="{{asset('MTK-01.png')}}" class="card-img-top" alt="..."></a>
         </div>
	 </div>	

    </div>
  </div>
  </div>

    </div>
  
	  
	  
	  
	  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    
    
    
  </body>
</html>