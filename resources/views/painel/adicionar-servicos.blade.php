@extends('layouts.painel')

@section('content')
<div class="container contratos">
		<div class="row header">
			<div class="col-sm-12">
				<h2>Adicionar Serviços - <b>{{ $cliente->inputRazaoSocial }}</b></h2>
			</div>
		</div>
		<div class="row content">
	        <div class="col-md-12">
	            <table class="table table-hover">
					<tr class="active">
						<th>Serviço</th>
						<th>Preço</th>
						<th width="200">Solicitado em</th>
						<th width="100"></th>
					</tr>
					@php
						foreach ($servicos as $servico):
					@endphp
						<tr>
							<td>{{ $servico->nomeServico }}</td>
							<td>
								<input type="text" value="{{ $servico->valorPadrao }}">
							</td>
							<td>{{ $servico->created_at }}</td>
							<td>
								<div class="btn-group" role="group">
									<button type="button" class="span-more dropdown-toggle" data-toggle="dropdown" 
									aria-haspopup="true" aria-expanded="false"> 
										Mais <span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Dropdown link</a>
										</li>
										<li role="separator" class="divider"></li>
										<li class="text-danger">
											<a href="" class="text-danger">
												<b>Cancelar Contrato</b>
											</a>
										</li>
									</ul>
								</div>
							</td>
						</tr>
					@php
						endforeach;
					@endphp
					<tr></tr>
					<tr>	
						<td></td>
						<td></td>
						<td></td>
						<td><strong>Total:</strong></td>
					</tr>
				</table>
	        </div>
	    </div>
</div>
@endsection
