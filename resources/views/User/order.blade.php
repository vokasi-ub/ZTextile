@extends('Master.master2')
<!DOCTYPE html>
<html>
<head>
	<title>Order</title>
</head>
<body>

@section('content')
	<br>		        
        <section class="content">
      	<div class="row">
        	<div class="col-md-12">
          		<div class="box">
          			<div class="box-header with-border">
            			<h3 class="box-title">List Items</h3>
          			</div>

	          		<form action="#" method="get" >
	      			<div class="input-group">
	        			<input type="text" name="q" class="form-control" placeholder="Search...">
	          			<span class="input-group-btn">
	           			<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
						</span>
	  	  			</div>
	  				</form>

            	<div class="box-body">
              		<table class="table table-bordered">
					<tr>
					<th>Nama Item</th>
					<th>Warna</th>
					<th>Stok</th>
	                <th>Harga</th>
	                <th>Satuan</th>
	                <th>Keterangan</th>
	                <th>Action</th>
					</tr>

					@foreach($listitem as $item)
        			<tr>
					<td>{{$item->nama_item}}</td>
					<td>{{$item->warna}}</td>
					<td>{{$item->stok}}</td>
	                <td>{{$item->harga}}</td>
	                <td>{{$item->satuan}}</td>
	                <td>{{$item->keterangan}}</td>
	                <td>
					<button type="submit" class="btn btn-default btn-warning"><a href="order-form" style="color: white">Order</a></button>
					</td>
					</tr> 
					@endforeach		
				</table>
          	</div>			

					<div class="box-footer clearfix">						
						
            
	        </div>
				</div>
			</div>
		</div>
	@endsection

</body>
</html>



