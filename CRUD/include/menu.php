<div class="row">
	<div class="col-lg-12">
		<span class="logout pull-right">
			<font class="name">&nbsp;
				<?php 

					$username = User::find_by_id($_SESSION['user_id']);
					echo $username->username;

				?>
			</font><?php if($username->id != 1) { ?> &nbsp;&nbsp;<a onclick="return confirm('Are you sure?');" href="logout.php"><i class="fa fa-power-off color"></i></a><?php }else{?>&nbsp;&nbsp;<a href="logout.php"><i class="fa fa-power-off color"></i></a><?php } ?>
			&nbsp;
		</span>
	</div>
</div>