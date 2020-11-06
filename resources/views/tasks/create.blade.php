@extends('layouts.app')

@section('contents')
    

<h1>Todo 登録</h1>
@if (!empty($message))
    <p><b>{{ $message }}</b></p>
@endif
@if (!empty($errors) && count($errors) > 0)
    @foreach($errors->get('task') as $error)
        <p><b>{{ $error }}</b></p>
    @endforeach
@endif
<form action="{{ route('tasks.store') }}" method="post">
    @csrf
    <input type="text" name="task">
    <input type="submit" value="登録" />
</form>
<a href="{{ route('tasks.index') }}">一覧へ戻る</a>

@endsection