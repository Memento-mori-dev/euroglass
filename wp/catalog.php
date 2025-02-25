<? 
/* 
    Template Name: catalog
*/
get_header();
?>


<?
  // $urlDivided = parse_url(((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
  // parse_str($urlDivided['query'], $query);

  // $typePost = $query['type'];

  get_template_part('catalog-window');
?>

<?=get_template_part('/php-content/main/years');?>

<?=get_template_part('/php-content/main/map');?>

<? get_footer();?>