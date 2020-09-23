<!doctype htmnl>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="buttonStyle.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>SiCeMet</title>
   <style>
      @import url(//fonts.googleapis.com/css2?family=Montserrat);
      body {
        background-color:#E5E5E5;
        color: white; 
        font-family: 'Montserrat', sans-serif;
      }
  </style>
</head>
<body>
    <div class="container-fluid p-3 text-center text-white" style="background-color: #F9983E;">
    <span style="float: left; cursor: pointer;font-family: 'Montserrat', sans-serif;" onclick="window.location.href='index.html'">
      <i class="fa fa-rocket fa-2x" style="padding-right: 5px;"></i><span style="font-weight: bold;font-size: 1.3em;">SiCeMet!</span>
    </span>
    <br>
    <h1 class="text-center p-3 text-light" style="font-weight: bold;">KENALI PROYEK KAMU</h1>
    <p class="">SiCeMet! merupakan aplikasi simulasi untuk cek metodologi agar sesuai dengan karakteristik proyek dalam
      pengembangan sistem
    </p>
  </div>
  <br>
  <div class="container mt-3">
    <form action="hasil.php" method="POST">
      <div class="form-group row">
        <legend class="col-form-label col-sm-3" style="background-color: #35D0BA; margin-right:94px;">Kebutuhan Awal</legend>
        <div style="color: black;">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kebutuhan" id="jelas" value="Dapat Dijelaskan" required>
            <label class="form-check-label" for="jelas">Dapat Dijelaskan</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kebutuhan" id="tdkjelas" value="Belum Jelas" required>
            <label class="form-check-label" for="tdkjelas" >Belum Jelas</label>
          </div>
        </div>
      </div>

      <div class="form-group row">
        <legend class="col-form-label col-sm-3" style="background-color: #35D0BA;margin-right:94px;">Kompleksitas</legend>
        <div style="color: black;">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kompleksitas" id="sederhana" value="Sederhana" required>
            <label class="form-check-label" for="sederhana">Sederhana</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kompleksitas" id="kompleks" value="Kompleks" required>
            <label class="form-check-label" for="kompleks">Kompleks</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kompleksitas" id="sgtkompleks" value="Sangat Kompleks" required>
            <label class="form-check-label" for="sgtkompleks">Sangat Kompleks</label>
          </div>
        </div>
      </div>

      <div class="form-group row">
        <label for="waktu" class="col-sm-3 col-form-label" style="background-color: #35D0BA; margin-right:94px;">Waktu Pengerjaan</label>
        <select class="form-control col-sm-6" id="waktu" name="delivery" required >
          <option value="&lt; 1 bulan">&lt; 1 bulan </option>
          <option value="1-3 bulan">1-3 bulan</option>
          <option value="4-6 bulan">4-6 bulan</option>
          <option value="6-12 bulan">6-12 bulan</option>
        </select>
      </div>
      <div class="form-group row">
        <label for="jumlah" class="col-sm-3 col-form-label" style="background-color: #35D0BA; margin-right:94px;">Jumlah Anggota Tim</label>
        <select class="form-control col-sm-6" id="jumlah" name="tim" required>
          <option value="&lt; 5 orang">&lt; 5 orang</option>
          <option value="6-10 orang">6-10 orang</option>
          <option value="11-15 orang">11-15 orang</option>
          <option value="&gt; 15 orang">&gt; 15 orang</option>
        </select>
      </div>
      <div class="form-group row">
        <legend class="col-form-label col-sm-3" style="background-color: #35D0BA; margin-right:94px;">Keterampilan Tim</legend>
        <div  style="color: black;">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="skill" id="pro" value="Berpengalaman" required>
            <label class="form-check-label" for="pro">Berpengalaman</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="skill" id="sedang" value="Campuran" required>
            <label class="form-check-label" for="sedang">Campuran</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="skill" id="noob" value="Tidak Berpengalaman" required>
            <label class="form-check-label" for="noob">Tidak Berpengalaman</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <legend class="col-form-label col-sm-3" style="background-color: #35D0BA;margin-right:94px;">Keterlibatan Klien</legend>
        <div style="color: black;">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="klien" id="terlibat" value="Terlibat" required>
            <label class="form-check-label" for="terlibat">Terlibat</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="klien" id="tdkterlibat" value="Tidak Terlibat" required>
            <label class="form-check-label" for="tdkterlibat">Tidak Terlibat</label>
          </div>
        </div>
      </div>
      <div class="button" style="float: right;">
        <button id="cek" type="submit" name="cek" style="background-color: #35D0BA; color: white;">Cek Metodologi</button>
        <button id="klear" type="reset" style="background-color: red; color: white;">Bersihkan</button>
      </div>
    </form>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
