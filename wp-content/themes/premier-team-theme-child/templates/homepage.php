<?php
/**
 * Template Name: Custom Home Template
 *
 * This is the template for the custom homepage.
 */

// Get header
get_header();

$banner_section = get_field('banner_home');
$about_us_section = get_field('who_we_are');
$cta_section = get_field('cta_section');
?>

<!-- Banner Section -->
<?php 
if($banner_section) :
    $title = $banner_section['title'];
    $description = $banner_section['description'];
    $button_text = $banner_section['button_text'];
    $button_link = $banner_section['button_link'];
    $bannr_image = $banner_section['image_banner'];
?>
    <div class="row d-flex banner-section">
        <div class="col-md-6 justify-content-center d-flex flex-column left-banner-section">
            <?php if(!empty($title)) : ?>
                <div class="title">
                    <h1><?php echo  $title; ?></h1> 
                </div>
            <?php endif; ?>
            <?php if(!empty($description)) : ?>
                <div class="description">
                    <?php echo  $description; ?> 
                </div>
            <?php endif; ?>
            <?php if(!empty($button_link)) : ?>
                <div class="contact-button">
                    <a href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center right-banner-section">
            <?php if(!empty($button_link)) : ?>
                <div class="image-right">
                    <img src="<?php echo  $bannr_image; ?>"/>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

<!-- About Section -->
<?php 
if($banner_section) :
    $title = $about_us_section['title'];
    $description = $about_us_section['description'];
    $image = $about_us_section['image'];
?>
<div class="about-us-section row d-flex">
    <div class="col-md-6 justify-content-center d-flex flex-column left-banner-section">
    <?php if(!empty($title)) : ?>
        <div class="title">
            <h2><?php echo $title; ?></h2> 
        </div>
    <?php endif; ?>
        <?php if(!empty($description)) : ?>
            <div class="description text">
                <?php echo $description; ?> 
            </div>
        <?php endif; ?>
    </div>
    <div class="col-md-6 d-flex flex-column justify-content-center right-banner-section">
    <?php if(!empty($image)) : ?>
            <div class="image-right">
                <img src="<?php echo $image; ?>"/>
            </div>
    <?php endif; ?>
    </div>
</div>
<?php endif; ?>

<!-- Contact Section -->
<?php 
if($cta_section) :
    $title = $cta_section['cta_title'];
    $button_title = $cta_section['button_title'];
    $button_link = $cta_section['button_link'];
?>
<div class="row d-flex align-content-center contact-banner">
    <div class="col-md-9">
        <div class="cta-title">
            <h4> <?php echo $title; ?> </h4>
        </div>
    </div>
    <div class="col-md-3 d-flex justify-content-end align-items-end">
        <div class="cta-button contact-button">
            <?php if(!empty($button_link)) : ?>
                <div class="contact-button">
                    <a href="<?php echo $button_link; ?>"><?php echo $button_title; ?></a>
                </div>
            <?php endif; ?>
        </div>
</div>
<?php endif; ?>
<?php
// Get footer
get_footer();
?>