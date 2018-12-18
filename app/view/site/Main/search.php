<div class="mainWrap">
  <h2><?php echo $h2; ?></h2>
  <div class="pagination">
    <div><?php echo implode('', $pagesStr); ?></div>
  </div>
    
  <div class="m-shopList">
    <ul>
      <?php foreach($objs as $key => $obj): ?>
      <li class="shopData">
        <div class="shopHead">
          <a href="<?php echo Url::base('shop/' . $obj->id . '/show'); ?>"><?php echo $obj->name; ?></a>
        </div>
        <div class="shopDetail">
          <div class="photo">
            <img src="<?php echo Url::base('asset/img/shop/' . ($obj->photo ? $obj->photo->photoNum : 13) . '.png'); ?>" alt="">
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
                  <ul class="foodTags"> <?php echo $obj->foodSubs ? implode('', array_map(function($sub) {
                      return '<li>' . $sub->name . '</li>';
                    }, $obj->foodSubs)) : ''; ?>
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
              <button class="like u-hoverOpacity" data-id="<?php echo $obj->id; ?>">LIKE</button>
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
</div>
       