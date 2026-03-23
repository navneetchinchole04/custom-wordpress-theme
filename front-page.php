<?php get_header(); ?>

<div style="padding:20px;">

<?php if(function_exists('get_field')): ?>

    <!-- Announcement -->
    <p><?php the_field('announcement_text'); ?></p>

    <!-- Hero Section -->
    <h1><?php the_field('hero_heading'); ?></h1>
    <p><?php the_field('hero_subheading'); ?></p>

    <?php 
    $image = get_field('hero_image');
    if($image){ ?>
        <img src="<?php echo $image['url']; ?>" width="300">
    <?php } ?>

    <!-- Button -->
    <?php 
    $btn_text = get_field('button_text');
    $btn_link = get_field('button_link');
    if($btn_text){ ?>
        <br><br>
        <a href="<?php echo $btn_link; ?>" 
           style="padding:10px 20px; background:black; color:white; text-decoration:none;">
           <?php echo $btn_text; ?>
        </a>
    <?php } ?>

    <!-- Brand Logo -->
    <h3>Brand</h3>
    <?php 
    $logo = get_field('brand_logos');
    if($logo){ ?>
        <img src="<?php echo $logo['url']; ?>" width="150">
    <?php } ?>

    <!-- Product -->
    <h2><?php the_field('product_name'); ?></h2>
    <p><?php the_field('product_price'); ?></p>

    <?php 
    $product = get_field('product_image');
    if($product){ ?>
        <img src="<?php echo $product['url']; ?>" width="300">
    <?php } ?>

<?php else: ?>

    <h3>ACF Plugin Not Active ❌</h3>

<?php endif; ?>

</div>

<?php get_footer(); ?>