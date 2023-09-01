<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    // ここでメール送信やデータベースへの保存を行うなどの処理を追加します
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>お問い合わせフォーム</title>
</head>
<body>
    <h1>お問い合わせフォーム</h1>
    <form method="post" action="">
        <label for="name">名前:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">メールアドレス:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="message">お問い合わせ内容:</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>
        <input type="submit" value="送信">
    </form>
</body>
</html>
