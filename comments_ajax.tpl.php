<?php
/**
 * List variables
 * $comment
 * $user
 * $avatar
 */
?>
<div class="view view-newsfeed-comment view-id-newsfeed_comment view-display-id-block_1 view-dom-id-f8d83bc3ef5aa88aeb66a8d2b6067c68">
	<div class="view-content">
		<div class="views-row views-row-1 views-row-odd views-row-first">
			<div class="views-field views-field-nothing">
				<span class="field-content">
					<div class="author_image">
						<a target="_blank" href="<?php print "/users/" . $user->uid?>">
              <?php print $avatar?>
						</a>
					</div>
					<div class="comment_detail"><a href="<?php print "/users/" . $user->uid?>" ><?php print $user->name?></a><p>How do this function working?</p>
					</div>
					<div class="comment_info">
						<ul>
							<li class="date">Dec 24, 2012 at 3:00 PM</li>
							<li><a href="<?php print "/comment/reply/" . $comment->nid . '/' . $comment->cid ?>">Reply</a></li>
							<li class="fb_like"><fb:like colorscheme="dark" font="verdana" action="like" width="350" show_faces="false" layout="button_count" href="http://staging.academicroom.com/node/"></fb:like></li>
							<li><a>Report</a></li>
						</ul>
					</div>
				</span>
      </div>
    </div>
  </div>
</div>