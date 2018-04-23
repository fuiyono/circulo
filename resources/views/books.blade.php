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
                        <h3 class="box-title">Example box</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form class="form-group" action="/addbook" method="post">
													<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

														<label for="">Autor</label>
															<select name="authorId" class="form-control">
																	@foreach ($authors as $author)
																		<option value="{{ $author->id }}">{{ $author->name .' ' . $author->lastname  }}</option>
																	@endforeach
																</select>
																<label for="">Editorial</label>
																<select name="publisherId" class="form-control">
																		@foreach ($publishers as $publisher)
																			<option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
																		@endforeach
																	</select>
																					<label for="">Título</label>
																				<input type="text" class="form-control" id="" name="title" placeholder="">
																				<label for="">ISBN</label>
																			<input type="text" class="form-control" id="" name="isbn" placeholder="">
																			<label for="">Código de Barras</label>
																		<input type="text" class="form-control" id="" name="barcode" placeholder="">
																		<label for="">Edición</label>
																	<input type="text" class="form-control" id="" name="edition" placeholder="">
																	<label for="">Descripción</label>
																<input type="text" class="form-control" id="" name="description" placeholder="">
																<label for="">Portada</label>
															<input type="file" class="form-control" id="" name="image" placeholder="">
															<label for="">Tiraje</label>
														<input type="text" class="form-control" id="" name="printing" placeholder="">
														<label for="">Año</label>
													<input type="text" class="form-control" id="" name="year" placeholder="">
													<label for="">Colección</label>
												<input type="text" class="form-control" id="" name="collection" placeholder="">


													<input type="submit" class="btn btn-success" >
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
			</div>
		</div>
	</div>
@endsection
