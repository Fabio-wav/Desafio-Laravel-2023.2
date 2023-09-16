<div class="row">
    <div class="form-group col-sm-12 col-md-4">
        <label for="nome" class="required">Nome</label>
        <input type="text" name="nome" id="nome" autofocus class="form-control" value="{{ old('nome', $proprietario->nome ?? '') }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="email" class="required">E-mail</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $proprietario->email ?? '') }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="cpf" class="required">CPF</label>
        <input type="text" name="cpf" id="cpf" class="form-control" value="{{ old('cpf', $proprietario->cpf ?? '') }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="dataNascimento" class="required">Data de Nascimento</label>
        <input type="date" name="dataNascimento" id="dataNascimento" class="form-control" value="{{ old('dataNascimento', $proprietario->dataNascimento ?? '') }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="endereco" class="required">Endereço</label>
        <input type="text" name="endereco" id="endereco" class="form-control" value="{{ old('endereco', $proprietario->endereco ?? '') }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" class="form-control" value="{{ old('telefone', $proprietario->telefone ?? '') }}">
    </div>
  
</div>
