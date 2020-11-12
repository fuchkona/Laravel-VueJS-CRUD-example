@extends('layouts.main')


@section('content')
    <div class="hero is-fullheight">

        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-8 is-offset-2">
                    <div class="box">

                        <h3 class="title is-4">Регистрация</h3>

                        <form action="/register" accept-charset="UTF-8" method="post">
                            {{ csrf_field() }}

                            <div class="field is-horizontal">
                                <div class="field-label">
                                    <label class="label">ФИО</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="text" name="name" value="{{ old('name') }}" required="required" placeholder="Введите ФИО">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="field is-horizontal">
                                <div class="field-label">
                                    <label class="label">Электронная почта</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="email" name="email" value="{{ old('email') }}" required="required" placeholder="Введите адрес электронной почты">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="field is-horizontal">
                                <div class="field-label">
                                    <label class="label">Пароль</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="password" name="password" required="required">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="field is-horizontal">
                                <div class="field-label">
                                    <label class="label">Подтверждение пароля</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="password" name="password_confirmation" required="required">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <button class="button is-block is-link is-fullwidth m20btm" name="commit">Отправить</button>
                            <a href="/login" class="button is-block is-fullwidth m5btm">Вход в систему</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
