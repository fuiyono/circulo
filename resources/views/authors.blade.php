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
                        <h3 class="box-title">Nuevo Autor</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
											<form class="form-group" method="post" action="/addauthor">
												<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

												<label for="">Nombre</label>
												<input type="text" class="form-control" name="name" id="" placeholder="">
												<label for="">Apellido</label>
												<input type="text" class="form-control" name="lastname" id="" placeholder="">
												<label for="">Fotografía</label>
												<input type="file" class="form-control" name="image" id="" placeholder="">
												<label for="">Semblanza</label>
												<input type="text" class="form-control" name="biography" id="" placeholder="">
												<label for="">E-mail</label>
												<input type="text" class="form-control" name="email" id="" placeholder="">
												<label for="">Telefono</label>
												<input type="text" class="form-control" name="telephone" id="" placeholder="">
												<label for="">Sitio Web</label>
												<input type="text" class="form-control" name="website" id="" placeholder="">

												<input type="submit" class="btn btn-success">
												<p class="help-block">Help text here.</p>
											</form>
                    </div>
                    <!-- /.box-body -->
                </div>
			</div>
		</div>
	</div>
@endsection
