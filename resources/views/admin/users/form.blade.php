<div class="row">
    <div class="form-group col-sm-12 col-md-4">
        <label for="name" class="required">Nome</label>
        <input type="text" name="name" id="name" autofocus class="form-control" value="{{ old('name', $user->name ?? '') }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="email" class="required">E-mail</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email ?? '') }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="endereco" class="required">Endereço</label>
        <input type="text" name="endereco" id="endereco" class="form-control" value="{{ old('endereco', $user->endereco ?? '') }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="dataNascimento" class="required">Data de Nascimento</label>
        <input type="date" name="dataNascimento" id="dataNascimento" class="form-control" value="{{ old('dataNascimento', $user->dataNascimento ?? '') }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="endereco" class="required">Endereço</label>
        <input type="text" name="endereco" id="endereco" class="form-control" value="{{ old('endereco', $user->endereco ?? '') }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="telefone">Fabio</label>
        <input type="text" name="telefone" id="telefone" class="form-control" value="{{ old('telefone', $user->telefone ?? '') }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="periodo">Periodo</label>
        <select id="periodo" name="periodo" class="form-select">
            <option selected>Selecione...</option>
            <option value="Manhã">Manhã</option>
            <option value="Tarde">Tarde</option>
            <option value="Noite">Noite</option>
        </select>
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="password" class="required">Senha </label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>
</div>
