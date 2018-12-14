<?php
require 'TcpRoom.php';
//创建websocket服务器对象，监听0.0.0.0:9502端口
$ws = new swoole_websocket_server("0.0.0.0", 9502, SWOOLE_PROCESS, SWOOLE_SOCK_TCP | SWOOLE_SSL);
$ws->set([
    'worker_num' => 1,    //worker process num
    'buffer_output_size' => 128 * 1024 * 1024, //必须为数字
    'socket_buffer_size' => 128 * 1024 * 1024, //必须为数字
    'ssl_cert_file' => '/root/cert/0x00000000.me.pem',
//    'ssl_cert_file' => __DIR__.'/config/0x00000000.me.pem',
    'ssl_key_file' => '/root/cert/0x00000000.me.key',
//    'ssl_key_file' => __DIR__.'/config/0x00000000.me.key',
]);

//监听WebSocket连接打开事件
$ws->on('open', function ($ws, $request) {
//    print_r($request);
    $sid_json = json_encode(array(
        "type" => "set-sid",
        "data" => $request->fd
    ));
    $ws->push($request->fd, $sid_json);
    (new TcpRoom())->setList($request->fd);
    $friend_list_json = json_encode(array(
        "type" => "get-friend-list",
        "data" => TcpRoom::getList()
    ));
    $ws->push($request->fd, $friend_list_json);
    var_export(TcpRoom::getList());
    echo "now online fucker numbers is : " . count($ws->connections);
});

//监听WebSocket消息事件
$ws->on('message', function ($ws, $frame) {
//    echo "Message: {$frame->data}\n";
//    echo strlen($frame->data) . "\n";
//    var_dump($frame);
//    var_dump($ws);
//    $client_data = json_decode($frame->data);

    foreach ($ws->connections as $fd) {
        if ($fd != $frame->fd) {
            $ws->push($fd, $frame->data);
        }
    }
});

//监听WebSocket连接关闭事件
$ws->on('close', function ($ws, $fd) {
    (new TcpRoom())->removeList($fd);
    $friend_list_json = json_encode(array(
        "type" => "get-friend-list",
        "data" => TcpRoom::getList()
    ));
    foreach ($ws->connections as $wsfd) {
        if ($fd != $wsfd) {
            $ws->push($wsfd, $friend_list_json);
        }
    }
    echo "client->{$fd} is closed\n\r";
});


$ws->start();
