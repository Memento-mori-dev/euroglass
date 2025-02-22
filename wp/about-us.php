<? 
/* 
    Template Name: about-us
*/

    get_header();
?>

<div class="block">
    <p class="section-title"><?=wp_title("", true);?></p>

    <p class="text text_w-880">
       <?=get_the_content();?>
    </p>

    <?=get_template_part('/php-content/about/card');?>
</div>

<div class="block">
    <?=get_template_part('/php-content/main/certificates');?>
</div>

<div class="block">
    <?=get_template_part('/php-content/about/presentation');?>
</div>
<? get_footer();?>