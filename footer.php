 </div>
 <div id="footer" class="fixed">
  <div id="footer_contents">

   <div id="search_area" class="cf">
    <form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
     <div><input type="text" value="搜索" name="s" id="search_input" onfocus="this.value='';" /></div>
     <div><input type="image" src="<?php bloginfo('template_url'); ?>/images/search_button.gif" alt="Search" title="Search" id="search_button" class="roll" /></div>
    </form>
   </div>

   <a href="javascript:void(0);" id="search_tag"><img src="<?php bloginfo('template_url'); ?>/images/tags.gif" alt="搜索标签" title="搜索标签" width="43" height="18" class="roll" /></a>

   <div id="footer_taglist">
<ul class="wp-tag-cloud">
<?php wp_tag_cloud(); ?>
</ul>
   </div>

   <div id="footer_category" class="cf">
    <ul id="f_cat1">
<?php wp_list_categories("depth=-1&title_li="); ?>
    </ul>
   </div>

   <div id="footer_link">
    <ul>
<?php get_links('','<li>','</li>') ?>
    </ul>
   </div>

   <a href="javascript:void(0);" id="open_category"><img src="<?php bloginfo('template_url'); ?>/images/open_category.gif" alt="查看分类" title="查看分类" width="58" height="20" class="roll" /></a>
   <a href="javascript:void(0);" class="close"><img src="<?php bloginfo('template_url'); ?>/images/footer_close.gif" alt="关闭" title="关闭" width="43" height="9" class="roll tooltip" /></a>
   <a href="#wrapper" id="return_top"><img src="<?php bloginfo('template_url'); ?>/images/return_top.gif" alt="回到顶部" title="回到顶部" width="67" height="20" class="roll" /></a>
   <img src="<?php bloginfo('template_url'); ?>/images/copyright.gif" alt="&copy; 2011 &nbsp;<?php bloginfo( 'name' ); ?>&nbsp;&nbsp;All rights reserved" title="&copy; 2011 &nbsp;<?php bloginfo( 'name' ); ?>&nbsp;&nbsp;All rights reserved" width="203" height="7" id="copyright" />

  </div>
 </div><!-- END #footer -->
<?php wp_footer(); ?>
</body>
</html>