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

			<div class="size_minako-main size_minako-reserve">

				<div class="size_minako-content">
					<div class="reserve">
						<div class="reserve-inner">
							<h2>ご予約申込み</h2>
							<p class="reserve-desc">
								ご出産予定日の前々月に入りましたところで<br>
								ご予約フォームからお申込みくださいませ。<br>
								出張撮影枠には限りがございます。ご予約多数の場合は先着順と<br>
								させて頂きますことをどうかご了承くださいませ。<br>
								<br>
								ご出産後のご依頼の場合はお電話にて空き状況をご確認くださいませ。
							</p>

							<div class="reserve-flow">
								<img src="<?php bloginfo('template_directory'); ?>/images/flow.png" alt="ご予約の流れ">
							</div>

							<p class="reserve-info">
								※ニューボーンフォト撮影以外はstudio Birthホームページをご覧くださいませ。
							</p>

							<p class="reserve-caption">
								▼下記のフォームに必須事項をご入力・確認をして送信ください。<br>
								撮影のご予約完了は、お電話でお話させていただいてからとなります。<br>
								ご不明な点やご心配事がございましたら、ご相談いただき、 <br>
								予め十分なご理解の上でご予約をお願いいたします。
							</p>

							<div class="reserve-form minako-form">
								<h2>ご予約フォーム</h2>
								<div class="minako-form-inner reserve-form-inner">
									<?php echo do_shortcode('[mwform_formkey key="73"]'); ?>

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
