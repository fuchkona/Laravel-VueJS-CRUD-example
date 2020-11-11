@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form class="simple_form password_reset" action="/password/reset" accept-charset="UTF-8" method="post">
                {{ csrf_field() }}
                <h2>Восстановление пароля</h2>
                <hr>
                <input type="hidden" name="token" value="{{ $token }}">
				<input type="hidden" name="email" value="{{ $email ?? old('email') }}">
                <div class="form-group row">
                    <label for="password" class="col-md-3 control-label">
                        <abbr title="нужно заполнить">*</abbr> Новый пароль
                    </label>

                    <div class="col-md-9">
                        <input id="password" type="password" class="form-control" name="password" >
                        
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-3 control-label">
                        <abbr title="нужно заполнить">*</abbr> Подтверждение
                    </label>
                    <div class="col-md-9">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >                        
                    </div>
                </div>
                
                
                <input type="submit" name="commit" value="Сменить пароль" class="btn btn-block" data-disable-with="Подождите, пожалуйста...">
                <a class="btn btn-info btn-block" href="/login">Вход в систему</a>
                <a class="btn btn-warning btn-block" href="/register">Предварительная регистрация</a>
            </form>
        </div>
      </div>
      


@endsection
