<div class="mainWrap">
    <h2>美食排行榜結果</h2>
    <div class="pagination">
        <div><?php echo implode('', $pagesStr); ?></div>
    </div>
    <div class="m-shopList">
        <ul>
            <?php foreach($objs as $obj): ?>
            <li class="shopData">
                <div class="shopHead">
                    <a href="">
                        <span class="rankNum"><?php echo $obj->id; ?></span>
                        <?php echo $obj->name; ?>
                    </a>
                </div>
                <div class="shopDetail">
                    <div class="photo">
                        <img src="<?php echo $obj->photo ? Url::base('asset/img/shop/' . $obj->photo->photoNum . '.png') : ''; ?>" alt="">
                    </div>
                    <div class="info">
                        <div class="shopTitle">
                            <p><?php echo $obj->title; ?></p>
                        </div>
                        <table>
                            <tr>
                                <th>分類</th>
                                <td><?php echo $obj->foodMain->name; ?></td>
                            </tr>
                            <tr>
                                <th>標籤</th>
                                <td>
                                    <ul class="foodTags">
                                        <?php 
                                            echo $obj->foodSubs ? implode('', array_map(function($sub) {
                                                return '<li>' . $sub->name . '</li>';
                                            }, $obj->foodSubs)) : '';
                                        ?>
                                       
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>營業時間</th>
                                <td><?php echo $obj->openTime; ?></td>
                            </tr>
                            <tr>
                                <th>地址</th>
                                <td><?php echo $obj->address; ?></td>
                            </tr>
                        </table>
                        <div class="linkBtn">
                            <button class="like is-active u-hoverOpacity">LIKE</button>
                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="pagination">
        <div><?php echo implode('', $pagesStr); ?></div>
    </div>
</div>

<div class="rightWrap">
    <?php echo isset($rightMenu) ? $rightMenu : ''; ?>
 <!--    <div class="r-searchMenu">
        <p class="searchTitle"><span>查詢</span></p>
        <div class="searchArea">
            <p class="typeTitle">地點</p>
            <ul class="main">
                <li class="m-list is-active">
                    <p class="mainList"><span>台北市</span></p>
                    <ul class="sub">
                        <li>
                            <input type="checkbox" id="s-area0">
                            <label for="s-area0">全台北市</label>
                        </li>
                        <li>
                            <input type="checkbox" id="s-area1" checked>
                            <label for="s-area1">信義區</label>
                        </li>
                        <li>
                            <input type="checkbox" id="s-area2">
                            <label for="s-area2">士林區</label>
                        </li>
                    </ul>
                </li>
                <li class="m-list">
                    <p class="mainList"><span>新北市</span></p>
                </li>
            </ul>
        </div>
        <div class="searchFood">
            <p class="typeTitle">分類</p>
            <ul class="main">
                <li class="m-list">
                    <p class="mainList"><span>中式料理</span></p>
                </li>
                <li class="m-list is-active">
                    <p class="mainList"><span>日式料理</span></p>
                    <ul class="sub">
                        <li>
                            <input type="checkbox" id="s-genre0">
                            <label for="s-genre0">全日式料理</label>
                        </li>
                        <li>
                            <input type="checkbox" id="s-genre1" checked>
                            <label for="s-genre1">居酒屋</label>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="btnArea">
            <button class="searchBtn">查詢</button>
            <button class="rankingBtn">排行榜</button>
        </div>
    </div> -->
</div>

