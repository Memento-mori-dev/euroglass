<? 
/* 
    Template Name: test
*/

setup_postdata( $post );

$id = $post->ID;
$images = get_field('images', $id);
$imagesUrl = $images['url'];


echo '<pre>';
print_r($post);
echo '</pre>';
?>

<div class="block">
    <?
      
    ?>

</div>

