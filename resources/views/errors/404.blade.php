@extends('layouts.layout', ['title' => '404. Страница не найдена'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h1>Страница не найдена</h1></div>
                <div class="card-body">
                    <div class="card-img card-img__max" style="background-image: url('img/404.jpg')"></div>
                    <a href="{{ route('post.index') }}" class="btn btn-outline-primary">Вернуться на главную</a>
                </div>
            </div>
        </div>
    </div>
@endsection