
<div class="col-md-6">
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" value="{{ isset($people->name) ? $people->name : old('name') }}"
            class="form-control border-secondary" placeholder="Nome" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-6">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email"
            value="{{ isset($people->email) ? $people->email : old('email') }}"
            class="form-control border-secondary" placeholder="Email" required>
    </div>
</div> <!-- /.col -->

