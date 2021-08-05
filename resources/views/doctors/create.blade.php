@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel-body">
            <!-- Отображение ошибок проверки ввода -->
        @include('common.errors')
        <!-- Форма новой задачи -->
            <form action="{{route('doctors.store') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Имя задачи -->
                <div class="form-group">
                    <label for="doctor_name" class="col-sm-3 control-label">Имя доктора</label>

                    <div class="col-sm-6">
                        <input type="text" name="name" id="doctor_name" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="doctor_email" class="col-sm-3 control-label">Мыло</label>

                    <div class="col-sm-6">
                        <input type="email" name="email" id="doctor_email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="doctor_pass" class="col-sm-3 control-label">Пароль</label>

                    <div class="col-sm-6">
                        <input type="password" name="pass" id="doctor_pass" class="form-control">
                    </div>
                </div>

                <!-- Кнопка добавления задачи -->
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-plus"></i> Добавить доктора
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
