<div class="col-md-8">
	<div class="form-group postss">
		<h5 class="title"><?php $count = News::find_all(); if($count){foreach($count as $c){}?>My posts  <font style="background-color: #c80; color:white; border-radius: 100%;">&nbsp;<?php echo $c->count_post();?>&nbsp;</font><?php } ?></h5>

		<?php 
			$posts= News::find_all();

			foreach($posts as $post):
		?>

		<div class="posts form-group"  id="details">
			<a href="admin_update.php?id=<?php echo $post->id; ?>" style="text-decoration: none;"><font class="name"><?php echo $post->title; ?></font></a>
			<span class="pull-right">
				<?php 
					$array = explode("-",$post->date); 
					$months = array('Jan', 'Feb', 'March', 'April', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
					echo $months[$array[1]-1] . " " . $array[2] . ", " . $array[0] . " | " . $post->time;
				 ?> 
				| <a href="admin_update.php?id=<?php echo $post->id; ?>"><i class="fa fa-gear update"></i></a> &nbsp;| &nbsp;<a onclick="return confirm('Delete post?');" href="delete.php?id=<?php echo $post->id; ?>"><i class="fa fa-times delete"></i></a>
			</span>
		</div>
	<?php endforeach; ?>
	</div>
</div>