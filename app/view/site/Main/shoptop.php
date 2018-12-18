<h2><?php echo $obj->name; ?></h2>

<div class="linkBtn">
  <button class="like u-hoverOpacity" data-id="<?php echo $obj->id; ?>">LIKE</button>
  <a href="<?php echo Url::base('shop/' . $obj->id . '/comment'); ?>" class="comment">分享文</a>
</div>

<p class="shopTitle"><?php echo $obj->title; ?></p>

<div class="introduction">
  <?php echo $obj->content; ?>
</div>

<div class="shopContents">
  <h3><span class="photo">PHOTO GALLERY</span></h3>
  <div class="photoSlider">
    <ul>
      <li><img src="<?php echo Url::base('asset/img/shop/' . ($obj->photo ? $obj->photo->photoNum : '13') . '.png'); ?>"  alt=""></li>
    </ul>
    <div class="pagination">
      <span class="active"></span>
      <span class=""></span>
      <span class=""></span>
      <span class=""></span>
    </div>
    <div class="button-next"></div>
    <div class="button-prev"></div>
  </div>
</div>

<div class="shopContents">
  <h3><span class="access">ACCESS</span></h3>
  <div class="accessmap">
    <iframe frameborder="0" scrolling="no" style="width:100%;height:380px; border-right:0px;" src="//maps.google.com.tw/maps?f=q&amp;hl=zh-TW&amp;q=<?php echo $obj->latLong; ?>&amp;z=17&amp;output=embed"></iframe>
  </div>
</div>

<div class="shopContents">
  <h3><span class="imformation">IMFORMATION</span></h3>
  <div class="shopInfo">
    <table>
      <tr>
        <th>商家名稱</th>
        <td><?php echo $obj->name; ?></td>
      </tr>
      <tr>
        <th>商家分類</th>
        <td><?php echo $obj->foodMain->name; ?></td>
      </tr>
      <tr>
        <th>標籤</th>
        <td><?php echo implode('/', array_map( function($sub) { return $sub->name; }, $obj->foodSubs)); ?></td>
      </tr>
      <tr>
        <th>電話</th>
        <td><?php echo $obj->tel; ?></td>
      </tr>
      <tr>
        <th>地址</th>
        <td><?php echo $obj->address; ?></td>
      </tr>
      <tr>
        <th>捷運資訊</th>
        <td><?php echo $obj->station; ?></td>
      </tr>
      <tr>
        <th>公休日</th>
        <td><?php echo $obj->holiday; ?></td>
      </tr>
      <tr>
        <th>營業時間</th>
        <td><?php echo $obj->openTime; ?></td>
      </tr>
      <tr>
        <th>營業資訊</th>
        <td><?php echo $obj->info; ?></td>
      </tr>
      <tr>
        <th>更新時間</th>
        <td><?php echo $obj->updateAt->format('Y/m/d'); ?></td>
      </tr>
    </table>
  </div>
</div>
        