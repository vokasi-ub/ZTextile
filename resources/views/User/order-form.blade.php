@extends('Master.master2')

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Form Order</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css">
  <script src="main.js"></script>
</head>

<body>
  @section('content')
  <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Form Order</h3>
      </div>

      <!-- /.box-header -->
      <!-- form start -->
      <form class="form-horizontal" action="{{route('post.storeorder')}}" method="post">
      {{ csrf_field() }}
        <div class="box-body">
          <!-- Nama User -->
          <div class="form-group">
            <label for="inputNamaUser" class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNamaUser" placeholder="Nama" name="inputNamaUser">
              </div>
          </div>

          <!-- No HP -->
          <div class="form-group">
            <label for="inputNoHP" class="col-sm-2 control-label">No HP</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNoHP" placeholder="NoHP" name="inputNoHP">
              </div>
          </div>

          <!-- Alamat -->
          <div class="form-group">
            <label for="inputAlamat" class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputAlamat" placeholder="Alamat" name="inputAlamat">
              </div>
          </div>

        </div>

        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-default"><a href="order">Cancel</a></button>
          <button type="submit" class="btn btn-warning pull-right">Order Now</button>
        </div>

      <!-- /.box-footer -->
      </form>
    </div>
  </div>
@endsection
</body>
</html>