@extends('Layouts.app')
@section('title_block')
Контакты
@endsection
@section('content')
<h1>Контакты</h1>
<form action="{{route('contact-form')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="name">Введите имя</label>
    <input class="form-control" id="name" name="name" placeholder="ВВедитя имя" type="text">
  </div>
  <div class="form-group">
    <label for="name">Введите e-mail</label>
    <input class="form-control" id="email" name="emao;" placeholder="ВВедитя email" type="text">
  </div>
  <div class="form-group">
    <label for="name">Введите тему</label>
    <input class="form-control" id="subject" name="subject" placeholder="ВВедитя тему" type="text">
  </div>

  <div class="form-group">
    <label for="name">Введите собщение</label>
    <textarea class="form-control" id="message" name="message" placeholder="ВВедитя тему" type="text">
    </textarea>
  </div>

  <div class="form-group">

    <button class="btn btn-success" type="submit"> Отправить
    </textarea>
  </div>

</form>

@endsection
