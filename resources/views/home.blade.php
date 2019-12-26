<!DOCTYPE html>
<html lang="en">

<head>
  <link href="{{asset('css/app.css')}}" rel="stylesheet" />
  <link href="{{asset('css/all.css')}}" rel="stylesheet" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FERME AGRICOLE</title>

  <!-- Bootstrap core CSS -->
</head>

<body>
<style>
<!--
body{
background-color: darkseagreen;
    margin: 5px;
    height: 90%;
    display: flex;
    flex-direction: column;
    align-items: center;
    font-size: 15px;
    color: #040404;
    font-family: unset;
     
}
.container{
    border: blue 1px solid; 
    width:100%;
   
}
h1{
    background-color:white;
}

</style>
<body>
<header>

<div><h1>GESTION DE FERME-AGRICOLE</h1></div>

</div>
</header>
<main>
<div class="container">
        <div class="row justify-content-center">
    
        
        <div class="profile-thumb">
        <img src="{{asset('/images/image.jpeg')}}" alt="" class="rounded-circle">
        </div>
                           
            <div class="col-10-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                    
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                
    

                                    @endif
                                </div>
                            </div>
                        </form>
                        
                        
                            </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</main>
</body>
</html>

