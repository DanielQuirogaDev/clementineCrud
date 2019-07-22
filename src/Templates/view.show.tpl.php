@extends('[[custom_master]]')

@section('content')



<h2 class="page-header">[[model_uc]]</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        Ver [[model_uc]]
    </div>

    <div class="panel-body">
                

        [[foreach:columns]]
        <div class="row col-md-12">
        <div class="form-group">
            <label for="[[i.name]]" class="col-sm-3 control-label">[[i.display]]</label>
            <div class="col-sm-6">
                <input type="text" name="[[i.name]]" id="[[i.name]]" class="form-control" value="{{$show->[[i.name]]}}" readonly="readonly">
            </div>
        </div>
                </div>

        [[endforeach]]

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <a class="btn btn-default" href="{{ url('/[[route_path]]') }}"><i class="glyphicon glyphicon-chevron-left"></i> Volver</a>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <a class="btn btn-default" href="/[[model_plural]]/{{$show->id}}/edit"><i class="glyphicon glyphicon-chevron-left"></i> Editar</a>
            </div>
        </div>

        </form>

    </div>
</div>







@endsection