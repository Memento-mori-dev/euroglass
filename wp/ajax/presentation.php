<?php
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );

$presentationArray = get_posts([
    'post_type' => 'presentations',
    'numberposts' => 100,
    'post_status' => 'publish',
]);

$postData = file_get_contents('php://input');
$data = json_decode($postData, true);

$lastID = $data['id'];

$arrayResult = array(
    'flag' => true,
    'array' => array()
);

for ($i = $lastID + 1; $i <= $lastID + 2; $i++) {
    $next = $presentationArray[$i];

    if($next){
        $index = $next->ID;

        array_push($arrayResult['array'], array(
            'id' => $i,
            'img' => get_field('images', $index)['url'],
            'file' => get_field('file', $index)['url']
        ));
    }else{
        $arrayResult['flag'] = false;
    }
};

echo json_encode($arrayResult);