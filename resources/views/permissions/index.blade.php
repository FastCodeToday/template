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
                    <h3 class="box-title">Listado de Permisos</h3>
                    <div class="box-tools pull-right">
                        {{Html::link('permissions/create', 'Crear Permiso', array('class' => 'btn-sm btn-primary'))}}
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
                        @foreach($permissions as $permission)
                            <tr>
                                <td>{{$permission->id}}</td>
                                <td>{{$permission->name}}</td>
                                <td>{{$permission->label}}</td>
                                <td>{{$permission->description}}</td>
                                <td>{{Html::link('permissions/'.$permission->id.'/edit', 'Editar', array('class' => 'btn-sm btn-success'))}}</td>
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