<?php
// Enqueue custom scripts and styles
function theme_enqueue() {
   wp_enqueue_style( 'tas-styles', get_template_directory_uri() . '/dist/styles/all.css' );
}

function irandes_widgets_init() {
   register_sidebar(array(
      'name'          => 'سایدبار',
      'id'            => 'sidebar-1',
      'description'   => 'ابزارک سایدبار',
      'before_widget' => '<div class="sidebar %s">',
      'after_widget'  => '</div>',
      'before_title'  => '<div class="title">',
      'after_title'   => '</div>',
   ));
   register_sidebar(array(
      'name'          => 'سایدبار Single',
      'id'            => 'sidebar-2',
      'description'   => 'ابزارک سایدبار',
      'before_widget' => '<div class="sidebar_s %s">',
      'after_widget'  => '</div>',
      'before_title'  => '<div class="title">',
      'after_title'   => '</div>',
   ));
}


function post_type_portfolio() {

register_post_type('portfolio',
    array(
    'labels' => array(
            'name' => __( 'نمونه کارها' ),
            'singular_name' => __( 'نمونه کار' ),
            'add_new' => __( 'افزودن نمونه کار' ),
            'add_new_item' => __( 'افزودن نمونه کار' ),
            'edit' => __( 'ویرایش' ),
            'edit_item' => __( 'ویرایش نمونه کار' ),
            'new_item' => __( 'نمونه کار جدید' ),
            'view' => __( 'نمایش نمونه کار' ),
            'view_item' => __( 'نمایش نمونه کار' ),
            'search_items' => __( 'جستجو  نمونه کار' ),
            'not_found' => __( 'نمونه کاری یافت نشد' ),
            'not_found_in_trash' => __( 'نمونه کاری یافت نشد' ),
            'parent' => __( 'Parent نمونه کار' ),
        ),
   'menu_icon' => 'dashicons-admin-post',
   'public' => true,
   'query_var' => true,
   'rewrite' => array('slug' => 'portfolio'),
   'has_archive' => true,
   'hierarchical' => false,
   'show_ui'             => true,
   'show_in_menu'        => true,
   'show_in_nav_menus'   => true,
   'show_in_admin_bar'   => true,
   'can_export'          => true,
   'exclude_from_search' => false,
   'yarpp_support'       => true,
   'publicly_queryable'  => true,
   'capability_type'     => 'page',
   'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
   )
  );
}

function create_portfolio_taxonomies()
{
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name' => _x( 'دسته بندی', 'taxonomy general name' ),
    'singular_name' => _x( 'دسته بندی', 'taxonomy singular name' ),
    'search_items' =>  __( 'جستجو دسته بندی' ),
    'popular_items' => __( 'محبوب های این دسته' ),
    'all_items' => __( 'همه دسته بندی ها' ),
    'parent_item' => __( 'دسته مادر' ),
    'parent_item_colon' => __( 'دسته مادر:' ),
    'edit_item' => __( 'ویرایش' ),
    'update_item' => __( 'بروزرسانی' ),
    'add_new_item' => __( 'افزودن جدید' ),
    'new_item_name' => __( 'افزودن نام جدید' ),
  );
  register_taxonomy('p_category',array('portfolio'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'projects' ),
  ));
}


// Remove pages from search results
function exclude_pages_from_search($query) {
    if ( $query->is_main_query() && is_search() ) {
        $query->set( 'post_type', 'post' );
    }
    return $query;
}



// Comment
function tasagency_comment($comment, $args, $depth) {


   $GLOBALS['comment'] = $comment;
   if ($depth > 1):
   ?>
   <div class="reply">
   <img src="<?= get_template_directory_uri() . "/dist" ?>/images/reply.svg" class="replyIcon" alt="" />
   <?php endif; ?>

   <div class="comment" id="comment-<?php comment_ID(); ?>" style="width: 100%">
      <div class="profile">
         <?php echo get_avatar($comment, 60 ); ?>
         <div class="profileContent">
            <h6 class="primary-dark styles.name"><?= get_comment_author() ?></h6>
            <p class="small-text-color p-small styles.date"><?php printf(__('%1$s'), get_comment_date(),  false) ?></p>
         </div>
      </div>

      <?php if ($comment->comment_approved == '0') : ?>
         <em class="waiting"><?php _e('Your comment is awaiting moderation.') ?></em>
         <br />
      <?php endif; ?>

      <p class="commentText p-small small-text-color">
         <?php comment_text() ?>
      </p>
      <div class="reply">
         <?php
         $args["reply_text"] = "پاسخ";
         comment_reply_link(array_merge(
               $args,
               array('depth' => $depth, 'max_depth' => $args['max_depth'])
         ))
         ?>
         <?php edit_comment_link(__('ویرایش'),'  ','') ?>
      </div>
   </div>
   <?php if ($depth > 1): ?>
   </div>
   <?php
   endif;
}

function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}
