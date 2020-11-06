@extends('layouts.app')

@section('contents')

<body>
  <h1>Todoリスト</h1>
  @if (!empty($message))
  <p><b>{{ $message }}</b></p>
  @endif
  <a href="{{ route('tasks.index')
   }}">再読み込み</a>
  <a href="{{ route('tasks.create')
  }}">登録</a>
   @if (count($tasks) === 0)
   <p>Todoが登録されていません。</p>
@endif
<ul>
  @foreach($tasks as $task)
      <li>
          {{ $task->task }}
          <a href="{{ route('tasks.edit', ['task' => $task->id]) }}">更新</a>
          <form action="{{ route('tasks.destroy', [ 'task' => $task->id ]) }}" method="post">
              @csrf
              @method('delete')
              <input type="submit" value="削除" />
          </form>
      </li>
  @endforeach
</ul>

@endsection