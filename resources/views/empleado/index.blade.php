@extends('layouts.app')

@section('template_title')
    Empleados
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Empleados') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('empleados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >User Id</th>
									<th >Sector Id</th>
									<th >Nombre</th>
									<th >Apellido</th>
									<th >Direccion</th>
									<th >Telefono</th>
									<th >Email</th>
									<th >Cumple</th>
									<th >Puesto</th>
									<th >Sueldo</th>
									<th >Comision Vendedor</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empleados as $empleado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $empleado->user_id }}</td>
										<td >{{ $empleado->sector_id }}</td>
										<td >{{ $empleado->nombre }}</td>
										<td >{{ $empleado->apellido }}</td>
										<td >{{ $empleado->direccion }}</td>
										<td >{{ $empleado->telefono }}</td>
										<td >{{ $empleado->email }}</td>
										<td >{{ $empleado->cumple }}</td>
										<td >{{ $empleado->puesto }}</td>
										<td >{{ $empleado->sueldo }}</td>
										<td >{{ $empleado->comision_vendedor }}</td>

                                            <td>
                                                <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('empleados.show', $empleado->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('empleados.edit', $empleado->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $empleados->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
