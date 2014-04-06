   <p class="date"><?php the_time("F d, Y"); ?></p>
    <h3 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_ttftitle(); ?></a></h3>
<div class="post_content cf">
<a id="expand_collapse" href="#">全部展开/全部折叠</a>
<div id="archives"><?php archives_list_SHe(); ?></div>
<script>
 $('#expand_collapse,.archives-yearmonth').css({cursor:"s-resize"});
 $('#archives ul li ul.archives-monthlisting').hide();
 $('#archives ul li ul.archives-monthlisting:first').show();
 $('#archives ul li span.archives-yearmonth').click(function(){$(this).next().slideToggle('fast');return false;});
 $('#expand_collapse').toggle(
 function(){
 $('#archives ul li ul.archives-monthlisting').slideDown('fast');
 },
 function(){
 $('#archives ul li ul.archives-monthlisting').slideUp('fast');
 });
</script>
</div>