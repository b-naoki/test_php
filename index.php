<?php
// SimpleClass.php
class SimpleClass {
    // プロパティの定義
    public $message;

    // コンストラクタ
    public function __construct($msg) {
        $this->message = $msg;
    }

    // メソッド
    public function displayMessage() {
        return $this->message;
    }
}

// クラスのインスタンスを作成
$instance = new SimpleClass("こんにちは、PHPの世界へようこそ！");

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPとHTMLの組み合わせ</title>
</head>
<body>
    <h1>PHPとHTMLの組み合わせ</h1>
    <p><?php echo $instance->displayMessage(); ?></p>
</body>
</html>
