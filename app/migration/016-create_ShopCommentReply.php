<?php defined('MAPLE') || exit('此檔案不允許讀取！');

return [
  'up' => "CREATE TABLE `ShopCommentReply` (
    `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
    `shopCommentId` int(11) NOT NULL COMMENT 'Shop Comment ID',
    `name` varchar(191) CHARACTER SET utf8mb4 NOT NULL DEFAULT '' COMMENT '名稱',
    `content` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '內容',
    `updateAt`  datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '更新時間',
    `createAt`  datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '新增時間',
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;",

  'down' => "DROP TABLE `ShopCommentReply`;",

  'at' => "2018-12-16 17:42:59"
];
