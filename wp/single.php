<?
get_header();


$id = get_queried_object()->ID;

// галерея
if (in_category(4, $id)) {
    get_template_part('single-gallery');
}

// статьи 
if (in_category(12, $id)) {
    get_template_part('single-articles');
}



get_footer();?>