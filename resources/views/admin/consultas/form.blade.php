<div class="row">
    <div class="form-group col-sm-12 col-md-4">
        <label for="tratamento" class="required">Tratamento</label>
        <input type="text" name="tratamento" id="tratamento" autofocus class="form-control" value="{{ old('tratamento', $consulta->tratamento ?? '') }}">
    </div>

    
    
    <div class="form-group col-sm-12 col-md-4">
        <label for="custo">Custo</label>
        <input type="number" name="custo" id="custo" placeholder="000.00" class="form-control" step="0.01" value="{{ old('custo', $consulta->custo ?? '') }}">
    </div>    
    
    <div class="form-group col-sm-12 col-md-4">
        <label for="dataHoraInicio" class="required">Horario de Inicio</label>
        <input type="datetime-local" name="dataHoraInicio" id="dataHoraInicio" class="form-control" value="{{ old('dataHoraInicio', $consulta->dataHoraInicio ?? '') }}">
    </div>
    
    <div class="form-group col-sm-12 col-md-4">
        <label for="dataHoraFim" class="required">Horario de Termino</label>
        <input type="datetime-local" name="dataHoraFim" id="dataHoraFim" class="form-control" value="{{ old('dataHoraFim', $consulta->dataHoraFim ?? '') }}">
    </div>
    
  

    
    <div class="form-group col-md-4">
        <label for="inputAnimal" class="form-label">Animal</label>
        <select id="animal_id" class="form-select" name="animal_id">
            <option selected>Selecione...</option>
            @foreach ($animais as $animal)
                <option value="{{ $animal->id }}" {{ old('animal_id', $consulta->animal_id) == $animal->id ? 'selected' : '' }}>
                    {{ $animal->nome }}
                </option>
            @endforeach
        </select>
    </div>
    
    <div class="form-group col-sm-12 col-md-4">
        <label for="nasc" class="form-label"></label>
        <input type="hidden"  class="form-control" id="user_id" name="user_id" value="{{$users->nome}}" readonly>
    </div>
</div>
