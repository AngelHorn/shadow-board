<?php

//json包含纯字符串
function withString()
{
    $a = '{"a":100000000,"b":"{\\"code\\":200,\\"data\\":[{\\"id\\":\\"1\\",\\"name\\":\\"\\u94f6\\u9b42\\u3010\\u9b42\\u3011\\u94f6\\u9b42\\u2014\\u2014\\u6b66\\u58eb\\u4e4b\\u9b42\\u30b5\\u30e0\\u30e9\\u30a4\\u30cf\\u30fc\\u30c8\\",\\"update_time\\":\\"2017-03-15 15:11:42\\",\\"click_count\\":\\"11110\\",\\"comment_count\\":\\"466\\",\\"fav_count\\":\\"465\\",\\"coin_count\\":\\"46\\",\\"image_name\\":\\"1\\",\\"length\\":\\"11:11\\",\\"detail\\":\\"\\u4f5c\\u4e3a\\u804c\\u4e1a\\u751f\\u6daf\\u7684\\u7b2c\\u4e00\\u90e8\\u957f\\u7bc7\\u8fde\\u8f7d\\u6f2b\\u753b\\uff0c\\u7a7a\\u77e5\\u82f1\\u79cb\\u539f\\u5148\\u5e0c\\u671b\\u5c06\\u300a\\u54c8\\u5229\\u00b7\\u6ce2\\u7279\\u300b\\u65e5\\u5f0f\\u5316\\u3001\\u521b\\u4f5c\\u4ee5\\u5996\\u9b54\\u9000\\u6cbb\\u5b66\\u56ed\\u4e3a\\u8f74\\u5fc3\\u7684\\u6f2b\\u753b\\uff0c\\u4f46\\u56e0\\u4e3a\\u8d23\\u4efb\\u7f16\\u8f91\\u5927\\u897f\\u6052\\u5e73\\u5148\\u751f\\u7684\\u4e00\\u53e5\\u8bdd\\uff1a\\",\\"categories_id\\":\\"4\\"},{\\"id\\":\\"2\\",\\"name\\":\\"\\u6697\\u6740\\u6559\\u5ba4\\u300c3\\u5e74E\\u73ed (\\u6697\\u6740\\u6559\\u5ba4\\uff09 final season)\\u300d\\u65b0OP [Byebye YESTERDAY] \\uff08TV size\\uff09\\",\\"update_time\\":\\"2017-03-15 15:11:56\\",\\"click_count\\":\\"222\\",\\"comment_count\\":\\"16\\",\\"fav_count\\":\\"465\\",\\"coin_count\\":\\"465\\",\\"image_name\\":\\"2\\",\\"length\\":\\"22:22\\",\\"detail\\":\\"2016\\u5e741\\u67088\\u65e5\\u8d77\\u6bcf\\u5468\\u4e940\\uff1a25\\u5728\\u5bcc\\u58eb\\u7535\\u89c6\\u53f0\\u3001\\u5ca9\\u624b\\u53ef\\u7231\\u7535\\u89c6\\u53f0\\u9996\\u64ad\\u3002[1] \\u56e0\\u56fd\\u5bb6\\u653f\\u7b56\\u539f\\u56e0\\uff0c\\u4e2d\\u56fd\\u5927\\u9646\\u6b63\\u7248\\u914d\\u4fe1\\u8bd1\\u540d\\u6539\\u4e3a\\u300a\\u4e09\\u5e74E\\u73ed \\u7b2c\\u4e8c\\u5b63\\u300b\\uff0c\\u4e8e4\\uff1a50\\u5728\\u54d4\\u54e9\\u54d4\\u54e9\\u5f39\\u5e55\\u7f51\\u72ec\\u5bb6\\u6b63\\u7248\\u66f4\\u65b0\\u3002[\\",\\"categories_id\\":\\"4\\"},{\\"id\\":\\"3\\",\\"name\\":\\"\\u706b\\u5f71\\u5fcd\\u8005\\u3010\\u9884\\u544a\\u3011\\u706b\\u5f71\\u5fcd\\u8005\\u9e23\\u4eba\\u4f50\\u52a9\\u88ab\\u6740\\u3001\\u535a\\u4eba\\u72ec\\u6218\\u5ddd\\u6728\\",\\"update_time\\":\\"2017-03-16 15:11:59\\",\\"click_count\\":\\"11\\",\\"comment_count\\":\\"16\\",\\"fav_count\\":\\"465\\",\\"coin_count\\":\\"465\\",\\"image_name\\":\\"3\\",\\"length\\":\\"09:33\\",\\"detail\\":\\"\\u300a\\u706b\\u5f71\\u5fcd\\u8005\\u300b\\u662f\\u65e5\\u672c\\u6f2b\\u753b\\u5bb6\\u5cb8\\u672c\\u9f50\\u53f2\\u7684\\u4ee3\\u8868\\u4f5c\\uff0c\\u4f5c\\u54c1\\u4e8e1999\\u5e74\\u5f00\\u59cb\\u5728\\u300a\\u5468\\u520a\\u5c11\\u5e74JUMP\\u300b\\u4e0a\\u8fde\\u8f7d\\uff0c\\u4e8e2014\\u5e7411\\u670810\\u65e5\\u53d1\\u552e\\u7684JUMP\\u7b2c50\\u53f7\\u5b8c\\u7ed3\\uff1b\\u540e\\u65e5\\u8c08\\u6027\\u8d28\\u7684\\u5916\\u4f20\\u6f2b\\u753b\\u300a\\u706b\\u5f71\\u5fcd\\u8005\\u5916\\u4f20\\",\\"categories_id\\":\\"4\\"},{\\"id\\":\\"4\\",\\"name\\":\\"\\u6b7b\\u795e\\u542c\\u8bf4\\u300a\\u6b7b\\u795e\\u300b\\u5b8c\\u7ed3\\u4e86\\uff0c\\u90a3\\u5c31\\u8ba9\\u6211\\u4eec\\u4e00\\u8d77\\u5410\\u69fd\\u5b83\\u5427\\",\\"update_time\\":\\"2017-03-17 15:12:06\\",\\"click_count\\":\\"104\\",\\"comment_count\\":\\"16\\",\\"fav_count\\":\\"46\\",\\"coin_count\\":\\"798\\",\\"image_name\\":\\"4\\",\\"length\\":\\"44:44\\",\\"detail\\":\\"\\u300aBLEACH\\u300b\\uff08\\u539f\\u610f\\u201c\\u6f02\\u767d\\u201d\\uff0c\\u7247\\u5047\\u540d\\uff1a\\u30d6\\u30ea\\u30fc\\u30c1\\uff09\\u662f\\u4e45\\u4fdd\\u5e26\\u4eba\\u521b\\u4f5c\\uff0c2001\\u5e74\\u5f00\\u59cb\\u8fde\\u8f7d\\u4e8e\\u96c6\\u82f1\\u793e\\u65d7\\u4e0b\\u300a\\u5468\\u520a\\u5c11\\u5e74JUMP\\u300b\\u4e0a\\u7684\\u6f2b\\u753b\\u3002\\u4ea6\\u6539\\u7f16\\u6709\\u540c\\u540d\\u52a8\\u753b\\u53ca\\u8f7b\\u5c0f\\u8bf4\\u3002\\u81f3\\u65e5\\u6587\\u5355\\u884c\\u672c\\u7b2c71\\u5377\\u53d1\\u552e\\u65f6\\uff0c\\u7d2f\\u8ba1\\u53d1\\u884c\\u91cf\\u7a81\\u78348600\\u4e07\\u518c\\u3002\\",\\"categories_id\\":\\"4\\"},{\\"id\\":\\"5\\",\\"name\\":\\"\\u6d77\\u7ef5\\u5b9d\\u5b9d[\\u7b2c\\u4e8c\\u5f39]\\u4f60\\u770b\\u8fc7\\u8fd9\\u4e48\\u9b3c\\u755c\\u7684\\u6d77\\u7ef5\\u5b9d\\u5b9d\\u5417\\uff1f\\",\\"update_time\\":\\"2017-03-18 15:12:11\\",\\"click_count\\":\\"555\\",\\"comment_count\\":\\"16\\",\\"fav_count\\":\\"465\\",\\"coin_count\\":\\"798\\",\\"image_name\\":\\"5\\",\\"length\\":\\"55:55\\",\\"detail\\":\\"\\u300a\\u6d77\\u7ef5\\u5b9d\\u5b9d\\u300b\\uff08SpongeBob SquarePants\\uff09\\u662f\\u4e00\\u90e8\\u7531\\u820d\\u66fc\\u00b7\\u79d1\\u6069\\u3001\\u6c83\\u7279\\u00b7\\u675c\\u8d6b\\u3001\\u5c71\\u59c6\\u00b7\\u4ea8\\u5fb7\\u68ee\\u3001\\u4fdd\\u7f57\\u00b7\\u8482\\u6bd4\\u7279\\u7b49\\u5bfc\\u6f14\\uff0c\\u6c64\\u59c6\\u00b7\\u80af\\u5c3c\\u3001\\u6bd4\\u5c14\\u00b7\\u6cd5\\u683c\\u5df4\\u514b\\u3001\\u7f57\\u6770\\u00b7\\u5e03\\u5e15\\u65af\\u7b49\\u914d\\u97f3\\u7684\\u7f8e\\u56fd\\u559c\\u5267\\u52a8\\u753b\\uff0c\\u4e8e1999\\u5e747\\u670817\\u65e5\\u5728\\u5c3c\\u514b\\u56fd\\u9645\\u513f\\u7ae5\\u9891\\u9053\\u5f00\\u64ad\\",\\"categories_id\\":\\"4\\"},{\\"id\\":\\"6\\",\\"name\\":\\"\\u4e03\\u9f99\\u73e0\\uff08\\u9f99\\u73e0\\u963f\\u6c99\\u9686\\uff09\\u4e03\\u9f99\\u73e0AF\\u68a6\\u76c8\\u7248\\u7b2c\\u4e8c\\u5b63\\u5168\\u96c6 \\u3010\\u8fde\\u8f7d\\u4e2d\\u3011\\u30101080P\\u4e2d\\u6587\\u5b57\\u5e55\\u3011\\",\\"update_time\\":\\"2017-03-19 15:12:17\\",\\"click_count\\":\\"111\\",\\"comment_count\\":\\"46\\",\\"fav_count\\":\\"4654\\",\\"coin_count\\":\\"798\\",\\"image_name\\":\\"6\\",\\"length\\":\\"66:11\\",\\"detail\\":\\"\\u300a\\u9f99\\u73e0\\u300b\\uff08DRAGON BALL\\uff09\\uff0c\\u662f\\u4e03\\u9f99\\u73e0\\u7cfb\\u5217\\u4e2d\\u7684\\u5f00\\u5c71\\u4e4b\\u4f5c\\uff0c\\u6839\\u636e\\u65e5\\u672c\\u8457\\u540d\\u6f2b\\u753b\\u5bb6\\u9e1f\\u5c71\\u660e\\u7684\\u540c\\u540d\\u6f2b\\u753b\\u6539\\u7f16\\uff0c\\u4e8e1986\\u5e742\\u670826\\u65e5\\u5728\\u65e5\\u672c\\u5bcc\\u58eb\\u7535\\u89c6\\u53f0\\u9996\\u64ad\\u3002rn1986\\u5e74\\u4e1c\\u6620\\u52a8\\u753b\\u516c\\u53f8\\u628a\\u65e9\\u671f\\uff081-194\\u7bc7\\uff09\\u7684\\u6f2b\\u753b\\u6539\\u6210\\u4e00\\u90e8153\\u96c6\\",\\"categories_id\\":\\"4\\"},{\\"id\\":\\"7\\",\\"name\\":\\"\\u795e\\u5947\\u5b9d\\u8d1d\\u3010\\u76ae\\u5361\\u4e18\\u3011\\u53bb\\u5427\\u76ae\\u5361\\u4e18\\uff0c\\u7ed9\\u6211\\u64b8\\u4e00\\u53d1\\u6700\\u5e26\\u611f\\u7684PikaPikaPi\\uff01\\",\\"update_time\\":\\"2017-03-20 15:12:20\\",\\"click_count\\":\\"121\\",\\"comment_count\\":\\"79\\",\\"fav_count\\":\\"654\\",\\"coin_count\\":\\"798\\",\\"image_name\\":\\"7\\",\\"length\\":\\"77:11\\",\\"detail\\":\\"\\u52a8\\u753b\\u7684\\u65e5\\u6587\\u7248\\u6839\\u636e\\u6e38\\u620f\\u539f\\u4f5c\\u7248\\u672c\\uff0c\\u53ef\\u6309\\u7167\\u65f6\\u95f4\\u987a\\u5e8f\\u5212\\u5206\\u4e3a\\u4e94\\u90e8\\uff1a\\u300a\\u7cbe\\u7075\\u5b9d\\u53ef\\u68a6\\uff1a\\u65e0\\u5370\\u7bc7\\u300b\\u3001\\u300a\\u7cbe\\u7075\\u5b9d\\u53ef\\u68a6\\uff1a\\u8d85\\u4e16\\u4ee3\\u300b\\u3001\\u300a\\u7cbe\\u7075\\u5b9d\\u53ef\\u68a6\\uff1a\\u94bb\\u77f3\\u4e0e\\u73cd\\u73e0\\u300b\\u3001\\u300a\\u7cbe\\u7075\\u5b9d\\u53ef\\u68a6\\uff1a\\u8d85\\u7ea7\\u613f\\u671b\\u300b\\u300a\\u7cbe\\u7075\\u5b9d\\u53ef\\u68a6XY\\u300b\\u548c2016\\u5e7411\\u670817\\u65e5\\u5f00\\u59cb\\u64ad\\u653e\\u7684\\u300a\\u7cbe\\u7075\\u5b9d\\u53ef\\u68a6\\uff1a\\u592a\\u9633&\\u6708\\u4eae\\u300b\\u3002\\",\\"categories_id\\":\\"4\\"},{\\"id\\":\\"8\\",\\"name\\":\\"\\u732b\\u548c\\u8001\\u9f20\\u3010480P\\u3011\\u7ecf\\u5178\\u7248\\u732b\\u548c\\u8001\\u9f20164\\u96c6\\u5408\\u96c6\\u3010\\u90e8\\u5206\\u671d\\u9732\\u5b57\\u5e55\\u3011\\",\\"update_time\\":\\"2017-03-21 15:12:26\\",\\"click_count\\":\\"131\\",\\"comment_count\\":\\"79\\",\\"fav_count\\":\\"61\\",\\"coin_count\\":\\"798\\",\\"image_name\\":\\"8\\",\\"length\\":\\"88:11\\",\\"detail\\":\\"\\u300a\\u732b\\u548c\\u8001\\u9f20\\u300b\\uff08Tom and Jerry\\uff09\\u662f\\u7c73\\u9ad8\\u6885\\u7535\\u5f71\\u516c\\u53f8\\u4e8e1939\\u5e74\\u5236\\u4f5c\\u7684\\u4e00\\u90e8\\u52a8\\u753b\\u7247\\uff0c\\u8be5\\u7247\\u7531\\u5a01\\u5ec9\\u00b7\\u6c49\\u7eb3\\u3001\\u7ea6\\u745f\\u592b\\u00b7\\u5df4\\u4f2f\\u62c9\\u7f16\\u5199\\uff0c\\u5f17\\u96f7\\u5fb7\\u00b7\\u6606\\u6bd4\\u5236\\u4f5c\\uff0c\\u9996\\u90e8\\u5267\\u96c6\\u300a\\u751c\\u871c\\u7684\\u5bb6\\u300b\\u4e8e1940\\u5e742\\u670810\\u65e5\\u5728\\u7f8e\\u56fd\\u9996\\u64ad[1-2] \\u3002\\",\\"categories_id\\":\\"4\\"}]}"}';
    return (json_decode($a, JSON_UNESCAPED_UNICODE)->a);
    return (json_decode($a)->a);
}


