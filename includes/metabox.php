<?php
// Slider metabox
add_action( 'add_meta_boxes', 'meta_irandesir' );
function meta_irandesir() {
   add_meta_box('iran_meta','زمینه های دلخواه نمونه کارها', 'bist_meta_location', 'portfolio', 'advanced', 'high');


}
function bist_meta_location() {
   global $post;
   $employer = get_post_meta($post->ID, '_employer', $single = true);
   $software = get_post_meta($post->ID, '_software', $single = true);
   wp_nonce_field( 'dw_meta_box_nonce', 'meta_box_nonce' );
?>
<style>

.irandes_meta{
  width:100%;
}
.irandes_meta input,
.irandes_meta textarea{
  width:50%;
}
.irandes_meta label{
  width:200px;
  display:inline-block;
}
.dw_20_ltr{
  text-align:left;
  direction:ltr;
}
.wp-editor-expand {
   margin-bottom: 20px;
}

</style>

<div class="irandes_meta">

   <label for="employer">کارفرما: </label> <input id="employer" type="text" name="_employer" value="<?php echo $employer; ?>">
   <br />
   <br />
   <label for="software">نرم افزارهای استفاده شده: </label> <input class="dw_20_ltr" id="software" type="text" name="_software" value="<?php echo $software; ?>">

</div>
<?php
}

function save_slider_meta() {
   global $post;

   $metaboxes = array("_employer","_software");

   foreach ( $_POST as $key => $value ) {
      if( in_array( $key,$metaboxes ) ) {

         if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

         if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'dw_meta_box_nonce' ) ) return;

         if( !current_user_can( 'edit_post' ) ) return;

         if( isset($_POST[$key]) && $_POST[$key] != get_post_meta($post->ID, $value, true) ) {
            update_post_meta($post->ID, $key, $value);
         }
      }
   }
}

add_action('save_post', 'save_slider_meta');


add_action('edit_form_after_editor', function() {
    global $post, $wp_meta_boxes;
    do_meta_boxes(get_current_screen(), 'advanced', $post);
    unset($wp_meta_boxes[get_post_type($post)]['advanced']);
});
?>
