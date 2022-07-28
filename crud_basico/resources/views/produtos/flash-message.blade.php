@if ($mensagem = Sessão::get('sucesso'))
<div class = "alert alert-success alert-block" > 
	<button type = "button" class = "close" data-dismiss = "alert" > × </button>   	
        <strong> {{ $message }} </strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class = "alert alert-perigo alert-block" > 
	<button type = "button" class = "close" data-dismiss = "alert" > × </button>   	
        <strong> {{ $message }} </strong>
</div>
@endif


@if ($message = Session::get('warning'))
<div class = "alert alert-warning alert-block" > 
	<button type = "button" class = "close" data-dismiss = "alert" > × </button>   	
	<strong> {{ $message }} </strong>
</div>
@endif


@if ($message = Session::get('info'))
<div class = "alert alert-info alert-block" > 
	<button type = "button" class = "close" data-dismiss = "alert" > × </button>   	
	<strong> {{ $message }} </strong>
</div>
@endif


@if ($errors->any())
<div class = "alerta alerta-perigo" > 
	<button type = "button" class = "close" data-dismiss = "alert" > × </button>   	
	Verifique se há erros no formulário abaixo
</div>
@endif