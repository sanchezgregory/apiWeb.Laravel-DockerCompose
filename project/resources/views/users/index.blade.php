@extends('layouts.app')

@section('content')
                <div class="panel-heading">
                    Lista de usuarios
                    <a class="pull-right" href="{{ route('users.create') }}">Agregar nuevo</a>
                </div>

                <div class="panel-body">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <td>
                                    Acciones
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
                        @foreach($users as $user)
                            <tr>
                                <td>
                                    <a href="{{ route('users.show', $user) }}">ver</a> |
                                    <a href="{{ route('users.edit', $user) }}">edit</a> |
                                    <a href="{{ route('users.delete', $user) }}">borrar</a>
                                </td>
                                <td>
                                    {{ $user->name }}
                                </td>
                                <td>
                                    {{ $user->email }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
@endsection
