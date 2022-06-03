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
                                            <b>Email: </b>
                                            {{ $people->email }}
                                        </h5>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Avatar:</b>
                                        </h5>

                                        <div class="col-md-2">
                                            {!! html_entity_decode($people->avatar) !!}

                                        </div>

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
                                        <div class="col-md-5 mb-2 text-end text-right">

                                            <a href='{{ route('people.edit', $people->id) }}'
                                                class="btn btn-primary px-5">Editar</a>

                                            <a href='{{ route('people.delete', $people->id) }}'
                                                class="btn btn-danger px-5">
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



    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="row my-3">
                <div class="col-md-6">
                    <h2 class="h5 page-title">
                        Contactos
                    </h2>
                </div>
                <div class="col-md-6 text-end text-right">
                    <a href="{{ route('contact.create', $people->id) }}" class="btn btn-primary">Adicionar Contacto</a>
                </div>
            </div>

            <table class="table datatables table-hover table-bordered" id="dataTable-1">
                <thead class="bg-primary">
                    <tr class="text-center">

                        <th>CÓDIGO</th>
                        <th>TELEFONE</th>
                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($people->contacts as $item)
                        <tr class="text-center text-dark">

                            <td>{{ $item->countryCode }} </td>
                            <td>{{ $item->number }} </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                        @if (null !== Auth::user())
                                            <a href='{{ route('contact.edit', $item->id) }}'
                                                class="dropdown-item">Editar</a>

                                            <a href='{{ route('contact.delete', $item->id) }}'
                                                class="dropdown-item bg-danger text-white">
                                                Eliminar
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
