<?php
/**
 * @package weather
 * @version 1.7.2
 */
/*
Plugin Name: meteo
Plugin URI: http://wordpress.org/plugins/weather.php/
Description: weather of your country
Author: lucas
Version: 1.7.2
Author URI: http://ma.tt/
*/
function weather(){
    $content = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=millau&appid=92c3fd34ea87fe572aaad5a6f99029fb&units=metric&lang=fr");
    $json= json_decode($content);
    if($json !== null){
        $temp = ($json->main->temp);
        $desc = ($json->weather[0]->description);
        $country = ($json->name);
		$icon = ($json->weather[0]->icon);
		$img = ("https://openweathermap.org/img/wn/$icon@2x.png");
    }?>
	<section id='container'>
   	<div id='town'><?php echo($country)?></div><br>
	<img id='img' src="<?php echo($img)?>" alt="">
	<div><?php echo ($temp)." C°"?></div>
    <div><?php echo($desc) ?></div>
	</section>
<?php }
// Now we set that function up to execute when the admin_notices action is called.
add_action( 'admin_notices', 'weather' );

// We need some CSS to position the paragraph.
function weather_css() {
	echo "
	<style type='text/css'>
	#container div{
		margin:0 10px
	}
	#container{
		display: flex;
		flex-direction: row;
		align-items:center
	}

	#img{
		width:50px
	}
	#dolly {
		float: right;
		padding: 5px 10px;
		margin: 0;
		font-size: 12px;
		line-height: 1.6666;
		background-color:black;
	}
	.rtl #dolly {
		float: right;
	}
	.block-editor-page #dolly {
		display: none;
	}
	@media screen and (max-width: 782px) {
		#dolly,
		.rtl #dolly {
			float: none;
			padding-left: 0;
			padding-right: 0;
		}
	}
	</style>
	";
}

add_action( 'admin_head', 'weather_css' );
?>