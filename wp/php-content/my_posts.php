<?
function reverse_parse_url(array $parts)
{
    $url = '';
    if (!empty($parts['scheme'])) {
        $url .= $parts['scheme'] . ':';
    }
    if (!empty($parts['user']) || !empty($parts['host'])) {
        $url .= '//';
    }	
    if (!empty($parts['user'])) {
        $url .= $parts['user'];
    }	
    if (!empty($parts['pass'])) {
        $url .= ':' . $parts['pass'];
    }
    if (!empty($parts['user'])) {
        $url .= '@';
    }	
    if (!empty($parts['host'])) {
        $url .= $parts['host'];
    }
    if (!empty($parts['port'])) {
        $url .= ':' . $parts['port'];
    }	
    if (!empty($parts['path'])) {
        $url .= $parts['path'];
    }	
    if (!empty($parts['query'])) {
        if (is_array($parts['query'])) {
            $url .= '?' . http_build_query($parts['query']);
        } else {
            $url .= '?' . $parts['query'];
        }
    }	
    if (!empty($parts['fragment'])) {
        $url .= '#' . $parts['fragment'];
    }
    
    return $url;
}

function urlPage($url, $parameter, $index, $start = false, $isOne = false){
    $newUrl = $url;

    parse_str($newUrl['query'], $queryThis);

    if (!$isOne) {
        $queryThis[$parameter] = $index;

        if ($start) {
            $queryThis['id_page'] = '1';
        }
    }else{
        $queryThis[$parameter] = '';
    }

    $newQuery = '';

    foreach ($queryThis as $key => $valueQuery) {
        $newQuery = $newQuery . '&'. $key .'='. $valueQuery;
    }

    $newUrl['query'] = $newQuery;

    return reverse_parse_url($newUrl);
}


function getHeadings ($arrIDHeadings = array(), ){
    // рубрики
    $headings = array(); // return

    foreach ($arrIDHeadings as $key => $value) {
        array_push($headings, get_terms('category', array(
            'parent'    => $value,
            'hide_empty' => false
        )));
    };

    return $headings;
}

function getPost($slut, $category = array(), $max = 1, $idPage = 1){
    $categoryName = $slut;

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
    $redyPosts = $dataPages[$idPage - 1]; // итоговые посты страницы

    return array(
        'posts' => $redyPosts,
        'count_pages' => $countPages,
    );
}
?>