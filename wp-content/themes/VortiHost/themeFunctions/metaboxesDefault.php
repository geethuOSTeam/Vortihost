<?php  
/********************************************************
Create metabox options 
********************************************************/
require_once( ABSPATH . 'wp-admin/includes/upgrade.php' ); 
require_once(ABSPATH .'wp-load.php');
global $wpdb;
function get_default($case){
	$image = ''; 
	$content ='';	
	if($case=="banner"){ 
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/home1.png" width="100%" />';
		$content = htmlentities('<ul class="main-slider"> 
  <li>
    <div class="banner-content-main">
      <div class="banner-content-block">
        <div class="banner-content-div">
          <div class="banner-content-div-head">
            <h3>Dedicated Servers, Cloud Hosting, Colocation.<br>
              Start your <a href="#">free trial</a> today.</h3>
          </div>
          <div class="banner-content-div-cont">
            <div class="home-form">
              <div class="home-form-input">
                <input type="text" class="builder-input" placeholder="Email">
              </div>
              <div class="home-form-input">
                <input type="text" class="builder-input" placeholder="Password">
              </div>
            </div>
            <ul>
              <li><a href="#" class="create-account">Create an Account</a></li>
              <li><a href="#" class="chat-now">Chat Now</a></li>
            </ul>
            <p class="bnr-para">By signing up, you agree to the Terms of Service. You will not be billed <br>
              for any products or services without your consent.</p>
          </div>
        </div>
      </div>
    </div>
    <span class="banner-bg"><img src="wp-content/themes/Netrouting/img/banner-img-1.jpg" alt="#"></span> </li>
</ul>
');
	}else if($case=="partners_slider"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/home2.png" width="100%" />';
		$content = htmlentities('<div class="pitem"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/gray-logo-1.png" alt="#"></div>
<div class="pitem"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/gray-logo-2.png" alt="#"></div>
<div class="pitem"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/gray-logo-3.png" alt="#"></div>
<div class="pitem"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/gray-logo-4.png" alt="#"></div>
<div class="pitem"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/gray-logo-5.png" alt="#"></div>
<div class="pitem"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/gray-logo-6.png" alt="#"></div>
<div class="pitem"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/gray-logo-7.png" alt="#"></div>
<div class="pitem"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/gray-logo-8.png" alt="#"></div>
<div class="pitem"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/gray-logo-1.png" alt="#"></div>
<div class="pitem"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/gray-logo-2.png" alt="#"></div>
<div class="pitem"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/gray-logo-3.png" alt="#"></div>
<div class="pitem"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/gray-logo-4.png" alt="#"></div>
<div class="pitem"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/gray-logo-5.png" alt="#"></div>
<div class="pitem"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/gray-logo-6.png" alt="#"></div>
<div class="pitem"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/gray-logo-7.png" alt="#"></div>
<div class="pitem"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/gray-logo-8.png" alt="#"></div>
');
	}else if($case=="text_4col_features"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/home3.png" width="100%" />';
		$content = htmlentities('<h6>Experience the cloud with Netrouting</h6>
<h3>Hosting from Netrouting</h3>
<p class="pblc">Proven performance and reliability. Words best used to describe our cloud hosting services. Our SSD servers offer high-computing power and super fast storage on a distributed storage-platform. Daily snapshots are made of all virtual machines in the cloud. </p>
<div class="row">
  <div class="col-md-3 col-xs-6">
    <div class="hosting-netrouting-1"> <img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/hosting-netrouting-1.png" alt="#">
      <p class="pblc">Hosting services in Europe, United States and Latin America</p>
    </div>
  </div>
  <div class="col-md-3 col-xs-6">
    <div class="hosting-netrouting-1"> <img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/hosting-netrouting-2.png" alt="#">
      <p class="pblc">24x7x365 Ticket and <br/>
        Live Chat Support</p>
    </div>
  </div>
  <div class="col-md-3 col-xs-6">
    <div class="hosting-netrouting-1"> <img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/hosting-netrouting-3.png" alt="#">
      <p class="pblc">All services are backed by <br/>
        The Netrouting Guarantee</p>
    </div>
  </div>
  <div class="col-md-3 col-xs-6">
    <div class="hosting-netrouting-1"> <img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/hosting-netrouting-4.png" alt="#">
      <p class="pblc">Rapid 24x7 server <br/>
        provisioning</p>
    </div>
  </div>
</div>
');
	}else if($case=="text_plus_video"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/home4.png" width="100%" />';
		$content = htmlentities('<h6>Experience the cloud with Netrouting</h6>
<h3>Get to know Netrouting Datacenters</h3>
<p class="pblc">Take a virtual tour of datacenter Spijkenisse, The Netherlands</p>
<div class="home-datacenter-video">
  <p class="pblc">Netrouting #1 <span>Datacenter the Netherlands</span></p>
  <a class="youtube-video play-button cboxElement" href="https://www.youtube.com/embed/EvifSn54QL0"> <img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/play-btn.png" alt="#"> </a> <img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/video-img.jpg" alt="#"> </div>
<a href="#" class="cm-link">Explore our datacenters</a> ');
	}else if($case=="two_col_features"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/home5.png" width="100%" />';
		$content = htmlentities('<div class="different-head">
  <h3>What makes Netrouting different?</h3>
</div>
<div class="different-cont">
  <div class="row">
    <div class="col-sm-6">
      <div class="different-1"> <span class="different-icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/different-1-a.png" alt="#"></span>
        <h3>Global Internet Backbone</h3>
        <p class="pblc">At Netrouting you profit from blazing fast network speeds with low latency, resiliency and worldwide coverage. fast network speeds with low latency, resiliency </p>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="different-1"> <span class="different-icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/different-1-b.png" alt="#"></span>
        <h3>Start immediately</h3>
        <p class="pblc">At Netrouting you profit from blazing fast network speeds with low latency, resiliency and worldwide coverage. fast network speeds with low latency, resiliency </p>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="different-1"> <span class="different-icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/different-1-c.png" alt="#"></span>
        <h3>100% Money Back Guarantee</h3>
        <p class="pblc">At Netrouting you profit from blazing fast network speeds with low latency, resiliency and worldwide coverage. fast network speeds with low latency, resiliency </p>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="different-1"> <span class="different-icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/different-1-d.png" alt="#"></span>
        <h3>24 x 7 Support</h3>
        <p class="pblc">At Netrouting you profit from blazing fast network speeds with low latency, resiliency and worldwide coverage. fast network speeds with low latency, resiliency </p>
      </div>
    </div>
  </div>
</div>
<a href="#" class="cm-link">The Netrouting Gurantee</a> ');
	}else if($case=="plan_choice_block"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/home6.png" width="100%" />';
		$content = htmlentities('<div class="container">
  <div class="different-head">
    <h3>Make your Choice</h3>
    <p class="pblc">We are the provider you\'re looking for. <span class="spnblc">Not convinced just yet?</span> <br>
      Check out our competitive packages!</p>
  </div>
</div>
<div class="make-choice-cont">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="make-choice">
          <h4>Cloud hosting</h4>
          <img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/make-choice-1.png" alt="#">
          <h3>$199 / <span class="spnblc">mo</span></h3>
          <p class="pblc">Flexible computing power,<br/>
            memory, network </p>
          <a href="#" class="configure-btn">Configure </a> </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="make-choice">
          <h4>Dedicated server</h4>
          <img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/make-choice-2.png" alt="#">
          <h3>$199 / <span class="spnblc">mo</span></h3>
          <p class="pblc">Flexible computing power,<br/>
            memory, network </p>
          <a href="#" class="configure-btn">Configure </a> </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="make-choice">
          <h4>Colocation</h4>
          <img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/make-choice-3.png" alt="#">
          <h3>$199 / <span class="spnblc">mo</span></h3>
          <p class="pblc">Flexible computing power,<br/>
            memory, network </p>
          <a href="#" class="configure-btn">Configure </a> </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="make-choice">
          <h4>Build your own</h4>
          <img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/make-choice-4.png" alt="#">
          <h3><span class="spnblc">Start</span>$199 / <span class="spnblc">mo</span></h3>
          <p class="pblc">Fully Customizable Over 1000<br/>
            hardware configurations available<br/>
            SSD, SATA, SAS drives</p>
          <a href="#" class="configure-btn">Configure </a> </div>
      </div>
    </div>
  </div>
</div>');
	}else if($case=="home_datacenter_loc"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/home7.png" width="100%" />';
		$content = htmlentities('<div class="map-icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/map-icon.png" alt=""></div>
<h3>Offering services out of <span>14 datacenters</span> in <br>
  8 countries and growing</h3>
<div class="choose-location">
  <div class="row">
    <div class="col-sm-8">
      <div class="text-field">
        <input type="text" name="" class="form-control input-box" placeholder="Choose the best location based on latency">
      </div>
    </div>
    <div class="col-sm-4">
      <div class="btn-box">
        <input type="submit" class="search-btn" value="view all location">
      </div>
    </div>
  </div>
</div>');
	}else if($case=="netrouting_guarantee"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/gurarantee.png" width="100%" />';
		$content = htmlentities('<h4>commitment OF netroting </h4>
<div class="row">
  <div class="col-sm-3">
    <div class="icon-block"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/img-guarantee.png" alt=""></div>
  </div>
  <div class="col-sm-9">
    <div class="para-block">
      <h3>The Netrouting Guarantee</h3>
      <br>
      <p class="pblc"> At Netrouting we are committed to one hundred percent customer satisfaction. We can only reach this goal by delivering on our promises. However at Netrouting we are just a bit different from the rest, we do not only say what we do, but we guarantee it. This page briefly describes some of the key elements of our guarantee to customers. </p>
      <div class="two-col-listing">
        <div class="row">
          <div class="col-sm-6">
            <div class="item cm-height">
              <p class="pblc"><span class="icon-icon-3">&nbsp;</span>24x7x365 support</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="item cm-height">
              <p class="pblc"><span class="icon-icon-4">&nbsp;</span>Pro-active service monitoring</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="item cm-height">
              <p class="pblc"><span class="icon-icon-5">&nbsp;</span>Multilingual sales and support</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="item cm-height">
              <p class="pblc"><span class="icon-icon-6">&nbsp;</span>10 Day Money Back Guarantee</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
');
	}else if($case=="multiple_datacenters"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/twin1.png" width="100%" />';
		$content = htmlentities('<div class="gray-interconnecting-head">
  <h3>Multiple datacenters - interconnecting Infrastructure</h3>
  <p class="pblc">Lorem ipsum dolor sit amet, odio graeci eruditi et qui, liber ornatus consetetur pro cu. Nibh fuisset percipitur vim ad, ad qui scaevola facilisi disputando. Ei vim diam iudico, eos hinc eius doming ut. Porro diceret at eam, ei minim mediocritatem vim. </p>
</div>
<div class="gray-interconnecting-main"> <img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/img-gray-interconnecting.png" alt=""> </div>');
	}else if($case=="twin_datcntr_advntages"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/twin2.png" width="100%" />';
		$content = htmlentities('<div class="twin-advantage-head">
  <h3>Netrouting Twin datacenter advantages</h3>
</div>
<div class="twin-advantage-main">
  <div class="row">
    <div class="col-sm-6">
      <div class="twin-advantage">
        <h5>Co-location at two geographically separate locations.</h5>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="twin-advantage">
        <h5>Free data transport between both locations</h5>
        <p>(cross-connects provided by a special transport network)</p>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="twin-advantage">
        <h5>Both datacenters are using a different/ independent power grid in the Netherlands </h5>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="twin-advantage">
        <h5>Usage of 2 different ip networks for your routers</h5>
        <p>(different ASN, different routers).</p>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="twin-advantage">
        <h5>Dark fiber or waves between both datacenters.</h5>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="twin-advantage">
        <h5>Use "1 ip simultaneously on 2 locations". Anycast!</h5>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="twin-advantage">
        <h5>Buy your ip-transit local or directly from Frankfurt and Amsterdam. The best of both worlds!</h5>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="twin-advantage">
        <h5>Unique network traffic control by the Serverius client panel</h5>
      </div>
    </div>
  </div>
</div>');
	}else if($case=="location_table"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/location1.png" width="100%" />';
		$content = htmlentities('<table class="table">
					<tr>
						<th>METRO REGION</th>
						<th>COUNTRY</th>
						<th>DATA CENTRE</th>
						<th>ADDRESS</th>
					</tr>
					<tr>
						<td>
							Spijkenisse
						</td>
						<td>
							Netherlands
						</td>
						<td>
							Spijkenisse
						</td>
						<td>
							Boyleweg 2, 3208 KA <br/>Spijkenisse, Netherlands
						</td>
					</tr>
					<tr>
						<td>
							The Hague
						</td>
						<td>
							Netherlands
						</td>
						<td>
							The Hague
						</td>
						<td>
							Boyleweg 2, 3208 KA <br/>Spijkenisse, Netherlands
						</td>
					</tr>
					<tr>
						<td>
							Amsterdam
						</td>
						<td>
							Netherlands
						</td>
						<td>
							Amsterdam
						</td>
						<td>
							Boyleweg 2, 3208 KA <br/>Spijkenisse, Netherlands
						</td>
					</tr>
					<tr>
						<td>
							 Florida
						</td>
						<td>
							USA
						</td>
						<td>
							Miami
						</td>
						<td>
							36 NE 2nd St #400, <br/>Miami, FL 33132, USA
						</td>
					</tr>
					
					<tr>
						<td>
							New York
						</td>
						<td>
							USA
						</td>
						<td>
							New York
						</td>
						<td>
							36 NE 2nd St #400, <br/>New Yorki, NY 33132, USA
						</td>
					</tr>
					<tr>
						<td>
							Stockholm
						</td>
						<td>
							Sweden
						</td>
						<td>
							Stockholm
						</td>
						<td>
							90 SW 2, 3208 KA <br/>Stockholm, Sweden
						</td>
					</tr>
					<tr>
						<td>
							Frankfurt
						</td>
						<td>
							Germany
						</td>
						<td>
							Frankfurt
						</td>
						<td>
							00 GER 2, 3208 KA <br/>Frankfurt, Germany
						</td>
					</tr>
					<tr>
						<td>
							 Bucharest
						</td>
						<td>
							Romania
						</td>
						<td>
							Bucharest
						</td>
						<td>
							00 Rom 2, 3208 KA <br/>Bucharest, Romania
						</td>
					</tr>
					<tr>
						<td>
							Spijkenisse
						</td>
						<td>
							Netherlands
						</td>
						<td>
							Spijkenisse
						</td>
						<td>
							Boyleweg 2, 3208 KA <br/>Spijkenisse, Netherlands
						</td>
					</tr>
					<tr>
						<td>
							The Hague
						</td>
						<td>
							Netherlands
						</td>
						<td>
							The Hague
						</td>
						<td>
							Boyleweg 2, 3208 KA <br/>Spijkenisse, Netherlands
						</td>
					</tr>
					<tr>
						<td>
							Amsterdam
						</td>
						<td>
							Netherlands
						</td>
						<td>
							Amsterdam
						</td>
						<td>
							Boyleweg 2, 3208 KA <br/>Spijkenisse, Netherlands
						</td>
					</tr>
					<tr>
						<td>
							 Florida
						</td>
						<td>
							USA
						</td>
						<td>
							Miami
						</td>
						<td>
							36 NE 2nd St #400, <br/>Miami, FL 33132, USA
						</td>
					</tr>
					
					<tr>
						<td>
							New York
						</td>
						<td>
							USA
						</td>
						<td>
							New York
						</td>
						<td>
							36 NE 2nd St #400, <br/>New Yorki, NY 33132, USA
						</td>
					</tr>
				</table>');
	}else if($case=="our_network_services"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/location2.png" width="100%" />';
		$content = htmlentities('<h2> Our Network Services</h2>
<p class="pblc">Lorem ipsum dolor sit amet, eu qualisque consulatu vim. Ne commune iudicabit mea, commune recusabo persequeris et mei.dissentiet, 
  ei recusabo vituperata appellantur duo. Mea ex nulla novum abhorreant, ad viris volumus eos.</p>
<div class="wrapper">
  <div class="row">
    <div class="col-sm-4">
      <div class="listing-block cm-height clearfix">
        <div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ic-ons-1.png" alt=""></div>
        <div class="texting">
          <h5>Internet Port</h5>
          <p class="pblc">At Netrouting you profit from blazing fast network speeds with low latency, </p>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="listing-block cm-height clearfix">
        <div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ic-ons-2.png" alt=""></div>
        <div class="texting">
          <h5>MPLS/Metro Ethernet</h5>
          <p class="pblc">At Netrouting you profit from blazing fast network speeds with low latency, </p>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="listing-block cm-height clearfix">
        <div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ic-ons-3.png" alt=""></div>
        <div class="texting">
          <h5>Remote IX</h5>
          <p class="pblc">At Netrouting you profit from blazing fast network speeds with low latency, </p>
        </div>
      </div>
    </div>
  </div>
</div>');
	}else if($case=="net_plan_features"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/ecommerce1.png" width="100%" />';
		$content = htmlentities('<h2>Netrouting plans feature</h2>
<div class="wrapper">
  <div class="row">
    <div class="col-sm-6">
      <div class="cm-listing">
        <ul>
          <li>FREE Shopping Cart Installation</li>
          <li>Ecommerce Optimized Servers</li>
          <li>24/7 UNLIMITED Technical support from Ecommerce experts</li>
        </ul>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="cm-listing">
        <ul>
          <li>FREE Tutorials</li>
          <li>cPanel and Softaculous</li>
          <li>Full compatibility with most popular Ecommerce platforms</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<a href="#" class="get-a-quote">Ecommerce account Now</a>');
	}else if($case=="ecommerce_system"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/ecommerce2.png" width="100%" />';
		$content = htmlentities('<div class="head">
  <div class="container">
    <h2>Ecommerce Systems You Can Install With Netrouting</h2>
    <p class="pblc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release </p>
  </div>
</div>
<div class="container">
  <div class="wrapper">
    <ul>
      <li>
        <div class="row">
          <div class="col-sm-4">
            <div class="logo-box"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ecommerce-logo-1.png" alt=""></div>
          </div>
          <div class="col-sm-8">
            <div class="para">
              <h3>Web hosting Magento</h3>
              <p class="pblc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
              <a href="#">View Netrouting Magento Hosting</a> </div>
          </div>
        </div>
      </li>
      <li>
        <div class="row">
          <div class="col-sm-4">
            <div class="logo-box"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ecommerce-logo-2.png" alt=""></div>
          </div>
          <div class="col-sm-8">
            <div class="para">
              <h3>Web hosting  osCommerce</h3>
              <p class="pblc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
              <a href="#">View Netrouting osCommerce Hosting</a> </div>
          </div>
        </div>
      </li>
      <li>
        <div class="row">
          <div class="col-sm-4">
            <div class="logo-box"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ecommerce-logo-3.png" alt=""></div>
          </div>
          <div class="col-sm-8">
            <div class="para">
              <h3>Web hosting  OpenCart</h3>
              <p class="pblc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
              <a href="#">View Netrouting OpenCart Hosting</a> </div>
          </div>
        </div>
      </li>
      <li>
        <div class="row">
          <div class="col-sm-4">
            <div class="logo-box"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ecommerce-logo-4.png" alt=""></div>
          </div>
          <div class="col-sm-8">
            <div class="para">
              <h3>Web hosting  PrestaShop</h3>
              <p class="pblc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
              <a href="#">View Netrouting PrestaShop Hosting</a> </div>
          </div>
        </div>
      </li>
      <li>
        <div class="row">
          <div class="col-sm-4">
            <div class="logo-box"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ecommerce-logo-5.png" alt=""></div>
          </div>
          <div class="col-sm-8">
            <div class="para">
              <h3>Web hosting  AlegroCart</h3>
              <p class="pblc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
              <a href="#">View Netrouting AlegroCart Hosting</a> </div>
          </div>
        </div>
      </li>
      <li>
        <div class="row">
          <div class="col-sm-4">
            <div class="logo-box"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ecommerce-logo-6.png" alt=""></div>
          </div>
          <div class="col-sm-8">
            <div class="para">
              <h3>Web hosting  Axis</h3>
              <p class="pblc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
              <a href="#">View Netrouting Axis Hosting</a> </div>
          </div>
        </div>
      </li>
      <li>
        <div class="row">
          <div class="col-sm-4">
            <div class="logo-box"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ecommerce-logo-7.png" alt=""></div>
          </div>
          <div class="col-sm-8">
            <div class="para">
              <h3>Web hosting WHMCS</h3>
              <p class="pblc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
              <a href="#">View Netrouting WHMCS Hosting</a> </div>
          </div>
        </div>
      </li>
      <li>
        <div class="row">
          <div class="col-sm-4">
            <div class="logo-box"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ecommerce-logo-8.png" alt=""></div>
          </div>
          <div class="col-sm-8">
            <div class="para">
              <h3>Web hosting  TomatoCart</h3>
              <p class="pblc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
              <a href="#">View Netrouting TomatoCart Hosting</a> </div>
          </div>
        </div>
      </li>
      <li>
        <div class="row">
          <div class="col-sm-4">
            <div class="logo-box"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ecommerce-logo-9.png" alt=""></div>
          </div>
          <div class="col-sm-8">
            <div class="para">
              <h3>Web hosting  BoxBilling</h3>
              <p class="pblc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
              <a href="#">View Netrouting BoxBilling Hosting</a> </div>
          </div>
        </div>
      </li>
      <li>
        <div class="row">
          <div class="col-sm-4">
            <div class="logo-box"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ecommerce-logo-10.png" alt=""></div>
          </div>
          <div class="col-sm-8">
            <div class="para">
              <h3>Web hosting  phpCOIN</h3>
              <p class="pblc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
              <a href="#">View Netrouting phpCOIN Hosting</a> </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
');
	}else if($case=="game_changers"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/online1.png" width="100%" />';
		$content = htmlentities('<div class="col-sm-4 move-right">
  <div class="icon-block"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/img-game-changers.png" alt=""></div>
</div>
<div class="col-sm-8">
  <div class="para-block">
    <h3>Game Changers</h3>
    <p class="pblc">Lorem ipsum dolor sit amet, quodsi rationibus mei ei, paulo integre sea ad, ea sint feugiat eos. Quo det raxit constituto te, usu ea liber persecuti. Iudico quaerendum ad pri, nostrud volumus ei sed. Natum apeirian et usu, qui id malis saepeiudico. Mei ludus singulis tincidunt id, eu mel elit quidam.Iudico quaerendum ad pri, nostrud volumus ei sed. Natum apeirian et usu, qui id malis saepeiudico. Mei ludus singulis tincidunt id, eu mel elit quidam. </p>
  </div>
</div>
');
	}else if($case=="download_btn_blc"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/online2.png" width="100%" />';
		$content = htmlentities('<div class="col-sm-8">
  <div class="text">
    <h5>Inside the Millisecond: Why Latency Matters To Gamers</h5>
    <p class="pblc">Find out the 4 ways to reduce latency and improve gamer experience with this whitepaper.</p>
  </div>
</div>
<div class="col-sm-4">
  <div class="link"><a href="#" class="">Download Now</a></div>
</div>
');
	}else if($case=="three_features_blc"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/online3.png" width="100%" />';
		$content = htmlentities('<div class="col-sm-4">
  <div class="item">
    <div class="icon-round"><img class="mid-img" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ic-gaming-benefits-1.png" alt=""></div>
    <h4>Perfomance</h4>
    <p class="pblc">Lorem ipsum dolor sit amet, quodsi rationibus mei ei, paulo integre sea ad, ea sint feugiat eos.l</p>
  </div>
</div>
<div class="col-sm-4">
  <div class="item">
    <div class="icon-round"><img class="mid-img" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ic-gaming-benefits-2.png" alt=""></div>
    <h4>Scalable</h4>
    <p class="pblc">Lorem ipsum dolor sit amet, quodsi rationibus mei ei, paulo integre sea ad, ea sint feugiat eos.l</p>
  </div>
</div>
<div class="col-sm-4">
  <div class="item">
    <div class="icon-round"><img class="mid-img" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ic-gaming-benefits-3.png" alt=""></div>
    <h4>Reliable</h4>
    <p class="pblc">Lorem ipsum dolor sit amet, quodsi rationibus mei ei, paulo integre sea ad, ea sint feugiat eos.l</p>
  </div>
</div>
');
	}else if($case=="online_gaming_features"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/online4.png" width="100%" />';
		$content = htmlentities('<h2> Netrouting Online Gaming Features</h2>
<div class="wrapper">
  <div class="row">
    <div class="col-sm-6">
      <div class="listing-block cm-height clearfix">
        <div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ic-ogf-1.png" alt=""></div>
        <div class="texting">
          <h5>AAA Multiplayer Games</h5>
          <p class="pblc">Lorem ipsum dolor sit amet, quodsi rationibus mei ei, paulo integre sea ad, ea sint feugiat eos. Quo detraxit constituto te, usu ea liber persecuti. Iudico quaerendum ad pri, </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="listing-block cm-height clearfix">
        <div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ic-ogf-2.png" alt=""></div>
        <div class="texting">
          <h5>Mobile Games</h5>
          <p class="pblc">Lorem ipsum dolor sit amet, quodsi rationibus mei ei, paulo integre sea ad, ea sint feugiat eos. Quo detraxit constituto te, usu ea liber persecuti. Iudico quaerendum ad pri, </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="listing-block cm-height clearfix">
        <div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ic-ogf-3.png" alt=""></div>
        <div class="texting">
          <h5>Social Games</h5>
          <p class="pblc">Lorem ipsum dolor sit amet, quodsi rationibus mei ei, paulo integre sea ad, ea sint feugiat eos. Quo detraxit constituto te, usu ea liber persecuti. Iudico quaerendum ad pri, </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="listing-block cm-height clearfix">
        <div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ic-ogf-4.png" alt=""></div>
        <div class="texting">
          <h5>Matchmaking</h5>
          <p class="pblc">Lorem ipsum dolor sit amet, quodsi rationibus mei ei, paulo integre sea ad, ea sint feugiat eos. Quo detraxit constituto te, usu ea liber persecuti. Iudico quaerendum ad pri, </p>
        </div>
      </div>
    </div>
  </div>
</div>
<a href="#" class="get-a-quote">Get a quote</a> ');
	}else if($case=="text_block"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/online5.png" width="100%" />';
		$content = htmlentities('<h2>Optimized For Your Online Gaming Success</h2>
<p class="pblc">Lorem ipsum dolor sit amet, quodsi rationibus mei ei, paulo integre sea ad, ea sint feugiat eos. Quo detraxit constituto te, usu ea liber persecuti. Iudico quaerendum ad pri, nostrud volumus ei sed. Natum apeirian et usu, qui id malis saepe iudico. Mei ludus singulis tincidunt id, eu mel elit quidam.Magna eloquentiam mea ea, nec dicit apeirian omittantur ei. Quo ut inani nihil contentiones, ei eos suscipit facilisis vulputate. Ex mei oratio aliquip salutatus, vel ferri utroque minimum ut, eam modus graece possim ad. Luptatum abhorreant per te, ex mel saperet senserit, sit cu dicunt aliquando. Nec cu animal phaedrum deseruisse, aperiam periculis nec ea.</p>
<p class="pblc">Nam ceteros deleniti detraxit ne, omnes verear necessitatibus te est. Eu per tantas libris habemus, est odio vide reque an. Saepe praesent pri ad, impedit tibique complectitur te nec. Ut harum paulo duo, officiis legendos ex quo, an magna partem imperdiet mei. Ius ut quod fierent voluptaria</p>
<h5>Our Bare Metal Dedicated Servers offer Media</h5>
<div class="wrapper">
  <div class="row">
    <div class="col-sm-6">
      <div class="cm-listing">
        <ul>
          <li>Enterprise hardware with premium service</li>
          <li>Public and private high capacity network options with free DDoS protection</li>
        </ul>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="cm-listing">
        <ul>
          <li>Rapid response support</li>
          <li>Low per GB RAM for the delivery of your content</li>
          <li>Auto-provisioned dedicated firewalls</li>
        </ul>
      </div>
    </div>
  </div>
  <h5>Have Questions ?</h5>
  <a href="#" class="get-a-quote">Contact Our Experts</a> </div>
');
	}else if($case=="featured_customers"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/it1.png" width="100%" />';
		$content = htmlentities('<h2>Our Featured Customers</h2>
<div class="slider-wrapper">
  <ul>
    <li>
      <div class="cust-logo"><img class="img-responsive mid-img" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/cust-logo-1.png" alt=""></div>
    </li>
    <li>
      <div class="cust-logo"><img class="img-responsive mid-img" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/cust-logo-2.png" alt=""></div>
    </li>
    <li>
      <div class="cust-logo"><img class="img-responsive mid-img" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/cust-logo-3.png" alt=""></div>
    </li>
    <li>
      <div class="cust-logo"><img class="img-responsive mid-img" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/cust-logo-4.png" alt=""></div>
    </li>
    <li>
      <div class="cust-logo"><img class="img-responsive mid-img" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/cust-logo-5.png" alt=""></div>
    </li>
    <li>
      <div class="cust-logo"><img class="img-responsive mid-img" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/cust-logo-3.png" alt=""></div>
    </li>
  </ul>
</div>');
	}else if($case=="netr_capabilities"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/it2.png" width="100%" />';
		$content = htmlentities('<h2>Netrouting <span>Capabilities</span></h2>
<div class="wrapper">
  <ul>
    <li>
      <div class="row">
        <div class="col-sm-3">
          <div class="pic-box"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/img-capabilities-1.png" alt=""></div>
        </div>
        <div class="col-sm-9">
          <div class="texting">
            <h3>Pick your platform.</h3>
            <p class="pblc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <a href="#">View Details</a> </div>
        </div>
      </div>
    </li>
    <li>
      <div class="row">
        <div class="col-sm-3 move-right">
          <div class="pic-box"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/img-capabilities-2.png" alt=""></div>
        </div>
        <div class="col-sm-9">
          <div class="texting">
            <h3>Use your favorite tools.</h3>
            <p class="pblc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <a href="#">View Details</a> </div>
        </div>
      </div>
    </li>
    <li>
      <div class="row">
        <div class="col-sm-3">
          <div class="pic-box"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/img-capabilities-3.png" alt=""></div>
        </div>
        <div class="col-sm-9">
          <div class="texting">
            <h3>Spend your money on what matters most.</h3>
            <p class="pblc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <a href="#">View Details</a> </div>
        </div>
      </div>
    </li>
    <li>
      <div class="row">
        <div class="col-sm-3 move-right">
          <div class="pic-box"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/img-capabilities-4.png" alt=""></div>
        </div>
        <div class="col-sm-9">
          <div class="texting">
            <h3>Have datacenters around the world, in minutes.</h3>
            <p class="pblc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <a href="#">View Details</a> </div>
        </div>
      </div>
    </li>
    <li>
      <div class="row">
        <div class="col-sm-3">
          <div class="pic-box"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/img-capabilities-5.png" alt=""></div>
        </div>
        <div class="col-sm-9">
          <div class="texting">
            <h3>Never make your customers wait.</h3>
            <p class="pblc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <a href="#">View Details</a> </div>
        </div>
      </div>
    </li>
  </ul>
</div>');
	}else if($case=="use_cases"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/it3.png" width="100%" />';
		$content = htmlentities('<h2>Use Cases</h2>
<p class="pblc">when an unknown printer took a galley of type and scrambled it to make a type specimen </p>
<div class="wrapper">
  <div class="row">
    <div class="col-sm-4">
      <div class="block">
        <div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/img-use-case-1.png" alt=""></div>
        <h4>Infrastructure</h4>
        <p class="pblc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the a type specimen book. I</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="block">
        <div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/img-use-case-2.png" alt=""></div>
        <h4>Gaming</h4>
        <p class="pblc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the a type specimen book. I</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="block">
        <div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/img-use-case-3.png" alt=""></div>
        <h4>Webhosting</h4>
        <p class="pblc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the a type specimen book. I</p>
      </div>
    </div>
  </div>
  <a href="#" class="get-a-quote">get a quote</a> </div>
');
	}else if($case=="two_by_three_features"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/why-net1.png" width="100%" />';
		$content = htmlentities('<div class="col-sm-6">
  <div class="listing-block cm-height clearfix">
    <div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ic-why-1.png" alt=""></div>
    <div class="texting">
      <h5>Our Guarantee</h5>
      <p class="pblc">Without customers, there would be no Netrouting. You are the reason for our very existence. Thats why we offer a 10 day money back guarantee. We want you to be comfortable with your purchase. In case you are not fully satisfied with our service, just say so, we will refund your money! </p>
    </div>
  </div>
</div>
<div class="col-sm-6">
  <div class="listing-block cm-height clearfix">
    <div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ic-why-2.png" alt=""></div>
    <div class="texting">
      <h5>24/7 support</h5>
      <p class="pblc">Netrouting gives you peace of mind. Our team of experienced experts is on call 24 hours a day, seven days a week. Our engineers are available via phone, live chat and email. </p>
    </div>
  </div>
</div>
<div class="col-sm-6">
  <div class="listing-block cm-height clearfix">
    <div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ic-why-3.png" alt=""></div>
    <div class="texting">
      <h5>Cost-effective</h5>
      <p class="pblc">Netrouting combines top notch quality with competitive pricing. Netrouting is your one-stop-shop for hosting and IT. Save on IT-staffing, server hardware and maintenance. Work towards growth while cutting back on your expenses!</p>
    </div>
  </div>
</div>
<div class="col-sm-6">
  <div class="listing-block cm-height clearfix">
    <div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ic-why-4.png" alt=""></div>
    <div class="texting">
      <h5>Reliable and safe</h5>
      <p class="pblc">Our geographically spread data centers have multiple security layers to guarantee the safety of your servers. We manage two data centers in The Netherlands and maintain several other locations in Europe and the United States.</p>
    </div>
  </div>
</div>
<div class="col-sm-6">
  <div class="listing-block cm-height clearfix">
    <div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ic-why-5.png" alt=""></div>
    <div class="texting">
      <h5>Opportunities for resellers</h5>
      <p class="pblc">We enable you! Choose from two attractive and feature rich reseller programs at Netrouting. Preferential stock treatment, limited offers, best pricing guarantee and your personal account manager. </p>
    </div>
  </div>
</div>
<div class="col-sm-6">
  <div class="listing-block cm-height clearfix">
		<div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ic-why-6.png" alt=""></div>
		 <div class="texting">
		  <h5>World-class infrastructure</h5>
		  <p class="pblc">Netrouting only works with premium hardware, software and connectivity.Learn more about our network and datacenters. </p>
		  </div>
  </div>
</div>
');
	}else if($case=="disaster_recovery"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/disastr1.png" width="100%" />';
		$content = htmlentities('<h2>Are you prepared for disaster?</h2>
<p class="pblc">Proven performance and reliability. Words best used to describe our cloud hosting services. Our SSD servers offer high-computing power <br>
  and super fast storage on a distributed storage-platform. Daily snapshots are made of all virtual machines in the cloud. </p>
<div class="img-block"> <img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/img-prepared-desaster.png" alt=""> </div>
<a href="#" class="get-a-quote">Location List</a> ');
	}else if($case=="benefits_disaster_recovery"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/disastr2.png" width="100%" />';
		$content = htmlentities('<h4>BENEFITS OF netroting disaster Recovery</h4>
<h2>Your advantage</h2>
<p style="font-size:14px;">AFFORDABLE . FAST . SECURE . COMPLETE</p>
<div class="wrapper">
  <div class="row">
    <div class="col-sm-6">
      <div class="listing-block cm-height clearfix">
        <div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ic-adv-1.png" alt=""></div>
        <div class="texting">
          <h5>One provider</h5>
          <p class="pblc">At Netrouting you profit from blazing fast network speeds with low latency, resiliency and worldwide coverage. fast network speeds with low latency, resiliency </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="listing-block cm-height clearfix">
        <div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ic-adv-2.png" alt=""></div>
        <div class="texting">
          <h5>Ready in 24 hours</h5>
          <p class="pblc">At Netrouting you profit from blazing fast network speeds with low latency, resiliency and worldwide coverage. fast network speeds with low latency, resiliency </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="listing-block cm-height clearfix">
        <div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ic-adv-3.png" alt=""></div>
        <div class="texting">
          <h5>wide coverage</h5>
          <p class="pblc">At Netrouting you profit from blazing fast network speeds with low latency, resiliency and worldwide coverage. fast network speeds with low latency, resiliency </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="listing-block cm-height clearfix">
        <div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/ic-adv-4.png" alt=""></div>
        <div class="texting">
          <h5>Rack-to-rack</h5>
          <p class="pblc">At Netrouting you profit from blazing fast network speeds with low latency, resiliency and worldwide coverage. fast network speeds with low latency, resiliency </p>
        </div>
      </div>
    </div>
  </div>
</div>
<a href="#" class="get-a-quote">Get A Quote</a>');
	}else if($case=="service_level"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/netr_guarantee.png" width="100%" />';
		$content = htmlentities('<h2>Our Service Level</h2>
<p class="section-para">What you may expect from Netrouting.</p>
<div class="wrapper">
  <div class="row">
  	<div class="col-sm-6">
      <div class="srv-item cm-height">
        <div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/sl-ic-1.png" alt=""></div>
        <div class="content eq-height">
          <h4>Replacing Hardware</h4>
          <p class="pblc">Has your hardware had its day? Within 1.5 hours we will have a new server installed. In case of hard drive trouble we will help you recover your data with means of a system rescue environment or by enslaving your disk to a new server. </p>
        </div>
        <div class="time eq-height">
          <div class="box"> <span class="spnblc">90</span>
            <p class="pblc">Minutes</p>
          </div>
        </div>
      </div>
    </div>
	<div class="col-sm-6">
      <div class="srv-item cm-height">
        <div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/sl-ic-2.png" alt=""></div>
        <div class="content eq-height">
          <h4>Cloud Server Up and Running</h4>
          <p class="pblc">Cant wait to get started? Getting up and running in the Netrouting Cloud is just a matter of minutes. Customize your server configuration, order online and your server will be instantly provisioned!</p>
        </div>
        <div class="time eq-height">
          <div class="box"> <span class="spnblc"><3</span>
            <p class="pblc">Minutes</p>
          </div>
        </div>
      </div>
    </div>
	<div class="col-sm-6">
      <div class="srv-item cm-height">
        <div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/sl-ic-3.png" alt=""></div>
        <div class="content eq-height">
          <h4>Ticket Response Time</h4>
          <p class="pblc">Submit a ticket with our support team and well get back to you within 60 minutes. That is our guarantee. Are you in trouble and need help right away? Try us on live chat, were open 24x7.</p>
        </div>
        <div class="time eq-height">
          <div class="box"> <span class="spnblc">01</span>
            <p class="pblc">Hour</p>
          </div>
        </div>
      </div>
    </div>
	<div class="col-sm-6">
      <div class="srv-item cm-height">
        <div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/sl-ic-4.png" alt=""></div>
        <div class="content eq-height">
          <h4>Network Uptime</h4>
          <p class="pblc">Our redundant network is always available. Thanks to our back-up connections and redundant systems your work will never be interrupted, even in the case of emergencies and disasters.</p>
        </div>
        <div class="time eq-height">
          <div class="box"> <span class="spnblc">99.99</span>
            <p class="pblc">Minutes</p>
          </div>
        </div>
      </div>
    </div>
	<div class="col-sm-6">
      <div class="srv-item cm-height">
        <div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/sl-ic-5.png" alt=""></div>
        <div class="content eq-height">
          <h4>Dedicated Server</h4>
          <p class="pblc">At Netrouting we can have your dedicated server up and running within four hours. Our team will do the utmost to speed up your delivery without losing focus on performance testing and system integrity.</p>
        </div>
        <div class="time eq-height">
          <div class="box"> <span class="spnblc">4</span>
            <p class="pblc">Hours</p>
          </div>
        </div>
      </div>
    </div>
	<div class="col-sm-6">
      <div class="srv-item cm-height">
        <div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/sl-ic-6.png" alt=""></div>
        <div class="content eq-height">
          <h4>Power Uptime</h4>
          <p class="pblc">At Netrouting the power is always on, thanks to our UPS systems (Uninterruptible Power Supply) and diesel generators. Our facilities are designed to withstand natural disasters and other extreme circumstances.</p>
        </div>
        <div class="time eq-height">
          <div class="box"> <span class="spnblc">90</span>
            <p class="pblc">Minutes</p>
          </div>
        </div>
      </div>
    </div>
    </div>
</div>');
	}else if($case=="three_col_feature"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/whp1.png" width="100%" />';
		$content = htmlentities('<div class="col-sm-4">
  <div class="box cm-height">
    <div class="pic-box"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/img-webhosting-process-1.png" alt=""></div>
    <h4>Scalable</h4>
    <p class="pblc">Lorem ipsum dolor sit amet, eu qualisque consulatu vim. Ne commune iudicabit mea, commune recusabo persequeris et mei. </p>
  </div>
</div>
<div class="col-sm-4">
  <div class="box cm-height">
    <div class="pic-box"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/img-webhosting-process-2.png" alt=""></div>
    <h4>Reliable</h4>
    <p class="pblc">Lorem ipsum dolor sit amet, eu qualisque consulatu vim. Ne commune iudicabit mea, commune recusabo persequeris et mei. </p>
  </div>
</div>
<div class="col-sm-4">
  <div class="box cm-height">
    <div class="pic-box"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/img-webhosting-process-3.png" alt=""></div>
    <h4>Secure</h4>
    <p class="pblc">Lorem ipsum dolor sit amet, eu qualisque consulatu vim. Ne commune iudicabit mea, commune recusabo persequeris et mei. </p>
  </div>
</div>
');
	}else if($case=="two_col_text"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/whp2.png" width="100%" />';
		$content = htmlentities('<h2>Dedicated to Your Hosting Success</h2>
<div class="wrapper">
  <div class="row">
    <div class="col-md-7">
      <div class="para-block cm-height">
        <p class="pblc">Lorem ipsum dolor sit amet, ex diam cibo accusamus has, et sea magna maiorum conclusionemque. Ne per amet veri timeam, pro eruditi erroribus repudiare eu. Has error epicurei ad. Dicant utamur impetus pro at. Aliquid facilis id mel.Lorem ipsum dolor sit amet, ex diam cibo accusamus has, et sea magna maiorum conclusionemque. Ne per amet veri timeam, pro eruditi erroribus repudiare eu. Has error epicurei ad. Dicant utamur impetus pro at. Aliquid facilis id mel.Lorem ipsum dolor sit amet, ex diam cibo accusamus has, et sea magna maiorum conclusionemque. Ne per amet veri timeam, pro eruditi erroribus repudiare eu. Has error epicurei ad. Dicant utamur impetus pro at. Aliquid facilis id mel.</p>
        <p class="pblc">Lorem ipsum dolor sit amet, ex diam cibo accusamus has, et sea magna maiorum conclusionemque. Ne per amet veri timeam, pro eruditi erroribus repudiare eu. Has error epicurei ad. Dicant utamur impetus pro at. Aliquid facilis id mel.Lorem ipsum dolor sit amet, ex diam cibo accusamus has, et sea magna maiorum conclusionemque. Lorem ipsum dolor sit amet, ex diam cibo accusamus has, et sea magna maiorum conclusionemque. Ne per amet veri timeam, pro eruditi erroribus repudiare eu Lorem ipsum dolor sit amet, ex diam cibo accusamus has, et sea magna maiorum conclusionemque. Ne per amet veri timeam, pro eruditi erroribus repudiare eu</p>
      </div>
    </div>
    <div class="col-md-5">
      <div class="right-block cm-height">
        <h4>Netrouting Delivers to  their <br>
          Resellers:</h4>
        <div class="cm-listing">
          <ul>
            <li>Lorem ipsum dolor sit amet, eu qualisque consulatu vim. Ne commune</li>
            <li>Ipsum dolor sit amet, eu qualisque  consulatu vim. Ne commune</li>
            <li>Lorem ipsum dolor sit amet, eu qualisque consulatu vim. Ne commune</li>
          </ul>
        </div>
        <p class="pblc">Lorem ipsum dolor sit amet, eu qualisque consulatu vim. Ne commune iudicabit mea, commune recusabo persequeris et mei.</p>
        <a href="#" class="btn">QUESTIONS? CONTACT OUR SOLUTIONS EXPERTS</a> </div>
    </div>
  </div>
</div>
');
	}else if($case=="reseller_prgm_button"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/whp3.png" width="100%" />';
		$content = htmlentities('<p class="pblc">Are you looking for  Partner page?</p>
<a href="#" class="chat-now">Our Reseller programs</a>');
	}else if($case=="text_block_dark"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/company1.png" width="100%" />';
		$content = htmlentities('<div class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/img-empowered.png" alt=""></div>
    	<h2>World <span>Empowered</span> by Automation</h2>
        <p class="pblc">Lorem ipsum dolor sit amet, ullum nostro aliquam sed ne, ex nisl virtute vituperatoribus pri. Vis laudem constituam ne, duo eu animal ceteros torquatos, patrioque adipiscing vis ne. Nisl delenit adipisci an eum, quaeque accusata evertitur in has. Per te omittam repudiandae, reque putent repudiare eum neVix graeco impedit adipisci ad. Ut simul facilisis instructior cum, mel meis nulla eu, eu eam maiorum legendos. Unum eripuit verterem ius ei, quodsi persius facilisi eos ut, tollit timeam tritani cu ius. </p>');
	}else if($case=="get_to_know_us"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/company2.png" width="100%" />';
		$content = htmlentities('<h3>Get to know us, or if you\'re up for it, join us!</h3>
<div class="wrapper">
  <div class="row">
    <div class="col-sm-4">
      <div class="items">
        <div class="pic-box"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/img-get-to-know-1.png" alt=""></div>
        <h4>New at Netrouting</h4>
        <p class="pblc">Lorem ipsum dolor sit amet, eu qualisque consulatu vim. Ne commune iudicabit mea, commune recusabo persequeris et mei. </p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="items">
        <div class="pic-box"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/img-get-to-know-2.png" alt=""></div>
        <h4>10 Years of Netroting</h4>
        <p class="pblc">Lorem ipsum dolor sit amet, eu qualisque consulatu vim. Ne commune iudicabit mea, commune recusabo persequeris et mei. </p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="items">
        <div class="pic-box"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/img-get-to-know-3.png" alt=""></div>
        <h4>Join our Team</h4>
        <p class="pblc">Lorem ipsum dolor sit amet, eu qualisque consulatu vim. Ne commune iudicabit mea, commune recusabo persequeris et mei.</p>
      </div>
    </div>
  </div>
</div>
');
	}else if($case=="why_choose_us"){
		$image = '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/themeFunctions/metabox/company3.png" width="100%" />';
		$content = htmlentities('<div class="different-head"> <span class="icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/icon-why-choose.png" alt=""></span>
  <h3>Why Choose Us ?</h3>
</div>
<div class="different-cont">
  <div class="row">
    <div class="col-sm-6">
      <div class="different-1"> <span class="different-icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/different-1-a.png" alt="#"></span>
        <h3>Global Internet Backbone</h3>
        <p class="pblc">At Netrouting you profit from blazing fast network speeds with low latency, resiliency and worldwide coverage. fast network speeds with low latency, resiliency </p>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="different-1"> <span class="different-icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/different-1-b.png" alt="#"></span>
        <h3>Start immediately</h3>
        <p class="pblc">At Netrouting you profit from blazing fast network speeds with low latency, resiliency and worldwide coverage. fast network speeds with low latency, resiliency </p>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="different-1"> <span class="different-icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/different-1-c.png" alt="#"></span>
        <h3>100% Money Back Guarantee</h3>
        <p class="pblc">At Netrouting you profit from blazing fast network speeds with low latency, resiliency and worldwide coverage. fast network speeds with low latency, resiliency </p>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="different-1"> <span class="different-icon"><img class="img-responsive" src="http://localhost/Netrouting/wp-content/themes/Netrouting/img/different-1-d.png" alt="#"></span>
        <h3>24 x 7 Support</h3>
        <p class="pblc">At Netrouting you profit from blazing fast network speeds with low latency, resiliency and worldwide coverage. fast network speeds with low latency, resiliency </p>
      </div>
    </div>
  </div>
</div>
<a href="#" class="cm-link">The Netrouting Gurantee</a>');
	}else{
		$image = '<pre>No Preview Available</pre>';
		$content = '<pre>No Preview Available</pre>';
	}

	echo '<ul class="notf"><li><a href="#TB_inline?width=500&height=550&inlineId='.$case.'_view" class="thickbox">Default View</a></li><li><a href="#TB_inline?width=500&height=550&inlineId='.$case.'_html" class="thickbox">Default Code</a></li></ul>';
	add_thickbox();
	echo '<div id="'.$case.'_view" style="display:none;">'.$image.'</div>
	<div id="'.$case.'_html" style="display:none; width:98%;"><textarea cols="65" rows="25">'.$content.'</textarea></div>';		
}