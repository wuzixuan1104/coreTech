
<div class="mainWrap">
    <h2>台北市/信義區/日式料理/居酒屋 查詢結果</h2>
    <div class="pagination">
        <div><?php echo implode('', $pagesStr); ?></div>
    </div>
    
    <div class="m-shopList">
        <ul>
            <li class="shopData">
                <div class="shopHead">
                    <a href="">TEST1日式小小居酒屋</a>
                </div>
                <div class="shopDetail">
                    <div class="photo">
                        <img src="<?php echo Url::base('asset/img/shop/18.png'); ?>" alt="">
                    </div>
                    <div class="info">
                        <div class="shopTitle">
                            <p>好吃！好喝！好便宜！來TEST1日式小小居酒屋吧！</p>
                        </div>
                        <table>
                            <tr>
                                <th>分類</th>
                                <td>日式料理</td>
                            </tr>
                            <tr>
                                <th>標籤</th>
                                <td>
                                    <ul class="foodTags">
                                        <li>居酒屋</li>
                                        <li>綜合日式料理</li>
                                        <li>生魚片、壽司</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>營業時間</th>
                                <td>17:00 ～ 4:00</td>
                            </tr>
                            <tr>
                                <th>地址</th>
                                <td>台北市信義區〇〇路〇〇巷〇〇號〇〇樓</td>
                            </tr>
                        </table>
                        <div class="linkBtn">
                            <button class="like u-hoverOpacity">LIKE</button>
                        </div>
                    </div>
                </div>
            </li>
            <li class="shopData">
                <div class="shopHead">
                    <a href="">TEST2日式小小居酒屋</a>
                </div>
                <div class="shopDetail">
                    <div class="photo">
                        <img src="<?php echo Url::base('asset/img/shop/15.png'); ?>" alt="">
                    </div>
                    <div class="info">
                        <div class="shopTitle">
                            <p>好吃！好喝！好便宜！來TEST2日式小小居酒屋吧！</p>
                        </div>
                        <table>
                            <tr>
                                <th>分類</th>
                                <td>日式料理</td>
                            </tr>
                            <tr>
                                <th>標籤</th>
                                <td>
                                    <ul class="foodTags">
                                        <li>居酒屋</li>
                                        <li>生魚片、壽司</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>營業時間</th>
                                <td>24小時</td>
                            </tr>
                            <tr>
                                <th>地址</th>
                                <td>台北市信義區〇〇路〇〇巷〇〇號〇〇樓</td>
                            </tr>
                        </table>
                        <div class="linkBtn">
                            <button class="like is-active u-hoverOpacity">LIKE</button>
                        </div>
                    </div>
                </div>
            </li>
            <li class="shopData">
                <div class="shopHead">
                    <a href="">TEST3日式小小居酒屋</a>
                </div>
                <div class="shopDetail">
                    <div class="photo">
                        <img src="<?php echo Url::base('asset/img/shop/14.png'); ?>" alt="">
                    </div>
                    <div class="info">
                        <div class="shopTitle">
                            <p>好吃！好喝！好便宜！來TEST3日式小小居酒屋吧！</p>
                        </div>
                        <table>
                            <tr>
                                <th>分類</th>
                                <td>日式料理</td>
                            </tr>
                            <tr>
                                <th>標籤</th>
                                <td>
                                    <ul class="foodTags">
                                        <li>居酒屋</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>營業時間</th>
                                <td>每天到三點，每週日休</td>
                            </tr>
                            <tr>
                                <th>地址</th>
                                <td>台北市信義區〇〇路〇〇巷〇〇號〇〇樓</td>
                            </tr>
                        </table>
                        <div class="linkBtn">
                            <button class="like u-hoverOpacity">LIKE</button>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="pagination">
        <div><?php echo implode('', $pagesStr); ?></div>
    </div>
</div>
<div class="rightWrap">
    <?php echo isset($rightMenu) ? $rightMenu : ''; ?>
</div>
       