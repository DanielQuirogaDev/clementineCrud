@extends('[[custom_master]]')

@section('content')


<h2 class="page-header">[[model_uc]]</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        Añadir [[model_uc]]
    </div>

    <div class="panel-body">
                
        <form action="/[[route_path]]" method="POST" class="form-horizontal validate">
            {{ csrf_field() }}

            
            [[foreach:columns]]
            [[if:i.type=='text']]
            <div class="form-group">
                <label for="[[i.name]]" class="col-sm-3 control-label">[[i.display]]</label>
                <div class="col-sm-6">
                    <input type="text" name="[[i.name]]" id="[[i.name]]" required="true" class="form-control" value="">
                </div>
            </div>
            [[endif]]
            [[if:i.type=='number']]
            <div class="form-group">
                <label for="[[i.name]]" class="col-sm-3 control-label">[[i.display]]</label>
                <div class="col-sm-2">
                    <input type="number" name="[[i.name]]" id="[[i.name]]" required="true" class="form-control" value="">
                </div>
            </div>
            [[endif]]
            [[if:i.type=='date']]
            <div class="form-group">
                <label for="[[i.name]]" class="col-sm-3 control-label">[[i.display]]</label>
                <div class="col-sm-3">
                    <input type="date" name="[[i.name]]" id="[[i.name]]" required="true" class="form-control" value="">
                </div>
            </div>
            [[endif]]
            [[if:i.type=='unknown']]
            <div class="form-group">
                <label for="[[i.name]]" class="col-sm-3 control-label">[[i.display]]</label>
                <div class="col-sm-6">
                    <input type="text" name="[[i.name]]" id="[[i.name]]" required="true" class="form-control" value="">
                </div>
            </div>
            [[endif]]
            [[endforeach]]

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i> Guardar
                    </button> 
                    <a class="btn btn-default" href="{{ url('/[[route_path]]') }}"><i class="glyphicon glyphicon-chevron-left"></i> Volver</a>
                </div>
            </div>
        </form>

    </div>
</div>






@endsection