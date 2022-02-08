<?php
var_dump($_POST);
?>

<!DOCTYPE>
<html lang="ja">
<head>
<title>お問い合わせフォーム</title>
<link rel="stylesheet" href="/form/css/style.css">

<body>
  <article class="index">
    <h1 class="title">お問い合わせフォーム</h1>
    <!-- フォームに入力したデータがform要素のaction属性に指定したURLへ送信 -->
    <form method="post" action="">
      <div class="element_wrap">
        <label>名前</label>
        <input type="text" name="name" id="name" value="">
      </div>
      <div class="element_wrap">
        <label>メールアドレス</label>
        <input type="text" name="email" id="email" value="">
      </div>
      <input type="submit" name="confirm" value="確認">
    </form>
  </article>
</body>
</html>