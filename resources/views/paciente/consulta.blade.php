<center><H6> VERSÃO TESTE - DESENVOLVIDO POR: PAULO SOARES DE OLIVEIRA - WHATSAPP 51-982974728 </H6></center>

@if(!Auth::check())
	@include('layouts/app')
	<h2> VOCÊ NÃO TEM AUTORIZAÇÃO. FAÇA LOGIN PRIMEIRO </h2>
@endif

@if(Auth::check())
 
@include('layouts/bootstrap')
<table class="table table-responsive">
	<thead>
		<tr>
			<th>NOME PACIENTE</th>
			<th>IDADE</th>
			<th>PESO</th>
			<th>ALTURA</th>

		</tr>
	</thead>
	<tbody>
		@foreach($dados as $dado)
		<tr>
			<td>{{ $dado->nome }}</td>
			<td>{{ $dado->idade }}</td>
			<td>{{ $dado->peso }}</td>
			<td>{{ $dado->altura }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endif