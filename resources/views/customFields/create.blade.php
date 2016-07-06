
<h1>Create Product</h1>
{!! Form::open(['url' => 'custom_fields']) !!}
<!--    <div class="form-group">
        {!! Form::label('FieldName', 'Field Name:') !!}
        {!! Form::text('fieldName',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('FieldType', 'Field Type:') !!}
        {!! Form::select('fieldType', array('text' => 'Text'), 'text') !!}
    </div>-->

<div id="customFieldsContainer">
    <div class="form-group">
        {!! Form::label('Entity', 'Entity:') !!}
        {!! Form::select('entityId', array('1' => 'Product'), '1') !!}
    </div>

    <div class="form-group customField">
        {!! Form::text('fieldName[]',null,['class'=>'form-control']) !!}
        {!! Form::select('fieldType[]', array('text' => 'Text'), 'text') !!}
        <button type="button" class="btn btn-default addButton">+</button>
    </div>
    
    
    <div class="form-group" id="customTemplate" style=" visibility: hidden">
        <div class="form-group customField">
            <input type="text" name="fieldName[]" class="form-control">
            <select name="fieldType[]">
                <option selected="selected" value="text">Text</option>
            </select> 
            <button type="button" class="btn btn-default removeButton">X</button>
        </div>
    </div>

</div>


<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}

<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="{!! asset('js/customFields.js') !!}"></script>