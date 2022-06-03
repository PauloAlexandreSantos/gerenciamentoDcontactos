
<nav class="topnav navbar navbar-light bg-white">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
                <i class="fe fe-sun fe-16"></i>
            </a>
        </li>

        @if (null !== Auth::user())
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="fe fe-user fe-16"></span>

                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('user.show', Auth::User()->id) }}">Perfil</a>
                    <a class="dropdown-item"
                        href="{{ route('user.edit', Auth::user()->id) }}">Configurações</a>
                    <a class="nav-link text-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Terminar a Sessão
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </div>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        @else
            <a href="{{ route('login') }}" class="btn btn-primary">Iniciar Sessão</a>
        @endif
    </ul>
</nav>

@if (null !== Auth::user())
    <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
            <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
            <!-- nav bar -->
            <div class="w-100  d-flex">
                <h3 class="mt-4">Gerenciamento <br>
                de Contactos
                </h3>
            </div>

            <ul class="navbar-nav flex-fill w-100 mb-2">
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Painel</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ route('home') }}">
                            <i class="fe fe-home fe-16"></i>
                            <span class="ml-3 item-text">Painel</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ route('people.index') }}">
                            <i class="fe fe-users fe-16"></i>
                            <span class="ml-3 item-text">Pessoas</span>
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ route('country.index') }}">
                            <i class="fe fe-globe fe-16"></i>
                            <span class="ml-3 item-text">   Contactos p/ País</span>
                        </a>
                    </li>
                </ul>




                {{-- Menu de Utilizadores --}}
                <p class="text-muted nav-heading mt-2 mb-1">
                    <span> Utilizadores</span>
                </p>
                <li class="nav-item dropdown">
                    <a href="#user" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                        <i class="fe fe-user-plus fe-16"></i>
                        <span class="ml-3 item-text"> Utilizadores</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100" id="user">

                        <li class="nav-item">
                            <a class="nav-link pl-3" href="{{ route('register') }}">
                                <span class="ml-1 item-text">Cadastrar Utilizador</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="{{ route('user.index') }}">
                                <span class="ml-1 item-text">Listar Utilizadores</span>
                            </a>
                        </li>
                    </ul>
                </li>




            </ul>

        </nav>
    </aside>
@endif
