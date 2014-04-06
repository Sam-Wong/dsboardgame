<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
   <p class="date"><?php the_time("F d, Y"); ?></p>
    <h3 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <div class="post_content cf">
   <?php the_content('<img src="'.get_bloginfo('template_url').'/images/read_more.gif" width="74" height="15" class="roll" />'); ?>

   

<?php if ( is_single() ) : ?>   
<div id="similar_post">
<h3>相关文章</h3>
<ul>
<?php $posts = query_posts("posts_per_page=5&orderby=rand"); if(have_posts()) : while (have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; endif; wp_reset_query(); ?>
</ul>
</div>
<?php endif; if ( is_single() ) { ?>
<a href="javascript:history.back();" id="return"><img src="<?php bloginfo('template_url'); ?>/images/return.gif" alt="返回" title="返回" width="61" height="15" class="roll"></a> 
<? } if ( !is_page() ) { ?>
     <ul class="post_meta">
      <li class="post_comment"><?php comments_popup_link('发表评论', '评论 1条', '评论 %条','', '评论关闭'); ?></li>
      <li class="post_category"><?php the_category(" / "); ?></li>
     </ul>
<?php } ?>
    </div>

<?php endwhile;else : get_template_part("includes/nomatch"); endif; ?>

<div id="comments_wrapper"><?php comments_template('', true); ?></div>