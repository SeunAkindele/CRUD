
<div class="col-lg-1 sidebar">
	<a style="text-decoration: none; color:#c80;" href="user.php">
		<div class="link">
			<span>Inbox</span><?php $count = News::find_all(); if($count){foreach($count as $c){}?> <font style="background-color: white; border-radius: 100%;">&nbsp;<?php echo $c->count_post();?>&nbsp;</font><?php } ?>
		</div>
	</a>
</div>