				<div class="comments-wrapper">

					<div class="comments" id="comments">


						<div class="comments-header">

							<h2 class="comment-reply-title">
								
								<?php
								
									if(!have_comments()){
										"Leave a Comment";
									}
									else {
										get_comments_number()." Comments";
									}
								
								?>

							</h2><!-- .comments-title -->

						</div><!-- .comments-header -->

						<div class="comments-inner">

							<?php

								// Displays a list of comments
								// wp_list_comments() | Function | WordPress Developer Resources
								// https://developer.wordpress.org/reference/functions/wp_list_comments/
								wp_list_comments(
																
									array(
										'array_size' => 120,
										'style' => 'div',
									)

								);

							?>
	
						</div><!-- .comments-inner -->

					</div><!-- comments -->

					<hr class="" aria-hidden="true">

					<?php
					
						if( comments_open() ) {

							// Comment_form() | Function | WordPress Developer Resources
							// https://developer.wordpress.org/reference/functions/comment_form/
							comment_form(
								array(
									'class_form' => '',
									'title_reply_before' => '<h2 id="reply title" class="comment-reply-title">',
									'title_reply_after' => '</h2>',
									'label_submit' =>'Send',
									'title_reply'=>'Leave a Reply',
									'comment_notes_after' => '',
									'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true" style="height:200px"></textarea></p>',									
								)
							);

						}

					?>

				</div>
