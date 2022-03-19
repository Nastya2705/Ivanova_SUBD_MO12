<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ __('crud.name') }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($supplier->name) ? $supplier->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">{{ __('crud.address') }}</label>
    <textarea class="form-control" rows="5" name="address" type="textarea" id="address" >{{ isset($supplier->address) ? $supplier->address : ''}}</textarea>
    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('telephone') ? 'has-error' : ''}}">
    <label for="telephone" class="control-label">{{ __('crud.telephone') }}</label>
    <input class="form-control" name="telephone" type="text" id="telephone" value="{{ isset($supplier->telephone) ? $supplier->telephone : ''}}" >
    {!! $errors->first('telephone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('inn') ? 'has-error' : ''}}">
    <label for="inn" class="control-label">{{ __('crud.inn') }}</label>
    <input class="form-control" name="inn" type="number" id="inn" value="{{ isset($supplier->inn) ? $supplier->inn : ''}}" max="1000000000"  max="9999999999" >
    {!! $errors->first('inn', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Изменить' : 'Создать' }}">
</div>
