<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todoapp</title>
</head>
<body>
  <div class="container">
    <div class="card">
      <p>Todo List</p>
      @if(count($errors)>0)
      <ul>
        @foreach($errors->all() as $error)
        <li>
          {{$error}}
        </li>
        @endforeach
      </ul>
      @endif
      <div class="todo">
        <form action="/todo/create" method="post">
          @csrf
          <input type="text" name="content" />
          <input type="submit" value="追加" />
        </form>
        <table>
          <tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
            @foreach($items as $item)
          <tr>
            <td>{{$item->created_at}}</td>
            <form action="{{ route('todo.update',['id' => $item->id]) }}" method="post">
              @csrf
              <td>
                <input type="text" value="{{$item->content}}" name="content" />
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            </form>
            <td>
              <form action="{{ route('todo.delete',['id' => $item->id])}}" method="post">
                @csrf
                <button class="button-delete">削除</button>
              </form>
            </td>
            </tr>
            @endforeach
        </table>
      </div>
  </div>
</div>

</body>
</html>