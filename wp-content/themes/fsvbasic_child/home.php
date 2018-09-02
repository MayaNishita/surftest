<?php
/**
 * Top Page template file
 *
 *
 * @package WordPress
 * @subpackage fsvbasic_child
 */
?>

<?php get_header(); ?>

<div id="main" class="main-content-area">

<div class="component-inner">

<div id="wrapbox" class="main-content-wrap">

<div id="primary" class="main-content-site" role="main"><?php

$options = fsvbasic_get_theme_options();

if ( !isset( $options[ 'welcome_title' ] ) ) { $opWelcomeTitle = 'Welcome Title'; }
else { $opWelcomeTitle = $options[ 'welcome_title' ]; }

if ( !isset( $options[ 'welcome_text' ] ) ) { $opWelcomeText = 'Welcome To Our Site!'; }
else { $opWelcomeText = $options[ 'welcome_text' ]; }

if ( ( $opWelcomeTitle ) || ( $opWelcomeText ) ) : ?>

<div id="topmain-welcome-area" class="topmain-welcome-area">

<?php if ( $opWelcomeTitle ) : ?><h2 class="topmain-welcome-title"><?php echo $opWelcomeTitle; ?></h2><?php endif;
if ( $opWelcomeText ) : ?><div class="topmain-welcome-contents"><?php echo $opWelcomeText; ?></div><?php endif; ?>

</div><!-- #topmain-welcome-area -->


<?php

endif; // if ( ( $opWelcomeTitle ) || ( $opWelcomeText ) ) ?>

<div id="topmain-widget-area" class="topmain-widget-area">
<?php

if ( is_active_sidebar( 'sidebar-6' ) ) :

	dynamic_sidebar( 'sidebar-6' );

else : // is_active_sidebar( 'sidebar-6' ) ?>

<section class="widget widget_recent_entries">

<h2 class="widget-title"><?php _e( 'Recent Posts', 'fsvbasic' ); ?></h2>

<?php

	$args = array(
		'ignore_sticky_posts' => true,
		'posts_per_page' => 5
	);

	$the_query = new WP_Query( $args );

	if ( $the_query->have_posts() ) : ?>

<ul><?php

		while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<li><span class="post-date"><?php echo get_the_date(); ?></span><span class="post-title-date-on"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></li><?php
		endwhile; ?>

</ul><?php

	else: // if ( $the_query->have_posts() ) ?>

<p><?php _e( 'There are currently no posts.', 'fsvbasic' ); ?></p><?php

	endif; // if ( $the_query->have_posts() )

	wp_reset_postdata(); ?>

</section><!-- .widget_recent_entries -->

<?php endif; // is_active_sidebar( 'sidebar-6' ) ?>
<div class="flex-container">
        <article class="view view-first">
                 <div class="view view-first"><img class="content_img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/satei.jpg" alt="売る"></div>
                 <div class="mask">
                     	<a class="info" href="#">
                        <h3>売る</h3>
                        <p>キャッチコピー</p>
                      </a>
                 </div>
        </article>
                <article class="view view-first">
                 <div class="view view-first"><img class="content_img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/sale.jpg" alt="買う"></div>
                 <div class="mask">
                     	<a class="info" href="#">
                        <h3>買う</h3>
                        <p>キャッチコピー</p>
                      </a>
                 </div>
        </article>
                <article class="view view-first">
                 <div class="view view-first"><img class="content_img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/unyou.jpg" alt="資産活用"></div>
                 <div class="mask">
                     	<a class="info" href="#">
                        <h3>資産活用</h3>
                        <p>キャッチコピー</p>
                      </a>
                 </div>
        </article>
</div>

<section>
<h1 class="main-content-title">売りたい・住み替え</h1>
<div class="content_wrap">
	<h2 class="top_content">まずはどんな不動産でもご相談下さい！テキストはダミーです。</h2>
	<ul class="content_list">
		<li><i class="far fa-check-square"></i>居住中でも売却はできるの？テキストはダミーです。</li>
		<li><i class="far fa-check-square"></i>仲介手数料がもっと安くなればいいのに・・・テキストはダミーです。</li>
		<li><i class="far fa-check-square"></i>どれくらいで売却できるのか教えてほしい・・・テキストはダミーです。</li>
		<li><i class="far fa-check-square"></i>近隣の方に知られたくない・・・テキストはダミーです。
		<p>こんなお悩みをお持ちの方はぜひお気軽にご相談ください。無料にて査定させていただきます。テキストはダミーです。</p></li>
	</ul>
