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
  
   <form class="form-horizontal">
  　
    <div class="mb-3 mt-5 pt-5">
    <label>作品名</label>
    <input type="text" name="title">
 　 </div>
 　 
    <div class="mb-3 pb-2">
    <label>カテゴリー</label>    
　   <select class="form-select" aria-label="Default select example">
 　    <option selected>選択してください。</option>
      <option value="1">SF/ファンタジー</option>
      <option value="2">ロボット/メカ</option>
 　  　<option value="3">アクションバトル</option>
 　　   <option value="4">コメディ/ギャグ</option>
 　 　<option value="5">恋愛/ラブコメ</option>
 　 　<option value="6">日常/ほのぼの</option>
 　　 <option value="7">スポーツ</option>
 　　 <option value="8">ホラー/サスペンス/推理</option>
 　　 <option value="9">歴史/戦記</option>
 　　 <option value="10">青春</option>
 　  </select>
 　 </div>
 
 　<div class="mb-3 pb-2">
    <label>日付</label>
    <input type="date" name="date">
 　</div>
 　 
 　<div class="mb-3 pb2">
    <label>評価</label>
   　 <select class="form-select" aria-label="Default select example">
   　　<option selected>選択してください</option>
   　　<option value="1">1</option>
   　　<option value="2">2</option>
   　　<option value="3">3</option>
   　　<option value="4">4</option>
   　　<option value="5">5</option>
　   </select>
 　</div>
　
　<div class="mb-3 pb-2">
    <label for="exampleFormControlTextarea1" class="form-label text-left">感想</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
 　 
 　 <button type="submit" class="btn btn-primary">送信</button></button>
  </form>
  </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</html>