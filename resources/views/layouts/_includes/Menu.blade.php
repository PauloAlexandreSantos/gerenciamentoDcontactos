
@if (null !== Auth::user())
<a class="dropdown-item" href="{{ route('user.show', Auth::User()->id) }}">Perfil</a>
<a class="dropdown-item" href="{{ route('user.edit', Auth::user()->id) }}">Configurações</a>
<a class="nav-link text-danger" href="{{ route('logout') }}"
    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Terminar a Sessão
    <i class="fas fa-sign-out-alt"></i>
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
</form>


   
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
@endif
