<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    
    @include('menubar')
    <title>登録画面</title>
  </head>
  <body>
  
  　<form>
  　<div class="mb-3">
    <label>
    作品名
    </label>
    <input type="text" name="title">
 　 </div>
    <div>
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
 
 　<div class="mb-3">
    <label>
    日付
    <input type="date" name="date">
    </label>
 　 </div>
 　 
  <select class="form-select" aria-label="Default select example">
   　<option selected>選択してください</option>
   　<option value="1">1</option>
   　<option value="2">2</option>
   　<option value="3">3</option>
   　<option value="4">4</option>
   　<option value="5">5</option>
　</select>
　
　<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">感想</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
 　 
 　 <button type="submit" class="btn btn-primary">送信</button></button>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>