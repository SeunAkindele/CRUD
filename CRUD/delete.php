<?php include("include/header.php"); ?>
<?php
    if(!$session->is_signed_in()){ redirect("index.php");}
?>
<?php
    
    if(empty($_GET['id'])){

        redirect("admin.php");

    }

    $news = News::find_by_id($_GET['id']);

    if($news) {

        $news->delete();
        redirect('admin.php');

    } else {

        redirect("admin.php");

    }

?>