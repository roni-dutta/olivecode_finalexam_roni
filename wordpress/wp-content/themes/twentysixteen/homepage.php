<?php
/*
Template Name: Roni Dutta
Template URI: http://myclippingimage.blogspot.com/
Author: Roni Dutta
Author URI: http://myclippingimage.blogspot.com/
Version: 1.0
Description: This is basic Theme
*/
?>
<?php get_header(); ?>
<!-- / #bkObj -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title><?php bloginfo('name'); ?></title>
<!-- sample are here<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bar/bar.css"/> -->
<meta charset="utf-8">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/dutta.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/layout.css">

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.mCustomScrollbar.css">

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/queryLoader.css">

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>


<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/roni.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/chg.balloons.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/chg.index.js"></script>

<title></title>
<?php wp_head(); ?>
</head>

<body>
<div id="wrapper-outer">
<div id="bkObj">
<div id="bkPhoto1"><img src="<?php bloginfo('template_url'); ?>/images/idx-bkphoto1.png" width="988" height="680"></div>
<div id="bkPhoto2"><img src="<?php bloginfo('template_url'); ?>/images/idx-bkphoto2.png" width="836" height="689"></div>
<div id="bkPhoto3"><img src="<?php bloginfo('template_url'); ?>/images/idx-bkphoto3.png" width="719" height="542"></div>
</div>
<div id="bln">
	<img src="<?php bloginfo('template_url'); ?>/photo/bln_photo1.jpg">
	<img src="<?php bloginfo('template_url'); ?>/photo/bln_photo2.jpg">
	<img src="<?php bloginfo('template_url'); ?>/photo/bln_photo3.jpg">
	<img src="<?php bloginfo('template_url'); ?>/photo/bln_photo4.jpg">
	<img src="<?php bloginfo('template_url'); ?>/photo/bln_photo5.jpg">
	<img src="<?php bloginfo('template_url'); ?>/photo/bln_photo6.jpg">
	<img src="<?php bloginfo('template_url'); ?>/photo/bln_photo7.jpg">
	<img src="<?php bloginfo('template_url'); ?>/photo/bln_photo8.jpg">
	<img src="<?php bloginfo('template_url'); ?>/photo/bln_photo9.jpg">
	<img src="<?php bloginfo('template_url'); ?>/photo/bln_photo10.jpg">
	<img src="<?php bloginfo('template_url'); ?>/photo/bln_photo11.jpg">
</div>
<!-- / #bln -->



<div id="wrapper-inner">
<header>
<div id="sitehead">
<h1><img src="<?php bloginfo('template_url'); ?>/images/idx-sitehead.png" alt="Caohagan Island -カオハガン島オフィシャルサイト-" width="789" height="479"></h1>
</div>
</header>


<div id="news1" class="news">
<div class="article"><a href="javascript:btmOpen('fig05','004.html')"><H4>お知らせ</H4><dl><dt>2014年6月25日</dt><dd>島主コラムを更新しました。</dd></dl><img src="<?php bloginfo('template_url'); ?>/images/tmp_arrow-a.png"></a></div>
</div>

<div id="news2" class="news">
<div class="article"><a href="javascript:btmOpen('news','003.html')"><H4>お知らせ</H4><dl><dt>2014年10月8日</dt><dd>カオハガン・ハウス求人　2014年12月末まで</dd></dl><img src="<?php bloginfo('template_url'); ?>/images/tmp_arrow-a.png"></a></div>
</div>
<!-- / #news -->



<div id="idx-cont_fig01">
<article>
<div class="idx-figCont">
<div class="figImg"><img src="<?php bloginfo('template_url'); ?>/images/idx_ti_fig01.png" width="36" height="14" alt="fig01"></div>
<div class="figTi">
	<?php   $fig1 = 7;
		$fig1_query = get_post($fig1);
		echo $fig1_query->post_title."<br>";
	?>
</div>
<!--	<?php   $fig1 = 7;
				$fig1_query = get_post($fig1);
                echo $fig1_query->post_title."<br>";
                echo $fig1_query->post_content."<br>";
                echo category_description( get_cat_ID('fig1') );
			?>
		-->	
<div class="figCopy">
			<?php
                echo category_description( get_cat_ID('c1') );
			?>
</div>
<div class="figTxt">
		<?php   $fig1 = 7;
				$fig1_query = get_post($fig1);
                echo $fig1_query->post_content."<br>";
			?>
