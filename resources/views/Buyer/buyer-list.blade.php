@extends('Master.master')

<!DOCTYPE html>
<html>
<head>
	<title>List Buyer</title>
</head>

<body>
@section('content')
  <br>        
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">List Buyer</h3>
            </div>

            <form action="{{route('post.buyersearch')}}" method="get" >
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
				<th>Nama</th>
				<th>No Hp</th>
				<th>Alamat</th>
				</tr>
				
				@foreach($listbuyer as $item)
              	<tr>
                <td>{{$item->nama}}</td>
				<td>{{$item->no_hp}}</td>
				<td>{{$item->alamat}}</td>
				@endforeach
			</table>
          </div>

		      <div class="box-footer clearfix">						
            <ul class="pagination pagination-sm no-margin pull-right">
              <li><a href="#">&laquo;</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">&raquo;</a></li>
            </ul>
	        </div>
				</div>
			</div>
		</div>
  </section>
	@endsection

</body>
</html>



