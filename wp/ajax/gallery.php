<?php
include '../php-content/my_posts.php';
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );

$postData = file_get_contents('php://input');
$data = json_decode($postData, true);

$idPage = intval($data['meta']['page']);
$categoryName = $data['slug'];
$category = $data['meta']['parameters'];
$max = $data['max'];

// $term = get_queried_object();

$myposts = new WP_Query([
    'category_name' => $categoryName,
    'category__and' => $category,
    'post_status' => 'publish',
    'order' => 'ASC',
    'posts_per_page' => -1,
]);

$myposts = $myposts->posts;
$quantityElements = count($myposts);

$countPages = ceil($quantityElements / $max);

$dataPages = array_chunk($myposts, $max);
$redyPosts = $dataPages[$idPage]; // итоговые посты страницы

$itog = array();

foreach ($redyPosts as $key => $post) {
    setup_postdata( $post );

    $id = $post->ID;
    $images = get_field('images', $id);
    $imagesUrl = $images['url'];

    wp_reset_postdata();

    $link = get_permalink($id);

    $result = array(
        'id' => $id,
        'link' => $link,
        'img' =>$imagesUrl,
        'title' => get_the_title()
    );

    array_push($itog, $result);
}


$result = array(
    'posts' => $itog,
    'page' => $idPage + 1
);

echo json_encode($result);
