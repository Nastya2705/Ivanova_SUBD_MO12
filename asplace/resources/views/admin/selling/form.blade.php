<div class="form-group {{ $errors->has('product_id') ? 'has-error' : ''}}">
    <label for="product_id" class="control-label">{{ __('tables.product') }}</label>
    <input class="form-control" name="product_id" type="number" id="product_id" value="{{ isset($selling->product_id) ? $selling->product_id : ''}}" >
    {!! $errors->first('product_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date_sale') ? 'has-error' : ''}}">
    <label for="date_sale" class="control-label">Дата продажи</label>
    <input class="form-control" name="date_sale" type="date" id="date_sale" value="{{ isset($selling->date_sale) ? $selling->date_sale : ''}}" >
    {!! $errors->first('date_sale', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">Сотрудник</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($selling->user_id) ? $selling->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Изменить' : 'Создать' }}">
</div>
