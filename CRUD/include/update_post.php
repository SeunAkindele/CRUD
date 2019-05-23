<?php 
	$post = News::find_by_id($id);
 ?>
<div class="col-md-8">
	<div class="form-group postss">
		<h4 class="title">
			<?php 
					$array = explode("-",$post->date); 
					$months = array('Jan', 'Feb', 'March', 'April', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
					echo "Posted on " . $months[$array[1]-1] . " " . $array[2] . ", " . $array[0];
			?> 			
		</h4>
		<div class="read-posts form-group"  id="details">
			<font class="name"><?php echo $post->title; ?></font>
			<span class="pull-right"><a onclick="return confirm('Delete post?');" href="delete.php?id=<?php echo $post->id; ?>"><i class="fa fa-times delete"></i></a></span>
		</div>
		<div class="form-group" id="detail">
			<?php echo $post->text; ?>
			<p>
				<br>
				Time: <?php echo $post->time; ?>
			</p>
		</div>
		
	</div>
</div>