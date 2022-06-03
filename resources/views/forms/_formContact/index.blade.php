@csrf


<div class="col-md-4">
    <div class="form-group">
        <label for="countryCode">Prefixo do País</label>
        <select name="countryCode" id="countryCode" class="form-control" required>
            @if (isset($contact->countryCode))
                <option value="{{ $contact->countryCode }}" class="text-primary h6" selected>
                    {{ $contact->countryCode }}
                </option>
            @else
                <option disabled selected>selecione o prefixo do País</option>
            @endif

            @foreach ($countries as $row)
                @foreach ($row->callingCodes as $value)
                    <option value="{{ $value }}">{{ $row->name . ' (' . $value . ')' }}</option>
                @endforeach
            @endforeach


        </select>
    </div>

</div>
<div class="col-md-8">
    <div class="form-group">
        <label for="number">Número de Telefone</label>
        <input type="number" class="form-control" placeholder="Número de Telefone" id="number" name="number"
            value="{{ isset($contact->number) ? $contact->number : old('number') }}" required />
    </div>
</div>
