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

			<div class="size_minako-main size_minako-plan animate-on-70 animate-opacity animate-delay-1 animate-move-bottom-1">

				<div class="size_minako-content">
					<div class="plan">
						<div class="plan-inner animate-on-70 animate-opacity animate-delay-1 animate-move-bottom-1">
							<p class="plan-fee">出張ニューボーンフォトプラン・・・80,000円(税別)</p>
							<p class="plan-desc">生後4週までの新生児期間にご自宅へ出張し小さくてかわいい、そして神秘的な姿を撮影します。</p>
							<p class="plan-time">攝影時間 2時間(準備時間を含めた時間です)</p>

							<table class="plan-table">
							  <tr>
									<th>
										撮影内容
									</th>
									<td class="no-content">
										<img class="sp-only" src="<?php bloginfo("template_directory"); ?>/images/plan-table.png" alt="撮影プラン画像">
										<img class="pc-only" src="<?php bloginfo("template_directory"); ?>/images/photo-p1.png" alt="撮影プラン画像">
										<div class="pc-only" style="text-align:center; padding:20px 0;">
											<img class="pc-only" src="<?php bloginfo("template_directory"); ?>/images/photo-p2.png" alt="プラス画像" width="30px" height="auto">
										</div>
										<img class="pc-only" src="<?php bloginfo("template_directory"); ?>/images/photo-p3.png" alt="撮影プラン画像">
									</td>
								</tr>
							</table>
							<table class="plan-table">
								<tr>
									<th rowspan="2">セット内容</th>
									<td>データ（撮影全カット５０～７０枚・レタッチ写真１５枚）</td>
								</tr>
								<tr>
									<td>
										等身大アルバム<br>
										<small>※撮影データは後日ご自宅へDVDにてご郵送致します。</small>
									</td>
								</tr>
							</table>

							<div class="plan-unit">
								<div class="plan-img-left">
									<img src="<?php bloginfo("template_directory"); ?>/images/photo_list.png" alt="">
								</div>
								<div class="plan-img-right">
									<img src="<?php bloginfo("template_directory"); ?>/images/photo_list2.png" alt="">
								</div>
							</div>

							<a class="plan-reserve-btn" href="<?php echo esc_url(home_url("/reserve")); ?>">
									<img src="<?php bloginfo("template_directory"); ?>/images/plan_reserve_btn_off.png" alt="予約ボタン">
							</a>
						</div>

					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
