@extends('adminlte::page')

@section('htmlheader_title')
	Change Title here!
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-9 col-md-offset-1">

				<div class="box box-success box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Agregar un punto de venta</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
											<form action="/addbranch" method="post">
												<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

													<label for="">Distribuidor</label>
														<select name="distributorId" class="form-control">
																@foreach ($distributors as $distributor)
																	<option value="{{ $distributor->id }}">{{ $distributor->name }}</option>
																@endforeach
															</select>
														<label for="">Nombre del punto de venta</label>
														<input type="text" class="form-control" id="" name="name" placeholder="Nombre">

												<label for="[object Object]">Calle</label>
												<input type="text" class="form-control" name="street" value="">
												<label for="[object Object]">Colonia</label>
												<input type="text" class="form-control" name="colony" value="">
												<label for="[object Object]">Ciudad</label>
												<input type="text" class="form-control" name="city" value="">
												<label for="[object Object]">Estado</label>
												<input type="text" class="form-control" name="state" value="">
												<label for="[object Object]">C.P.</label>
												<input type="text" class="form-control" name="cp" value="">
												<label for="[object Object]">Location</label>
												<input type="text" class="form-control" name="location" value="">
												<input type="submit" class="btn btn-success" >
											</form>
                    </div>
                    <!-- /.box-body -->
                </div>
			</div>
		</div>
	</div>
@endsection
