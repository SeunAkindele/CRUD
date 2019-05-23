<?php 
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		redirect("admin.php");
	}

	$post = News::find_by_id($id);

	if(isset($_POST['update'])){
		if($post){
			$post->title=$_POST['title'];
			$post->text=$_POST['text'];
			$post->date=date("y-m-d");
			$post->time=date("H:i:a");
			$post->update();
		}
	}
?>
<form action="admin_update.php?id=<?php echo $id; ?>" method="POST">
<div class="col-md-3">
	<div class="form-group">
		<h4 class="title">Update this post</h4>
		<input style="font-size: 12px;" class="form-control" type="text" value="<?php echo $post->title; ?>" name="title" required="required">
	</div>
	<div class="form-group">
		<textarea style="font-size: 12px;" class="form-control" name="text" required="" rows="7"><?php echo $post->text; ?></textarea>
	</div>
	<div class="form-group">
		<input class="btn btn-sm color" name="update" type="submit" value="UPDATE">
	</div>
</div>
</form>