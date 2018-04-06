@extends('layouts.app')

@section('content')
    <div class="panel-heading">Realmente desea eliminar al usuario?:</div>

    <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ route('users.destroy', $user) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Name</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" readonly value="{{ $user->name }}"  autofocus>

                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" readonly  value="{{ $user->email }}" >

                </div>
            </div>

            <div class="form-group">
                <label for="role" class="col-md-4 control-label">Rol de usuario</label>
                <div class="col-md-6">
                    <input id="role" type="text" class="form-control" name="role" readonly value="{{ $user->role->name }}" >

                </div>
            </div>


            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-danger">
                        Borrar
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
