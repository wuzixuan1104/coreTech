<?php defined('MAPLE') || exit('此檔案不允許讀取！');

return [
  'up' => "CREATE TABLE `ShopPhoto` (
    `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
    `shopMainId` int(11) NOT NULL COMMENT 'Shop Main ID',
    `photoNum` int(11) COMMENT '圖片序號',
    `order` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
    `updateAt`  datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '更新時間',
    `createAt`  datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '新增時間',
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;",

  'down' => "DROP TABLE `ShopPhoto`;",

  'at' => "2018-12-13 14:49:12"
];
