@extends('layouts.app')

@section('content')
    <div class="container">
        @if (count($doctors) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Доктора
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">

                        <!-- Заголовок таблицы -->
                        <thead>
                        <th>Имя доктора</th>
                        <th>&nbsp;</th>
                        </thead>

                        <!-- Тело таблицы -->
                        <tbody>
                        @foreach ($doctors as $doctor)
                            <tr>
                                <!-- Имя задачи -->
                                <td class="table-text">
                                    <div>{{ $doctor->name }}</div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <form action="{{route('doctors.create') }}" method="GET" class="form-horizontal">
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
    </div>
        @endif
{{--    </div>--}}
@endsection
