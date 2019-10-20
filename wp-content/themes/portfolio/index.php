<?php get_header(); ?>
<div class="centre">
    <div class="middle">
        <div class="about-me">
            <h2><?php echo get_field("heading"); ?></h2>
        </div>
        <hr>
        <div class="image">
            <img src="<?php echo get_field('profile_image'); ?>" alt="Profile Image">
        </div>
        <div class="text">
            <?php echo get_field("description"); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
