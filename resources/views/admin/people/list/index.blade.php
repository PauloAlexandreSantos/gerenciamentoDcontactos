@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Pessoas')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="h5 page-title">
                        Lista de Pessoas
                    </h2>
                </div>
                <div class="col-md-6 text-end text-right">
                     <a href="{{ route('people.create') }}" class="btn btn-primary">Cadastrar Pessoa</a>
                </div>
            </div>

        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table datatables table-hover table-bordered" id="dataTable-1">
                <thead class="bg-primary">
                    <tr class="text-center">

                        <th>NOME</th>
                        <th>EMAIL</th>
                        <th>AVATAR</th>
                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($peoples as $item)
                        <tr class="text-center text-dark">

                            <td>{{ $item->name }} </td>
                            <td>{{ $item->email }} </td>
                            <td width="2px">{!! html_entity_decode($item->avatar) !!}</td>

                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href='{{ route('people.show', $item->id) }}'
                                            class="dropdown-item">Detalhes</a>
                                        @if (null !== Auth::user())
                                            <a href='{{ route('people.edit', $item->id) }}'
                                                class="dropdown-item">Editar</a>

                                            <a href='{{ route('people.delete', $item->id) }}' class="dropdown-item">
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
