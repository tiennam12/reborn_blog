<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reborn Blog</title>
    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-dark navbar-expand-sm bg-dark">
            <div class="container">
                <div class="menu-left">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <i class="fab fa-redhat px-2 text-danger"></i>Reborn
                    </a>
                </div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link text-light"><i class="fas fa-user-plus px-2"></i>{{ __('header.register') }}</a>
                    </li>                
                </ul>
            </div>
        </nav>
    </header>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <div class="card border-light text-center">
                        <div class="card-body">
                            <h3 class="card-title font-weight-bold text-success text-uppercase">
                                {{ __('authenticate.login') }}</h3>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group row justify-content-center">
                                    <div class="col-sm-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus
                                            placeholder="Email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-sm-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password" placeholder="Password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-sm-6">
                                        <button type="submit"
                                            class="btn btn-success btn-block">{{ __('authenticate.login') }}</button>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-sm-6">
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif
                                        <div class="dropdown-divider"></div>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-sm-2 px-1">
                                        <a href="{{ url('/login/facebook') }} " class="text-decoration-none"><button type="button"
                                                class="btn btn-primary btn-block font-weight-bold"><i
                                                    class="fab fa-facebook-f"></i>{{ __('authenticate.facebook') }}</button></a>
                                    </div>
                                    <div class="col-sm-2 px-1">
                                        <a href="{{ url('/login/google') }}" class="text-decoration-none"><button type="button"
                                                class="btn btn-danger btn-block font-weight-bold"><i
                                                    class="fab fa-google"></i>
                                                {{ __('authenticate.google') }}
                                            </button></a>
                                    </div>
                                    <div class="col-sm-2 px-1">
                                        <a href="{{ url('/login/github') }}" class="text-decoration-none"><button type="button"
                                                class="btn btn-secondary btn-block font-weight-bold"><i
                                                    class="fab fa-github"></i>
                                                {{ __('authenticate.github') }}
                                            </button></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Bootstrap JS --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    {{-- FontAwesome JS --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css"
        integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">
</body>

</html>
