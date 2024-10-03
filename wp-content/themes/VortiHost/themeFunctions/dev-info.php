<?php
global $wpdb;
require_once( ABSPATH . 'wp-admin/includes/upgrade.php' ); 
require_once(ABSPATH .'wp-load.php');



add_menu_page('Developer Information', 'Developer Info', 'edit_themes', "developerInfo", "developerInfo",'',100099);



function developerInfo(){
	?>

<style>
    .dev-container {
        font-size: 20px;
        margin-top:20px;
    }
    .dev-container img {
        /*height:40px;
        width: 120px;*/
    }
    .dev-container td{padding:20px;}
    .dev-container span{}
</style>
<div class="dev-container">
    <table style="background:#fff; padding:20px;margin:0 auto;">
        <tr>
            <td width="200px"><img src="http://mind-labs.com/img/logo.png"></td>
            <td>MindLabs Systems Pvt. Ltd</td>
        </tr>
        <tr><td><span></span>Developers:</span></td><td>MLS062, MLS079, MLS091</td></tr>
        <tr><td><span>Delivered On:</span></td><td>Not Delivered</td></tr>
        <tr style="background:#74bcc7; color:#fff;"><td><span>Quick Contact:</span>&nbsp;&nbsp;&nbsp;</td><td><b>Phone:</b> +91-484-2108058 &nbsp;&nbsp;&nbsp;</td><td><b>Email:</b> info@mindbees.com</td></tr>

    </table>
</div>

<?php } ?>