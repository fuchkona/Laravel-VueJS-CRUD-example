@extends('layouts.main')

@section('content')

    <div class="hero is-fullheight">

        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title is-4">Восстановление пароля</h3>
                    <div class="box">
                        <form action="/password/reset" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="token" value="{{ $token }}">
                            <input type="hidden" name="email" value="{{ $email ?? old('email') }}">

                            <div class="field">
                                <div class="control">
                                    <input class="input is-medium" type="password" name="password" required="required" placeholder="Новый пароль">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-medium" type="password" name="password_confirmation" required="required" placeholder="Подтверждение нового пароля">
                                </div>
                            </div>

                            <button class="button is-block is-link is-fullwidth has-margin-bottom-20" name="commit">Сменить пароль</button>
                            <a href="/login" class="button is-block is-fullwidth has-margin-bottom-5">Вход в систему</a>
                            <a href="/register" class="button is-block is-fullwidth">Предварительная регистрация</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
