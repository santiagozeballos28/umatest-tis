@extends('app')

@section('htmlheader_title')
   Home
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">GESTOR MATERIA</div>

                <div class="panel-body">
<div class="container">

    <h1>Editar Respuesta Multiple {{ $multiples_vario->id }}</h1>

    {!! Form::model($multiples_vario, [
        'method' => 'PATCH',
        'url' => ['/gestor_examenes/multiples_varios', $multiples_vario->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('respuesta') ? 'has-error' : ''}}">
                {!! Form::label('respuesta', 'Respuesta', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('respuesta', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('respuesta', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('correcta') ? 'has-error' : ''}}">
                {!! Form::label('correcta', 'Correcta', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('correcta', '1') !!} Yes</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('correcta', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('correcta', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

               <div class="form-group {{ $errors->has('pregunta_id') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('pregunta_id',$id_pregunta, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('pregunta_id', '<p class="help-block">:message</p>') !!}
                </div>
                </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</div>
  </div>
            </div>
        </div>
    </div>
</div>
@endsection