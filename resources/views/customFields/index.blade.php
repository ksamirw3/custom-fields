<h1>Custom Fields</h1>
 <a href="{{url('/custom_fields/create')}}" class="btn btn-success">Create Custom Field</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>Field Name</th>
         <th>Field Type</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($customFields as $customField)
         <tr>
             <td>{{ $customField->id }}</td>
             <td>{{ $customField->fieldName }}</td>
             <td>{{ $customField->fieldType }}</td>
             <td><a href="{{route('custom_fields.edit',$customField->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['custom_fields.destroy', $customField->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

     </tbody>

 </table>