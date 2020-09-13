<?php

include 'metodologi.php';
include 'function.php';

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <style>
    * {
      font-family: 'Montserrat', sans-serif;
    }
    .container .header {
      background-color: #F9983E;
      padding-top: 50px;
      padding-bottom: 20px;
    }

    .container .header p {
      margin-left: 100px;
      margin-right: 100px;
    }

    .container {
      width: 1000px;
      margin-top: 130px;
      min-height: 100%;
      position: relative;
    }

    .container .badan {
      background-color: green;
    }

    body {
      background-color:#E5E5E5 ;
      background-size: cover;
      background-attachment: fixed;
      text-align: center;
      color: white;
    }

    hr {
      border-width: 7px;
      border-color: white;
      width: 20%;
    }
  </style>
  <title>Hello, world!</title>
</head>

<body style="background-color:#E5E5E5; color: white;">
    <div class="container-fluid p-3 text-center text-white" style="background-color: #F9983E;">
    <div style="float:left; cursor: pointer;" onclick="window.location.href='form.php'"><i class="fa fa-rocket fa-2x" style="padding-right: 5px;"></i><span style="font-weight: bold;font-size: 1.3em;">SiCeMet!</span></div>
    <br>
    <h1 class="text-center p-3 text-light" style="font-weight: bold;">METODOLOGI YANG COCOK</h1>
    <p class="">SiCeMet! merupakan aplikasi simulasi untuk cek metodologi agar sesuai dengan karakteristik proyek dalam
      pengembangan sistem
    </p>
  </div>
    <div class="badan">
      <table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">Nama Metodologi</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($hasil as $h) : ?>
            <tr>
              <td><?= $h['nama']; ?></td>
              <td>
                <a href="detail.php?id=<?= $h['id']; ?>"> Detail </a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>