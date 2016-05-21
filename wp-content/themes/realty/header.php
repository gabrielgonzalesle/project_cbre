<?php
global $realty_theme_option;
$phone = $realty_theme_option['site-header-phone'];
$email = $realty_theme_option['site-header-email'];

if ( ! empty( $realty_theme_option['logo-menu']['url'] ) ) {
	$logo = $realty_theme_option['logo-menu']['url'];
	 if ( is_ssl() ) {
    $logo = str_replace( 'http://', 'https://', $logo );
  }
}
if ( ! empty( $realty_theme_option['favicon']['url'] ) ) {
	 $favicon = $realty_theme_option['favicon']['url'];
	 if ( is_ssl() ) {
    $favicon = str_replace( 'http://', 'https://', $favicon );
  }
} else {
	$favicon = '';
}
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
<?php if( $favicon ) { ?>
<link rel="shortcut icon" href="<?php echo $favicon; ?>" />
<?php } ?>
<?php wp_head(); ?>
<?php //flush(); ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>

<?php if ( $realty_theme_option['site-layout'] == "boxed" && ! is_page_template( 'template-map-vertical.php' ) ) { ?>
<div id="boxed-layout">
<?php } ?>

<?php if ( ! is_page_template( 'template-intro.php' ) ) { ?>
<header class="navbar<?php if ( $realty_theme_option['header-layout'] == 'nav-right' ) { echo " nav-right"; } ?>">
  <div class="container">
    
    <?php if ( $realty_theme_option['header-layout'] == 'nav-right' ) { ?>
    	<!-- edited by laffem-->
	    <div class="social-header">
	    	<a href="https://www.linkedin.com/company/2319"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
	    	<a href="https://twitter.com/CBRE"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	    	<a href="https://www.facebook.com/cbre"><i class="fa fa-facebook" aria-hidden="true"></i></a>
	    	<a href="https://www.instagram.com/cbre/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
	    </div>
	    <div class="globe-container">
	    	<i id="globe-header" class="fa fa-globe" aria-hidden="true"></i>
		    <div class="globe">
		    	<li id="country">Perú<i class="fa fa-chevron-down" aria-hidden="true"></i></li>
		    		<ul class="country-content">
		    			<li id="america">AMERICAS
		    			</li>
		    			<li id="apac">APAC
		    			</li>
		    			<li id="emea">EMEA
		    			</li>
		    		</ul>
		    		<div class="globe-col-2 america aux-col">
		    			<i class="fa fa-times close-icon" aria-hidden="true"></i>	
		    			<ul>
                            <li>
                                <a href="http://www.cbre.com" target="_blank">Global</a>
                            </li>
                            <li>
                                <a href="http://www.cbreargentina.com" target="_blank">Argentina</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.com/latin-america-region/offices/brazil" target="_blank">Brazil</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.ca" target="_blank">Canada</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.cl/" target="_blank">Chile</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.com/latin-america-region/offices/colombia" target="_blank">Colombia</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.com/latin-america-region" target="_blank">Latin America / Caribbean</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.com.mx/" target="_blank">Mexico</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href="http://www.cbre.com.pa/" target="_blank">Panama</a>
                            </li>
                            <li>
                                <a href="/latin-america-region/offices/peru" target="_blank">Peru</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.us" target="_blank">United States</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.com.ve/" target="_blank">Venezuela</a>
                            </li>
                		</ul>
			    	</div>
			    	<div class="globe-col-2 apac aux-col">
			    		<i class="fa fa-times close-icon" aria-hidden="true"></i>
		    			<ul>
                            <li>
                                <a href="http:///www.cbre.com" target="_blank">Global</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.com.au" target="_blank">Australia</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.com.kh" target="_blank">Cambodia</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.com.cn" target="_blank">China</a>
                            </li>
                            <li>
                                <a href="http://listings.cbre.com.hk/" target="_blank">Hong Kong</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.co.in" target="_blank">India</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.co.jp" target="_blank">Japan</a>
                            </li>
                            <li>
                                <a href="http://www.cbrekorea.com/EN/Pages/Home.aspx" target="_blank">Korea</a>
                            </li>
                    	</ul>
                    	<ul>
                            <li>
                                <a href="http://www.cbre.co.nz/Pages/default.aspx" target="_blank">New Zealand</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.com.ph/" target="_blank">Philippines</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.com.sg/Pages/Home.aspx" target="_blank">Singapore</a>
                            </li>
                            <li class="list-item  list-item--active">
                                <a href="http://www.cbre.com/" target="_blank">Taiwan</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.co.th/en" target="_blank">Thailand</a>
                            </li>
                            <li>
                                <a href="http://www.cbrevietnam.com/" target="_blank">Vietnam</a>
                            </li>
                    	</ul>
			    	</div>
			    	<div class="globe-col-6 emea aux-col">
			    		<i class="fa fa-times close-icon" aria-hidden="true"></i>
                    	<ul>
                            <li>
                                <a href="http:///www.cbre.com" target="_blank">Global</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.eu/emea_en" target="_blank">Africa</a>
                            </li>
                            <li>
                                <a href="http://www.zenkirealestate.com/home/" target="_blank">Angola</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.at" target="_blank">Austria</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.bh/bh_en" target="_blank">Bahrain</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.lv/lv_en" target="_blank">Baltics</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.be" target="_blank">Belgium</a>
                            </li>
                            <li>
                                <a href="http://www.mbl.bg/" target="_blank">Bulgaria</a>
                            </li>
                    	</ul>
                    	<ul>
                            <li>
                                <a href="http://www.cbre.hr/hr_en" target="_blank">Croatia</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.cz/cz_cs" target="_blank">Czech Republic</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.dk" target="_blank">Denmark</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.eu/emea_en" target="_blank">EMEA</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.fi/fi_en" target="_blank">Finland</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.fr/fr_fr" target="_blank">France</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.de/de_de" target="_blank">Germany</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.eu/gh_en" target="_blank">Ghana</a>
                            </li>
                    	</ul>
                    	<ul>
                            <li>
                                <a href="http://www.cbre.gr/cms/" target="_blank">Greece</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.hu/hu_hu" target="_blank">Hungary</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.ie/ie_en" target="_blank">Ireland</a>
                            </li>
                            <li>
                                <a href="http://www.man.co.il/" target="_blank">Israel</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.it/it_en" target="_blank">Italy</a>
                            </li>
                            <li>
                                <a href="http://cbre.kz/" target="_blank">Kazakhstan</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.lu/lu_en" target="_blank">Luxembourg</a>
                            </li>
                            <li>
                                <a href="http://cbre.mk/" target="_blank">Macedonia</a>
                            </li>
                    	</ul>
                    	<ul>
                            <li>
                                <a href="http://www.cbre.co.me/" target="_blank">Montenegro</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.ma/ma_fr" target="_blank">Morocco</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.nl" target="_blank">Netherlands</a>
                            </li>
                            <li>
                                <a href="http://portal.cbre.eu/portal/page/portal/ng_en" target="_blank">Nigeria</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.no/" target="_blank">Norway</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.pl/pl_pl" target="_blank">Poland</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.pt/pt_pt" target="_blank">Portugal</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.ro/ro_en" target="_blank">Romania</a>
                            </li>
                    	</ul>
                    	<ul>
                            <li>
                                <a href="http://www.cbre.ru/ru_ru" target="_blank">Russia</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.rs " target="_blank">Serbia</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.sk/sk_sk" target="_blank">Slovakia</a>
                            </li>
                            <li>
                                <a href="http://www.broll.com/" target="_blank">South Africa</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.es/es_es" target="_blank">Spain</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.se/se_sv" target="_blank">Sweden</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.ch/ch_en" target="_blank">Switzerland</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.com.tr/tr_en" target="_blank">Turkey</a>
                            </li>
                    	</ul>
                    	<ul>
                            <li>
                                <a href="http://www.cbre.ua/" target="_blank">Ukraine</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.ae/uae_en" target="_blank">United Arab Emirates</a>
                            </li>
                            <li>
                                <a href="http://www.cbre.co.uk/uk-en" target="_blank">United Kingdom</a>
                            </li>
                    	</ul>
			    	</div>
		    </div>
	    </div>

	    <!-- finish edit-->
		<div class="navbar-contact-details">
	    <?php 
	    if ( ! empty( $phone ) ) { if( wp_is_mobile() ){ echo '<div class="navbar-phone-number"><a href="tel:' . $phone . '">' . $phone . '</a></div>'; } else { echo '<div class="navbar-phone-number">' . $phone . '</div>'; } }
	    if ( $phone && $email ) { echo ' <div class="separator">&middot;</div> '; }
	    if ( ! empty( $email ) ) { echo '<div class="navbar-email"><a href="mailto:' . antispambot( $email ) . '">' . antispambot( $email ) . '</a></div>'; } 
	    ?>
    </div>
    <?php } ?>
    
  	<?php if ( !$realty_theme_option['disable-header-login-register-bar'] ) { get_template_part( 'lib/inc/template/login-bar-header' ); }	?>
	  
	  <div class="navbar-header">
	  
	    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
	    	<span class="sr-only"><?php _e( 'Skip navigation', 'tt' ); ?></span>
	    	<span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
		  </button>

		  <div class="navbar-brand">
		    <a href="<?php if ( !empty( $realty_theme_option['logo-url'] ) ) { echo esc_url ( $realty_theme_option['logo-url'] ); } else { echo esc_url( home_url( '/' ) ); } ?>">
		    <?php 
		    if( empty( $logo ) ) { 
		    	echo '<span>' . get_bloginfo('name') . '</span>';
		    } else {
		    	echo '<img src="' . $logo . '" alt="" />';
 				} ?>
		    </a>
		    <?php if ( get_bloginfo('description') && $realty_theme_option['header-tagline'] ) { ?>
		    <div class="tagline">
			    <?php echo get_bloginfo('description'); ?>
		    </div>
		    <?php } ?>
	    </div>
	    
	    <?php if ( $realty_theme_option['header-layout'] == 'default' ) { ?>
	    <div class="navbar-contact-details">
		    <?php 
		    if ( ! empty( $phone ) ) { if( wp_is_mobile() ){ echo '<div class="navbar-phone-number"><a href="tel:' . $phone . '">' . $phone . '</a></div>'; } else { echo '<div class="navbar-phone-number">' . $phone . '</div>'; } }
		    if( !empty( $email ) ) { echo '<div class="navbar-email"><a href="mailto:' . antispambot( $email ) . '">' . antispambot( $email ) . '</a></div>'; }
		    ?>
	    </div>
	    <?php }
	    if ( $realty_theme_option['header-layout'] != 'nav-right' ) { 
	    ?>
	    <div class="clearfix"></div>
			<?php } ?>
	    <nav class="collapse navbar-collapse" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'div', 'container_class' => 'nav navbar-nav', 'menu_class' => 'clearfix', 'depth' => 3 ) ); ?>
				<div id="toggle-navbar"><i class="icon-angle-right"></i></div>
			</nav>
			
		</div>
	  
  </div> 
</header>
<?php } ?>

<?php if ( ! is_page_template( 'template-slideshow.php' ) && ! is_page_template( 'template-intro.php' ) && ! is_page_template( 'template-home-properties-map.php' ) && ! is_page_template( 'template-property-search.php' ) && ! is_page_template( 'template-map-vertical.php' ) ) { ?>
<!-- <div class="container header-margin"> -->
<?php } ?>