<!-- / .figTxt -->
<div class="brushLine"></div>
<div class="nav">
<ul>
             <li><a href="javascript:btmOpen('fig01','about.html')">カオハガン島の概要</a></li>
             <li><a href="javascript:btmOpen('fig01','history.html')">島の沿革</a></li>
             <li><a href="javascript:btmOpen('fig01','caohagan2050.html')" class="cnt">カオハガン2050</a></li>
             <li><a href="javascript:btmOpen('fig01','ngo.html')" class="cnt">NGO南の島から</a></li>
             <li><a href="javascript:btmOpen('fig01','sanctuary.html')" class="cnt">熱帯珊瑚礁保護区</a></li>
             <li><a href="javascript:btmOpen('fig01','islandmaster.html')" class="cnt">島主紹介</a></li>
           </ul>
</div>
</div>
<!-- / .idx-figCont -->
</article>
<div class="idx-bkTop"><img src="<?php bloginfo('template_url'); ?>/images/idx_cnt_fig01_bk_t.png" width="339" height="443"></div>
<div class="idx-bkMid"></div>
<div class="idx-bkBtm"><img src="<?php bloginfo('template_url'); ?>/images/idx_cnt_fig01_bk_b.png" width="339" height="325"></div>
</div>
<!-- / #idx-cont_fig01 -->

<div id="idx-cont_fig02">
<article>
<div class="idx-figCont">
<div class="figImg"><img src="<?php bloginfo('template_url'); ?>/images/idx_ti_fig02.png" width="38" height="14" alt="fig01"></div>
<div class="figTi">
<?php   $fig2 = 10;
				$fig2_query = get_post($fig2);
                echo $fig2_query->post_title."<br>";
			?>
</div>
<div class="figCopy">
<?php
                echo category_description( get_cat_ID('c2') );
			?>
</div>
<div class="figTxt">
<?php   $fig2 = 10;
				$fig2_query = get_post($fig2);
                echo $fig2_query->post_content."<br>";
			?>
</div>
<!-- / .figTxt -->
<div class="brushLine"></div>
<div class="nav">
<ul>
             <li><a href="javascript:btmOpen('fig02','islandlife.html')">島民のくらし</a></li>
             <li><a href="javascript:btmOpen('fig02','activity.html')">アクティビティ</a></li>
             <li><a href="javascript:btmOpen('fig02','craft.html')">カオハガンクラフト</a></li>
           </ul>
</div>
</div>
<!-- / .idx-figCont -->
</article>
<div class="idx-bkTop"><img src="<?php bloginfo('template_url'); ?>/images/idx_cnt_fig02_bk_t.png" width="513" height="246"></div>
<div class="idx-bkMid"></div>
<div class="idx-bkBtm"><img src="<?php bloginfo('template_url'); ?>/images/idx_cnt_fig02_bk_b.png" width="513" height="300"></div>
</div>
<!-- / #idx-cont_fig02 -->

<div id="idx-cont_fig03">
<article>
<div class="idx-figCont">
<div class="figImg"><img src="<?php bloginfo('template_url'); ?>/images/idx_ti_fig03.png" width="38" height="14" alt="fig01"></div>
<div class="figTi">
<?php   $fig3 = 17;
				$fig3_query = get_post($fig3);
                echo $fig3_query->post_title."<br>";
			?>
</div>
<div class="figCopy">
<?php
                echo category_description( get_cat_ID('c3') );
			?>
</div>
<div class="figTxt">
<?php   $fig3 = 17;
				$fig3_query = get_post($fig3);
                echo $fig3_query->post_content."<br>";
 
			?>
</div>
<!-- / .figTxt -->
<div class="brushLine"></div>
<div class="nav">
<ul>
             <li><a href="javascript:btmOpen('fig03','caohaganhouse.html')">カオハガン・ハウス</a></li>
             <li><a href="javascript:btmOpen('fig03','access.html')">島までのアクセス</a></li>
             <li><a href="javascript:btmOpen('fig03','expenses.html')">宿泊費用</a></li>
             <li><a href="javascript:btmOpen('fig03','reservation.html')">宿泊予約</a></li>
             <li><a href="javascript:btmOpen('fig03','onedaytour.html')">一日体験ツアー</a></li>
             <li><a href="javascript:btmOpen('fig03','qanda.html')">Q&amp;A</a></li>
           </ul>
