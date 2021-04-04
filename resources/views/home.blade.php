@extends('Layouts.app')


@section('title_block')
Глаявная страница
@endsection

@section('content')
<h1>Глаявная страница</h1>
@endsection

@section('aside')
  @parent
  <p>Дополнительный текст</p>
@endsection
