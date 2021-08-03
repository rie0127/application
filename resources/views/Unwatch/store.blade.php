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
  <form method="POST" action="{{ route('store.unwatch') }}">
    @csrf
   
   <div class="mb-3 mt-5 pt-5">
  　<label for="inputName" class="form-label">作品名</label>
  　<input type="string" class="form-control" id="inputname" name="anime[title]">
  　<p class="title__error" style="color:red">{{ $errors->first('anime.title') }}</p>
   </div>
   <div class="mb-3 pb-2">
    <label>日付</label>
    <input type="date" name="anime[date]">
    <p class="date__error" style="color:red">{{ $errors->first('anime.date') }}</p>
 　</div>
   <div class="mb-3">
    <label for="inputText" class="form-label">メモ</label>
    <textarea class="form-control" id="inputText" name="anime[feeling]" value="{{ old('anime.feeling') }}"rows="3" ></textarea>
    <p class="feeling__error" style="color:red">{{ $errors->first('anime.feeling') }}</p>
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