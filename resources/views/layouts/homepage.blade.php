<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reborn Blog</title>
    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#content',
            setup: function (editor) {
                editor.on('click', function () {
                    $('#comment').show();
                });
            }
        });
    </script>
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
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="form-inline my-2 my-lg-0" width="26px">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-secondary my-2 my-sm-0"
                            type="submit">{{ __('header.search') }}</button>
                    </form>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('posts.create') }}"><i
                                    class="far fa-edit px-2"></i>{{ __('header.post') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#"><i
                                    class="fas fa-home px-2"></i>{{ __('header.home') }}</a>
                        </li>
                        @guest
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link text-light"><i class="fas fa-sign-in-alt px-2"></i>{{ __('header.sign_in') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link text-light"><i class="fas fa-user-plus px-2"></i>{{ __('header.register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('bookmarks.index') }}"><i
                                        class="fas fa-save px-2"></i>{{ __('header.saved') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#"><i
                                        class="fas fa-bell px-2"></i>{{ __('header.nortification') }}</a>
                            </li>
                            <li class="nav-item dropdown px-1">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{ showAvatar(auth()->user()->provider) }}" alt="" class="rounded-circle" width="26px" height="26px">
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('authors.show', ['id' => auth()->id()]) }}"><i
                                            class="fas fa-user px-2"></i>{{ __('header.profile') }}</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('users.edit', ['id' => auth()->user()->id]) }}"><i
                                            class="fas fa-cog px-2"></i>{{ __('header.setting') }}</a>
                                    <div class="dropdown-divider"></div>
                                    <div class="dropdown-item"><i class="fas fa-sign-out-alt px-2"
                                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"></i>{{ __('header.logout') }}</div>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
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
        </div>
    </header>
    <section>
        @yield('content')
    </section>
    {{-- Bootstrap JS --}}
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    {{-- FontAwesome JS --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css"
        integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">
    @yield('script')
</body>
</html>
