<?php 
function enqueue_custom_scripts() {
   // Google Fonts(2つ以上ある場合は1つずつ書く)
wp_enqueue_style( 'NotoSans', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap' );
wp_enqueue_style( 'Gotu', '//fonts.googleapis.com/css2?family=Gotu:wght@400;500;700&display=swap' );
wp_enqueue_style( 'Lato', '//fonts.googleapis.com/css2?family=Lato:wght@700&display=swap' );
    // Swiper CSSの読み込み
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');

    // カスタムCSSの読み込み
    wp_enqueue_style('custom-css', get_theme_file_uri () . '/assets/css/style.css');

    wp_deregister_script('jquery');

    // jQueryの読み込み
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), '3.6.0', true );

    // GreenSock Animation Platform (GSAP)の読み込み
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js');

    // Swiper JavaScriptの読み込み
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js');

    // jQuery inviewの読み込み
    wp_enqueue_script('jquery-inview', get_theme_file_uri () . '/assets/js/jquery.inview.min.js');

    // カスタムJavaScriptの読み込み
    wp_enqueue_script('custom-js', get_theme_file_uri () . '/assets/js/script.js', array('jquery'), true);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

// crossorigin属性を持つタグに対する対応
function add_rel_preconnect( $html, $handle, $href, $media ) {
    if ( 'google-fonts-montserrat' === $handle || 'google-fonts-noto' === $handle || 'swiper' === $handle ) {
        $html = <<<EOT
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
$html
EOT;
    }
    return $html;
}
// functions.php ファイルに追加
add_theme_support('post-thumbnails');

/* アーカイブの表示件数変更
***************************************************************/
function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
    if ( $query->is_post_type_archive('campaign') ) { // campaignのアーカイブページ
        $query->set( 'posts_per_page', '4' ); // campaignの表示件数を4件に指定
    }
    if ( $query->is_post_type_archive('voice') ) { // voiceのアーカイブページ
        $query->set( 'posts_per_page', '6' ); // voiceの表示件数を6件に指定
    }
  }
  add_action( 'pre_get_posts', 'change_posts_per_page' );



/* タクソノミーの表示件数変更
***************************************************************/
function custom_taxonomy_archive_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
  
    if ( $query->is_tax('campaign_category') ) { // campaign_category タクソノミーのアーカイブページ
        $query->set('posts_per_page', 4); // 表示件数を4件に指定
    }
  
    if ( $query->is_tax('voice_category') ) { // voice_category タクソノミーのアーカイブページ
        $query->set('posts_per_page', 6); // 表示件数を6件に指定
    }
  }

  function Change_menulabel() {
    global $menu;
    global $submenu;
    $name = 'ブログ';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name.'一覧';
    $submenu['edit.php'][10][0] = '新規'.$name.'投稿';
    $submenu['edit.php'][15][0] = $name.'カテゴリー';
    $submenu['edit.php'][16][0] = $name.'タグ';
  }
  function Change_objectlabel() {
    global $wp_post_types;
    $name = 'ブログ';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('追加', $name);
    $labels->add_new_item = $name.'の新規追加';
    $labels->edit_item = $name.'の編集';
    $labels->new_item = '新規'.$name;
    $labels->view_item = $name.'を表示';
    $labels->search_items = $name.'を検索';
    $labels->not_found = $name.'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
  }
  function Change_taxonomieslabel() {
    global $wp_taxonomies;
    $name = 'お知らせ';
    $labels = $wp_taxonomies['category']->labels;
    $labels->name = $name.'カテゴリー';
    $labels->singular_name = $name.'カテゴリー';
    $labels->search_items = $name.'カテゴリーを検索';
    $labels->all_items = $name.'カテゴリー一覧';
    $labels->parent_item = '親の'.$name.'カテゴリー';
    $labels->parent_item_colon = '親の'.$name.'カテゴリー：';
    $labels->edit_item = $name.'カテゴリーの編集';
    $labels->view_item = $name.'カテゴリーの表示';
    $labels->update_item = $name.'カテゴリーの更新';
    $labels->add_new_item = '新規'.$name.'カテゴリーの追加';
    $labels->new_item_name = '新規'.$name;
    $labels->not_found = $name.'カテゴリーが見つかりませんでした';
    $labels->no_terms = $name.'カテゴリーなし';
  
  
    $labels = $wp_taxonomies['post_tag']->labels;
    $name = 'ブログ';
    $labels->name = $name.'タグ';
    $labels->singular_name = $name.'タグ';
    $labels->search_items = $name.'タグを検索';
    $labels->popular_items = '人気の'.$name.'タグ';
    $labels->all_items = 'すべての'.$name.'タグ';
    $labels->edit_item = $name.'タグの編集';
    $labels->view_item = $name.'タグの表示';
    $labels->update_item = $name.'タグの更新';
    $labels->add_new_item = '新規'.$name.'タグの追加';
    $labels->new_item_name = '新規'.$name;
    $labels->separate_items_with_commas = $name.'タグが複数ある場合はコンマで区切ってください';
    $labels->add_or_remove_items = $name.'タグの追加もしくは削除';
    $labels->choose_from_most_used = 'よく使われている'.$name.'タグから選択';
    $labels->not_found = $name.'タグが見つかりませんでした';
    $labels->no_terms = $name.'タグなし';
  }
  add_action( 'admin_menu', 'Change_menulabel' );
  add_action( 'init', 'Change_objectlabel' );
  add_action( 'init', 'Change_taxonomieslabel' );
  
  
// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}

add_action('wp_footer', 'redirect_to_thanks_page');
function redirect_to_thanks_page() {
  $homeUrl = home_url();
  echo <<< EOD
    <script>
      document.addEventListener( 'wpcf7mailsent', function( event ) {
        location = '{$homeUrl}/thanks/';
      }, false );
    </script>
  EOD;
}


/* サイドバー・blog　人気記事
***************************************************************/
//記事閲覧数を取得する
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    return "0 View";
    }
    return $count.' Views';
}
  //記事閲覧数を保存する
    function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
    $count = 0;
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    }else{
    $count++;
    update_post_meta($postID, $count_key, $count);
    }
}
  //headに出力されるタグを削除(閲覧数を重複してカウントするのを防止するため)
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

  //クローラーのアクセス判別
    function is_bot() {
    $ua = $_SERVER['HTTP_USER_AGENT'];
    $bot = array(
    "googlebot",
    "msnbot",
    "yahoo"
    );
    foreach( $bot as $bot ) {
    if (stripos( $ua, $bot ) !== false){
        return true;
    }
    }
    return false;
}
/* アーカイブページ タイトル
***************************************************************/
add_filter( 'get_the_archive_title', function ($title) {
    if (is_category()) {
      $title = single_cat_title('', false);
    } elseif (is_tag()) {
      $title = single_tag_title('', false);
    } elseif (is_tax()) {
      $title = single_term_title('', false);
    } elseif (is_post_type_archive() ){
      $title = post_type_archive_title('', false);
    } elseif (is_date()) {
      if (is_year()) {
        $title = get_the_time('Y年の記事');
      } elseif (is_month()) {
        $title = get_the_time('Y年n月の記事');
      }
    } elseif (is_search()) {
      $title = '検索結果：' . esc_html( get_search_query(false) );
    } elseif (is_404()) {
      $title = 'ページが見つかりません';
    } else {
    }
    return $title;
  });
  
  
function custom_get_archives($type = 'monthly') {
    global $wpdb, $wp_locale;

    $output = '';

    $query = "SELECT YEAR(post_date) AS year, MONTH(post_date) AS month, count(ID) as posts FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' GROUP BY YEAR(post_date), MONTH(post_date) ORDER BY post_date DESC";
    $key = md5($query);
    $cache = wp_cache_get('wp_get_archives', 'general');
    
    if ($cache === false) {
        $arcresults = $wpdb->get_results($query);
        $cache[ $key ] = $arcresults;
    } else {
        $arcresults = $cache[ $key ];
    }

    if ($arcresults) {
        $temp_year = ''; // 年を一時的に保存する変数
        $afterafter = $after = $before = $beforebefore = '';
        foreach ((array) $arcresults as $arcresult) {
            $url = get_month_link($arcresult->year, $arcresult->month);
            if ($arcresult->year != $temp_year) {
                // 新しい年が始まる際に年の要素を追加
                if (!empty($temp_year)) {
                    $output .= $after . '</ul>'; // 前の年を閉じる
                }
                $temp_year = $arcresult->year;
                $output .= '<a class="sidebar__archive__item-year">' . sprintf('%d年', $arcresult->year) . '</a>';
                $output .= '<ul class="sidebar__archive__item-mounth-group">'; // 月のグループを開始
            }
            $output .= '<li><a class="sidebar__archive__item-mounth" href="' . esc_url($url) . '">' . $wp_locale->get_month($arcresult->month) . '</a></li>';
            $after = $afterafter;
        }
        $output .= '</ul>'; // 最後の月のグループを閉じる
    }

    return $output;
}
/* 固定ページのエディタを非表示にする
***************************************************************/
add_filter('use_block_editor_for_post',function($use_block_editor,$post){
	if($post->post_type==='page'){
		if(in_array($post->post_name,['contact','sitemap','information','blog','faq','price','about-us','thanks'])){ //ページスラッグが「about」または「company」ならコンテンツエディターを非表示
			remove_post_type_support('page','editor');
			return false;
		}
	}
	return $use_block_editor;
},10,2);


