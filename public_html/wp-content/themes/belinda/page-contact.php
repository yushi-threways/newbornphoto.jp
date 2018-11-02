<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package belinda
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="size_minako-main size_minako-contact">

				<div class="size_minako-content">
					<div class="contact">
						<div class="contact-inner">
							<h2>お問い合わせ</h2>
							<p class="contact-desc">
								撮影に関すること、ニューボーンフォトに関する<br>
								ご質問などお気軽にお問い合わせください。<br>
								<br>
								下記のフォームに必須事項をご入力・確認をして送信ください。
							</p>


							<div class="contact-form minako-form">
								<h2>送信フォーム</h2>
									<div class="minako-form-inner contact-form-inner">
										<?php echo do_shortcode('[mwform_formkey key="72"]'); ?>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
