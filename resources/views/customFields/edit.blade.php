<h1>Create Product</h1>
{!! Form::model($customField,['method' => 'PATCH','route'=>['custom_fields.update',$customField->id]]) !!}
<div class="form-group">
    {!! Form::label('FieldName', 'Field Name:') !!}
    {!! Form::text('fieldName',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('FieldType', 'Field Type:') !!}
    {!! Form::select('fieldType', array('text' => 'Text'), 'text') !!}
</div>
<div class="form-group">
    {!! Form::label('Entity', 'Entity:') !!}
    {!! Form::select('entityId', array('1' => 'Product'), '1') !!}
</div>

<div class="form-group">
    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}