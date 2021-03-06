<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset('tambah_pertemuan.css')}}">
    <title>tambah pertemuan</title>
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
        <a class="nav-link" href="home_guru.html">Home <span class="sr-only">(current)</span></a>
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
		  <h4>Bapak Hariadi, S.Pd</h4>
		</div>
		<div class="col-md-3 kelas">
		  <h4>Portal Guru</h4>
		</div>
	   </div>
	  <div class="card">
  <div class="card-body">
    <ul style="list-style-type:none;" >
    <li>Tambah Pertemuan</li>

    <form action="/guru/materi/store" method="post">
      {{ csrf_field() }}
		<li>
        <div class="mb-3">
        <label for="Input1" class="form-label">Nama Pertemuan</label>
        <input type="text" class="form-control" name="materi_nama" placeholder="Pertemuan">
        </div>

         <div class="mb-3">
         <label for="Textarea1" class="form-label">Deskripsi Pertemuan</label>
         <textarea class="form-control" name="materi_deskripsi" rows="3"></textarea>
         </div>

		    <div class="mb-3">
        <label for="Textarea1" class="form-label">Link Slide</label>
        <input class="form-control" name="materi_slide" type="text" placeholder="masukkan url slide disini" aria-label="default input example"></textarea>
        </div>

        <div class="mb-3">
        <label for="Textarea1" class="form-label">Link Quiz</label>
        <input class="form-control" name="materi_quiz" type="text" placeholder="masukkan url quiz disini" aria-label="default input example"></textarea>
        </div>

    </li>   
        {{-- <div class="mb-3">
         <label for="formFileMultiple" class="form-label">Upload File</label>
         <input class="form-control" type="file" id="formFileMultiple" multiple>
          </div> --}}
	  
		  {{-- <li>Absensi</li> --}}
	     {{-- <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="absensi" name="materi_absen">
        <label class="form-check-label" for="ya">
         Memberlakukan
       </label>
		  </div>
		  <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="absensi" name="materi_absen">
        <label class="form-check-label" for="tidak">
         Tidak Memberlakukan
       </label>
		  </div> --}}
      <input type="submit" value="Publish">
        <a class="btn btn-light" href="#" role="button">cancel</a>
    </form>

		</li>
	  </ul>
	  
</div>
	  
	  
	  
	  
	  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    
    
    
  </body>
</html>