//json包含数据结构
function withConstruct()
{
//    $a = '{"a":100000000,"b":{"code":200,"data":[{"id":"1","name":"\\u94f6\\u9b42\\u3010\\u9b42\\u3011\\u94f6\\u9b42\\u2014\\u2014\\u6b66\\u58eb\\u4e4b\\u9b42\\u30b5\\u30e0\\u30e9\\u30a4\\u30cf\\u30fc\\u30c8","update_time":"2017-03-15 15:11:42","click_count":"11110","comment_count":"466","fav_count":"465","coin_count":"46","image_name":"1","length":"11:11","detail":"\\u4f5c\\u4e3a\\u804c\\u4e1a\\u751f\\u6daf\\u7684\\u7b2c\\u4e00\\u90e8\\u957f\\u7bc7\\u8fde\\u8f7d\\u6f2b\\u753b\\uff0c\\u7a7a\\u77e5\\u82f1\\u79cb\\u539f\\u5148\\u5e0c\\u671b\\u5c06\\u300a\\u54c8\\u5229\\u00b7\\u6ce2\\u7279\\u300b\\u65e5\\u5f0f\\u5316\\u3001\\u521b\\u4f5c\\u4ee5\\u5996\\u9b54\\u9000\\u6cbb\\u5b66\\u56ed\\u4e3a\\u8f74\\u5fc3\\u7684\\u6f2b\\u753b\\uff0c\\u4f46\\u56e0\\u4e3a\\u8d23\\u4efb\\u7f16\\u8f91\\u5927\\u897f\\u6052\\u5e73\\u5148\\u751f\\u7684\\u4e00\\u53e5\\u8bdd\\uff1a","categories_id":"4"},{"id":"2","name":"\\u6697\\u6740\\u6559\\u5ba4\\u300c3\\u5e74E\\u73ed (\\u6697\\u6740\\u6559\\u5ba4\\uff09 final season)\\u300d\\u65b0OP [Byebye YESTERDAY] \\uff08TV size\\uff09","update_time":"2017-03-15 15:11:56","click_count":"222","comment_count":"16","fav_count":"465","coin_count":"465","image_name":"2","length":"22:22","detail":"2016\\u5e741\\u67088\\u65e5\\u8d77\\u6bcf\\u5468\\u4e940\\uff1a25\\u5728\\u5bcc\\u58eb\\u7535\\u89c6\\u53f0\\u3001\\u5ca9\\u624b\\u53ef\\u7231\\u7535\\u89c6\\u53f0\\u9996\\u64ad\\u3002[1] \\u56e0\\u56fd\\u5bb6\\u653f\\u7b56\\u539f\\u56e0\\uff0c\\u4e2d\\u56fd\\u5927\\u9646\\u6b63\\u7248\\u914d\\u4fe1\\u8bd1\\u540d\\u6539\\u4e3a\\u300a\\u4e09\\u5e74E\\u73ed \\u7b2c\\u4e8c\\u5b63\\u300b\\uff0c\\u4e8e4\\uff1a50\\u5728\\u54d4\\u54e9\\u54d4\\u54e9\\u5f39\\u5e55\\u7f51\\u72ec\\u5bb6\\u6b63\\u7248\\u66f4\\u65b0\\u3002[","categories_id":"4"},{"id":"3","name":"\\u706b\\u5f71\\u5fcd\\u8005\\u3010\\u9884\\u544a\\u3011\\u706b\\u5f71\\u5fcd\\u8005\\u9e23\\u4eba\\u4f50\\u52a9\\u88ab\\u6740\\u3001\\u535a\\u4eba\\u72ec\\u6218\\u5ddd\\u6728","update_time":"2017-03-16 15:11:59","click_count":"11","comment_count":"16","fav_count":"465","coin_count":"465","image_name":"3","length":"09:33","detail":"\\u300a\\u706b\\u5f71\\u5fcd\\u8005\\u300b\\u662f\\u65e5\\u672c\\u6f2b\\u753b\\u5bb6\\u5cb8\\u672c\\u9f50\\u53f2\\u7684\\u4ee3\\u8868\\u4f5c\\uff0c\\u4f5c\\u54c1\\u4e8e1999\\u5e74\\u5f00\\u59cb\\u5728\\u300a\\u5468\\u520a\\u5c11\\u5e74JUMP\\u300b\\u4e0a\\u8fde\\u8f7d\\uff0c\\u4e8e2014\\u5e7411\\u670810\\u65e5\\u53d1\\u552e\\u7684JUMP\\u7b2c50\\u53f7\\u5b8c\\u7ed3\\uff1b\\u540e\\u65e5\\u8c08\\u6027\\u8d28\\u7684\\u5916\\u4f20\\u6f2b\\u753b\\u300a\\u706b\\u5f71\\u5fcd\\u8005\\u5916\\u4f20","categories_id":"4"},{"id":"4","name":"\\u6b7b\\u795e\\u542c\\u8bf4\\u300a\\u6b7b\\u795e\\u300b\\u5b8c\\u7ed3\\u4e86\\uff0c\\u90a3\\u5c31\\u8ba9\\u6211\\u4eec\\u4e00\\u8d77\\u5410\\u69fd\\u5b83\\u5427","update_time":"2017-03-17 15:12:06","click_count":"104","comment_count":"16","fav_count":"46","coin_count":"798","image_name":"4","length":"44:44","detail":"\\u300aBLEACH\\u300b\\uff08\\u539f\\u610f\\u201c\\u6f02\\u767d\\u201d\\uff0c\\u7247\\u5047\\u540d\\uff1a\\u30d6\\u30ea\\u30fc\\u30c1\\uff09\\u662f\\u4e45\\u4fdd\\u5e26\\u4eba\\u521b\\u4f5c\\uff0c2001\\u5e74\\u5f00\\u59cb\\u8fde\\u8f7d\\u4e8e\\u96c6\\u82f1\\u793e\\u65d7\\u4e0b\\u300a\\u5468\\u520a\\u5c11\\u5e74JUMP\\u300b\\u4e0a\\u7684\\u6f2b\\u753b\\u3002\\u4ea6\\u6539\\u7f16\\u6709\\u540c\\u540d\\u52a8\\u753b\\u53ca\\u8f7b\\u5c0f\\u8bf4\\u3002\\u81f3\\u65e5\\u6587\\u5355\\u884c\\u672c\\u7b2c71\\u5377\\u53d1\\u552e\\u65f6\\uff0c\\u7d2f\\u8ba1\\u53d1\\u884c\\u91cf\\u7a81\\u78348600\\u4e07\\u518c\\u3002","categories_id":"4"},{"id":"5","name":"\\u6d77\\u7ef5\\u5b9d\\u5b9d[\\u7b2c\\u4e8c\\u5f39]\\u4f60\\u770b\\u8fc7\\u8fd9\\u4e48\\u9b3c\\u755c\\u7684\\u6d77\\u7ef5\\u5b9d\\u5b9d\\u5417\\uff1f","update_time":"2017-03-18 15:12:11","click_count":"555","comment_count":"16","fav_count":"465","coin_count":"798","image_name":"5","length":"55:55","detail":"\\u300a\\u6d77\\u7ef5\\u5b9d\\u5b9d\\u300b\\uff08SpongeBob SquarePants\\uff09\\u662f\\u4e00\\u90e8\\u7531\\u820d\\u66fc\\u00b7\\u79d1\\u6069\\u3001\\u6c83\\u7279\\u00b7\\u675c\\u8d6b\\u3001\\u5c71\\u59c6\\u00b7\\u4ea8\\u5fb7\\u68ee\\u3001\\u4fdd\\u7f57\\u00b7\\u8482\\u6bd4\\u7279\\u7b49\\u5bfc\\u6f14\\uff0c\\u6c64\\u59c6\\u00b7\\u80af\\u5c3c\\u3001\\u6bd4\\u5c14\\u00b7\\u6cd5\\u683c\\u5df4\\u514b\\u3001\\u7f57\\u6770\\u00b7\\u5e03\\u5e15\\u65af\\u7b49\\u914d\\u97f3\\u7684\\u7f8e\\u56fd\\u559c\\u5267\\u52a8\\u753b\\uff0c\\u4e8e1999\\u5e747\\u670817\\u65e5\\u5728\\u5c3c\\u514b\\u56fd\\u9645\\u513f\\u7ae5\\u9891\\u9053\\u5f00\\u64ad","categories_id":"4"},{"id":"6","name":"\\u4e03\\u9f99\\u73e0\\uff08\\u9f99\\u73e0\\u963f\\u6c99\\u9686\\uff09\\u4e03\\u9f99\\u73e0AF\\u68a6\\u76c8\\u7248\\u7b2c\\u4e8c\\u5b63\\u5168\\u96c6 \\u3010\\u8fde\\u8f7d\\u4e2d\\u3011\\u30101080P\\u4e2d\\u6587\\u5b57\\u5e55\\u3011","update_time":"2017-03-19 15:12:17","click_count":"111","comment_count":"46","fav_count":"4654","coin_count":"798","image_name":"6","length":"66:11","detail":"\\u300a\\u9f99\\u73e0\\u300b\\uff08DRAGON BALL\\uff09\\uff0c\\u662f\\u4e03\\u9f99\\u73e0\\u7cfb\\u5217\\u4e2d\\u7684\\u5f00\\u5c71\\u4e4b\\u4f5c\\uff0c\\u6839\\u636e\\u65e5\\u672c\\u8457\\u540d\\u6f2b\\u753b\\u5bb6\\u9e1f\\u5c71\\u660e\\u7684\\u540c\\u540d\\u6f2b\\u753b\\u6539\\u7f16\\uff0c\\u4e8e1986\\u5e742\\u670826\\u65e5\\u5728\\u65e5\\u672c\\u5bcc\\u58eb\\u7535\\u89c6\\u53f0\\u9996\\u64ad\\u3002rn1986\\u5e74\\u4e1c\\u6620\\u52a8\\u753b\\u516c\\u53f8\\u628a\\u65e9\\u671f\\uff081-194\\u7bc7\\uff09\\u7684\\u6f2b\\u753b\\u6539\\u6210\\u4e00\\u90e8153\\u96c6","categories_id":"4"},{"id":"7","name":"\\u795e\\u5947\\u5b9d\\u8d1d\\u3010\\u76ae\\u5361\\u4e18\\u3011\\u53bb\\u5427\\u76ae\\u5361\\u4e18\\uff0c\\u7ed9\\u6211\\u64b8\\u4e00\\u53d1\\u6700\\u5e26\\u611f\\u7684PikaPikaPi\\uff01","update_time":"2017-03-20 15:12:20","click_count":"121","comment_count":"79","fav_count":"654","coin_count":"798","image_name":"7","length":"77:11","detail":"\\u52a8\\u753b\\u7684\\u65e5\\u6587\\u7248\\u6839\\u636e\\u6e38\\u620f\\u539f\\u4f5c\\u7248\\u672c\\uff0c\\u53ef\\u6309\\u7167\\u65f6\\u95f4\\u987a\\u5e8f\\u5212\\u5206\\u4e3a\\u4e94\\u90e8\\uff1a\\u300a\\u7cbe\\u7075\\u5b9d\\u53ef\\u68a6\\uff1a\\u65e0\\u5370\\u7bc7\\u300b\\u3001\\u300a\\u7cbe\\u7075\\u5b9d\\u53ef\\u68a6\\uff1a\\u8d85\\u4e16\\u4ee3\\u300b\\u3001\\u300a\\u7cbe\\u7075\\u5b9d\\u53ef\\u68a6\\uff1a\\u94bb\\u77f3\\u4e0e\\u73cd\\u73e0\\u300b\\u3001\\u300a\\u7cbe\\u7075\\u5b9d\\u53ef\\u68a6\\uff1a\\u8d85\\u7ea7\\u613f\\u671b\\u300b\\u300a\\u7cbe\\u7075\\u5b9d\\u53ef\\u68a6XY\\u300b\\u548c2016\\u5e7411\\u670817\\u65e5\\u5f00\\u59cb\\u64ad\\u653e\\u7684\\u300a\\u7cbe\\u7075\\u5b9d\\u53ef\\u68a6\\uff1a\\u592a\\u9633&\\u6708\\u4eae\\u300b\\u3002","categories_id":"4"},{"id":"8","name":"\\u732b\\u548c\\u8001\\u9f20\\u3010480P\\u3011\\u7ecf\\u5178\\u7248\\u732b\\u548c\\u8001\\u9f20164\\u96c6\\u5408\\u96c6\\u3010\\u90e8\\u5206\\u671d\\u9732\\u5b57\\u5e55\\u3011","update_time":"2017-03-21 15:12:26","click_count":"131","comment_count":"79","fav_count":"61","coin_count":"798","image_name":"8","length":"88:11","detail":"\\u300a\\u732b\\u548c\\u8001\\u9f20\\u300b\\uff08Tom and Jerry\\uff09\\u662f\\u7c73\\u9ad8\\u6885\\u7535\\u5f71\\u516c\\u53f8\\u4e8e1939\\u5e74\\u5236\\u4f5c\\u7684\\u4e00\\u90e8\\u52a8\\u753b\\u7247\\uff0c\\u8be5\\u7247\\u7531\\u5a01\\u5ec9\\u00b7\\u6c49\\u7eb3\\u3001\\u7ea6\\u745f\\u592b\\u00b7\\u5df4\\u4f2f\\u62c9\\u7f16\\u5199\\uff0c\\u5f17\\u96f7\\u5fb7\\u00b7\\u6606\\u6bd4\\u5236\\u4f5c\\uff0c\\u9996\\u90e8\\u5267\\u96c6\\u300a\\u751c\\u871c\\u7684\\u5bb6\\u300b\\u4e8e1940\\u5e742\\u670810\\u65e5\\u5728\\u7f8e\\u56fd\\u9996\\u64ad[1-2] \\u3002","categories_id":"4"}]}}';
    $a = '{"code":200,"data":[{"id":"1","name":"银魂【魂】银魂——武士之魂サムライハート","update_time":"2017-03-15 15:11:42","click_count":"11110","comment_count":"466","fav_count":"465","coin_count":"46","image_name":"1","length":"11:11","detail":"作为职业生涯的第一部长篇连载漫画，空知英秋原先希望将《哈利·波特》日式化、创作以妖魔退治学园为轴心的漫画，但因为责任编辑大西恒平先生的一句话：","categories_id":"4"},{"id":"2","name":"暗杀教室「3年E班 (暗杀教室） final season)」新OP [Byebye YESTERDAY] （TV size）","update_time":"2017-03-15 15:11:56","click_count":"222","comment_count":"16","fav_count":"465","coin_count":"465","image_name":"2","length":"22:22","detail":"2016年1月8日起每周五0：25在富士电视台、岩手可爱电视台首播。[1] 因国家政策原因，中国大陆正版配信译名改为《三年E班 第二季》，于4：50在哔哩哔哩弹幕网独家正版更新。[","categories_id":"4"},{"id":"3","name":"火影忍者【预告】火影忍者鸣人佐助被杀、博人独战川木","update_time":"2017-03-16 15:11:59","click_count":"11","comment_count":"16","fav_count":"465","coin_count":"465","image_name":"3","length":"09:33","detail":"《火影忍者》是日本漫画家岸本齐史的代表作，作品于1999年开始在《周刊少年JUMP》上连载，于2014年11月10日发售的JUMP第50号完结；后日谈性质的外传漫画《火影忍者外传","categories_id":"4"},{"id":"4","name":"死神听说《死神》完结了，那就让我们一起吐槽它吧","update_time":"2017-03-17 15:12:06","click_count":"104","comment_count":"16","fav_count":"46","coin_count":"798","image_name":"4","length":"44:44","detail":"《BLEACH》（原意“漂白”，片假名：ブリーチ）是久保带人创作，2001年开始连载于集英社旗下《周刊少年JUMP》上的漫画。亦改编有同名动画及轻小说。至日文单行本第71卷发售时，累计发行量突破8600万册。","categories_id":"4"},{"id":"5","name":"海绵宝宝[第二弹]你看过这么鬼畜的海绵宝宝吗？","update_time":"2017-03-18 15:12:11","click_count":"555","comment_count":"16","fav_count":"465","coin_count":"798","image_name":"5","length":"55:55","detail":"《海绵宝宝》（SpongeBob SquarePants）是一部由舍曼·科恩、沃特·杜赫、山姆·亨德森、保罗·蒂比特等导演，汤姆·肯尼、比尔·法格巴克、罗杰·布帕斯等配音的美国喜剧动画，于1999年7月17日在尼克国际儿童频道开播","categories_id":"4"},{"id":"6","name":"七龙珠（龙珠阿沙隆）七龙珠AF梦盈版第二季全集 【连载中】【1080P中文字幕】","update_time":"2017-03-19 15:12:17","click_count":"111","comment_count":"46","fav_count":"4654","coin_count":"798","image_name":"6","length":"66:11","detail":"《龙珠》（DRAGON BALL），是七龙珠系列中的开山之作，根据日本著名漫画家鸟山明的同名漫画改编，于1986年2月26日在日本富士电视台首播。rn1986年东映动画公司把早期（1-194篇）的漫画改成一部153集","categories_id":"4"},{"id":"7","name":"神奇宝贝【皮卡丘】去吧皮卡丘，给我撸一发最带感的PikaPikaPi！","update_time":"2017-03-20 15:12:20","click_count":"121","comment_count":"79","fav_count":"654","coin_count":"798","image_name":"7","length":"77:11","detail":"动画的日文版根据游戏原作版本，可按照时间顺序划分为五部：《精灵宝可梦：无印篇》、《精灵宝可梦：超世代》、《精灵宝可梦：钻石与珍珠》、《精灵宝可梦：超级愿望》《精灵宝可梦XY》和2016年11月17日开始播放的《精灵宝可梦：太阳&月亮》。","categories_id":"4"},{"id":"8","name":"猫和老鼠【480P】经典版猫和老鼠164集合集【部分朝露字幕】","update_time":"2017-03-21 15:12:26","click_count":"131","comment_count":"79","fav_count":"61","coin_count":"798","image_name":"8","length":"88:11","detail":"《猫和老鼠》（Tom and Jerry）是米高梅电影公司于1939年制作的一部动画片，该片由威廉·汉纳、约瑟夫·巴伯拉编写，弗雷德·昆比制作，首部剧集《甜蜜的家》于1940年2月10日在美国首播[1-2] 。","categories_id":"4"}]}';

    return (json_decode($a, JSON_UNESCAPED_UNICODE)->a);
}


