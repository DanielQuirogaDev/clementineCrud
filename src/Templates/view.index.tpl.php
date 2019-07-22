@extends('[[custom_master]]')

@section('content')


<h2 class="page-header">{{ ucfirst('[[model_plural]]') }}</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        Listado de {{ ucfirst('[[model_plural]]') }}
    </div>

    <div class="panel-body">
        <div class="">
            <table class="table table-striped" id="thegrid">
              <thead>
                <tr>
                    [[foreach:columns]]
                    <th>[[i.display]]</th>
                     

                    [[endforeach]]
                    <th>editar</th>
                     <th>ver Detalles</th>
                    <th style="width:50px"></th>
                    <th style="width:50px"></th>
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






              </tbody>

            </table>
            {{ $indexes->links() }}

        </div>
        <a href="{{url('[[route_path]]/create')}}" class="btn btn-primary" role="button">Añadir [[model_singular]]</a>
    </div>
</div>




@endsection

