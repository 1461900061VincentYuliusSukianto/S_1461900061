<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sore_Pertemuan3-1461900061</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Beranda</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Guru</a>
        <a class="nav-link" href="#">Kelas</a>
        <a class="nav-link" href="#">Siswa</a>
        <a class="nav-link" href="#">User</a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
      </div>
    </div>
  </div>
</nav>
<form method="post" action="{{url('edit',$siswa->id)}}">
  @csrf
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="{{$siswa->nama}}">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat" value="{{$siswa->alamat}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>