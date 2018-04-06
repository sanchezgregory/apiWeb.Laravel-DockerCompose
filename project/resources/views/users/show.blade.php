@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-users"></i> Ver usuario</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <a href="{{ route('users.index') }}" class="btn btn-sm btn-outline-secondary"> <i class="fas fa-undo"></i> Volver</a>
            </div>
            <div class="btn-group mr-2">
                <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-outline-secondary"> <i class="fas fa-undo"></i> Editar</a>
            </div>
        </div>
    </div>
    <div class="media text-muted pt-3 align-content-center" >
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-6 offset-md-1 alert light-info">

                    <table class="table table-responsive">
                        <thead>
                        <tr>
                            <td>
                                Rol
                            </td>
                            <td>
                                Usuario
                            </td>
                            <td>
                                Email
                            </td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                {{ $user->role->name }}
                            </td>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                {{ $user->email }}
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection