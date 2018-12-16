<div class="f-mainContents u-container">
    <h2>
        <?php echo $obj->name; ?>
    </h2>
    <div class="linkBtn">
        <a href="<?php echo Url::base('shop/' . $obj->id . '/show'); ?>" class="back">回店家首頁</a>
    </div>
    <div class="shopContents">
        <h3><span class="comment">COMMENT</span></h3>
        <div class="commentList">
            <div class="pagination">
                <div><?php echo implode('', $pagesStr); ?></div>
            </div>
            
        <?php if($commentObjs): foreach($commentObjs as $comment): ?>
            <ul>
                <li class="c-list">
                    <div class="mainHead">
                        <p class="title"><?php echo $comment->title; ?></p>
                        <p class="name"><?php echo $comment->name; ?></p>
                        <p class="date"><?php echo $comment->createAt->format('Y/m/d H:i'); ?></p>
                    </div>
                    <div class="mainDetail">
                        <p class="mark">評分：<span><?php echo $comment->score; ?></span>分</p>
                        <div class="body"><?php echo $comment->content; ?></div>
                    </div>
                    <div class="replyList <?php if($comment->replies) { echo 'show'; } ?>">
                        <p class="replyTitle">回應</p>
                        <ul>
                    <?php if($comment->replies): foreach($comment->replies as $reply): ?>
                            <li class="r-list">
                                <div class="r-detail">
                                    <p class="r-name"><?php echo $reply->name; ?></p>
                                    <p class="r-date"><?php echo $reply->createAt->format('Y/m/d H:i'); ?></p>
                                    <div class="r-body"><?php echo $reply->content; ?></div>
                                </div>
                            </li>
                    <?php endforeach; endif; ?>
                    <?php if(count($comment->replies) > 2) : ?> <p class="more">顯示全部</p> <?php endif; ?>
                        </ul>
          
                    </div>
                    <form class="replyForm" method="POST" action="<?php echo Url::base('api/shop/' . $obj->id . '/comment/' . $comment->id . '/reply'); ?>">
                        <p class="replyFormTitle">回應投稿</p>
                        <table>
                            <tr>
                                <th>NAME</th>
                                <td><input type="text" name="name" placeholder="請寫您的名字" required></td>
                            </tr>
                            <tr>
                                <th>COMMENT</th>
                                <td><textarea name="content" cols="30" rows="10" placeholder="請寫回應" required></textarea></td>
                            </tr>
                        </table>
                        <input class="replyBtn" type="submit" value="送出">
                    </form>
                </li>
            </ul>
        <?php endforeach; endif; ?>
            <div class="pagination">
                <div><?php echo implode('', $pagesStr); ?></div>
            </div>
        </div>
        <form class="commentFrom" method="POST" action="<?php echo Url::base('shop/' . $obj->id . '/comment'); ?>">
            <p class="form-title">投稿</p>
            <table>
                <tr><th>NAME</th></tr>
                <tr><td><input type="text" name="name" class="full" placeholder="請寫您的名字" required></td></tr>
                <tr><th>SCORE</th></tr>
                <tr><td><input type="number" name="score" placeholder="請寫評分" required><span>分</span></td></tr>
                <tr><th>TITLE</th></tr>
                <tr><td><input type="text" name="title" class="full" placeholder="請寫標題" required></td></tr>
                <tr><th>COMMENT</th></tr>
                <tr><td><textarea name="content" id="" cols="30" rows="30" placeholder="請寫分享文" required></textarea></td></tr>
                <tr><td><button type="submit" class="u-hoverOpacity">投稿</button></td></tr>
            </table>
        </form>
    </div>
</div>
