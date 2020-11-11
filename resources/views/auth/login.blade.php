@extends('layouts.main')

@section('content')
    <div class="hero is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title is-4">Вход в систему</h3>
                    <div class="box">
                        <form action="/login" method="post">
                            {{ csrf_field() }}

                            <div class="field">
                                <div class="control">
                                    <input class="input is-medium" name="email" value="{{ old('email') }}" type="email" placeholder="Email адрес" autofocus="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-medium" type="password" name="password" placeholder="Пароль">
                                </div>
                            </div>
                            <div class="field">
                                <label class="checkbox">
                                    <input type="checkbox" name="remember">
                                    Оставаться в системе
                                </label>
                            </div>
                            <button class="button is-block is-link is-fullwidth has-margin-bottom-20" name="commit">Войти</button>
                            <a href="/register" class="button is-block is-fullwidth has-margin-bottom-5">Предварительная регистрация</a>
                            <a href="/password/reset" class="button is-block is-fullwidth">Восстановление пароля</a>
                        </form>
                    </div>
                    <p class="has-text-grey is-size-7 has-margin-bottom-10">
                        Если у вас возникли проблемы с авторизацией под своей учетной записью на сайте pos-it.ru, то
                        воспользуйтесь формой "<a href="/password/reset">восстановления пароля</a>".
                        В случае возниконовения проблем, напишите на почту в <a href="mailto:support@pos-it.ru">техподдержку</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
