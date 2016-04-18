<?php $clientimage = get_field('quoted_person_image'); 
					$alt = $clientimage['alt']; ?>
<div class="quote container none clearfix">
<div class="client-image">
		<img src="<?php echo $clientimage['sizes']['client-quote'] ?>" alt="<?php echo $alt ?>">
</div>
	<blockquote><div class="actual-quote"><?php the_field('client_quote'); ?></div></blockquote>
	<div class="quoted-from">
		<p class="quote_name bold"><?php the_field('quoted_from'); ?></p>
		<p class="quote_title"><?php the_field('quoted_person_title'); ?>,</p> 
		<p class="quote_org bold"><?php the_field('quoted_person_organization'); ?></p>
	</div>
</div>