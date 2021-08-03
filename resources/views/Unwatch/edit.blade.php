<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    @include('menubar')
    <title>編集画面</title>
  </head>
  <body>
  <form method="POST" action="{{route('update.unwatch', [ 'anime'=> $unwatchanime->id ])}}">
    @csrf
    @method('PUT')
       <!-- <div class="mb-3 mt-5 pt-5">-->
       <!--   　<label for="inputName" class="form-label">作品名</label>-->
       <!--     <input type="string" class="form-control" id="inputname" name="anime[title]" value="{{ $unwatchanime->title }}"/>-->
       <!--   　<p class="title__error" style="color:red">{{ $errors->first('anime.title') }}</p>-->
       <!-- </div>-->
       <!-- <div class="mb-3 pb-2">-->
       <!--     <label>日付</label>-->
       <!--     <input type="date" name="anime[date]" value="{{ $unwatchanime->date }}"/>-->
       <!--     <p class="date__error" style="color:red">{{ $errors->first('anime.date') }}</p>-->
     　 <!--</div>-->
        <div class="mb-3">
            <label for="inputText" class="form-label">メモ</label>
            <textarea class="form-control" id="inputText" name="anime[feeling]" rows="3" >{{ $unwatchanime->feeling }}</textarea>
            <p class="feeling__error" style="color:red">{{ $errors->first('anime.feeling') }}</p>
        </div>
       <button type="submit" class="btn btn-primary">更新</button>
  </form>
  </body>
 </html>