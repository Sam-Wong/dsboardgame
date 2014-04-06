<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh">
<head profile="http://gmpg.org/xfn/11">
<title><?php wp_title( '-', true, 'right' ); ?><?php bloginfo( 'name' ); ?> - <?php bloginfo('description'); ?></title>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" /> 

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/comment-style.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.rollover.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.easing.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.easingscroll.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/sliding_menu.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.poshytip.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/tip-twitter.css" type="text/css" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/comment.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jscript.js"></script>
<!--[if lt IE 7]>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie6.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/exfixed.js"></script>
<script>
$(function(){
  $('.fixed').exFixed();
});
</script>
<![endif]--> 

<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
?>

</head>

<body>
 <h1 id="logo" class="fixed"><a href="<?php bloginfo("url"); ?>" title="<?php bloginfo("name"); ?>"><?php bloginfo("name"); ?></a></h1>
<?php get_template_part("includes/header-menu"); ?>
 <div id="wrapper" class="cf">

  <div id="left_col" class="fixed">
<?php get_template_part("includes/global-menu"); ?>
<?php get_template_part("includes/footer-col"); ?>
  </div>
<?php get_template_part("includes/global-menudesc"); ?>