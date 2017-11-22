<!DOCTYPE html>
<html>
<head>
	<title>Dek-Horfood-Register</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="" href="img/icon.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/master.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	@include('layouts.nav')
	<div class="container">
		<br>
		<div style="text-align: center;"><h4>Register</h4></div>
		<hr>
		<form class="form-horizontal" method="POST" action="{{ route('register') }}">
        	{{ csrf_field() }}
        	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        	    <label for="name" class="col-md-4 control-label">Name</label>
        	    <div class="col-md-6">
        	        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
        	        @if ($errors->has('name'))
        	            <span class="help-block">
        	                <strong>{{ $errors->first('name') }}</strong>
        	                </span>
        	            @endif
        	        </div>
        	    </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>
					<div class="form-group">
						<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

						<div class="col-md-6">
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-primary">
								Register
							</button>
						</div>
					</div>
            </form>
		</div>
	</div>
</body>
</html>