</div>

<h2 class="top_content">サーフエステートでの買取のメリット</h2>
<div class="content_wrap">
	<ul class="content_list">
		<li><i class="far fa-check-square"></i>早く現金化でき、資金の目処が立ちます。テキストはダミーです。</li>
		<li><i class="far fa-check-square"></i>売却直後の瑕疵担保責任は免責されますのでご安心です。テキストはダミーです。</li>
		<li><i class="far fa-check-square"></i>仲介手数料不要！！査定価格の金額をそのままお渡し致します。テキストはダミーです。</li>
		<li><i class="far fa-check-square"></i>内密に売却が出来ます。仲介で売却をされる場合は買い手を探す為に、インターネットやチラシなどの広告活動を行いますが、買取の場合は不要になり、秘密に売却できます。テキストはダミーです。</li>
		<li><i class="far fa-check-square"></i>相続、買い替え、任意売却、転勤などのご理由なども当社では対応致しております。テキストはダミーです。</li>
	</ul>

	<div class="btn_wrapper">
			<a href="#" class="btn">まずは無料相談・査定</a>
	</div>
</div>
</section><!-- 売りたい -->
<section>
<h1 class="main-content-title">買いたい</h1>
<div class="content_wrap">
	<h2 class="top_content">購入の流れ</h2>

	<div class="main-content-list">
		<div class="contentBox">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/b1.jpg" alt="">
			<p>①　お客様の購入希望条件をお知らせ下さい
			お電話または問い合わせフォームからお気軽にご連絡ください。<br>
			新築一戸建、中古一戸建、土地、マンションの立地や
			価格、築年数、間取りなど不動産購入に関する事はなんでも
			ご相談下さい。<br>
			お問い合わせ内容をもとにご連絡差し上げます。</p>
		</div>
		<div class="contentBox">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/b2.jpg" alt="">
			<p>②　お客様の購入希望条件をお知らせ下さい
			お電話または問い合わせフォームからお気軽にご連絡ください。<br>
			新築一戸建、中古一戸建、土地、マンションの立地や
			価格、築年数、間取りなど不動産購入に関する事はなんでも
			ご相談下さい。<br>
			お問い合わせ内容をもとにご連絡差し上げます。</p>
		</div>
		<div class="contentBox">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/b3.jpg" alt="">
			<p>③　お客様の購入希望条件をお知らせ下さい
			お電話または問い合わせフォームからお気軽にご連絡ください。<br>
			新築一戸建、中古一戸建、土地、マンションの立地や
			価格、築年数、間取りなど不動産購入に関する事はなんでも
			ご相談下さい。<br>
			お問い合わせ内容をもとにご連絡差し上げます。</p>
		</div>
		<div class="contentBox">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/b4.jpg" alt="">
			<p>④　お客様の購入希望条件をお知らせ下さい
			お電話または問い合わせフォームからお気軽にご連絡ください。<br>
			新築一戸建、中古一戸建、土地、マンションの立地や
			価格、築年数、間取りなど不動産購入に関する事はなんでも
			ご相談下さい。<br>
			お問い合わせ内容をもとにご連絡差し上げます。</p>
		</div>
		<div class="contentBox">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/b5.jpg" alt="">
			<p>⑤　お客様の購入希望条件をお知らせ下さい
			お電話または問い合わせフォームからお気軽にご連絡ください。<br>
			新築一戸建、中古一戸建、土地、マンションの立地や
			価格、築年数、間取りなど不動産購入に関する事はなんでも
			ご相談下さい。<br>
			お問い合わせ内容をもとにご連絡差し上げます。</p>
		</div>
		<div class="contentBox">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/b6.jpg" alt="">
			<p>⑥　お客様の購入希望条件をお知らせ下さい
			お電話または問い合わせフォームからお気軽にご連絡ください。<br>
			新築一戸建、中古一戸建、土地、マンションの立地や
			価格、築年数、間取りなど不動産購入に関する事はなんでも
			ご相談下さい。<br>
			お問い合わせ内容をもとにご連絡差し上げます。</p>
		</div>
</div>
	<div class="btn_wrapper">
			<a class="btn">まずは無料相談・査定</a>
	</div>
</div>
</section><!-- 買いたい -->

