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
      <form action="/todo/create" method="post">
      @csrf
      <input type="text" name="content" >
      <input type="submit" value="追加" >
      <tr>
        <th>作成日</th>
        <th>タスク名</th>
        <th>更新</th>
        <th>削除</th>
      </tr>
      @foreach($items as $item)
      <tr>
        <td>{{item->created/at}}</td>
        <form action="{{route('todo.update',['id' => $item->id])}}}" method="post">
          </form>
          @endforeach
      </tr>
    </form>
  </div>
</div>

</body>
</html>