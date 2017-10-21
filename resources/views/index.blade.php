<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>

<style type="text/css">
	body {
	    padding-top: 120px;
	}
	.panel-heading {
		text-align:center;
	}
	.panel-heading a.active{
		color: #022222;
		font-size: 13px;
	}
	.invisible{
		display: none;
	}
</style>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/') }}/pnotify.css">


@if(count($errors) > 0)
	@foreach($errors->all() as $error)
		<script>
            new PNotify({
              title: 'Error',
              text: '{{ $error }}',
              type: 'error',
              styling: 'bootstrap3'
          });
        </script>
	@endforeach
@endif
<body>
	<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="btnLogin">Ingresar</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="btnRegister">Registrar</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								{!! Form::open(['route' => 'users.login', 'method' => 'POST', 'name' => 'frLogin', 'id' => 'frLogin']) !!}
									<div class="form-group">
										{!! Form::text('email' , null, ['class'=> 'form-control', 'placeholder' => 'Nombre de usuario', 'required']) !!}
									</div>
									<div class="form-group">
										{!! Form::password('password' ,  ['class'=> 'form-control', 'placeholder' => 'Contraseña', 'required']) !!}
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												{!! Form::submit('Ingresar', ['class' => 'form-control btn btn-primary']) !!}
											</div>
										</div>
									</div>
								{!! Form::close() !!}
								
								{!! Form::open(['route' => 'usersRoute.store', 'method' => 'POST', 'name' => 'frRegister', 'id' => 'frRegister',  'class' => 'invisible']) !!}
									<div class="form-group">
										{!! Form::text('name' , null, ['class'=> 'form-control', 'placeholder' => 'Nombre de usuario', 'required']) !!}
									</div>
									<div class="form-group">
										{!! Form::email('email' , null, ['class'=> 'form-control', 'placeholder' => 'Correo electronico', 'required']) !!}
									</div>
									<div class="form-group">
										{!! Form::password('password' ,  ['class'=> 'form-control', 'placeholder' => 'Contraseña', 'required']) !!}
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												{!! Form::submit('Registrar', ['class' => 'form-control btn btn-primary']) !!}
											</div>
										</div>
									</div>
								{!! Form::close() !!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/') }}/pnotify.js"></script>
    <script type="text/javascript" src="{{ asset('js/') }}/pnotify.buttons.js"></script>
    @include('laravelPnotify::notify')
<script type="text/javascript">
	$(function() {
	    $('#btnLogin').click(function(e) {
			$("#frLogin").removeClass('invisible');
	 		$("#frRegister").addClass('invisible');
			$('#btnRegister').removeClass('active');
			$(this).addClass('active');
			e.preventDefault();
		});
		$('#btnRegister').click(function(e) {
			$("#frRegister").removeClass('invisible');
	 		$("#frLogin").addClass('invisible');
			$('#btnLogin').removeClass('active');
			$(this).addClass('active');
			e.preventDefault();
		});
	});

</script>

</html>