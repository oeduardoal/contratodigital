@extends('layouts.contrato')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Contrato Digital - Informações </div>

                <div class="panel-body">
                    <h3>Introdução</h3>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos beatae ab, consequatur architecto a cumque, quod, vero repellat tempora earum totam tenetur, distinctio aliquam eos? Omnis molestias ullam, facere velit!
                    <br><br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="stepwizard col-md-offset-3">
                                <div class="stepwizard-row setup-panel">
                                  <div class="stepwizard-step">
                                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                    <p>Passo 1</p>
                                  </div>
                                  <div class="stepwizard-step">
                                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                    <p>Passo 2</p>
                                  </div>
                                  <div class="stepwizard-step">
                                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                    <p>Passo 3</p>
                                  </div>
                                </div>
                              </div>
                        </div>
                        </div>
                    <form method="POST" action="{{ url('/contrato/novo') }}">
                        {{ csrf_field() }}
                        <div class="row setup-content" id="step-1">
                            <div class="col-sm-12">
                                <br>
                                <h4><b>I. Identificação / Qualificação da empresa</b></h4>
                                <hr>
                            </div>
                            <div class="col-sm-6">
                                        @if ($errors->has('_token'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('_token') }}</strong>
                                            </span>
                                        @endif
                                <div class="form-group{{ $errors->has('inputRazaoSocial') ? ' has-error' : '' }}">
                                    <label for="inputFirstName">Razão Social</label>
                                    <input type="text" class="form-control" id="inputRazaoSocial" name="inputRazaoSocial" placeholder=""  value="{{old('inputRazaoSocial')}}" required="required">
                                        @if ($errors->has('inputRazaoSocial'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('inputRazaoSocial') }}</strong>
                                            </span>
                                        @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group{{ $errors->has('inputCNPJ') ? ' has-error' : '' }}">
                                    <label for="inputLastName">CPF/CNPJ</label>
                                    <input type="text" class="form-control" id="inputCNPJ" name="inputCNPJ" placeholder=""  value="{{old('inputCNPJ')}}" required="required">
                                        @if ($errors->has('inputCNPJ'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('inputCNPJ') }}</strong>
                                            </span>
                                        @endif
                                </div>        
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group{{ $errors->has('inputEndereco') ? ' has-error' : '' }}">
                                    <label for="inputEndereco">Endereço</label>
                                    <input type="text" class="form-control" id="inputEndereco" name="inputEndereco" placeholder="" value="{{old('inputEndereco')}}" required="required">
                                    @if ($errors->has('inputEndereco'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('inputEndereco') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group{{ $errors->has('inputCEP') ? ' has-error' : '' }}">
                                    <label for="inputCEP">CEP</label>
                                    <input type="text" class="form-control" id="inputCEP" name="inputCEP" placeholder="" value="{{old('inputCEP')}}" required="required">
                                    @if ($errors->has('inputCEP'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('inputCEP') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group{{ $errors->has('inputCidade') ? ' has-error' : '' }}">
                                    <label for="inputAddress1Name">Cidade</label>
                                    <input type="text" class="form-control" id="inputCidade" name="inputCidade" placeholder="" value="{{old('inputCidade')}}" required="required">
                                    @if ($errors->has('inputCidade'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('inputCidade') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group{{ $errors->has('inputEstado') ? ' has-error' : '' }}">
                                    <label for="inputEstado">Estado</label>
                                        <select class="form-control" id="inputEstado" name="inputEstado" required="required">
                                            <option value="{{old('inputEstado')}}">Escolha Uma Cidade</option>
                                            @foreach($estados as $key=>$value)
                                                <option value="{{$key}}">{{$value}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('inputEstado'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('inputEstado') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group{{ $errors->has('inputTelefone') ? ' has-error' : '' }}">
                                    <label for="inputPhone">Telefone</label>
                                    <input type="tel" class="form-control" id="inputTelefone" name="inputTelefone" placeholder="" value="{{old('inputTelefone')}}" required="required">
                                    @if ($errors->has('inputTelefone'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('inputTelefone') }}</strong>
                                            </span>
                                        @endif
                                </div>
                            </div>
                            <div class="col-sm-12 text-right">
                                <button class="btn btn-primary nextBtn" type="button">
                                    Próximo Passo
                                </button>
                            </div>
                        </div>
                        
                        
                            <div class="row setup-content" id="step-2">
                              <div class="col-sm-12">
                                <br>
                                <h4><b>II. Identificação / Qualificação dos Signatários</b></h4>
                                <hr>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group{{ $errors->has('inputNome') ? ' has-error' : '' }}">
                                <label for="inputAddress1Name">Nome</label>
                                <input type="text" class="form-control" id="inputNome" name="inputNome" placeholder=""  value="{{old('inputNome')}}" required="required">
                                @if ($errors->has('inputNome'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('inputNome') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                             <div class="col-sm-6">
                                <div class="form-group{{ $errors->has('inputCPF') ? ' has-error' : '' }}">
                                <label for="inputAddress1Name">CPF</label>
                                <input type="text" class="form-control" id="inputCPF" name="inputCPF" placeholder=""  value="{{old('inputCPF')}}" required="required">
                                @if ($errors->has('inputCPF'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('inputCPF') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12">
                                 <div class="form-group{{ $errors->has('inputEmail') ? ' has-error' : '' }}">
                                    <label for="inputEmail">E-mail para contato</label>
                                    <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder=""  value="{{old('inputEmail')}}" required="required">
                                    @if ($errors->has('inputEmail'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('inputEmail') }}</strong>
                                            </span>
                                        @endif
                                </div>
                            </div>
                            
                            <div class="col-sm-12 text-right">
                                <button class="btn btn-primary nextBtn  " type="button">
                                    Próximo Passo
                                </button>
                            </div>                            
                        </div>    


                        <div class="row setup-content" id="step-3">
                            <div class="row">
                            <br>
                                <div class="col-sm-8 col-sm-offset-2 text-center">
                                    <p>
                                        Ao enviar seus dados, você consente em receber comunicações por e-mail da Website Fortaleza. Você pode cancelar o recebimento de comunicações por e-mail a qualquer momento. <br> 
                                        <a href="">Consulte a nossa Política de Privacidade</a>
                                    </p>
                                </div>
                                <div class="col-sm-12 text-center">
                                    <br>
                                    <button class="btn btn-primary btn-lg has-spinner" type="submit">
                                        Começar Agora
                                    </button>
                                </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