//json包含纯字符串
function withSub()
{
    $a = '{"a":100000000,"b":"{\\"code\\":200,\\"data\\":[{\\"id\\":\\"1\\",\\"name\\":\\"\\u94f6\\u9b42\\u3010\\u9b42\\u3011\\u94f6\\u9b42\\u2014\\u2014\\u6b66\\u58eb\\u4e4b\\u9b42\\u30b5\\u30e0\\u30e9\\u30a4\\u30cf\\u30fc\\u30c8\\",\\"update_time\\":\\"2017-03-15 15:11:42\\",\\"click_count\\":\\"11110\\",\\"comment_count\\":\\"466\\",\\"fav_count\\":\\"465\\",\\"coin_count\\":\\"46\\",\\"image_name\\":\\"1\\",\\"length\\":\\"11:11\\",\\"detail\\":\\"\\u4f5c\\u4e3a\\u804c\\u4e1a\\u751f\\u6daf\\u7684\\u7b2c\\u4e00\\u90e8\\u957f\\u7bc7\\u8fde\\u8f7d\\u6f2b\\u753b\\uff0c\\u7a7a\\u77e5\\u82f1\\u79cb\\u539f\\u5148\\u5e0c\\u671b\\u5c06\\u300a\\u54c8\\u5229\\u00b7\\u6ce2\\u7279\\u300b\\u65e5\\u5f0f\\u5316\\u3001\\u521b\\u4f5c\\u4ee5\\u5996\\u9b54\\u9000\\u6cbb\\u5b66\\u56ed\\u4e3a\\u8f74\\u5fc3\\u7684\\u6f2b\\u753b\\uff0c\\u4f46\\u56e0\\u4e3a\\u8d23\\u4efb\\u7f16\\u8f91\\u5927\\u897f\\u6052\\u5e73\\u5148\\u751f\\u7684\\u4e00\\u53e5\\u8bdd\\uff1a\\",\\"categories_id\\":\\"4\\"},{\\"id\\":\\"2\\",\\"name\\":\\"\\u6697\\u6740\\u6559\\u5ba4\\u300c3\\u5e74E\\u73ed (\\u6697\\u6740\\u6559\\u5ba4\\uff09 final season)\\u300d\\u65b0OP [Byebye YESTERDAY] \\uff08TV size\\uff09\\",\\"update_time\\":\\"2017-03-15 15:11:56\\",\\"click_count\\":\\"222\\",\\"comment_count\\":\\"16\\",\\"fav_count\\":\\"465\\",\\"coin_count\\":\\"465\\",\\"image_name\\":\\"2\\",\\"length\\":\\"22:22\\",\\"detail\\":\\"2016\\u5e741\\u67088\\u65e5\\u8d77\\u6bcf\\u5468\\u4e940\\uff1a25\\u5728\\u5bcc\\u58eb\\u7535\\u89c6\\u53f0\\u3001\\u5ca9\\u624b\\u53ef\\u7231\\u7535\\u89c6\\u53f0\\u9996\\u64ad\\u3002[1] \\u56e0\\u56fd\\u5bb6\\u653f\\u7b56\\u539f\\u56e0\\uff0c\\u4e2d\\u56fd\\u5927\\u9646\\u6b63\\u7248\\u914d\\u4fe1\\u8bd1\\u540d\\u6539\\u4e3a\\u300a\\u4e09\\u5e74E\\u73ed \\u7b2c\\u4e8c\\u5b63\\u300b\\uff0c\\u4e8e4\\uff1a50\\u5728\\u54d4\\u54e9\\u54d4\\u54e9\\u5f39\\u5e55\\u7f51\\u72ec\\u5bb6\\u6b63\\u7248\\u66f4\\u65b0\\u3002[\\",\\"categories_id\\":\\"4\\"},{\\"id\\":\\"3\\",\\"name\\":\\"\\u706b\\u5f71\\u5fcd\\u8005\\u3010\\u9884\\u544a\\u3011\\u706b\\u5f71\\u5fcd\\u8005\\u9e23\\u4eba\\u4f50\\u52a9\\u88ab\\u6740\\u3001\\u535a\\u4eba\\u72ec\\u6218\\u5ddd\\u6728\\",\\"update_time\\":\\"2017-03-16 15:11:59\\",\\"click_count\\":\\"11\\",\\"comment_count\\":\\"16\\",\\"fav_count\\":\\"465\\",\\"coin_count\\":\\"465\\",\\"image_name\\":\\"3\\",\\"length\\":\\"09:33\\",\\"detail\\":\\"\\u300a\\u706b\\u5f71\\u5fcd\\u8005\\u300b\\u662f\\u65e5\\u672c\\u6f2b\\u753b\\u5bb6\\u5cb8\\u672c\\u9f50\\u53f2\\u7684\\u4ee3\\u8868\\u4f5c\\uff0c\\u4f5c\\u54c1\\u4e8e1999\\u5e74\\u5f00\\u59cb\\u5728\\u300a\\u5468\\u520a\\u5c11\\u5e74JUMP\\u300b\\u4e0a\\u8fde\\u8f7d\\uff0c\\u4e8e2014\\u5e7411\\u670810\\u65e5\\u53d1\\u552e\\u7684JUMP\\u7b2c50\\u53f7\\u5b8c\\u7ed3\\uff1b\\u540e\\u65e5\\u8c08\\u6027\\u8d28\\u7684\\u5916\\u4f20\\u6f2b\\u753b\\u300a\\u706b\\u5f71\\u5fcd\\u8005\\u5916\\u4f20\\",\\"categories_id\\":\\"4\\"},{\\"id\\":\\"4\\",\\"name\\":\\"\\u6b7b\\u795e\\u542c\\u8bf4\\u300a\\u6b7b\\u795e\\u300b\\u5b8c\\u7ed3\\u4e86\\uff0c\\u90a3\\u5c31\\u8ba9\\u6211\\u4eec\\u4e00\\u8d77\\u5410\\u69fd\\u5b83\\u5427\\",\\"update_time\\":\\"2017-03-17 15:12:06\\",\\"click_count\\":\\"104\\",\\"comment_count\\":\\"16\\",\\"fav_count\\":\\"46\\",\\"coin_count\\":\\"798\\",\\"image_name\\":\\"4\\",\\"length\\":\\"44:44\\",\\"detail\\":\\"\\u300aBLEACH\\u300b\\uff08\\u539f\\u610f\\u201c\\u6f02\\u767d\\u201d\\uff0c\\u7247\\u5047\\u540d\\uff1a\\u30d6\\u30ea\\u30fc\\u30c1\\uff09\\u662f\\u4e45\\u4fdd\\u5e26\\u4eba\\u521b\\u4f5c\\uff0c2001\\u5e74\\u5f00\\u59cb\\u8fde\\u8f7d\\u4e8e\\u96c6\\u82f1\\u793e\\u65d7\\u4e0b\\u300a\\u5468\\u520a\\u5c11\\u5e74JUMP\\u300b\\u4e0a\\u7684\\u6f2b\\u753b\\u3002\\u4ea6\\u6539\\u7f16\\u6709\\u540c\\u540d\\u52a8\\u753b\\u53ca\\u8f7b\\u5c0f\\u8bf4\\u3002\\u81f3\\u65e5\\u6587\\u5355\\u884c\\u672c\\u7b2c71\\u5377\\u53d1\\u552e\\u65f6\\uff0c\\u7d2f\\u8ba1\\u53d1\\u884c\\u91cf\\u7a81\\u78348600\\u4e07\\u518c\\u3002\\",\\"categories_id\\":\\"4\\"},{\\"id\\":\\"5\\",\\"name\\":\\"\\u6d77\\u7ef5\\u5b9d\\u5b9d[\\u7b2c\\u4e8c\\u5f39]\\u4f60\\u770b\\u8fc7\\u8fd9\\u4e48\\u9b3c\\u755c\\u7684\\u6d77\\u7ef5\\u5b9d\\u5b9d\\u5417\\uff1f\\",\\"update_time\\":\\"2017-03-18 15:12:11\\",\\"click_count\\":\\"555\\",\\"comment_count\\":\\"16\\",\\"fav_count\\":\\"465\\",\\"coin_count\\":\\"798\\",\\"image_name\\":\\"5\\",\\"length\\":\\"55:55\\",\\"detail\\":\\"\\u300a\\u6d77\\u7ef5\\u5b9d\\u5b9d\\u300b\\uff08SpongeBob SquarePants\\uff09\\u662f\\u4e00\\u90e8\\u7531\\u820d\\u66fc\\u00b7\\u79d1\\u6069\\u3001\\u6c83\\u7279\\u00b7\\u675c\\u8d6b\\u3001\\u5c71\\u59c6\\u00b7\\u4ea8\\u5fb7\\u68ee\\u3001\\u4fdd\\u7f57\\u00b7\\u8482\\u6bd4\\u7279\\u7b49\\u5bfc\\u6f14\\uff0c\\u6c64\\u59c6\\u00b7\\u80af\\u5c3c\\u3001\\u6bd4\\u5c14\\u00b7\\u6cd5\\u683c\\u5df4\\u514b\\u3001\\u7f57\\u6770\\u00b7\\u5e03\\u5e15\\u65af\\u7b49\\u914d\\u97f3\\u7684\\u7f8e\\u56fd\\u559c\\u5267\\u52a8\\u753b\\uff0c\\u4e8e1999\\u5e747\\u670817\\u65e5\\u5728\\u5c3c\\u514b\\u56fd\\u9645\\u513f\\u7ae5\\u9891\\u9053\\u5f00\\u64ad\\",\\"categories_id\\":\\"4\\"},{\\"id\\":\\"6\\",\\"name\\":\\"\\u4e03\\u9f99\\u73e0\\uff08\\u9f99\\u73e0\\u963f\\u6c99\\u9686\\uff09\\u4e03\\u9f99\\u73e0AF\\u68a6\\u76c8\\u7248\\u7b2c\\u4e8c\\u5b63\\u5168\\u96c6 \\u3010\\u8fde\\u8f7d\\u4e2d\\u3011\\u30101080P\\u4e2d\\u6587\\u5b57\\u5e55\\u3011\\",\\"update_time\\":\\"2017-03-19 15:12:17\\",\\"click_count\\":\\"111\\",\\"comment_count\\":\\"46\\",\\"fav_count\\":\\"4654\\",\\"coin_count\\":\\"798\\",\\"image_name\\":\\"6\\",\\"length\\":\\"66:11\\",\\"detail\\":\\"\\u300a\\u9f99\\u73e0\\u300b\\uff08DRAGON BALL\\uff09\\uff0c\\u662f\\u4e03\\u9f99\\u73e0\\u7cfb\\u5217\\u4e2d\\u7684\\u5f00\\u5c71\\u4e4b\\u4f5c\\uff0c\\u6839\\u636e\\u65e5\\u672c\\u8457\\u540d\\u6f2b\\u753b\\u5bb6\\u9e1f\\u5c71\\u660e\\u7684\\u540c\\u540d\\u6f2b\\u753b\\u6539\\u7f16\\uff0c\\u4e8e1986\\u5e742\\u670826\\u65e5\\u5728\\u65e5\\u672c\\u5bcc\\u58eb\\u7535\\u89c6\\u53f0\\u9996\\u64ad\\u3002rn1986\\u5e74\\u4e1c\\u6620\\u52a8\\u753b\\u516c\\u53f8\\u628a\\u65e9\\u671f\\uff081-194\\u7bc7\\uff09\\u7684\\u6f2b\\u753b\\u6539\\u6210\\u4e00\\u90e8153\\u96c6\\",\\"categories_id\\":\\"4\\"},{\\"id\\":\\"7\\",\\"name\\":\\"\\u795e\\u5947\\u5b9d\\u8d1d\\u3010\\u76ae\\u5361\\u4e18\\u3011\\u53bb\\u5427\\u76ae\\u5361\\u4e18\\uff0c\\u7ed9\\u6211\\u64b8\\u4e00\\u53d1\\u6700\\u5e26\\u611f\\u7684PikaPikaPi\\uff01\\",\\"update_time\\":\\"2017-03-20 15:12:20\\",\\"click_count\\":\\"121\\",\\"comment_count\\":\\"79\\",\\"fav_count\\":\\"654\\",\\"coin_count\\":\\"798\\",\\"image_name\\":\\"7\\",\\"length\\":\\"77:11\\",\\"detail\\":\\"\\u52a8\\u753b\\u7684\\u65e5\\u6587\\u7248\\u6839\\u636e\\u6e38\\u620f\\u539f\\u4f5c\\u7248\\u672c\\uff0c\\u53ef\\u6309\\u7167\\u65f6\\u95f4\\u987a\\u5e8f\\u5212\\u5206\\u4e3a\\u4e94\\u90e8\\uff1a\\u300a\\u7cbe\\u7075\\u5b9d\\u53ef\\u68a6\\uff1a\\u65e0\\u5370\\u7bc7\\u300b\\u3001\\u300a\\u7cbe\\u7075\\u5b9d\\u53ef\\u68a6\\uff1a\\u8d85\\u4e16\\u4ee3\\u300b\\u3001\\u300a\\u7cbe\\u7075\\u5b9d\\u53ef\\u68a6\\uff1a\\u94bb\\u77f3\\u4e0e\\u73cd\\u73e0\\u300b\\u3001\\u300a\\u7cbe\\u7075\\u5b9d\\u53ef\\u68a6\\uff1a\\u8d85\\u7ea7\\u613f\\u671b\\u300b\\u300a\\u7cbe\\u7075\\u5b9d\\u53ef\\u68a6XY\\u300b\\u548c2016\\u5e7411\\u670817\\u65e5\\u5f00\\u59cb\\u64ad\\u653e\\u7684\\u300a\\u7cbe\\u7075\\u5b9d\\u53ef\\u68a6\\uff1a\\u592a\\u9633&\\u6708\\u4eae\\u300b\\u3002\\",\\"categories_id\\":\\"4\\"},{\\"id\\":\\"8\\",\\"name\\":\\"\\u732b\\u548c\\u8001\\u9f20\\u3010480P\\u3011\\u7ecf\\u5178\\u7248\\u732b\\u548c\\u8001\\u9f20164\\u96c6\\u5408\\u96c6\\u3010\\u90e8\\u5206\\u671d\\u9732\\u5b57\\u5e55\\u3011\\",\\"update_time\\":\\"2017-03-21 15:12:26\\",\\"click_count\\":\\"131\\",\\"comment_count\\":\\"79\\",\\"fav_count\\":\\"61\\",\\"coin_count\\":\\"798\\",\\"image_name\\":\\"8\\",\\"length\\":\\"88:11\\",\\"detail\\":\\"\\u300a\\u732b\\u548c\\u8001\\u9f20\\u300b\\uff08Tom and Jerry\\uff09\\u662f\\u7c73\\u9ad8\\u6885\\u7535\\u5f71\\u516c\\u53f8\\u4e8e1939\\u5e74\\u5236\\u4f5c\\u7684\\u4e00\\u90e8\\u52a8\\u753b\\u7247\\uff0c\\u8be5\\u7247\\u7531\\u5a01\\u5ec9\\u00b7\\u6c49\\u7eb3\\u3001\\u7ea6\\u745f\\u592b\\u00b7\\u5df4\\u4f2f\\u62c9\\u7f16\\u5199\\uff0c\\u5f17\\u96f7\\u5fb7\\u00b7\\u6606\\u6bd4\\u5236\\u4f5c\\uff0c\\u9996\\u90e8\\u5267\\u96c6\\u300a\\u751c\\u871c\\u7684\\u5bb6\\u300b\\u4e8e1940\\u5e742\\u670810\\u65e5\\u5728\\u7f8e\\u56fd\\u9996\\u64ad[1-2] \\u3002\\",\\"categories_id\\":\\"4\\"}]}"}';;
    return (substr($a, 0, 12));
}

