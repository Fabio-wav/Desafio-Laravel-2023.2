<div class="row">
    <div class="form-group col-sm-12 col-md-4">
        <label for="nome" class="required">Nome</label>
        <input type="text" name="nome" id="nome" autofocus class="form-control" value="{{ old('nome', $animal->nome ?? '') }}">
    </div>
    

    <div class="form-group col-sm-12 col-md-4">
        <label for="proprietario_id" class="required">Data de Nascimento</label>
        <input type="date" name="dataNascimento" id="dataNascimento" class="form-control" value="{{ old('dataNascimento', $animal->dataNascimento ?? '') }}">
    </div>

    <div class="form-group col-sm-12 col-md-4">
        <label for="raca">Raça</label>
        <input type="text" name="raca" id="raca" class="form-control" value="{{ old('raca', $animal->raca ?? '') }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="tratamentosRealizados">Tratamentos Realizados</label>
        <input type="text" name="tratamentosRealizados" id="tratamentosRealizados" class="form-control" value="{{ old('tratamentosRealizados', $animal->tratamentosRealizados ?? '') }}">
    </div>
    <div class="col-md-4">
        <label for="inputProprietario" class="form-label">Proprietário</label>
        <select id="proprietario_id" class="form-select" name="proprietario_id">
            <option selected>Selecione...</option>
            @foreach ($proprietarios as $proprietario)
                <option value="{{ $proprietario->id }}" {{ old('proprietario_id', $animal->proprietario_id) == $proprietario->id ? 'selected' : '' }}>
                    {{ $proprietario->nome.' ('.$proprietario->cpf.')' }}
                </option>
            @endforeach
        </select>
    </div>
</div>
