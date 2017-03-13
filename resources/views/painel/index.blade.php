@extends('layouts.painel')

@section('content')
<div class="container contratos">
		<div class="row header">
			<div class="col-sm-6">
				<h2>Contratos</h2>
			</div>
			<div class="col-sm-6">
				<input type="text" class="form-control" placeholder="Procure um contrato por nome">
			</div>
		</div>
		<div class="row content">
	        <div class="col-md-12">
	            <table class="table table-hover">
					<tr class="active">
						<th>Cliente</th>
						<th>Responsável</th>
						<th width="200">Solicitado em</th>
						<th width="100"></th>
					</tr>
					@php
						for($a = 0; $a < 3; $a++):

					@endphp
					<tr>
						<td>asd</td>
						<td>asd</td>
						<td>asd</td>
						<td><div class="btn-group" role="group">
							<button type="button" class="span-more dropdown-toggle" data-toggle="dropdown" aria-haspopup="	true" aria-expanded="false"> Mais <span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li><a href="#">Dropdown link</a></li>
								<li role="separator" class="divider"></li>
								<li class="text-danger"><a href="#" class="text-danger"><b>Excluir</b></a></li>
							</ul>
						</div></td>
					</tr>
				@php
					endfor;
				@endphp
				</table>
	        </div>
	    </div>
</div>
@endsection
