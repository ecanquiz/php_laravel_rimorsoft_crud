<!--
  <div class="form-group">
  {//!! Form::label('name', 'Nombre del producto') !!}
  {//!! Form::text('name', null, ['class' => 'form-control']) !!}
  <div class="form-group">
-->

<div class="form-group">
  <label for="name">Nombre del producto</label>
  <input type="text" 
    name="name"
    class="form-control"
    value="{{ isset($product) ? old('name', $product->name) : '' }}"/>
</div>

<div class="form-group">
  <label for="short">Descripción breve del producto</label>
  <input type="text"
    name="short"
    class="form-control"
    value="{{ isset($product) ? old('short', $product->short) : '' }}"/>
</div>

<div class="form-group">
  <label for="body">Descripción del producto</label>
  <textarea name="body" class="form-control">{{ isset($product) ? old('body', $product->body) : '' }}</textarea>
</div>

<div class="form-group">
  <button name="submit" class="btn btn-primary">Enviar</button>
</div>
