<?php

require_once('class_bmiPasien.php');

$nama = $_POST['nama'];
$umur = $_POST['umur'];
$kelamin = $_POST['jenis_kelamin'];
$berat = $_POST['bb'];
$tinggi = $_POST['tb'];

$data1 = new BmiPasien($nama,$umur,$kelamin,$berat,$tinggi);
$hasil = $data1->hasilBmi();

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="row p-5 d-flex justify-content-center">
      <div class="card col-md-8">
      <div class="card-header">
      <div class="card-title">Data BMI</div>
      </div>
          <div class="card-body">
          
          <table class="table table-striped table-hover">
              <thead>
                  <tr>
                      <th>No.</th>
                      <th>Nama</th>
                      <th>Gender</th>
                      <th>Umur</th>
                      <th>Berat (kg)</th>
                      <th>Tinggi (cm)</th>
                      <th>BMI</th>
                      <th>Hasil</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>1.</td>
                      <td><?=  $nama ?></td>
                      <td><?= $kelamin  ?></td>
                      <td><?= $umur  ?></td>
                      <td><?= $berat  ?></td>
                      <td><?= $tinggi  ?></td>
                      <td><?= $data1->hasilBmi(); ?></td>
                      <td><?= $data1->statusBmi($hasil); ?></td>
                  </tr>
              </tbody>
          </table>
          
          </div>
      </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>