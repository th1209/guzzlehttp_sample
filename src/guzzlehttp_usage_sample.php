<?php

require '../vendor/autoload.php';

use GuzzleHttp\Client;


//HTTPクライアントの生成
//(immutableなオブジェクト（construct後に変更できないオブジェクト）であることに注意)
$client = new Client([
    'base_uri' => 'http://github.com/',
    'time_out' => 2.0
]);

//リクエスト
$response = $client->request('GET', 'th1209');

//レスポンスの取得
var_dump($response->getStatusCode());               //int型でステータスコードが返る
var_dump($response->getHeader('Content-Length'));
var_dump($response->getBody());                     //Streamオブジェクトが返る
var_dump((string) $response->getBody());            //bodyを文字列で取得したい場合は、string型にキャストする



//以下のようなマジックメソッドを使うことも可能
//$response = $client->get('http://github.com/');
