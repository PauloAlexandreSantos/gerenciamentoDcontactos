@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes da Pessoa')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('people.index') }}"><u>Listar Pessoas</u></a> > {{ $people->name }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="h3 m-4 page-title">{{ $people->name }}</h2>
                        <div class="row m-5 align-items-center">

                            <div class="col">
                                <div class="row align-items-center">

                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Email:</b><br>
                                            {{ $people->email }}
                                        </h5>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Avatar:</b>
                                        </h5>
                                        {!! html_entity_decode($people->avatar) !!}

                                    </div>




                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-7 mb-2">
                                        <hr>
                                        <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $people->created_at }}
                                        </p>
                                        <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $people->updated_at }}
                                        </p>

                                    </div>
                                    @if (null !== Auth::user())
                                        <div class="col-md-5 mb-2">
                                            <a href='{{ route('people.edit', $people->id) }}'
                                                class="dropdown-item">Editar</a>

                                            <a href='{{ route('people.delete', $people->id) }}' class="dropdown-item">
                                                Eliminar
                                            </a>
                                        
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>



                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->


        </div>
    </div>


    <a href="{{ route('contact.create', $people->id) }}">Adicionar Contacto</a>

@endsection
