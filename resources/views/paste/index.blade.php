@extends('layouts.app')
@section('content')
<a href="{{ route('paste.create') }}">Создать пост</a>
<div>
@foreach($posts as $post)
    <ul>
        <li>
            <a href="{{ route('paste.show',$post) }}">{{ $post->nameP }}</a>
            {{ $post->updated_at }}
        </li>
    </ul>
@endforeach
</div>
<h1>Создать</h1>
<form action="{{ route('paste.store') }}"  method="post">
    @csrf

    <input name="nameP" type="text"><br>
    <textarea name="code" placeholder="Введите код"></textarea>
    <input type="submit" value="создать пост">
</form>
@endsection