<section>
<h1 class="main-content-title">資産の活用</h1>
<div class="content_wrap">
	<h2 class="top_content">各資産の活用方法</h2>
	<div class="main-content-list">
		<div class="contentBox">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/b1.jpg" alt="">
			<p>定期借地の場合　・・・ダミーテキストダミーテキストダミーテキストダミーテキスト</p>
		</div>
		<div class="contentBox">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/b1.jpg" alt="">
			<p>アパート経営の場合・・・ダミーテキストダミーテキストダミーテキストダミーテキストサーフエステートならリフォームして家賃アップも可能。</p>
				<!-- <a>リフォーム事例を見る</a> -->
		</div>
		<div class="contentBox">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/b1.jpg" alt="">
			<p>賃貸マンションの場合・・・ダミーテキストダミーテキストダミーテキストダミーテキサーフエステートならリフォームして家賃アップも可能。</p>
			<!-- <a>リフォーム事例を見る</a> -->
		</div>
		<div class="contentBox">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/b1.jpg" alt="">
			<p>等価交換の場合・・・ダミーテキストダミーテキストダミーテキストダミーテキスト</p>
		</div>
		<div class="contentBox">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/b1.jpg" alt="">
			<p>共同分譲の場合・・・ダミーテキストダミーテキストダミーテキストダミーテキスト・・・ダミーテキストダミーテキストダミーテキストダミーテキスト</p>
		</div>
		<div class="contentBox">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/b1.jpg" alt="">
			<p>駐車場経営の場合・・・ダミーテキストダミーテキストダミーテキストダミーテキスト</p>
		</div>
	</div>

	<div class="btn_wrapper">
			<a class="btn">まずは無料相談・査定</a>
	</div>
</div>
</section><!-- 資産活用	 -->

<section>
<h1 class="main-content-title">リフォーム</h1>
<div class="content_wrap">
	<h2 class="top_content">リフォームとは</h2>
	<p>リフォームは「元に戻す」、リノベーションは「作り変える」。</p>
	<img class="squarePhoto" src="<?php echo get_stylesheet_directory_uri(); ?>/img/b1.jpg" alt="">
	<img class="squarePhoto" src="<?php echo get_stylesheet_directory_uri(); ?>/img/b1.jpg" alt="">
	<img class="squarePhoto" src="<?php echo get_stylesheet_directory_uri(); ?>/img/b1.jpg" alt="">
	<img class="squarePhoto" src="<?php echo get_stylesheet_directory_uri(); ?>/img/b1.jpg" alt="">
	<div class="content_wrap">
		<h3>リフォームとは</h3>
		<p>古くなった住まいを、新築当時の状態に戻すこと。</p>
	</div>
	<div class="content_wrap">
		<h3>リノベーションとは</h3>
		<p>古くなった住まいを、いちから創り直して価値を高めること。
		デザインなどを加え価値を高める。</p>
	</div>

	<p>あなたのお家を理想の。。。ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
	ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
</div>
<div class="content_wrap">
	<h2 class="top_content">リフォーム事例</h2>
	<div class="contentBoxL clearfix">
		<h3>平均入居率50％だったビルも70％を超える安定収益に！</h3>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/b1.jpg" alt="">
		<p>駅近くのビルですが、店舗事務所向けなため入居率が安定せず、悩んでいたところ、リノベーションにより、ゲストハウスやマンスリーマンションも取り入れ、結果としては平均入居率50％だったビルもサブリース契約により70％を超える安定収益に変わりました。リスクが低い上、利回りも表面で10%、税引き後では8％を超えており、大満足です。おかげさまで現在は10棟になり、全てを委託しています。
		ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。</p>
	</div>
	<div class="contentBoxL clearfix">
		<h3>平均入居率50％だったビルも70％を超える安定収益に！</h3>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/b1.jpg" alt="">
		<p>駅近くのビルですが、店舗事務所向けなため入居率が安定せず、悩んでいたところ、リノベーションにより、ゲストハウスやマンスリーマンションも取り入れ、結果としては平均入居率50％だったビルもサブリース契約により70％を超える安定収益に変わりました。リスクが低い上、利回りも表面で10%、税引き後では8％を超えており、大満足です。おかげさまで現在は10棟になり、全てを委託しています。
		ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。</p>
	</div>
	<div class="btn_wrapper">
			<a class="btn">まずは無料相談・査定</a>
	</div>
</div>
</section><!-- リフォーム事例 -->
</div><!-- #topmain-widget-area -->

</div><!-- #primary -->

<?php get_sidebar( 'left' ); ?>

</div><!-- #wrapbox -->

<?php get_sidebar( 'right' ); ?>

</div><!-- .component-inner -->

</div><!-- #main -->

<?php get_sidebar( 'footer' ); ?>
<?php get_footer(); ?>
