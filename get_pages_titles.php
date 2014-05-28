<?php 
  /* 固定ページ全件取得 */
  function get_pages_titles(){
    $pages = get_pages();
    $titles = '';
    foreach ($pages as $page) {
      if ($page === end($array)) {
        $titles.=get_the_title($page);
      }else{
        $titles.=get_the_title($page).',';
      }
    }
    return $titles;
  }
?>
