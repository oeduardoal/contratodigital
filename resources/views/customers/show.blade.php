@extends('layouts.painel')

@section('content')
<div class="container contratos">
		<div class="row header">
			<div class="col-sm-6">
				<h2>{{ $customer->nome }} <span class="badge">Desde 2000.00.00</span></h2>
			</div>
			
		</div>
		<div class="row content">
			<div class="col-sm-4 col-md-4">
				<div class="">
					<img src="http://placehold.it/350x250" alt="...">
					<div class="caption">
						<h3>{{ $customer->nome }}</h3>
						<ul class="list-unstyled">
						<li>
							<i class="fa fa-envelope"></i> {{$customer->email}}
						</li>

						<li>
							<i class="fa fa-phone"></i> {{$customer->telefone}}
						</li>

					</ul>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, non quo repudiandae aut repellat ipsam vel sed sint explicabo saepe nostrum ipsum. Voluptatum, dolor. Autem molestiae excepturi laudantium officia? Quo.</p>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active">
						<a href="#home" aria-controls="dados" role="tab" data-toggle="tab">Dados</a>
					</li>
					<li role="presentation">
						<a href="#servicos" aria-controls="servicos'" role="tab" data-toggle="tab">Serviços</a>
					</li>
					<li role="presentation">
						<a href="#reajustes" aria-controls="reajustes" role="tab" data-toggle="tab">Reajustes</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="dados">
						@php
							echo json_encode($customer);
						@endphp
					</div>
				<div role="tabpanel" class="tab-pane" id="servicos'">
					
				</div>
				<div role="tabpanel" class="tab-pane" id="reajustes">asdasdasd</div>
				</div>
			</div>
	    </div>
</div>
@endsection
