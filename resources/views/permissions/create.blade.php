@extends('admin_template')

@section('page_title')
    Módulo Permisos
    <small>Administración global</small>
@endsection

@section('content')
    <div class='row'>
        <div class='col-md-12'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Creación de Permiso</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                {!! Form::open(array('url' => 'permissions', 'role' => 'form')) !!}
                <div class="box-body">

                    <div class="form-group">
                        {!! Form::label('name', 'Nombre') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Nombre del permiso']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('label', 'Etiqueta') !!}
                        {!! Form::text('label', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Etiqueta para el sitio ej.(Edición de módulo)']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('description', 'Descripción') !!}
                        {!! Form::text('description', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Descripción del permiso']) !!}
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <div class="pull-right">
                        {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
                        {!! Html::link('permissions', 'Cancelar', ['class' => 'btn btn-danger']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection