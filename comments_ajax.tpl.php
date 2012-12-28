<?php
/**
 * List variables
 * $comment
 * $user
 * $avatar
 * $profile
 */
?>
<div class="view view-newsfeed-comment view-id-newsfeed_comment view-display-id-block_1">
  <div class="view-content">
    <div class="item-list">    
      <ul>          
        <li class="views-row views-row-1 views-row-odd views-row-first">  
          <div class="views-field views-field-nothing">        
            <span class="field-content">
              <div class="author_image">
                <a target="_blank" href="<?php print "/users/" . $user->uid?>" >
                  <?php print $avatar?>
                </a>
              </div>
              <div class="comment_detail">
                <a href="<?php print "/users/" . $user->uid?>" ><?php print $profile->title?></a>
                <div class="comment_body"><?php print $comment->comment ?></div>
              </div>
              <div class="comment_info">
                <ul>
                  <li class="date"><?php print date("M d, Y \a\t g:i A", $profile->timestamp)?></li>
                  <li><a href="<?php print "/comment/reply/" . $comment->nid . '/' . $comment->cid ?>">Reply</a></li>
                  <li class="fb_like"><fb:like colorscheme="dark" font="verdana" action="like" width="350" show_faces="false" layout="button_count" href="http://staging.academicroom.com/node/" fb-xfbml-state="rendered" class="fb_edge_widget_with_comment fb_iframe_widget"><span style="height: 20px; width: 75px;"><iframe scrolling="no" id="fead0fafee6a38" name="f76ef714a29e" style="border: medium none; overflow: hidden; height: 20px; width: 75px;" title="Like this content on Facebook." class="fb_ltr" src="http://www.facebook.com/plugins/like.php?api_key=&amp;locale=en_US&amp;sdk=joey&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D18%23cb%3Dfaa629810737a8%26origin%3Dhttp%253A%252F%252Fstaging.academicroom.com%252Ff193475af54f7dc%26domain%3Dstaging.academicroom.com%26relation%3Dparent.parent&amp;href=http%3A%2F%2Fstaging.academicroom.com%2Fnode%2F&amp;node_type=link&amp;width=350&amp;font=verdana&amp;layout=button_count&amp;colorscheme=dark&amp;action=like&amp;show_faces=false&amp;extended_social_context=false"></iframe></span></fb:like></li>
                  <li><a>Report</a></li>
                </ul>
              </div>
            </span>  
          </div>
        </li>
      </ul>
    </div>    
  </div>
</div>

