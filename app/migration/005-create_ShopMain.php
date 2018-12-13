<?php defined('MAPLE') || exit('此檔案不允許讀取！');

return [
  'up' => "CREATE TABLE `ShopMain` (
    `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
    `name` varchar(191) CHARACTER SET utf8mb4 NOT NULL DEFAULT '' COMMENT '名稱',
    `areaMainId` int(11) NOT NULL COMMENT 'Area Main ID',
    `areaSubId` int(11) NOT NULL COMMENT 'Area Sub ID',
    `foodMainId` int(11) NOT NULL COMMENT 'Food Main ID',
    `title` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '標題',
    `content` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '內容',
    `tel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '電話',
    `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '地址',
    `station` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '車站',
    `holiday` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '假日',
    `openTime` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '營業時間',
    `latLong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '經緯度',
    `info` varchar(191) CHARACTER SET utf8mb4 NOT NULL DEFAULT '' COMMENT '資訊',
    `order` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
    `updateAt`  datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '更新時間',
    `createAt`  datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '新增時間',
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;",

  'down' => "DROP TABLE `ShopMain`;",

  'at' => "2018-12-13 14:48:37"
];