//json包含纯字符串
function withExplode()
{
    $a = '{"a":100000000,"b":"{\\"code\\":200,\\"data\\":[{\\"id\\":\\"1\\",\\"name\\":\\"\\u94f6\\u9b42\\u3010\\u9b42\\u3011\\u94f6\\u9b42\\u2014\\u2014\\u6b66\\u58eb\\u4e4b\\u9b42\\u30b5\\u30e0\\u30e9\\u30a4\\u30cf\\u30fc\\u30c8\\",\\"update_time\\":\\"2017-03-15 15:11:42\\",\\"click_count\\":\\"11110\\",\\"comment_count\\":\\"466\\",\\"fav_count\\":\\"465\\",\\"coin_count\\":\\"46\\",\\"image_name\\":\\"1\\",\\"length\\":\\"11:11\\",\\"detail\\":\\"\\u4f5c\\u4e3a\\u804c\\u4e1a\\u751f\\u6daf\\u7684\\u7b2c\\u4e00\\u90e8\\u957f\\u7bc7\\u8fde\\u8f7d\\u6f2b\\u753b\\uff0c\\u7a7a\\u77e5\\u82f1\\u79cb\\u539f\\u5148\\u5e0c\\u671b\\u5c06\\u300a\\u54c8\\u5229\\u00b7\\u6ce2\\u7279\\u300b\\u65e5\\u5f0f\\u5316\\u3001\\u521b\\u4f5c\\u4ee5\\u5996\\u9b54\\u9000\\u6cbb\\u5b66\\u56ed\\u4e3a\\u8f74\\u5fc3\\u7684\\u6f2b\\u753b\\uff0c\\u4f46\\u56e0\\u4e3a\\u8d23\\u4efb\\u7f16\\u8f91\\u5927\\u897f\\u6052\\u5e73\\u5148\\u751f\\u7684\\u4e00\\u53e5\\u8bdd\\uff1a\\",\\"categories_id\\":\\"4\\"},{\\"id\\":\\"2\\",\\"name\\":\\"\\u6697\\u6740\\u6559\\u5ba4\\u300c3\\u5e74E\\u73ed (\\u6697\\u6740\\u6559\\u5ba4\\uff09 final season)\\u300d\\u65b0OP [Byebye YESTERDAY] \\uff08TV size\\uff09\\",\\"update_time\\":\\"2017-03-15 15:11:56\\",\\"click_count\\":\\"222\\",\\"comment_count\\":\\"16\\",\\"fav_count\\":\\"465\\",\\"coin_count\\":\\"465\\",\\"image_name\\":\\"2\\",\\"length\\":\\"22:22\\",\\"detail\\":\\"2016\\u5e741\\u67088\\u65e5\\u8d77\\u6bcf\\u5468\\u4e940\\uff1a25\\u5728\\u5bcc\\u58eb\\u7535\\u89c6\\u53f0\\u3001\\u5ca9\\u624b\\u53ef\\u7231\\u7535\\u89c6\\u53f0\\u9996\\u64ad\\u3002[1] \\u56e0\\u56fd\\u5bb6\\u653f\\u7b56\\u539f\\u56e0\\uff0c\\u4e2d\\u56fd\\u5927\\u9646\\u6b63\\u7248\\u914d\\u4fe1\\u8bd1\\u540d\\u6539\\u4e3a\\u300a\\u4e09\\u5e74E\\u73ed \\u7b2c\\u4e8c\\u5b63\\u300b\\uff0c\\u4e8e4\\uff1a50\\u5728\\u54d4\\u54e9\\u54d4\\u54e9\\u5f39\\u5e55\\u7f51\\u72ec\\u5bb6\\u6b63\\u7248\\u66f4\\u65b0\\u3002[\\",\\"categories_id\\":\\"4\\"},{\\"id\\":\\"3\\",\\"name\\":\\"\\u706b\\u5f71\\u5fcd\\u8005\\u3010\\u9884\\u544a\\u3011\\u706b\\u5f71\\u5fcd\\u8005\\u9e23\\u4eba\\u4f50\\u52a9\\u88ab\\u6740\\u3001\\u535a\\u4eba\\u72ec\\u6218\\u5ddd\\u6728\\",\\"update_time\\":\\"2017-03-16 15:11:59\\",\\"click_count\\":\\"11\\",\\"comment_count\\":\\"16\\",\\"fav_count\\":\\"465\\",\\"coin_count\\":\\"465\\",\\"image_name\\":\\"3\\",\\"length\\":\\"09:33\\",\\"detail\\":\\"\\u300a\\u706b\\u5f71\\u5fcd\\u8005\\u300b\\u662f\\u65e5\\u672c\\u6f2b\\u753b\\u5bb6\\u5cb8\\u672c\\u9f50\\u53f2\\u7684\\u4ee3\\u8868\\u4f5c\\uff0c\\u4f5c\\u54c1\\u4e8e1999\\u5e74\\u5f00\\u59cb\\u5728\\u300a\\u5468\\u520a\\u5c11\\u5e74JUMP\\u300b\\u4e0a\\u8fde\\u8f7d\\uff0c\\u4e8e2014\\u5e7411\\u670810\\u65e5\\u53d1\\u552e\\u7684JUMP\\u7b2c50\\u53f7\\u5b8c\\u7ed3\\uff1b\\u540e\\u65e5\\u8c08\\u6027\\u8d28\\u7684\\u5916\\u4f20\\u6f2b\\u753b\\u300a\\u706b\\u5f71\\u5fcd\\u8005\\u5916\\u4f20\\",\\"categories_id\\":\\"4\\"},{\\"id\\":\\"4\\",\\"name\\":\\"\\u6b7b\\u795e\\u542c\\u8bf4\\u300a\\u6b7b\\u795e\\u300b\\u5b8c\\u7ed3\\u4e86\\uff0c\\u90a3\\u5c31\\u8ba9\\u6211\\u4eec\\u4e00\\u8d77\\u5410\\u69fd\\u5b83\\u5427\\",\\"update_time\\":\\"2017-03-17 15:12:06\\",\\"click_count\\":\\"104\\",\\"comment_count\\":\\"16\\",\\"fav_count\\":\\"46\\",\\"coin_count\\":\\"798\\",\\"image_name\\":\\"4\\",\\"length\\":\\"44:44\\",\\"detail\\":\\"\\u300aBLEACH\\u300b\\uff08\\u539f\\u610f\\u201c\\u6f02\\u767d\\u201d\\uff0c\\u7247\\u5047\\u540d\\uff1a\\u30d6\\u30ea\\u30fc\\u30c1\\uff09\\u662f\\u4e45\\u4fdd\\u5e26\\u4eba\\u521b\\u4f5c\\uff0c2001\\u5e74\\u5f00\\u59cb\\u8fde\\u8f7d\\u4e8e\\u96c6\\u82f1\\u793e\\u65d7\\u4e0b\\u300a\\u5468\\u520a\\u5c11\\u5e74JUMP\\u300b\\u4e0a\\u7684\\u6f2b\\u753b\\u3002\\u4ea6\\u6539\\u7f16\\u6709\\u540c\\u540d\\u52a8\\u753b\\u53ca\\u8f7b\\u5c0f\\u8bf4\\u3002\\u81f3\\u65e5\\u6587\\u5355\\u884c\\u672c\\u7b2c71\\u5377\\u53d1\\u552e\\u65f6\\uff0c\\u7d2f\\u8ba1\\u53d1\\u884c\\u91cf\\u7a81\\u78348600\\u4e07\\u518c\\u3002\\",\\"categories_id\\":\\"4\\"},{\\"id\\":\\"5\\",\\"name\\":\\"\\u6d77\\u7ef5\\u5b9d\\u5b9d[\\u7b2c\\u4e8c\\u5f39]\\u4f60\\u770b\\u8fc7\\u8fd9\\u4e48\\u9b3c\\u755c\\u7684\\u6d77\\u7ef5\\u5b9d\\u5b9d\\u5417\\uff1f\\",\\"update_time\\":\\"2017-03-18 15:12:11\\",\\"click_count\\":\\"555\\",\\"comment_count\\":\\"16\\",\\"fav_count\\":\\"465\\",\\"coin_count\\":\\"798\\",\\"image_name\\":\\"5\\",\\"length\\":\\"55:55\\",\\"detail\\":\\"\\u300a\\u6d77\\u7ef5\\u5b9d\\u5b9d\\u300b\\uff08SpongeBob SquarePants\\uff09\\u662f\\u4e00\\u90e8\\u7531\\u820d\\u66fc\\u00b7\\u79d1\\u6069\\u3001\\u6c83\\u7279\\u00b7\\u675c\\u8d6b\\u3001\\u5c71\\u59c6\\u00b7\\u4ea8\\u5fb7\\u68ee\\u3001\\u4fdd\\u7f57\\u00b7\\u8482\\u6bd4\\u7279\\u7b49\\u5bfc\\u6f14\\uff0c\\u6c64\\u59c6\\u00b7\\u80af\\u5c3c\\u3001\\u6bd4\\u5c14\\u00b7\\u6cd5\\u683c\\u5df4\\u514b\\u3001\\u7f57\\u6770\\u00b7\\u5e03\\u5e15\\u65af\\u7b49\\u914d\\u97f3\\u7684\\u7f8e\\u56fd\\u559c\\u5267\\u52a8\\u753b\\uff0c\\u4e8e1999\\u5e747\\u670817\\u65e5\\u5728\\u5c3c\\u514b\\u56fd\\u9645\\u513f\\u7ae5\\u9891\\u9053\\u5f00\\u64ad\\",\\"categories_id\\":\\"4\\"},{\\"id\\":\\"6\\",\\"name\\":\\"\\u4e03\\u9f99\\u73e0\\uff08\\u9f99\\u73e0\\u963f\\u6c99\\u9686\\uff09\\u4e03\\u9f99\\u73e0AF\\u68a6\\u76c8\\u7248\\u7b2c\\u4e8c\\u5b63\\u5168\\u96c6 \\u3010\\u8fde\\u8f7d\\u4e2d\\u3011\\u30101080P\\u4e2d\\u6587\\u5b57\\u5e55\\u3011\\",\\"update_time\\":\\"2017-03-19 15:12:17\\",\\"click_count\\":\\"111\\",\\"comment_count\\":\\"46\\",\\"fav_count\\":\\"4654\\",\\"coin_count\\":\\"798\\",\\"image_name\\":\\"6\\",\\"length\\":\\"66:11\\",\\"detail\\":\\"\\u300a\\u9f99\\u73e0\\u300b\\uff08DRAGON BALL\\uff09\\uff0c\\u662f\\u4e03\\u9f99\\u73e0\\u7cfb\\u5217\\u4e2d\\u7684\\u5f00\\u5c71\\u4e4b\\u4f5c\\uff0c\\u6839\\u636e\\u65e5\\u672c\\u8457\\u540d\\u6f2b\\u753b\\u5bb6\\u9e1f\\u5c71\\u660e\\u7684\\u540c\\u540d\\u6f2b\\u753b\\u6539\\u7f16\\uff0c\\u4e8e1986\\u5e742\\u670826\\u65e5\\u5728\\u65e5\\u672c\\u5bcc\\u58eb\\u7535\\u89c6\\u53f0\\u9996\\u64ad\\u3002rn1986\\u5e74\\u4e1c\\u6620\\u52a8\\u753b\\u516c\\u53f8\\u628a\\u65e9\\u671f\\uff081-194\\u7bc7\\uff09\\u7684\\u6f2b\\u753b\\u6539\\u6210\\u4e00\\u90e8153\\u96c6\\",\\"categories_id\\":\\"4\\"},{\\"id\\":\\"7\\",\\"name\\":\\"\\u795e\\u5947\\u5b9d\\u8d1d\\u3010\\u76ae\\u5361\\u4e18\\u3011\\u53bb\\u5427\\u76ae\\u5361\\u4e18\\uff0c\\u7ed9\\u6211\\u64b8\\u4e00\\u53d1\\u6700\\u5e26\\u611f\\u7684PikaPikaPi\\uff01\\",\\"update_time\\":\\"2017-03-20 15:12:20\\",\\"click_count\\":\\"121\\",\\"comment_count\\":\\"79\\",\\"fav_count\\":\\"654\\",\\"coin_count\\":\\"798\\",\\"image_name\\":\\"7\\",\\"length\\":\\"77:11\\",\\"detail\\":\\"\\u52a8\\u753b\\u7684\\u65e5\\u6587\\u7248\\u6839\\u636e\\u6e38\\u620f\\u539f\\u4f5c\\u7248\\u672c\\uff0c\\u53ef\\u6309\\u7167\\u65f6\\u95f4\\u987a\\u5e8f\\u5212\\u5206\\u4e3a\\u4e94\\u90e8\\uff1a\\u300a\\u7cbe\\u7075\\u5b9d\\u53ef\\u68a6\\uff1a\\u65e0\\u5370\\u7bc7\\u300b\\u3001\\u300a\\u7cbe\\u7075\\u5b9d\\u53ef\\u68a6\\uff1a\\u8d85\\u4e16\\u4ee3\\u300b\\u3001\\u300a\\u7cbe\\u7075\\u5b9d\\u53ef\\u68a6\\uff1a\\u94bb\\u77f3\\u4e0e\\u73cd\\u73e0\\u300b\\u3001\\u300a\\u7cbe\\u7075\\u5b9d\\u53ef\\u68a6\\uff1a\\u8d85\\u7ea7\\u613f\\u671b\\u300b\\u300a\\u7cbe\\u7075\\u5b9d\\u53ef\\u68a6XY\\u300b\\u548c2016\\u5e7411\\u670817\\u65e5\\u5f00\\u59cb\\u64ad\\u653e\\u7684\\u300a\\u7cbe\\u7075\\u5b9d\\u53ef\\u68a6\\uff1a\\u592a\\u9633&\\u6708\\u4eae\\u300b\\u3002\\",\\"categories_id\\":\\"4\\"},{\\"id\\":\\"8\\",\\"name\\":\\"\\u732b\\u548c\\u8001\\u9f20\\u3010480P\\u3011\\u7ecf\\u5178\\u7248\\u732b\\u548c\\u8001\\u9f20164\\u96c6\\u5408\\u96c6\\u3010\\u90e8\\u5206\\u671d\\u9732\\u5b57\\u5e55\\u3011\\",\\"update_time\\":\\"2017-03-21 15:12:26\\",\\"click_count\\":\\"131\\",\\"comment_count\\":\\"79\\",\\"fav_count\\":\\"61\\",\\"coin_count\\":\\"798\\",\\"image_name\\":\\"8\\",\\"length\\":\\"88:11\\",\\"detail\\":\\"\\u300a\\u732b\\u548c\\u8001\\u9f20\\u300b\\uff08Tom and Jerry\\uff09\\u662f\\u7c73\\u9ad8\\u6885\\u7535\\u5f71\\u516c\\u53f8\\u4e8e1939\\u5e74\\u5236\\u4f5c\\u7684\\u4e00\\u90e8\\u52a8\\u753b\\u7247\\uff0c\\u8be5\\u7247\\u7531\\u5a01\\u5ec9\\u00b7\\u6c49\\u7eb3\\u3001\\u7ea6\\u745f\\u592b\\u00b7\\u5df4\\u4f2f\\u62c9\\u7f16\\u5199\\uff0c\\u5f17\\u96f7\\u5fb7\\u00b7\\u6606\\u6bd4\\u5236\\u4f5c\\uff0c\\u9996\\u90e8\\u5267\\u96c6\\u300a\\u751c\\u871c\\u7684\\u5bb6\\u300b\\u4e8e1940\\u5e742\\u670810\\u65e5\\u5728\\u7f8e\\u56fd\\u9996\\u64ad[1-2] \\u3002\\",\\"categories_id\\":\\"4\\"}]}"}';;
    return (explode($a, '{'));
}

//var_export(withString());
//echo "a";
for ($i = 0; $i < 100; $i++) {
//    $a = withString();
    $a = withConstruct();
//    withSub();
//    withExplode();
}









