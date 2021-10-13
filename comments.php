<?php
/**
 * The template for displaying comments
 * The area of the page that contains both current comments
 * and the comment form.
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
   return;
}
?>

<?php if ( comments_open() ) : ?>

<div id="respond">
   <div id="cancel-comment-reply">
      <small><?php cancel_comment_reply_link() ?></small>
   </div>

   <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
   <!-- Loggin required message here -->
   <p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url( get_permalink() )); ?></p>
   <?php else : ?>

   <form class="sendForm" action="<?php echo site_url(); ?>/wp-comments-post.php" method="post" id="commentform">
      <?php if ( is_user_logged_in() ) : ?>

      <!-- Logged in message here -->
      <p class="warning">
         <?php
            printf(
               __('شما با نام کاربری <a href="%1$s">%2$s</a>, وارد شدید '),
               get_edit_user_link(),
               $user_identity
            );
         ?>
         <a
         href="<?php echo wp_logout_url(get_permalink()); ?>"
         title="<?php esc_attr_e('خارج شدن از این حساب کاربری'); ?>"
         >
         برای خارج شدن از این حساب کاربری کلیک کنید.
         </a>
         <br>
         <br>
      </p>

      <?php endif; ?>
         <!-- Text area here -->
         <div class="col">
           <p class="primary-dark">پیام شما</p>
           <textarea name="comment" id="message" placeholder="متن پیامتونو اینجا بنویسید" cols="80" rows="5"></textarea>
         </div>

      <div class="row">
         <?php if ( !is_user_logged_in() ) : ?>
            <!-- email and name here -->
              <input type="text" name="author" placeholder="نام و نام خانوادگی" />
              <input type="email" name="email" placeholder="ایمیل شما" />
         <?php endif; ?>
            <!-- Submit Button -->
           <button type="submit">ارسال نظر</button>
         </div>
      <?php comment_id_fields(); ?>
   </div>



   <?php
   /** This filter is documented in wp-includes/comment-template.php */
   do_action( 'comment_form', $post->ID );
   ?>

   </form>
   <?php endif; // If registration required and not logged in ?>


   <div class="comments">
      <?php wp_list_comments("callback=tasagency_comment");?>
   </div>


<?php endif; // if you delete this the sky will fall on your head ?>
