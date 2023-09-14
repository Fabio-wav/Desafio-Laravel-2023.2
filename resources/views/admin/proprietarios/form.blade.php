<div class="row">
    <div class="form-group col-sm-12 col-md-4">
        <label for="name" class="required">Nome </label>
        <input type="string" name="name" id="name" autofocus class="form-control" required value="{{ old('name', $proprietario->name) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="email" class="required">E-mail </label>
        <input type="email" name="email" id="email" class="form-control" required value="{{ old('email', $proprietario->email) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="cpf" class="required">CPF </label>
        <input type="string" name="cpf" id="cpf" class="form-control" required value="{{ old('cpf', $proprietario->cpf) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="data_nascimento" class="required">Data de Nascimento </label>
        <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" required value="{{ old('data_nascimento', $proprietario->data_nascimento) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="endereco" class="required">Endereço </label>
        <input type="string" name="endereco" id="endereco" class="form-control" required value="{{ old('endereco', $proprietario->endereco) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="telefone" class="required">Telefone </label>
        <input type="string" name="telefone" id="telefone" class="form-control" required value="{{ old('telefone', $proprietario->telefone) }}">
    </div>
    <label for="image" class="required">Foto </label>
    <input type="file" name="photo" id="photo" class="form-control-file">
</div>


    

