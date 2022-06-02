@csrf

{{--
<div class="col-md-4">
    <div class="form-group">
        <label for="countryCode">País</label>
        <select name="countryCode" id="countryCode" class="form-control" required>
            @if (isset($contact->countryCode))
                <option value="{{ $contact->countryCode }}" class="text-primary h6" selected>
                    {{ $contact->countryCode }}
                </option>
            @else
                <option disabled selected>selecione o código do País</option>
            @endif

            @foreach ($countries as $row)
                <option value="{{ $row->callingCodes }}">{{ $row->name . ' (' . $row->callingCodes . ')' }}</option>
            @endforeach


        </select>
    </div>

</div> --}}
<div class="col-md-8">
    <div class="form-group">
        <label for="number">Número de Telefone</label>
        <input type="number" class="form-control" placeholder="Número de Telefone" id="number" name="number"
            value="{{ isset($contact->number) ? $contact->number : old('number') }}" required />
    </div>
</div>
<div class="col-md-8">
    <div class="form-group">
        <label for="countryCode">codigo do pais</label>
        <input type="text" class="form-control" placeholder="codigo do pais" id="countryCode" name="countryCode"
            value="{{ isset($contact->countryCode) ? $contact->countryCode : old('countryCode') }}" required />
    </div>
</div>
