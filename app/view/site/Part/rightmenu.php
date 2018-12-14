<div class="r-searchMenu">
    <p class="searchTitle"><span>查詢</span></p>
    <div class="searchArea">
        <p class="typeTitle">地點</p>
        <ul class="main">
            <?php echo implode('', array_map(function($main) use ($areas) {
                    if(!$main->subs) return '';

                    $all = '<li><input type="checkbox" name="area[]" value="-1"><label>全' . $main->name . '</label></li>';
                    $subs = '<ul class="sub">' . $all . implode('', array_map(function($sub) use ($areas, &$active) {
                                $active = $active || in_array($sub->id, $areas) ? 'is-active' : ''; 
                                return '<li><input type="checkbox" id="' . $sub->id . '" name="area[]" value="' . $sub->id . '" ' . (in_array($sub->id, $areas) ? 'checked' : '') . '><label for="' . $sub->id . '">' . $sub->name . '</label></li>';
                            }, $main->subs )) . '</ul>';
                    
                    return '<li class="m-list ' . $active . '"><p class="mainList"><span>' . $main->name .'</span></p>' . $subs . '</li>';
                  
                }, \M\AreaMain::all(['order' => '`order` ASC']))); 
            ?>
        </ul>
    </div>
    <div class="searchFood">
        <p class="typeTitle">分類</p>
        <ul class="main">
            <?php echo implode('', array_map(function($main) use ($foods) {
                    if(!$main->subs) return '';

                    $all = '<li><input type="checkbox" name="area[]" value="-1"><label>全' . $main->name . '</label></li>';
                    $subs = '<ul class="sub">' . $all . implode('', array_map(function($sub) use ($foods, &$active) {
                                $active = $active || in_array($sub->id, $foods) ? 'is-active' : ''; 
                                return '<li><input type="checkbox" id="' . $sub->id . '" name="area[]" value="' . $sub->id . '" ' . (in_array($sub->id, $foods) ? 'checked' : '') . '><label for="' . $sub->id . '">' . $sub->name . '</label></li>';
                            }, $main->subs )) . '</ul>';
                    
                    return '<li class="m-list ' . $active . '"><p class="mainList"><span>' . $main->name .'</span></p>' . $subs . '</li>';
                  
                }, \M\FoodMain::all(['order' => '`order` ASC']))); 
            ?>
        </ul>
    </div>
    <div class="btnArea">
        <button class="searchBtn">查詢</button>
        <button class="rankingBtn">排行榜</button>
    </div>
</div>