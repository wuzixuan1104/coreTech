<?php defined('MAPLE') || exit('此檔案不允許讀取！');

return [
  'up' => "CREATE TABLE `AreaSub` (
    `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
    `areaMainId` int(11) NOT NULL COMMENT '城市 ID',
    `name` varchar(191) CHARACTER SET utf8mb4 NOT NULL DEFAULT '' COMMENT '名稱',
    `order` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;",

  'down' => "DROP TABLE `AreaSub`;",

  'at' => "2018-12-13 14:46:38"
];
