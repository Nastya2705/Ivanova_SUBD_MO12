<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ __('crud.name') }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($product->name) ? $product->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('product_number') ? 'has-error' : ''}}">
    <label for="product_number" class="control-label">Код товара</label>
    <input class="form-control" name="product_number" type="text" id="product_number" value="{{ isset($product->product_number) ? $product->product_number : ''}}" >
    {!! $errors->first('product_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('color') ? 'has-error' : ''}}">
    <label for="color" class="control-label">Цвет </label>
    <input class="form-control" name="color" type="text" id="color" value="{{ isset($product->color) ? $product->color : ''}}" >
    {!! $errors->first('color', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
    <label for="category_id" class="control-label">{{ __('tables.category') }}</label>
    <input class="form-control" name="category_id" type="number" id="category_id" value="{{ isset($product->category_id) ? $product->category_id : ''}}" >
    {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('supplier_id') ? 'has-error' : ''}}">
    <label for="supplier_id" class="control-label">{{ __('tables.supplier') }}</label>
    <input class="form-control" name="supplier_id" type="number" id="supplier_id" value="{{ isset($product->supplier_id) ? $product->supplier_id : ''}}" >
    {!! $errors->first('supplier_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date_release') ? 'has-error' : ''}}">
    <label for="date_release" class="control-label">Дата изготовления</label>
    <input class="form-control" name="date_release" type="date" id="date_release" value="{{ isset($product->date_release) ? $product->date_release : ''}}" >
    {!! $errors->first('date_release', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('warranty_period_months') ? 'has-error' : ''}}">
    <label for="warranty_period_months" class="control-label">Срок гарантии (месяцев)</label>
    <input class="form-control" name="warranty_period_months" type="number" id="warranty_period_months" value="{{ isset($product->warranty_period_months) ? $product->warranty_period_months : ''}}" >
    {!! $errors->first('warranty_period_months', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="control-label">Цена, руб.</label>
    <input class="form-control" name="price" type="number" id="price" value="{{ isset($product->price) ? $product->price : ''}}" >
    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('in_stock') ? 'has-error' : ''}}">
    <label for="in_stock" class="control-label">Остаток на складе, шт.</label>
    <input class="form-control" name="in_stock" type="number" id="in_stock" value="{{ isset($product->in_stock) ? $product->in_stock : ''}}" >
    {!! $errors->first('in_stock', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">Описание</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($product->description) ? $product->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Изменить' : 'Создать' }}">
</div>
