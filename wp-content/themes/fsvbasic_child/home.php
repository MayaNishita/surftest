<?php
/**
 * Top Page template file
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
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

</div><!-- #topmain-widget-area -->

</div><!-- #primary -->
<div class="flex-container">
	<img class="content_img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/satei.jpg" alt="売る">
	<img class="content_img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/sale.jpg" alt="買う">
	<img class="content_img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/unyou.jpg" alt="資産活用">
</div>

<section>
<h1 class="main-content-title">売りたい・住み替え</h1>

<h2>まずはどんな不動産でもご相談下さい！テキストはダミーです。</h2>
<ul>
	<li>○居住中でも売却はできるの？テキストはダミーです。</li>
	<li>○仲介手数料がもっと安くなればいいのに・・・テキストはダミーです。</li>
	<li>○どれくらいで売却できるのか教えてほしい・・・テキストはダミーです。</li>
	<li>○近隣の方に知られたくない・・・テキストはダミーです。</li>
</ul>

<p>こんなお悩みをお持ちの方はぜひお気軽にご相談ください。無料にて査定させていただきます。テキストはダミーです。</p>

<h2>サーフエステートでの買取のメリット</h2>
<ul>
	<li>早く現金化でき、資金の目処が立ちます。テキストはダミーです。</li>
	<li>売却直後の瑕疵担保責任は免責されますのでご安心です。テキストはダミーです。</li>
	<li>仲介手数料不要！！査定価格の金額をそのままお渡し致します。テキストはダミーです。</li>
	<li>内密に売却が出来ます。仲介で売却をされる場合は買い手を探す為に、インターネットやチラシなどの広告活動を行いますが、買取の場合は不要になり、秘密に売却できます。テキストはダミーです。</li>
	<li>相続、買い替え、任意売却、転勤などのご理由なども当社では対応致しております。テキストはダミーです。</li>
</ul>

<button>まずは無料相談・査定</button>

</section><!-- 売りたい -->
<section>
<h1 class="main-content-title">買いたい</h1>
<h2>購入の流れ</h2>


<p>お客様の購入希望条件をお知らせ下さい
お電話または問い合わせフォームからお気軽にご連絡ください。<br>
新築一戸建、中古一戸建、土地、マンションの立地や<br>
価格、築年数、間取りなど不動産購入に関する事はなんでも<br>
ご相談下さい。<br>
お問い合わせ内容をもとにご連絡差し上げます。</p>


<p>お客様の購入希望条件をお知らせ下さい
お電話または問い合わせフォームからお気軽にご連絡ください。<br>
新築一戸建、中古一戸建、土地、マンションの立地や<br>
価格、築年数、間取りなど不動産購入に関する事はなんでも<br>
ご相談下さい。<br>
お問い合わせ内容をもとにご連絡差し上げます。</p>

<p>お客様の購入希望条件をお知らせ下さい
お電話または問い合わせフォームからお気軽にご連絡ください。<br>
新築一戸建、中古一戸建、土地、マンションの立地や<br>
価格、築年数、間取りなど不動産購入に関する事はなんでも<br>
ご相談下さい。<br>
お問い合わせ内容をもとにご連絡差し上げます。</p>

<p>お客様の購入希望条件をお知らせ下さい
お電話または問い合わせフォームからお気軽にご連絡ください。<br>
新築一戸建、中古一戸建、土地、マンションの立地や<br>
価格、築年数、間取りなど不動産購入に関する事はなんでも<br>
ご相談下さい。<br>
お問い合わせ内容をもとにご連絡差し上げます。</p>

<p>お客様の購入希望条件をお知らせ下さい
お電話または問い合わせフォームからお気軽にご連絡ください。<br>
新築一戸建、中古一戸建、土地、マンションの立地や<br>
価格、築年数、間取りなど不動産購入に関する事はなんでも<br>
ご相談下さい。<br>
お問い合わせ内容をもとにご連絡差し上げます。</p>

<p>お客様の購入希望条件をお知らせ下さい
お電話または問い合わせフォームからお気軽にご連絡ください。<br>
新築一戸建、中古一戸建、土地、マンションの立地や<br>
価格、築年数、間取りなど不動産購入に関する事はなんでも<br>
ご相談下さい。<br>
お問い合わせ内容をもとにご連絡差し上げます。</p>

<button>まずは無料相談・査定</button>

</section><!-- 買いたい -->

<h1 class="main-content-title">資産の活用</h1>
<ul>
	<li>1.定期借地の場合　・・・ダミーテキストダミーテキストダミーテキストダミーテキスト</li>
	<li>2.アパート経営の場合・・・ダミーテキストダミーテキストダミーテキストダミーテキストサーフエステートならリフォームして家賃アップも可能。
	<button>リフォーム事例を見る</button></li>
	<li>3.賃貸マンションの場合・・・ダミーテキストダミーテキストダミーテキストダミーテキサーフエステートならリフォームして家賃アップも可能。
	<button>リフォーム事例を見る</button></li>
	<li>4.等価交換の場合・・・ダミーテキストダミーテキストダミーテキストダミーテキスト</li>
	<li>5.共同分譲の場合・・・ダミーテキストダミーテキストダミーテキストダミーテキスト・・・ダミーテキストダミーテキストダミーテキストダミーテキスト</li>
	<li>6.駐車場経営の場合・・・ダミーテキストダミーテキストダミーテキストダミーテキスト</li>
	<li>7.土地売却の場合・・・ダミーテキストダミーテキストダミーテキストダミーテキスト・・・ダミーテキストダミーテキストダミーテキストダミーテキスト</li>
</ul>

<button>まずは無料相談・査定</button>

<h1 class="main-content-title">リフォーム</h1>
<p>リフォームは「元に戻す」、リノベーションは「作り変える」。</p>
<img src="" alt=""><img src="" alt=""><img src="" alt=""><img src="" alt="">
<p>リフォーム</p>
<p>古くなった住まいを、新築当時の状態に戻すこと。</p>

<p>リノベーション</p>
<p>古くなった住まいを、いちから創り直して価値を高めること。
デザインなどを加え価値を高める。</p>

<p>あなたのお家を理想の。。。ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>

<button>まずは無料相談・査定</button>


<h2>リフォーム事例</h2>

<h3>平均入居率50％だったビルも70％を超える安定収益に！</h3>
<img src="" alt="">
<p>駅近くのビルですが、店舗事務所向けなため入居率が安定せず、悩んでいたところ、リノベーションにより、ゲストハウスやマンスリーマンションも取り入れ、結果としては平均入居率50％だったビルもサブリース契約により70％を超える安定収益に変わりました。リスクが低い上、利回りも表面で10%、税引き後では8％を超えており、大満足です。おかげさまで現在は10棟になり、全てを委託しています。
ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。</p>

<h3>平均入居率50％だったビルも70％を超える安定収益に！</h3>
<img src="" alt="">
<p>駅近くのビルですが、店舗事務所向けなため入居率が安定せず、悩んでいたところ、リノベーションにより、ゲストハウスやマンスリーマンションも取り入れ、結果としては平均入居率50％だったビルもサブリース契約により70％を超える安定収益に変わりました。リスクが低い上、利回りも表面で10%、税引き後では8％を超えており、大満足です。おかげさまで現在は10棟になり、全てを委託しています。
ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。</p>

<button>まずは無料相談・査定</button>
<?php get_sidebar( 'left' ); ?>

</div><!-- #wrapbox -->

<?php get_sidebar( 'right' ); ?>

</div><!-- .component-inner -->

</div><!-- #main -->

<?php get_sidebar( 'footer' ); ?>
<?php get_footer(); ?>
