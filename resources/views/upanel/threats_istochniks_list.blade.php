@extends('upanel.app')

@section('headURL')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Главная</li>
        <li class="breadcrumb-item active" aria-current="page">Список источников угроз</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-success" href="{{ url('/usp/treatsistochniklist/manager/0') }}"
                       role="button">Добавить запись</a>
                    <h5 class="card-title">Список источников угроз</h5>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Название</th>
                            <th>Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datas as $data)
                            <tr>
                                <th scope="row">{{$data->id}}</th>
                                <td>{{$data->NameIstocjnik}}</td>
                                <td><a class="btn btn-info"
                                       href="{{ url('/usp/treatsistochniklist/manager/'.$data->id)  }}"
                                       role="button">Изменить</a>
                                    /
                                    <a class="btn btn-danger"
                                       href="{{ url('/usp/treatsistochniklist/delete/'.$data->id)  }}"
                                       role="button">Удалить</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection