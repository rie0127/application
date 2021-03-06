<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    @include('menubar')
    <title>登録画面</title>
  </head>
  <body>
 　<table class="table">
 　  <tbody>
     <tr>
       <th scope="row">作品名</th>
       <td>{{ $unwatchanime->title }}</td>
     </tr>
     <tr>
       <th scope="row">日付</th>
       <td>{{ $unwatchanime->date }}</td>
     </tr>
     <tr>
        <th scope="row">メモ</th>
        <td>{{ $unwatchanime->feeling }}</td>
     </tr>
    </tbody>
　 </table>
　
　 <div class="row">
　 <div class="form-group">
　 <button class="btn btn-primary col-3" onclick="location.href='/animes/edit/unwatch/{{ $unwatchanime->id }}'">編集</button>
　 <form style="display:inline;" method="POST" action="{{ route('delete.unwatch' , $unwatchanime->id) }}">
    @csrf
　 <button type="submit" class="btn btn-primary col-3" onclick=>削除</button>
　 </form>
　 </div>
　 </div>
　 
　 

  </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</html>