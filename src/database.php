<?php
declare(strict_types=1);
//接続情報（定数として定義）
$host     = 'db';              // docker-compose.ymlのサービス名
$dbName   = 'growth_db';       // 作成したDB名
$user     = 'root';            // 管理者
$password =  getenv('MYSQL_ROOT_PASSWORD'); // 秘密の鍵

try {
    //接続文字列（DNS）の作成
    $dns = "mysql:host={$host};dbname={$dbName};charset=utf8mb4";

    // PODインスタンスの生成（ここで実際に接続される）
    $dbh = new PDO($dns, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //エラーを例外として投げる
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //データを連想配列で受け取る
    ]);
    
    echo "接続成功しました";

} catch (PDOException $e) {
    //echo $e->getMessage();これだと、DBユーザー名やホスト名が世界にさらされるリスクがある
    echo "接続失敗: " . $e->getMessage();
    //実務では、ここでログファイルにエラーを記録する
}    

