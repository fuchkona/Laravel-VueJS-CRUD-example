@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form class="simple_form password_reset" action="/password/email" accept-charset="UTF-8" method="post">
                {{ csrf_field() }}
                <h2>Восстановление пароля</h2>
                <hr>
                <div class="form-group row email required password_reset_email">
                    <div class="col-md-2">
                        <label class="email required control-label" for="password_reset_email">
                            <abbr title="нужно заполнить">*</abbr> Почта
                        </label>
                    </div>
                    <div class="col-md-10">
                        <input class="string email required form-control form-control" required="required" aria-required="true" type="email" name="email" id="password_reset_email" value="{{ old('email') }}">
                    </div>
                </div>
                <input type="submit" name="commit" value="Восстановить пароль" class="btn btn-block" data-disable-with="Подождите, пожалуйста...">
                <a class="btn btn-info btn-block" href="/login">Вход в систему</a>
                <a class="btn btn-warning btn-block" href="/register">Предварительная регистрация</a>
            </form>
        </div>
      </div>
      



@endsection
