<?php
include ($_SERVER['DOCUMENT_ROOT'].'/includes/utils.php');

//if( isLoggedIn()
//) {
$pMysqli = new mysqli('127.0.0.1', 'root', '', 'openair');

$_name;
  extract($_POST);
  if($_POST['act'] == 'add-com'):
    $comment = htmlentities($comment);
    $resource_id = htmlentities($resource_id);
    $_SESSION["user"] = new \stdClass();
    $_SESSION["user"]->name =  htmlentities($name);

    $_name = htmlentities($name);
    $_SESSION["user"]->id = 10;
    $user_id = $_SESSION["user"]->id;

    //insert the comment in the database
    mysqli_query($pMysqli, "INSERT INTO comments (comment, resource_id, userid)
       VALUES('$comment', '$resource_id','$user_id')");
      // if(!mysqli_errno($_SESSION["connection"])){
      mysqli_query($pMysqli, 
        "UPDATE resource SET"
        ." num_comments = num_comments + 1"
        ." WHERE id=$resource_id");
    $_SESSION["user"]->comcnt = $_SESSION["user"]->comcnt - 1;
  ?>

    <div class="cmt-cnt">
      <img src="<?= $_SESSION["user"]->image ?>"/>
      <div class="thecom">
        <h5><?= $_SESSION["user"]->name ?></h5>
        <span class="com-dt"><?= date('d-m-Y H:i') ?></span>
        <br/>
        <p><?= $comment ?></p>
      </div>
    </div><!-- end "cmt-cnt" -->

<?php
   //}
  endif;
//} else {
//  echo "You must be logged in";
//  header('HTTP/1.1 401 You must be signed in to comment');
//}
?>