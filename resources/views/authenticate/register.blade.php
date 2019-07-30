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
                        <a href="{{ route('login') }}" class="nav-link text-light"><i class="fas fa-sign-in-alt px-2"></i>{{ __('header.sign_in') }}</a>
                    </li>
                    <li class="nav-item dropdown px-1">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown2" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-language px-2"></i>{{ __('language.language') }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <a class="dropdown-item" href="{{ route('language.change', ['locale' => 'en']) }}">{{ __('language.english') }}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('language.change', ['locale' => 'vi']) }}">{{ __('language.vietnamese') }}</a>
                        </div>
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
                                <h3 class="card-title font-weight-bold text-info text-uppercase">
                                        {{ __('authenticate.register') }}</h3>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="fullname" class="col-sm-3 col-form-label text-md-right"><i
                                            class="fas fa-user"></i></label>

                                    <div class="col-sm-6">
                                        <input id="fullname" type="text"
                                            class="form-control @error('fullname') is-invalid @enderror" name="fullname"  required autocomplete="name" autofocus placeholder="Fullname">

                                        @error('fullname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nickname" class="col-sm-3 col-form-label text-md-right"><i
                                            class="fas fa-user"></i></label>

                                    <div class="col-sm-6">
                                        <input id="nickname" type="text"
                                            class="form-control @error('nickname') is-invalid @enderror" name="nickname" required autocomplete="name" autofocus placeholder="Nickname">

                                        @error('nickname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 col-form-label text-sm-right"><i
                                            class="fas fa-envelope"></i>
                                    </label>

                                    <div class="col-sm-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" placeholder="Email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-sm-3 col-form-label text-sm-right"><i
                                            class="fas fa-lock"></i>
                                    </label>

                                    <div class="col-sm-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password" placeholder="Password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-sm-3 col-form-label text-sm-right"><i
                                            class="fas fa-redo"></i>
                                    </label>

                                    <div class="col-sm-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirm">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-sm-6 offset-sm-3">
                                        <button type="submit" class="btn btn-info btn-block">
                                            {{ __('Register') }}
                                        </button>
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
