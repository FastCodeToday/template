@extends('admin_template')

@section('page_title')
    Módulo Roles
    <small>Administración global</small>
@endsection

@section('content')
    <div class='row'>
        <div class='col-md-12'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Listado de Roles</h3>
                    <div class="box-tools pull-right">
                        {{Html::link('roles/create', 'Crear Role', array('class' => 'btn-sm btn-primary'))}}
                    </div>
                </div>
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Etiqueta</th>
                            <th>Descripción</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <td>{{$role->id}}</td>
                                <td>{{$role->name}}</td>
                                <td>{{$role->label}}</td>
                                <td>{{$role->description}}</td>
                                <td>
                                    {!! Form::model($role, ['method' => 'DELETE', 'url' => 'roles/' . $role->id, 'class' => 'btn-delete']) !!}
                                    {{Html::link('roles/'.$role->id.'/edit', 'Editar', array('class' => 'btn btn-primary btn-xs'))}}
                                    {{Html::link('roles/'.$role->id.'/permissions', 'Permisos', array('class' => 'btn btn-success btn-xs'))}}
                                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-xs']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">

                </div><!-- /.box-footer-->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection