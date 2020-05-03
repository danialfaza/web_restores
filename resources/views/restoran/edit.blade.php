@extends('layout.master')


@section('content')
<div class="main">
		<div class="main-content">
			<div class="caontainer-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Inputs</h3>
				</div>
				<div class="panel-body">
					<form action="/restoran/{{$restoran->id}}/update" method="POST" enctype="multipart/form-data">
					       	{{csrf_field()}}

								  <div class="form-group">
								    <label for="exampleInputEmail1">Nama Restoran</label>
								    <input name="judul" type="text" class="form-control" id="exampleInputEmail1"  value="{{$restoran->nama_restoran}}">
								  </div>

								  <div class="form-group">
								    <label for="exampleInputPassword1">Deskripsi</label>
								    <input name="penerbit" type="text" class="form-control" id="exampleInputPassword1"  value="{{$restoran->deskripsi}}">
								  </div>

							

								   <div class="form-group">
								    <label for="exampleInputPassword1">Jam Operasional</label>
								    <input name="thn_terbit" type="text" class="form-control" id="exampleInputPassword1"  value="{{$restoran->jam_buka}}">
								  </div>

								   <div class="form-group">
								    <label for="exampleInputPassword1">Alamat</label>
								    <input name="harga" type="text" class="form-control" id="exampleInputPassword1"  value="{{$restoran->alamat}}">
								  </div>

								   <div class="form-group">
								    <label for="exampleInputPassword1">Telfon</label>
								    <input name="kategori" type="text" class="form-control" id="exampleInputPassword1"  value="{{$restoran->telfon}}">
								  </div>

								  


								
								  <div class="modal-footer">
					       
					       <button type="submit" class="btn btn-warning btn-lg">Update</button>
					      </div>
								</form>
				</div>
			</div>
					</div>
				</div>
@stop
@section('content1')		
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
		  {{session('sukses')}}
		</div>
		@endif

		<div class="row">
			<div class="col-lg-12">
			

		</div>
		</div>
	</div>
		<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">

					       
					      </div>
					     
					    </div>
					  </div>
					  @endsection
					