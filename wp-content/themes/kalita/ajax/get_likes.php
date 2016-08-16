<?php 
require_once('../../../../wp-config.php');

global $post, $wpdb, $count;

$count=0;


$ip=$_POST['ip_adrress'];
$postID=$_POST['postID'];


/*****SELECT QUERY*****/

$res_out = $wpdb->get_results("SELECT * FROM `ka_post_likes` WHERE `post_id`='".$postID."' AND `ip_address`='".$ip."'");

if(!empty($res_out))
{
	
	if($res_out[0]->ip_address==$ip && $res_out[0]->post_id==$postID)
	{
		echo 2;
	}	
}
else
{
	/*****INSERT QUERY*****/
	$count=1;
	$wpdb->query("INSERT INTO `ka_post_likes`(`post_id`,`ip_address`,`like_count`) VALUES ('$postID','$ip','$count')");
	//echo 1;
	$liked = $wpdb->get_var($wpdb->prepare( "SELECT COUNT(like_count) FROM `ka_post_likes` WHERE `post_id`= %d", $postID) );
	
	echo '<div class="blog_like"><a href="javascript:void(0)" class="qode-like" id="qode-like-5" title="Like this" onClick="countLike('.$postID.');">'.$liked.'<span> Likes</span></a></div>';
}

?>