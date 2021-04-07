<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <form action="data_bmi.php" method="POST" class="p-3 d-flex justify-content-center row">
    <div class="col-md-6">
    <div class="card">
      <div class="card-header bg-info text-white">
      <div class="card-text text-center mt-1">
      <h4>
      Form BMI
      </h4>
      </div>
      </div>
      <div class="card-body mt-4 row">
      <div class="col-md-4">
      <label>Nama</label>
      </div>
      <div class="col-md-8">
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-address-book"></i></div>
        </div>
        <input type="text" name="nama" class="form-control" id="inlineFormInputGroup" placeholder="Nama">
      </div>

      </div>
        </div>
        <div class="card-body  row">
      <div class="col-md-4">
      <label>Berat badan</label>
      </div>
      <div class="col-md-8">
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fab fa-accusoft"></i></div>
        </div>
        <input type="text" name="bb" class="form-control" id="inlineFormInputGroup" placeholder="Berat badan">
        <div class="input-group-prepend">
          <div class="input-group-text">kg</div>
        </div>
      </div>
      </div>
        </div>
        <div class="card-body  row">
      <div class="col-md-4">
      <label>Tinggi badan</label>
      </div>
      <div class="col-md-8">
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-child"></i></div>
        </div>
        <input type="text" class="form-control" name="tb" id="inlineFormInputGroup" placeholder="Tinggi badan">
        <div class="input-group-prepend">
          <div class="input-group-text">cm</div>
        </div>
      </div>
      </div>
        </div>
        <div class="card-body  row">
      <div class="col-md-4">
      <label>Umur</label>
      </div>
      <div class="col-md-8">
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-bell"></i></div>
        </div>
        <input type="text" name="umur" class="form-control" id="inlineFormInputGroup" placeholder="Umur">
        <div class="input-group-prepend">
          <div class="input-group-text">Thn</div>
        </div>
      </div>
      </div>
        </div>
        <div class="card-body  row">
      <div class="col-md-4">
      <label>Jenis kelamin</label>
      </div>
      <div class="col-md-8">
      <input type="radio" name="jenis_kelamin" value="Laki - laki" class="m-2">Laki - laki
      <input type="radio" name="jenis_kelamin" value="Perempuan" class="m-2">Perempuan
      </div>
        </div>
        <div class="card-body row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
        <button class="btn btn-success mb-2 pl-5 pr-5" type="submit">Kirim</button>
        </div>
        </div>
    </div>
    </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>