</div>
</div>
<!-- / .idx-figCont -->
</article>
<div class="idx-bkTop"><img src="<?php bloginfo('template_url'); ?>/images/idx_cnt_fig03_bk_t.png" width="396" height="273"></div>
<div class="idx-bkMid"></div>
<div class="idx-bkBtm"><img src="<?php bloginfo('template_url'); ?>/images/idx_cnt_fig03_bk_b.png" width="396" height="180"></div>
</div>
<!-- / #idx-cont_fig03 -->

<div id="idx-cont_fig04">
<article>
<div class="idx-figCont">
<div class="figImg"><img src="<?php bloginfo('template_url'); ?>/images/idx_ti_fig04.png" width="38" height="14" alt="fig01"></div>
<div class="figTi">
<?php   $fig4 = 23;
				$fig4_query = get_post($fig4);
                echo $fig4_query->post_title."<br>";
			?>
</div>
<div class="figCopy">
<?php
                echo category_description( get_cat_ID('c4') );
			?>
</div>
<div class="figTxt">
<?php   $fig4 = 23;
				$fig4_query = get_post($fig4);
                echo $fig4_query->post_content."<br>";
			?>
</div>
<!-- / .figTxt -->
<div class="brushLine"></div>
<div class="nav">
<ul>
             <li><a href="javascript:btmOpen('fig04','about.html')">カオハガンキルトについて</a></li>
             <li><a href="javascript:btmOpen('fig04','gallery.html')">カオハガンキルトギャラリー</a></li>
             <li><a href="javascript:btmOpen('fig04','quiltgarden.html')">CaohaganQuilt+Garden</a></li>
           </ul>
</div>
</div>
<!-- / .idx-figCont -->
</article>
<div class="idx-bkTop"><img src="<?php bloginfo('template_url'); ?>/images/idx_cnt_fig04_bk_t.png" width="545" height="247"></div>
<div class="idx-bkMid"></div>
<div class="idx-bkBtm"><img src="<?php bloginfo('template_url'); ?>/images/idx_cnt_fig04_bk_b.png" width="545" height="241"></div>
</div>
<!-- / #idx-cont_fig04 -->

<div id="idx-cont_fig05">
<article>
<div class="idx-figCont">
<div class="figImg"><img src="<?php bloginfo('template_url'); ?>/images/idx_ti_fig05.png" width="38" height="14" alt="fig01"></div>
<div class="figTi">
			<?php   $fig5 = 31;
				$fig5_query = get_post($fig5);
                echo $fig5_query->post_title."<br>";
			?>
			
</div>
<div class="figDate">
<?php
                echo category_description( get_cat_ID('c51') );
			?>
</div>
<div class="figTitle">
<?php
                echo category_description( get_cat_ID('c5') );
			?>
</div>
<div class="figTxt">
<?php   $fig5 = 31;
				$fig5_query = get_post($fig5);
                echo $fig5_query->post_content."<br>";
			?>
</div>
<!-- / .figTxt -->
<div class="nav">
<ul>
             <li><a href="javascript:btmOpen('fig05','004.html')">続きを読む</a></li>
           </ul>
</div>
</div>
<!-- / .idx-figCont -->
</article>
<div class="idx-bkTop"><img src="<?php bloginfo('template_url'); ?>/images/idx_cnt_fig05_bk_t.png" width="395" height="280"></div>
<div class="idx-bkMid"></div>
<div class="idx-bkBtm"><img src="<?php bloginfo('template_url'); ?>/images/idx_cnt_fig05_bk_b.png" width="395" height="280"></div>
</div>
<!-- / #idx-cont_fig05 -->


</div>
<!-- / #wrapper-inner -->
<footer>
<div id="footer">
<div id="footObj">
<img src="<?php bloginfo('template_url'); ?>/images/foot_bird1.png" width="122" height="112" id="bird1">
<img src="<?php bloginfo('template_url'); ?>/images/foot_bird2.png" width="118" height="104" id="bird2">
<img src="<?php bloginfo('template_url'); ?>/images/foot_tree.png" width="162" height="190" id="tree">
<img src="<?php bloginfo('template_url'); ?>/images/foot_logo.png" alt="Caohagan Island" width="344" height="75" id="logo">
<img src="<?php bloginfo('template_url'); ?>/images/foot_copyright.png" alt="Copyright(C)2013 Caohagan Island All Rights Reserved." width="280" height="11" id="copyright"></div>
</div>
<!-- / #footer -->
</footer>
<?php get_footer(); ?>
