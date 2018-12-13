<?php defined('MAPLE') || exit('此檔案不允許讀取！');

return [
   'up' => "INSERT INTO `FoodSub` (`id`, `foodMainId`, `name`, `order`) VALUES 
            (1, 1, '海鮮餐廳', 1),
            (2, 1, '北京菜', 2),
            (3, 1, '客家菜', 3),
            (4, 1, '四川菜', 4),
            (5, 1, '台菜餐廳', 5),
            (6, 1, '粵菜 港式飲茶', 6),
            (7, 1, '麵食點心', 7),
            (8, 1, '熱炒、快炒', 8),
            (9, 1, '其它中式料理', 9),
            (10, 2, '居酒屋', 1),
            (11, 2, '日式麵食專賣', 2),
            (12, 2, '生魚片、壽司專賣', 3),
            (13, 2, '文字燒、大阪燒', 4),
            (14, 2, '日式豬排專賣', 5),
            (15, 2, '日式燒肉', 6),
            (16, 2, '壽喜燒', 7),
            (17, 2, '綜合日式料理', 8),
            (18, 2, '其他日式料理', 9),
            (19, 3, '韓式料理', 1),
            (20, 3, '泰式料理', 2),
            (21, 3, '越南料理', 3),
            (22, 3, '其他亞洲料理', 4),
            (23, 4, '美式料理', 1),
            (24, 4, '義式料理', 2),
            (25, 4, '法式料理', 3),
            (26, 4, '其他異國料理', 4),
            (27, 5, '咖啡專賣', 1),
            (28, 5, '複合式', 2),
            (29, 5, '茶專賣', 3),
            (30, 5, '下午茶', 4),
            (31, 6, '小吃(素食)', 1),
            (32, 6, '中式(素食)', 2),
            (33, 6, '西式(素食)', 3),
            (34, 7, '漢堡、炸雞', 1),
            (35, 7, '披薩', 2),
            (36, 7, '其他速食', 3),
            (37, 8, '中式早餐', 1),
            (38, 8, '西式早餐', 2),
            (39, 8, '早午餐', 3),
            (40, 8, '其他類型早餐', 4),
            (41, 9, '鹹酥雞、炸雞排', 1),
            (42, 9, '焢肉飯', 2),
            (43, 9, '筒仔米糕', 3),
            (44, 9, '滷肉飯', 4),
            (45, 9, '滷味', 5),
            (46, 9, '鹹水雞', 6),
            (47, 9, '蚵仔煎', 7),
            (48, 9, '米粉湯', 8),
            (49, 9, '臭豆腐', 9),
            (50, 9, '麵攤、麵店', 10),
            (51, 9, '肉圓', 11),
            (52, 9, '蔥油餅、蔥抓餅', 12),
            (53, 9, '水煎包、生煎包', 13),
            (54, 9, '其他小吃', 14),
            (55, 10, '果汁', 1),
            (56, 10, '冰淇淋', 2),
            (57, 10, '飲料專賣店', 3),
            (58, 10, '剉冰、豆花', 4),
            (59, 11, '其他美食', 1)",

  'down' => "TRUNCATE TABLE `FoodSub`",

  'at' => "2018-12-13 15:43:48"
];