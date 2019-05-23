<?php include ("include/header.php"); ?>
	<!-- <script src="js2/index2.js"></script>	 -->	
<?php if(!$session->is_signed_in()){ redirect("index.php");} ?>
<div style="margin:0px; width:100%;" class="container">
	<div class="row">
		<?php include ("include/user_sidebar.php"); ?>
		<div class="col-lg-11 main-content">
			<?php 
				if(isset($_GET['id'])){
					$id = $_GET['id'];
				}else{
					redirect("user.php");
				}

				$post = News::find_by_id($id);

				$post->status = 1;
				$post->update();
			?>
			<?php include ("include/menu.php"); ?>
			<div class="row">
				<?php //include("include/express_update.php"); ?>
				<div class="col-lg-1"></div>
				<?php include ("include/single_news.php"); ?>
			</div>				
		</div>
	</div>
</div>

<?php include ("include/footer.php"); ?>