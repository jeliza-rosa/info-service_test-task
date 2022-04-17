@extends('layout.main')

@section('content')
    <div class="col-md-6">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            Форма обратной вязи
        </h3>

        @if ($errors->count())
            <div class="alert alert-danger mt-4">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error  }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/feedback">

            @csrf

            <div class="mb-3">
                <label for="inputName" class="form-label">Имя</label>
                <input type="text" class="form-control" id="inputName" placeholder="Введите имя" name="name" value="{{ old('name') }}">
            </div>

            <div class="mb-3">
                <label for="inputPhone" class="form-label">Номер телефона</label>
                <input type="phone" class="form-control" id="inputPhone" placeholder="+7 999 999 99 99" name="phone" value="{{ old('phone') }}">
            </div>

            <div class="mb-3">
                <label for="inputCompany" class="form-label">Компания</label>
                <input type="text" class="form-control" id="inputCompany" placeholder="Введите название компании" name="company" value="{{ old('company') }}">
            </div>

            <div class="mb-3">
                <label for="inputNameApp" class="form-label">Название заявки</label>
                <input type="text" class="form-control" id="inputNameApp" placeholder="Введите название заявки" name="name_application" value="{{ old('name_application') }}">
            </div>

            <div class="mb-3">
                <label for="inputMessage" class="form-label">Сообщение</label>
                <textarea class="form-control" id="inputMessage" placeholder="Введите название заявки" name="message">{{ old('message') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="inputFile" class="form-label">Файл</label>
                <input type="file" class="form-control" id="inputFile" placeholder="Загрузите файл" name="file">{{ old('file') }}
            </div>

            <button type="submit" class="btn btn-primary">Отправить заявку</button>
        </form>

    </div>

    <div class="col-md-6">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            Все заявки
        </h3>

        @isset($applications)
            <ul class="list-group">
                <div id="accordion">
                    @foreach($applications as $item)
                        <h3>Заявка №{{ $item->id }}</h3>
                        <div>
                            <ul>
                                <li>Имя: {{ $item->name }}</li>
                                <li>Номер телефона: {{ $item->phone }}</li>
                                <li>Компания: {{ $item->company }}</li>
                                <li>Название заявки: {{ $item->name_application }}</li>
                                <li>Сообщение: {{ $item->message }}</li>
                                <li>Файл: {{ $item->file }}</li>
                            </ul>
                        </div>
                    @endforeach
                </div>
            </ul>
        @endif
    </div>
@endsection
