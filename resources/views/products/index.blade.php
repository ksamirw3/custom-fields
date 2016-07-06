<h1>Products</h1>
 <a href="{{url('/products/create')}}" class="btn btn-success">Create Product</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>Title</th>
         <th>description</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($products as $product)
         <tr>
             <td>{{ $product->id }}</td>
             <td>{{ $product->title }}</td>
             <td>{{ $product->description }}</td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['products.destroy', $product->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

     </tbody>

 </table>