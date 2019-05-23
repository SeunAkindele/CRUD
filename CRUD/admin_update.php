<?php include ("include/header.php"); ?>
<?php if(!$session->is_signed_in()){ redirect("index.php");} ?>
	<!-- <script src="js2/index2.js"></script>	 -->	
<div style="margin:0px; width:100%;" class="container">
	<div class="row">
		<?php include ("include/sidebar.php"); ?>
		<div class="col-lg-11 main-content">
			<?php include ("include/menu.php"); ?>
			<div class="row">
				<?php include("include/express_update.php"); ?>
				<div class="col-lg-1"></div>
				<?php include ("include/update_post.php"); ?>
			</div>				
		</div>
	</div>
</div>

<?php include ("include/footer.php"); ?>