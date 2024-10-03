<?php
require_once( ABSPATH . 'wp-admin/includes/upgrade.php' ); 
require_once(ABSPATH .'wp-load.php');
global $wpdb;

add_action('admin_menu', 'add_Submenu');
function add_Submenu() {
		add_menu_page('User Manual', 'User Manual', 'edit_themes', "User-Manual", 'userManual');
	}
function userManual(){ ?>
<style type="text/css">
.usermanual{font:11px verdana, sans-serif; margin-top:20px; float:left; width:1000px; float:left; border:1px solid #ccc; padding:5px; background:#F3EEE1;}
.usermanual ul{padding:10px; float:left; width:25%;color: #891D2A;font-family: 'Dancing Script',cursive;font-weight: bold;}
.usermanual  div > ul{width:auto;}
.usermanual  ul li.first{font-size: 20px;}
.usermanual  ul li{font-size: 18px; background:#fff; padding:5px 10px;}
.usermanual  div > ul p{color:#000;}
.usermanual ul li a{cursor:pointer; color:#B40A0D;}
.usermanual div.cldv01{margin:10px; background:#fff; float:left; width:65%; padding:20px; font-size:13px; line-height:27px;}
.usermanual div.cldv01 img{border:3px solid;}
.spnblc{color:#891D2A; font-weight:bold; font-size:15px;}
</style>
<script type="text/javascript">
function jumpto(id){
	for(var i=1;i<=21;i++){
		if(i==id){
			document.getElementById('tab'+i).style.display = 'block';
			document.getElementById('tmenu'+i).style.background = '#F1EAEA';
		}else{
			document.getElementById('tab'+i).style.display = 'none';
			document.getElementById('tmenu'+i).style.background = '#ccc';
		}
	}
}
/*$('.usermanual > ul > li > a').click( function(){
	alert('dfjhdjhf');
});*/
</script>
<div class="usermanual">
	<ul>
		<li class="first">INDEX</li>
		<li id="tmenu1"><a onclick="jumpto(1);">Common Header</a></li>
		<li id="tmenu2"><a onclick="jumpto(2);">Common Footer</a></li>
		<li id="tmenu3"><a onclick="jumpto(3);">Home page</a></li>
		<li id="tmenu4"><a onclick="jumpto(4);">Awards and Partners</a></li>
		<li id="tmenu5"><a onclick="jumpto(5);">Career</a></li>
		<li id="tmenu6"><a onclick="jumpto(6);">Colocation</a></li>
		<li id="tmenu7"><a onclick="jumpto(7);">Company</a></li>
		<li id="tmenu8"><a onclick="jumpto(8);">Datacenter and Facilities</a></li>
		<li id="tmenu9"><a onclick="jumpto(9);">Dedicated Servers</a></li>
		<li id="tmenu10"><a onclick="jumpto(10);">Policies</a></li>
		<li id="tmenu11"><a onclick="jumpto(11);">Remote Backups</a></li>
		<li id="tmenu12"><a onclick="jumpto(12);">SSL Certificates</a></li>
		<li id="tmenu13"><a onclick="jumpto(13);">Testimonials</a></li>
		<li id="tmenu14"><a onclick="jumpto(14);">VPS Hosting</a></li>
		<li id="tmenu15"><a onclick="jumpto(15);">Contact Us</a></li>
		<li id="tmenu16"><a onclick="jumpto(16);">Spam Protection</a></li>
		<li id="tmenu17"><a onclick="jumpto(17);">Standard Web Hosting</a></li>
		<li id="tmenu18"><a onclick="jumpto(18);">linux web hosting & Windows web hosting</a></li>
		<li id="tmenu19"><a onclick="jumpto(19);">Blog page</a></li>
		<li id="tmenu20"><a onclick="jumpto(20);">Special Servers page</a></li>
		<li id="tmenu21"><a onclick="jumpto(21);">Legal Complaints page</a></li>
	</ul>
	<div class="cldv01">
		<div id="tab1" style="display:block;">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/themeFunctions/screen-shots/header.png" width="100%"  />
			<p>Common Header sections
			<ul>
				<li><h4>1) Site Logo</h4>
				<p>Goto admin > Theme settings > Header settings > Site logo.</p></li>
				<li><h4>2) Main Menu</h4>
				<p> You can add menus from admin > Appearance> menus. Select Main menu from theme settings section. Goto admin > Theme settings > Header settings > Main menu. 'Header settings' section.</p></li>
				<li><h4>3) Client area</h4>
				<p>You can enabel this button from admin side Theme settings > Header settings > Top Client login button link.</p>
				</li>
			</ul>
			</p>
		</div>
		<div id="tab2" style="display:none;">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/themeFunctions/screen-shots/footer.png" width="100%"  />
			<p>Common Footer sections can be managed from the theme settings section itself.
			<ul>
				<li><h4>1)Partners block</h4>
				<p>Goto admin > Theme settings > Footer settings > Footer partners block section.</p></li>
				<li><h4>2)Social Media block</h4>
				<p>To manage social media block on the site, go to admin > Theme settings > Social media Settings. From this settings section, you can provide the social media links and can enable/disable each media items.</p></li>
				<li><h4>3)Newsletter</h4>
				<p>Newsletter is integrated with the help of mail chimp. Installed one wordpress plugin 'MailChimp for WordPress Lite' for this functionality. And the form corresponding to the newsletter is inserted in the General settings section of the theme settings page.</p></li>
				<li><h4>4)Request a quote & Live Chat</h4>
				<p>Request a quote button links to its corresponding page. No settings section is provided for this button.
				Regarding Live Chat, There is one settings section we have added for Live Chat functionality. Go to admin > Theme Settings > General Settings section > Live Chat Script. Here you can enter chat script. Also there is an enable/disable option along with the script area.</p></li>
				<li><h4>5)Footer Menu 1</h4>
				<p>Add menu from admin > appearance > menus section. Then select footer menu from theme settings > Footer settings > Footer menu 1.</p></li>
				<li><h4>6)Footer Menu 2</h4>
				<p>Select footer menu from theme settings > Footer settings > Footer menu 2.</p></li>
				<li><h4>7)Footer Menu 3</h4>
				<p>Select footer menu from theme settings > Footer settings > Footer menu 3.</p></li>
				<li><h4>8)Copyright block</h4>
				<p>Goto admin > Theme settings > Footer settings > 'Footer Copyright Information block' section.</p></li>
			</ul>
			</p>
		</div>
		<div id="tab3" style="display:none;">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/themeFunctions/screen-shots/home-admin.png" width="100%"  />
			<p>Apart from the common header and footer sections, Home page will have the following sections and most of them can be managed from the admin side 'home page' itself.</p>
		<ul>
			<li>
				<h4>1)Home page banners</h4>
				<p>There is 3 custom editors are added in the home page with labels 'Set home page banner 1', 'Set home page banner 2' and 'Set home page banner 3'. </p>
			</li>
			<li>
				<h4>2)"Why Choose AltusHost" block</h4>
				<p>Manage contents from the admin page 'Footer feature content' block. </p>
			</li>
			<li>
				<h4>3)"Choose your Plan" block</h4>
				<p>Manage contents from the 'Choose your plan home' block on admin side 'Home page' page.</p>
			</li>
			<li>
				<h4>4)Testimonials slider block</h4>
				<p>Add testimonials from admin > testimonials. Testimonial Slider settings are available in admin > Theme Settings.</p>
			</li>
		</ul>
		</div>
		<div id="tab4" style="display:none;">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/themeFunctions/screen-shots/awards-n-partners.png" width="100%"  />
			<p>For managing Awards and Partners page contents , we have created one settings page at <b>admin > Awards and Partners</b>. From this page you can add/edit/delete both Awards and Partners. Rest of the page contents can be manged from the admin side 'Awards and Partners' page itself. Goto <b>admin > pages > Awards and partners</b>.</p>	
			<ul>
				<li><h4>1.Inner banner</h4>
				<p>For all the pages , we have created one custom editor option 'Header Banne content' for managing the inner banner content. Inner the absence of content in this field, it will show the current page title only.</p></li>
				<li><h4>2.'Why choose us'</h4>
				<p>Manage contents from the 'Choose your plan home' block from the corresponding page on admin side.</p></li>
				<li><h4>3.'Awards' description block</h4>
				<p>There is one custom editor option 'Description for Partners section in Awards and Partners page
