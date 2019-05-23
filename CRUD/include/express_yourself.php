<?php 
	$news = new News();

	if(isset($_POST['create'])) {
		if($news){
			$news->title = $_POST['title'];
			$news->text = $_POST['text'];
			$news->date = date("y-m-d");
			$news->time = date("H:i:a");
			$news->status = 0;
			$news->create();
		}
	}
?>

<div class="col-md-3">
	<form action="admin.php" method="POST">
		<div class="form-group">
			<h4 class="title">Express yourself</h4>
			<input style="font-size: 12px;" class="form-control" type="text" placeholder="Title" name="title" required="required">
		</div>
		<div class="form-group">
			<textarea style="font-size: 12px;" class="form-control" placeholder="Body" name="text" required="required" rows="7"></textarea>
		</div>
		<div class="form-group">
			<input class="btn btn-sm color" type="submit" name="create" value="POST">
		</div>
	</form>
</div>