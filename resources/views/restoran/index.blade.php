@extends('layout.master')

@section('content')

	<div class="main">
		<div class="main-content">
			<div class="caontainer-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Data Restoran</h3>
					<div class="right">
						
					
				
				

				</div>
					

				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th >Nama Restoran</th>
								<th >Deskripsi</th>
								<th >Jam Operasional</th>
								<th >Alamat</th>
								<th >Telfon</th>
								<th >AKSI</th></tr>
						</thead>
						@foreach($data_restoran as $restoran)
						<tbody>
							<tr>
								<td>{{$restoran->nama_restoran}}</td>
								<td>{{$restoran->deskripsi}}</td>
								<td>{{$restoran->jam_buka}}</td>
								<td>{{$restoran->alamat}}</td>
								<td>{{$restoran->telfon}}</td>
							
								
								<td>
									<a href="/restoran/{{$restoran->id}}/edit" class="btn btn-warning">Edit</a>
									<a href="/restoran/{{$restoran->id}}/delete" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ? ')" > Delete </a>
								</td></tr>
									@endforeach
										
					</table>
				</div>
			</div>
					</div>
				</div>
			</div>
			
		</div>

	</div>
		

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">

					       <form action="/restoran/create" method="POST" enctype="multipart/form-data">
					       	{{csrf_field()}}

								  <div class="form-group">
								    <label for="exampleInputEmail1">Nama Restoran</label>
								    <input name="nama_restoran" type="text" class="form-control" id="exampleInputEmail1" >
								  </div>

								  <div class="form-group">
								    <label for="exampleInputPassword1">Deskripsi</label>
								    <input name="deskripsi" type="text" class="form-control" id="exampleInputPassword1" >
								  </div>


								   <div class="form-group">
								    <label for="exampleInputPassword1">Jam Operasional</label>
								    <input name="jam_buka" type="text" class="form-control" id="exampleInputPassword1" placeholder="Tahun">
								  </div>

								   <div class="form-group">
								    <label for="exampleInputPassword1">Alamat</label>
								    <input name="alamat" type="text" class="form-control" id="exampleInputPassword1" placeholder="Harga">
								  </div>

								  <div class="form-group">
								    <label for="exampleInputPassword1">No Telfon</label>
								    <input name="telfon" type="number" class="form-control" id="exampleInputPassword1" placeholder="Harga">
								  </div>


								 
								
								  <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					       <button type="submit" class="btn btn-primary">Submit</button>
					      </div>
								</form>
					      </div>
					     
					    </div>
					  </div>
@stop
