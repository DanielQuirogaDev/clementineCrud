@extends('[[custom_master]]')

@section('content')


<h2 class="page-header">{{ ucfirst('[[model_plural]]') }}</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        Listado de {{ ucfirst('[[model_plural]]') }}
    </div>

    <div class="row">
    <div class="col-md-12">
        <div class="panel-group joined" id="accordion-test-2">
            <div class="panel panel-default panel-padding">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseOne-2">
                            [[model_plural]]
                        </a>
                    </h4>
                </div>
                <div id="collapseOne-2" class="panel-collapse collapse in">
                    <div class="panel-body">

                        <table class="table table-bordered table-striped datatable" id="table-2">
              <thead>
                <tr>
                    [[foreach:columns]]
                    <th>[[i.display]]</th>
                     

                    [[endforeach]]
                    <th>editar</th>
                     <th>ver Detalles</th>
                      <th>Eliminar</th>

                  
                </tr>
              </thead>

                                     
               <tbody>

                 @foreach($indexes as $index)
                                <tr>

                    [[foreach:columns]]

                <td>{{$index->[[i.name]]}}</td>

                    [[endforeach]]
                                    <th><a href="/[[model_plural]]/{{$index->id}}/edit">editar</a></th>
                                    <th><a href="/[[model_plural]]/{{$index->id}}">ver Detalles</a></th>
                                    <td><form action="/[[model_plural]]/{{ $index->id }}" method="post">
                                            {{ csrf_field() }}

                                            {{ method_field('delete') }}
                                            <button class="btn btn-default" type="submit">Eliminar</button></td>
                                                    </tr>

                                @endforeach






              </tr></tr></tbody></table>            {{ $indexes->links() }}

</div><div>        <a href="{{url('[[model_plural]]/create')}}" class="btn btn-primary" role="button">Añadir zona</a>
    </div></div></div></div></div></div>





@endsection

