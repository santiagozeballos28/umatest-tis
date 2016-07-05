  @extends('app')

@section('htmlheader_title')
   CURSOS
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">GESTOR DE EXAMENES</div>
                <div class="panel-body">
<div class="container">

    <h1>Examen </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID.</th><td>{{ $examan->id }}</td>
                </tr>
                <tr><th> {{ trans('examen.nombre_examen') }} </th><td> {{ $examan->nombre_examen }} </td></tr><tr><th> {{ trans('examen.estado_examen') }} </th><td> {{ $examan->estado_examen }} </td></tr><tr><th> {{ trans('examen.fecha_examen') }} </th><td> {{ $examan->fecha_examen }} </td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <a href="{{ url('/gestor_examenes/examen/' . $examan->id . '/update/'.$id_curso.'/edit') }}" class="btn btn-primary btn-xs" title="Edit Examan"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['gestor_examenes/examen', $examan->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Examan',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

</div>
 </div>
            </div>
        </div>
    </div>
</div>
@endsection