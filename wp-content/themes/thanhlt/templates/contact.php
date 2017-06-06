<?php 
/* 
    Template Name: Contact
*/
?>
<?php get_header(); ?>
<div class="content">
    <div id="main-content">
        <div class="contact-info">
            <h4>Dia chi lien he</h4>
            <address>Da Nang, Viet Nam</address>
        </div>
        <div class="contact-info">
            <?php echo do_shortcode( '[contact-form-7 id="1738" title="Contact form 1"]' ); ?>
        </div>
    </div>
    <div id="sidebar">
        <?php get_sidebar() ?>
    </div>
</div>
<?php get_footer(); ?>