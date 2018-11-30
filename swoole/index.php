<?php
//创建websocket服务器对象，监听0.0.0.0:9502端口
$ws = new swoole_websocket_server("0.0.0.0", 9502);
$ws->set([
    'buffer_output_size' => 128 * 1024 * 1024, //必须为数字
    'socket_buffer_size' => 128 * 1024 * 1024, //必须为数字
]);
const FILE_PATH = "./videozzd.mp4";//"./accueil.mp4";//"./videozzd.mp4";
//监听WebSocket连接打开事件
$ws->on('open', function ($ws, $request) {
//    $stream = file_get_contents(FILE_PATH);
//    $fuck= var_dump($request->fd, $request->get, $request->server);
    //var_dump($request);
    $file_resource = fopen(FILE_PATH, "r");
    $file_length = filesize(FILE_PATH);
//    var_dump($file_length);
    $file_chunks = ceil($file_length / (1024 * 512));
    echo '$file_chunks : ' . $file_chunks . "\n";
//    var_dump( $file_length / 1024 / 1024 );
    //header("Content-type:video/mp4");
    $buffer_size = 1024 * 512;

    //for
    for ($i = 0; $i < $file_chunks; $i++) {
        $stream = stream_get_contents($file_resource, $buffer_size);
        echo "chunk_length : " . strlen($stream) . "\n";
        $ws->push($request->fd, $stream, 0x2);
        sleep(1);
    }

    $ws->disconnect($request->fd, 1000, "");

});

//监听WebSocket消息事件
$ws->on('message', function ($ws, $frame) {
    echo "Message: {$frame->data}\n";
    $ws->push($frame->fd, "server: {$frame->data}", 0x2);
});

//监听WebSocket连接关闭事件
$ws->on('close', function ($ws, $fd) {
    echo "client-{$fd} is closed\n";
    die();
});


$ws->start();
