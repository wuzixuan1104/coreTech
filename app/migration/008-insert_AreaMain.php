<?php defined('MAPLE') || exit('此檔案不允許讀取！');

return [
  'up' => "INSERT INTO `AreaMain` (`id`, `name`, `order`) VALUES 
            (1, '台北市', 1),
            (2, '新北市', 2),
            (3, '台中市', 3),
            (4, '高雄市', 4),
            (5, '台南市', 5),
            (6, '桃園市', 6),
            (7, '新竹市', 7),
            (8, '宜蘭縣', 8),
            (9, '彰化縣', 9),
            (10, '屏東縣', 10),
            (11, '新竹縣', 11),
            (12, '苗栗縣', 12),
            (13, '南投縣', 13),
            (14, '花蓮縣', 14),
            (15, '基隆市', 15),
            (16, '雲林縣', 16),
            (17, '嘉義市', 17),
            (18, '台東縣', 18)
             ",

  'down' => "TRUNCATE TABLE `AreaMain`",

  'at' => "2018-12-13 15:26:21"
];
