<center><H6> VERSÃO TESTE - DESENVOLVIDO POR: PAULO SOARES DE OLIVEIRA - WHATSAPP 51-982974728 </H6></center>

@if(!Auth::check())
	@include('layouts/app')
	<h2> VOCÊ NÃO TEM AUTORIZAÇÃO. FAÇA LOGIN PRIMEIRO </h2>
@endif


@if(Auth::check())
@include('layouts/bootstrap')

<form name="cadastro" method="POST" action="{{ route('salvaCadastro') }}">
	@csrf
<div class="card-body">
	<center><H6> VERSÃO TESTE - DESENVOLVIDO POR: PAULO SOARES DE OLIVEIRA - WHATSAPP 51-982974728 </H6></center>

	<span id="mensagem">{{ session('mensagem') }}</span>
	<div class="row">
		<div class="col-lg-12">
			<span> <input type="text" name="nome" placeholder="Digite o nome do Paciente" class="form-control" title="Digite o nome do Paciente" required="" max="150"></span>
		</div>
		<div class="col-lg-12">
			&nbsp
		</div>
		<div class="col-lg-12">
			<span> <input type="number"  step="1" min="0" name="idade" placeholder="Digite a idade do Paciente" class="form-control" title="Digite a idade do Paciente" max="99999999999" required=""></span>
		</div>
		<div class="col-lg-12">
			&nbsp
		</div>

		<div class="col-lg-12">
			<span> <input type="number" pattern="[0-9]+([.\,][0-9]+)?" step="any" name="peso" placeholder="Digite o peso do Paciente" class="form-control" title="Digite o peso do Paciente" min="0.000" max="999.999" maxlength="7" required=""></span>
		</div>
		<div class="col-lg-12">
			&nbsp
		</div>
		<div class="col-lg-12">
			<span> <input type="number" pattern="[0-9]+([.\,][0-9]+)?" step="any" name="altura" placeholder="Digite a altura do Paciente" class="form-control" title="Digite a altura do Paciente" max="999.99" maxlength="5" required=""></span>
		</div>
		<div class="col-lg-12">
			&nbsp
		</div>
		<div class="col-lg-12">
			<input type="submit" value="Cadastrar" class="btn btn-success form-control">
		</div>
	</div>
</div>
</form>
<hr>
<span> @Copyright Todos os Direitos Reservados </span>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/funcao.js') }}"></script>
@endif