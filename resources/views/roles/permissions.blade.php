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

                    <h3 class="box-title">Permisos del rol {{$role->label}}</h3>
                    <div class="col-md-5 pull-right">

                        {!! Form::open(array('url' => 'roles/role_permissions')) !!}
                        <div class="col-md-6">
                            {{ Form::select('permission', $permissions, null, ['class' => 'form-control']) }}
                            {{ Form::hidden('role_id', $role->id) }}
                        </div>
                        <div class="col-md-6">
                            {!! Form::submit('Asignar', ['class' => 'btn btn-primary']) !!}
                            {!! Html::link('roles', 'Cancelar', ['class' => 'btn btn-danger']) !!}
                        </div>
                        {!! Form::close() !!}


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
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($role->permissions as $permission)
                            <tr>
                                <td>{{$permission->id}}</td>
                                <td>{{$permission->name}}</td>
                                <td>{{$permission->label}}</td>
                                <td>{{$permission->description}}</td>
                                <td>
                                    {!! Form::open(array('url' => 'roles/role_permissions_delete')) !!}

                                    {{ Form::hidden('role_id', $role->id) }}
                                    {{ Form::hidden('permission_id', $permission->id) }}

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
                    <div class="pull-right">
                </div>
                </div>
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection