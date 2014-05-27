<?php

//固定ページを開いているときに同じ親をもつ子ページ一覧を取得する
function getSonPagelist() {
  global $post;
  $parent = $post->post_parent;

  $args = array(
    'post_type' => 'page',          //固定ページ
    'sort_order' => 'ASC',          //昇順
    'sort_column' => 'menu_order',  //順序パラメータ
    'child_of' => 0,                //孫なし
    'hierarchical' => 0,
    'parent' => $parent
  );
  return get_pages($args);
}

?>