' is added in the admin side page to manage this section.</p></li>
				<li><h4>4.'Partners' description block</h4>
				<p>You can find out one section 'Description for Awards section in Awards and Partners page' in admin side page to manage this section.</p></li>
			</ul>
		</div>
		<div id="tab5" style="display:none;">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/themeFunctions/screen-shots/vacancies.png" width="100%"  />
			<p>For Career page, we have created one new custom post type 'Vacancy' with 'Location' as the custom custom taxonomy(vacancy categories). With this concept, you can add vacancy details just like posts and can categorise them according to the various locations. Please check this section at Admin > Vacancies. you can add various locations from admin> Vacancies > Locations. After adding a new vacancy assign needed location for that particular vacancy.</p>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/themeFunctions/screen-shots/career-admin.png" width="100%"  />
			<ul>
				<li><h4>1. Career page main content</h4>
				<p>Main content(bottom of the banner section) can be managed from the admin side 'Career' page itself.</p></li>
				<li><h4>2. 'Altus Perks' section</h4>
				<p>Can be managed from admin > pages > 'Career' > Footer feature content section.</p></li>
				<li><h4>3. Open positions</h4>
				<p>Open position section contents are taking dynamically from the published vacancies list. All the published vacancies will be dislpayed here in category(location) basis. Header description part of this section can be managed from admin side 'Career' page section 'Description for Open position block'. </p></li>
			</ul>
		</div>
		<div id="tab6" style="display:none;">
			<p> Main contents of Colocation page can be managed from the corresponding admin side page itself.</p>
			<ul>
				<li><h4>Request A Quote form</h4>
				<p>'Request A Quote' form is managing using the 'Contact form 7' plugin. Goto admin > Contact > '	Request a quote - Colocation'. Edit SendTo Email address and other details from this quote form.</p></li>
				<li><h4>'Why Choose AltusHost' block</h4>
				<p>Can be managed from admin > pages > 'Colocation' > Footer feature content section.</p></li>
			</ul>
		</div>
		<div id="tab7" style="display:none;">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/themeFunctions/screen-shots/company-admin.png" width="100%"  />
			<p> The whole company page content can be managed from the corresponding admin side page. </p>
			<ul>
				<li><h4>Join Us Today</h4>
				<p>Can be managed from admin > pages > 'Company' > 'Content for Join Us Today Block' section.</p></li>
				<li><h4>Why Choose AltusHost</h4>
				<p>Can be managed from admin > pages > 'Company' > Footer feature content section.</p></li>
			</ul>
		</div>
		<div id="tab8" style="display:none;">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/themeFunctions/screen-shots/datacenter-admin.png" width="100%"  />
			<p> "Data Centers & Facilites" page mainly have following sections.</p>
			<ul>
				<li><h4>1. Main Content(botton sectin of banner section)</h4>
				<p>Main content of the Datacenters page can be managed from the page content editor itself.</p></li>
				<li><h4>2. Map area</h4>
				<p>We have provided one section in its admin page with label ' Set Latitude and Longitude for the Google Map in Datacenters page' to manage the map coordinates. The coordinates should be seperated by comma(',').</p></li>
				<li><h4>3. Bottom section of Map area</h4>
				<p>This section can be managed from admin > pages > 'Data centers & Facilities' > 'Bottom section of Map in Datacenters page' section.</p></li>
				<li><h4>4. Our Datacenters block</h4>
				<p>Can be managed from admin > pages > 'Data centers & Facilities' > 'Our Datacenters block' section.</p></li>
			</ul>
			<p>All of these sections can be managed from the corresponding admin side page itself.</p>
		</div>
		<div id="tab9" style="display:none;">
			<p>Dedicated server page contents can be managed from the corresponding admin side page and dedicated servers settings page. We have created one settings page for this page on admin side at admin > Dedicated Servers. From this page, we can add servers and server types like 'Standard Servers','High End Servers' etc..</p>
			<p>Header banner content and footer feature content can be managed from the admin side page 'Dedicated Servers' itself.</p>
		</div>
		<div id="tab10" style="display:none;">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/themeFunctions/screen-shots/policies-admin.png" width="100%"  />
			<p>In the policies page, we have created one parent/main policy page with the options to add 'Header banner content' and 'Footer feature content' as per the deisgn. Both of these sections can be managed from the 'Policies' page itself. And the different sections/types of policies are added as the sub pages of thiss 'Policies' page. The side bar list with 'Terms of Services', 'Refund Policy', 'Privacy Policy', 'NO SPAM/UCE Policy' etc are the titles of policies sub pages. And theright sidebar content is the sub page content only.</p>
			<p>If you want to add one more policy into the list, you can add a new page from admin side by taking 'Policies' page as the parent page.</p>
		</div>
		<div id="tab11" style="display:none;">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/themeFunctions/screen-shots/remote-admin.png" width="100%"  />
			<p>The main sections of Remote Backups page are listed below.</p>
			<ul>
				<li><h4>1. Main content/Entry text</h4>
				<p>This content can be managed from the content editor of the corresponding admin side page.</p></li>
				<li><h4>2. Storage Only Block</h4>
				<p>Can be managed from admin > pages > 'Remote Backups' > Storage Only Block section.</p></li>
				<li><h4>3. Dedicated Storage Server Block</h4>
				<p>Can be managed from admin > pages > 'Remote Backups' > Dedicated Storage Server Block section.</p></li>
				<li><h4>4. Remote Backup Features</h4>
				<p>Can be managed from admin > pages > 'Remote Backups' > Footer feature content section.</p></li>
			</ul>
		</div>
		<div id="tab12" style="display:none;">
			<p>There is one special settings page on admin side for SSL page. From that page you can add SSL certificates. Goto admin > SSL to find out the settings page.</p>
			<ul>
				<li><h4>1. SSL page entry text</h4>
				<p>Goto admin > pages > SSL. Manage content by editing SSL page editor.</p></li>
				<li><h4>2. SSL Certificates</h4>
				<p>Goto admin > SSL to add new SSL Certificates.</p></li>
				<li><h4>3. GlobalSign Features Includes</h4>
				<p>Can be managed from admin > pages > 'SSL' > Footer feature content section.</p></li>
			</ul>
		</div>
		<div id="tab13" style="display:none;">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/themeFunctions/screen-shots/testimonial.png" width=""  />
			<p>Testimonials are added as custom post types in this site, so that you could manage testimonials just like Wordpress posts. Goto admin > Testimonials page. </p>
			
			<p>From this section you can add/edit/delete testimonials. Add name, testimonial content, designation from the corresponding pages. Client photo should be added as the testimonials 'Featured image' section. Preferred image size is 81 X 80 pixels.</p>
			<p><h4>Testimonial settings section</h4></p>
			
			<p>Goto admin > Theme Settings > Testimonial Settings section. From this section, you can set the following options.</p>
			<ul>
				<li><h4>1. Testimonials count:- </h4>
				<p>The number of testimonial items in the testimonial slider block on footer section of the site.</p></li>
				<li><h4>2. Testmonial head:- </h4>
				<p>The general heading section for the footer testimonial slider block.</p></li>
			</ul>
			<p>Testimonial page will list all the published testimonials in the site.</p>
		</div>
		<div id="tab14" style="display:none;">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/themeFunctions/screen-shots/vps-admin.png" width="100%"  />
			<p>Goto admin > Pages > 'VPS' page to manage the contents of this page.</p>
			<ul>
				<li><h4>1. Main content/Entry content</h4>
				<p>This section can be managed from the corresponding page's content part from admin side.</p></li>
				<li><h4>2. VPS Hosting section</h4>
				<p>Goto admin > Pages > 'VPS' > VPS Hosting Block Content</p></li>
				<li><h4>3. VPS Hosting Features</h4>
				<p>Can be managed from admin > pages > 'VPS' > Footer feature content section</p></li>
			</ul>
		</div>
		<div id="tab15" style="display:none;">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/themeFunctions/screen-shots/contact-us.png" width="100%"  />
			<p>Contact Us page content can be managed from the admin side contact us page. The Contact form is integrated using the Contact form 7 plugin. With that plugin you can easily manage the form from admin side itself. For the form edits, please got admin > Contact and select 'Contact Us'. Most of the other settings of this page can be managed from the admin side page itself with the help of some custom options such as 'Header Banner Content', 'Latitude and Longitude for the Google Map' and 'Address block on Contact Us page'.</p>
		</div>
		<div id="tab16" style="display:none;">
			<p>Spam Protection page contents can be managed from the wordpress admin side itself. Goto admin > pages > Spam protection . You can  Set content for <b>'How It works'</b> block on Spam Protection page from the admin side custom editor option.</p>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/themeFunctions/screen-shots/spam-protection.png" width="100%" />
		</div>
		<div id="tab17" style="display:none;">
			<p>Standard Web Hosting page is divided into a number of sections.</p>
			<ul>
				<li><h4>1. Header block</h4>
				<p>'Header banner content' section of corresponding admin side page.</p></li>
				<li><h4>2. Web_Hosting entry content</h4>
				<p>This section can be managed from the corresponding page's content part from admin side.</p></li>
				<li><h4>3. List of web hosting packages</h4>
				<p>Goto admin > Web Hosting to manage standard web hosting packages.</p></li>
				<li><h4>4. Web Hosting Features Text block</h4>
				<p>This section can be managed from the admin side page 'Standard Web Hosting'(not from the web hosting settings section).</p></li>
			</ul>
			<br />
			<p>All the features listed in the web hosting page are sub devided into 2 , normal and top features. You can assign each of these features from the admin side webhosting settings page. You can add/edit these features from the admin side Web hosting settings page. While adding each of the features, choose feature type as Normal feature or Top feature.</p>
		</div>
		<div id="tab18" style="display:none;">
			<p>Goto admin > VPS Hosting to manage Linux and Windows web hosting packages. Rest of the page contents can be managed from the respective admin pages. We have created one page template 'VPS Hosting Page' for these VPS Hosting pages. After selecting this template, you will have an extra option in the right top of the page editor with label 'Select VPS Hosting'. With this option, you can choose the VPS Hosting package to be shown in that page.</p>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/themeFunctions/screen-shots/vps-hosting.png" width="100%" />
		</div>
		<div id="tab19" style="display:none;">
			<p>We have created one category 'Blog' for the blog section. You can add posts into this category from admin side. There is one dedicated category template 'category-blog.php' is created for displaying blog posts.</p>
		</div>
		<div id="tab20" style="display:none;">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/themeFunctions/screen-shots/special.png" width="100%"  />
			<p>Special servers can be managed from the from admin side Dedicated servers page, Goto admin > Dedicated servers. Here you can add special servers using a check box option. Other sections of the specials page can be managed from the corresponding Wordpress page from admin side itself. </p>
		</div>
		<div id="tab21" style="display:none;">
			<p>Form admin > Legal page , you can manage the contents of existing options.</p>
		</div>
	</div>
</div>
<?php } ?>