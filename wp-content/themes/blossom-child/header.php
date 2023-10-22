<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blossom_Spa
 */
    /**
     * Doctype Hook
     * 
     * @hooked blossom_spa_doctype
    */
    do_action( 'blossom_spa_doctype' );
?>
<head itemscope itemtype="http://schema.org/WebSite">
	<?php 
    /**
     * Before wp_head
     * 
     * @hooked blossom_spa_head
    */
    do_action( 'blossom_spa_before_wp_head' );
    
    wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

<?php

    wp_body_open();
    
    /**
     * Before Header
     * 
     * @hooked blossom_spa_page_start - 20 
    */
    do_action( 'blossom_spa_before_header' );
    ?>
<header class="site-header">

    <div class="header-top__mobile">
        <div class="container">
            <div class="header-top__mobile__left">
                <div class="mobile__contacts__phone">
                    <?php
                            if ($phone_link= carbon_get_theme_option('tel_contact_link') && $phone_link_vis= carbon_get_theme_option('tel_contact') ){
                        ?>
                        <a class="header__phone-link flex align-center" href="tel:<?php echo $phone_link; ?>">
                            <?php
                                if ($phone_link_icon= carbon_get_theme_option('tel_contact_link_icon')){
                                echo '<img class="header__phone-link__img" width="25" height="25" src="'.wp_get_attachment_image_url($phone_link_icon).'" alt="" >';
                                } 
                            ?>
                        <span class="link-span"><?php echo $phone_link_vis; ?></span></a>
                        <?php
                        }
                    ?>
                </div>

                <div class="mobile__contacts__address">
                    <?php
					    if ($address= carbon_get_theme_option('crb_address')){
						    echo '<p class="header__address">' . $address . '</p>';
					     }
					?>
                </div>
            </div>

            <div class="mobile__contacts__messengers">
                <?php 
				    if( $contacts = carbon_get_theme_option('contacts' ) ) {
    		    ?>
   				    <ul class="header__messengers">
        		        <?php
					        foreach( $contacts as $contact ) {
    			        ?>
     				        <li class="social__item">
    					        <a href="<?php echo $contact[ 'contact_link']; ?>" class="social__link">
  				                    <?php
    				                    $thumb_contact = wp_get_attachment_image_url( $contact['contact_image'], 'full' );
				                    ?>		
					                <img class="social__img" width="25" height="25" src="<?php echo $thumb_contact; ?>" alt="<?php echo $contact[ 'contact_name']; ?>">
  						        </a>
    				        </li>
				        <?php
					    }
    			        ?>
    			    </ul>
    		    <?php
				    }
			    ?>       
            </div><!-- /end of site-header__right__contacts__messengers -->  
            
            

        </div><!-- /end of container -->         

        <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
                'menu_class'     => 'mobile-nav-menu',
                'fallback_cb'    => 'blossom_spa_primary_menu_fallback',
                // 'walker'          => new My_Walker_Nav_Menu(),
                // 'depth'           => 5,
            ) );
        ?>

    </div><!-- /end header-top__mobile -->

    
    <div class="container header-container">
        
        <a href="/" class="site-header__logo">
  		    <?php
  			    $header_logo = get_theme_mod('header_logo');
  			    $img = wp_get_attachment_image_src($header_logo, 'full');
  			    if ($img) : echo '<img src="' . $img[0] . '" alt="">';
  			    endif;
            ?>
		</a>

        <div class="site-header__right">
            <div class="site-header__right__contacts">
                <div class="site-header__right__contacts__phone">
                    <?php
                            if ($phone_link= carbon_get_theme_option('tel_contact_link') && $phone_link_vis= carbon_get_theme_option('tel_contact') ){
                        ?>
                        <a class="header__phone-link flex align-center" href="tel:<?php echo $phone_link; ?>">
                            <?php
                                if ($phone_link_icon= carbon_get_theme_option('tel_contact_link_icon')){
                                echo '<img class="header__phone-link__img" width="25" height="25" src="'.wp_get_attachment_image_url($phone_link_icon).'" alt="" >';
                                } 
                            ?>
                        <span class="link-span"><?php echo $phone_link_vis; ?></span></a>
                        <?php
                        }
                    ?>
                </div>

                <div class="site-header__right__contacts__address">
                    <?php
					    if ($address= carbon_get_theme_option('crb_address')){
						    echo '<p class="header__address">' . $address . '</p>';
					     }
					?>
                </div>

                <div class="site-header__right__contacts__messengers">
                    <?php 
					    if( $contacts = carbon_get_theme_option('contacts' ) ) {
    			    ?>
   				        <ul class="header__messengers">
        		            <?php
					            foreach( $contacts as $contact ) {
    			            ?>
     				        <li class="social__item">
    					        <a href="<?php echo $contact[ 'contact_link']; ?>" class="social__link">
  				                    <?php
    				                    $thumb_contact = wp_get_attachment_image_url( $contact['contact_image'], 'full' );
				                    ?>		
					                <img class="social__img" width="25" height="25" src="<?php echo $thumb_contact; ?>" alt="<?php echo $contact[ 'contact_name']; ?>">
  						        </a>
    				        </li>
				            <?php
					            }
    			            ?>
    			        </ul>
    			    <?php
					    }
				    ?>
                  
                </div>  
            </div><!-- /end of site-header__right__contacts -->
            
           
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
                'menu_class'     => 'nav-menu',
                'fallback_cb'    => 'blossom_spa_primary_menu_fallback',
                // 'walker'          => new My_Walker_Nav_Menu(),
                // 'depth'           => 5,
            ) );
            ?>
        </div><!-- /end of site-header__right -->

        <button id="burger" class="burger js-toggle-menu">
            <span class="burger-line"></span>
        </button>
        
    </div><!-- /end of container header-container -->

</header>
    <?php
    
    /**
     * Header
     *
     * @hooked blossom_spa_responsive_nav - 10 
     * @hooked blossom_spa_header - 20     
    */
    //do_action( 'blossom_spa_header' );
    
    /**
     * Content
     * 
     * @hooked blossom_spa_content_start
    */
    do_action( 'blossom_spa_content' );