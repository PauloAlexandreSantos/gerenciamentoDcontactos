@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Paises')

@section('content')
    <div class="card mb-2">
        <div class="card-body">

            <h2 class="h5 page-title">
                Lista de Paises
            </h2>


        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table datatables table-hover table-bordered" id="dataTable-1">
                <thead class="bg-primary">
                    <tr class="text-center">

                        <th>NOME</th>
                        <th>PREFIXO</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($countries as $item)
                        @foreach ($contacts as $contact)
                            @foreach ($item->callingCodes as $value)
                                @if ($contact->countryCode == $value)
                                    <tr class="text-center text-dark">

                                        <td>{{ $item->name }} </td>
                                        <td>{{ $value }} </td>
                                    </tr>
                                @endif
                            @endforeach
                        @endforeach
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>



@endsection

@section('JS')
    <script>
        $('#dataTable-1').DataTable({
            autoWidth: true,
            "lengthMenu": [
                [8, 16, 32, -1],
                [8, 16, 32, "All"]
            ],
            "order": [
                [0, 'asc']
            ]
        });
    </script>
@endsection
