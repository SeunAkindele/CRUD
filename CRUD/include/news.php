<div class="col-md-8">
	<div class="form-group postss">
		<h5 class="title"><?php $counts = News::find_by_status(); if($counts){foreach($count as $cs){}?>Unread posts <font style="background-color: #c80; color:white; border-radius: 100%;">&nbsp;<?php echo $cs->count_unread_post();?>&nbsp;</font><?php } ?></h5>
		<?php 
			$posts= News::find_all();

			foreach($posts as $post):
				if($post->status==0){
		?>
					<div class="posts form-group"  id="details">
						<a href="single_news.php?id=<?php echo $post->id; ?>" style="text-decoration: none;"><font class="name"><?php echo $post->title; ?></font></a>
						<span class="pull-right">
							<?php 
								$array = explode("-",$post->date); 
								$months = array('Jan', 'Feb', 'March', 'April', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
								echo $months[$array[1]-1] . " " . $array[2] . ", " . $array[0] . " | " . $post->time;
							 ?> 
							| <a href="single_news.php?id=<?php echo $post->id; ?>"><i class="fa fa-angle-right more"></i></a></span>
					</div>
					<?php 
					}else{
						 ?>
						 <div class="read-posts form-group"  id="details">
							<a href="single_news.php?id=<?php echo $post->id; ?>" style="text-decoration: none;"><font class="name"><?php echo $post->title; ?></font></a>
							<span class="pull-right">
								<?php 
									$array = explode("-",$post->date); 
									$months = array('Jan', 'Feb', 'March', 'April', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
									echo $months[$array[1]-1] . " " . $array[2] . ", " . $array[0] . " | " . $post->time;
								 ?> 
								| <a href="single_news.php?id=<?php echo $post->id; ?>"><i class="fa fa-angle-right more"></i></a></span>
						</div>
					<?php 

				}

		?>
		<?php endforeach; ?>
	</div>
</div>