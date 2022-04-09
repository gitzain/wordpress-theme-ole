<div class="comments">

	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'html5blank' ); ?></p>
</div>

	<?php return; endif; ?>



<h2><?php comments_number('Comments', 'Comments (1)', 'Comments (%)'); ?></h2>


				<?php comment_form(array('title_reply'=>'',
//<h2 id="reply-title" class="comment-reply-title">Join the Discussion</h2>
					//','logged_in_as'=>'',
		// redefine your own textarea (the comment body)
        'comment_field' => '
        <p class="comment-form-comment">
        	<label for="url">Comment <span class="required">*</span></label>
        	<textarea id="comment" name="comment" aria-required="true"></textarea>
        </p>',
'comment_notes_before' => ''

    )); ?>



<?php if (have_comments()) : ?>
	<ul>
		<?php wp_list_comments('type=comment&callback=html5blankcomments'); // Custom callback in functions.php ?>
	</ul>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p><?php _e( 'Comments are closed here.', 'html5blank' ); ?></p>

<?php endif; ?>





        
</div>
