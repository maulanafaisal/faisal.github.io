<html>
    <head>
        <title> Web Digital Talent</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    
<body>
        <div>
            <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">DIGITAL TALENT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="daftarpeserta.php">Calon Peserta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="daftar.php">Daftar Baru</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
  
</div>
   <br>
      <main>
       <div class="container">
           <h1 class="mt-5"> Tambah Data Peserta</h1>
           <form action="">
            <br>
                <div class="mb-3 row">
              <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
              <input type="nama" class="form-control" id="inputnama">
              </div>
                </div>
    
            <div class="mb-3 row">
              <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
              <textarea class="form-control"></textarea>
              </div>
            </div>  

            <div class="mb-3 row">
              <label for="alamat" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Laki-Laki
                    </label>
                  </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      Wanita
                    </label>
                  </div>
                  
              </div>

              
              <div class="mb-3 row">
              <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="agama" aria-label="Default select example">
                    <option selected>==Pilihan==</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Other">Other</option>
                    </select>
                  </div>
              </div>

              <div class="mb-3 row">
              <label for="inputnama" class="col-sm-2 col-form-label">Sekolah Asal</label>
              <div class="col-sm-10">
              <input type="nama" class="form-control" id="inputnama">
              </div>
                </div>
    
                <div class="mb-3 row">
                  <label for="agama" class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <a href="simpan.php" type="button" class="btn btn-primary">Simpan</a>
                    <button type="button" class="btn btn-info">Reset</button>
                    <button type="button" class="btn btn-success">Kembali</button>
                    </div>        
                </div>

        </div>
      </form>
    </main>

    
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>