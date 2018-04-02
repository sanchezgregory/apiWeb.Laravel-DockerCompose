@extends('layouts.app')

@section('content')

    <div class="panel-heading">
        Pagina personal del usuario
        <span class="pull-right">
            <a href="{{ route('users.edit', $user) }}">Editar usuario</a> | <a href="{{ route('users.delete', $user) }}">Borrar usuario</a>
        </span>
    </div>

    <div class="panel-body">
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

@endsection