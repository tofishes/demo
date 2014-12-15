<div id="comments" class="panel-light">
<?php if ( post_password_required() ) : ?>
	<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'twentyten' ); ?></p>
</div><!-- #comments -->
<?php
		return;
	endif;
?>
<?php
	// You can start editing here -- including this comment!
?>

<?php if ( have_comments() ) : ?>
			<h3 id="comments-title"><?php
			printf( _n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number(), 'twentyten' ),
			number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' );
			?></h3>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&laquo;</span> Older Comments', 'twentyten' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&raquo;</span>', 'twentyten' ) ); ?></div>
			</div> <!-- .navigation -->
<?php endif; // check for comment navigation ?>

			<ol class="item-list">
				<?php
					/* Loop through and list the comments. Tell wp_list_comments()
					 * to use twentyten_comment() to format the comments.
					 * If you want to overload this in a child theme then you can
					 * define twentyten_comment() and that will be used instead.
					 * See twentyten_comment() in twentyten/functions.php for more.
					 */
					wp_list_comments( array( 'callback' => 'twentyten_comment', 'max_depth' => 2 ) );
				?>
			</ol>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'twentyten' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
			</div><!-- .navigation -->
<?php endif; // check for comment navigation ?>

<?php else : // or, if we don't have comments:

	/* If there are no comments and comments are closed,
	 * let's leave a little note, shall we?
	 */
	if ( ! comments_open() ) :
?>
	<p class="nocomments"><?php _e( 'Comments are closed.', 'twentyten' ); ?></p>
<?php endif; // end ! comments_open() ?>

<?php endif; // end have_comments() ?>

<?php 
    $fresh_comment_fields = array(
        'author' => '<p class="comment-form-field comment-form-author"><input class="text" '. ( $req ? 'required="required" ' : '' ) .'id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' />' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="light">*</span>' : '' ) . '</p>',
        'email'  => '<p class="comment-form-field comment-form-email"><input class="text" '. ( $req ? 'required="required" ' : '' ) .' id="email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '"' . $aria_req . ' /><label for="email">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="light">*</span>' : '' ) .
                    '</p>',
        'url'    => '<p class="comment-form-field comment-form-url"><input class="text" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" /><label for="url">' . __( 'Website' ) . '</label>' .
                    '</p>',
    );
	$comment_form_args = array(
		'fields' =>  $fresh_comment_fields,
		'comment_field' => '<p class="comment-form-comment"><textarea id="comment" required="required" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
		'comment_notes_after' => false,
		'id_form' => 'comment-form',
		'id_submit' => 'comment-submit',
		'title_reply' => '参与评论'
	);
	comment_form($comment_form_args);
?>

</div><!-- #comments -->
