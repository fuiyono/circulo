@extends('adminlte::page')


@section('htmlheader_title')
	Change Title here!

@endsection


@section('main-content')
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Catálogo de libros</h3>
					</div><!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Id</th>
									<th>Título</th>
									<th>Autor</th>
									<th>ISBN</th>
									<th>Tiraje</th>
									<th>Acción</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($authors as $author)
	                <tr>
	                  <td>{{ $author->id }}</td>
	                  <td>{{ $author->title }}</td>
										<td>{{ $author->name .' '. $author->lastname }}</td>
	                  <td>{{ $author->isbn }}</td>
	                  <td>{{ $author->printing }}</td>
										<td><button type="button" class="btn btn-info"> Acción</button></td>
	                </tr>
	              @endforeach
							</tbody>
							<tfoot>
								<tr>
									<th>Id</th>
									<th>Título</th>
									<th>Autor</th>
									<th>ISBN</th>
									<th>Tiraje</th>
								</tr>
							</tfoot>
						</table>
					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div><!-- /.col -->
		</div><!-- /.row -->
	</section><!-- /.content -->

	@endsection
