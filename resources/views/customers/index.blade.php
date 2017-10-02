@extends('layouts.painel')

@section('content')
<div class="container contratos">
		<div class="row header">
			<div class="col-sm-6">
				<h2>Clientes</h2>
			</div>
			<div class="col-sm-6">
				<form method="GET"> 
					<input type="text" class="form-control" name="search" value="{{ $search }}" placeholder="Procure um contrato por nome">
				</form>
			</div>
		</div>
		<div class="row content">
	        <div class="col-md-12">
	            <table class="table table-hover">
					<tr class="active">
						<th width="400">Nome do Cliente</th>
						<th width="200">Email</th>
						<th width="200">Telefone: </th>
						<th width="100"></th>
					</tr>
					@foreach($customers as $customer)
					<tr>
						<td>{{ $customer->nome }}</td>
						<td>{{ $customer->email }}</td>
						<td>{{ $customer->telefone }}</td>
						<td><div class="btn-group" role="group">
							<button type="button" class="span-more dropdown-toggle" data-toggle="dropdown" aria-haspopup="	true" aria-expanded="false"> Mais <span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li class="hovered"><a href="#" >Enviar reajuste</a></li>
								<li class="hovered"><a href="{{route('customers.show', ['id' => $customer->id])}}" >Ver dados</a></li>
								<li class="hovered"><a href="{{route('customers.edit', ['id' => $customer->id])}}" >Editar</a></li>
								<li class="hovered"><a href="#" class="customersDestroy" idCustomer="{{ $customer->id }}">Excluir</a></li>
								{!! Form::open(['route' => ['customers.destroy', $customer->id],'method' => 'delete', 'class'=> 'destroy-'.$customer->id]) !!}
								{!! Form::close() !!}
							</ul>
						</div></td>
					</tr>
				@endforeach
				</table>
				<div class="text-right">
				{{ $customers->appends(Request::only('search'))->links() }}
				</div>
	        </div>
			

	    </div>
</div>
@endsection
