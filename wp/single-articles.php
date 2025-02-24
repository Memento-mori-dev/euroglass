<? 
/* 
    Template Name: test
*/

setup_postdata( $post );

$id = $post->ID;
$images = get_field('images', $id);
$imagesUrl = $images['url'];

?>


<div class="block">
    <div class="art">
        <?=the_content();?>
    </div>
</div>