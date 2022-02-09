<?php
var_dump($_POST);

// 変数の初期化
$page_flag = 0;

//空じゃなかったら
if( !empty($_POST['confirm']) ) {
  //1を代入
	$page_flag = 1;
  
} elseif( !empty($_POST['submit']) ) {
  //2を代入
	$page_flag = 2;
}
?>

<!DOCTYPE>
<html lang="ja">
<head>
<title>お問い合わせフォーム</title>
<link rel="stylesheet" href="/form/css/style.css">

<body>
  <article class="index">
    <h1 class="title">お問い合わせフォーム</h1>
    
    <!-- フラグが1なら -->
    <?php if( $page_flag === 1 ): ?>
      <form method="post" action="">
        <div class="element_wrap">
          <label>名前</label>
          <p><?php echo $_POST['name']; ?></p>
        </div>
        <div class="element_wrap">
          <label>メールアドレス</label>
          <p><?php echo $_POST['email']; ?></p>
        </div>
        <input type="submit" name="back" value="戻る">
        <input type="submit" name="submit" value="送信">
        
        <!-- 値の受け渡し -->
        <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
      </form>
      
      <!-- フラグが2なら -->
      <?php elseif( $page_flag === 2 ): ?>
        <p>送信が完了しました。</p>

      <!-- フラグが0なら -->
      <?php else: ?>
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
    <?php endif; ?>
  </article>
</body>
</html>