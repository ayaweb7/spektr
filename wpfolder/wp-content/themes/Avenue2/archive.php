<?php get_header(); ?>

<div id="content">

<?php if (have_posts()) : ?>
<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>	

<div class="post propbox <?php if (++$counter % 2 == 0) { echo "lastbox"; }?> clearfix" id="post-<?php the_ID(); ?>">

<div class="archimg">

<?php  if( has_term( 'featured', 'type', $post->ID ) ) { ?>
<span class="featspan">Лучшее</span>
<?php } else if ( has_term( 'sold', 'type', $post->ID ) ){ ?>
<span class="soldspan">Проданное</span>
<?php } else if ( has_term( 'reduced', 'type', $post->ID ) ){ ?>
<span class="redspan">Уцененное</span>
<?php } ?>

<?php
	if ( has_post_thumbnail() ) { ?>
	<a href="<?php the_permalink() ?>"><img class="propimg" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&amp;h=180&amp;w=310&amp;zc=1" alt=""/></a>
		<?php } else { ?>
	<a href="<?php the_permalink() ?>"><img class="propimg" src="<?php bloginfo('template_directory'); ?>/images/dummy.jpg" alt="" /></a>
<?php } ?>
</div>

<div class="title">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка на запись <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>
<div class="propmeta">
	<div class="proplist"><span>Цена</span> <span class="propval"> <?php $price=get_post_meta($post->ID, 'wtf_price', true); echo $price; ?></span></div>
	<div class="proplist"><span>Местоположение</span> <span class="propval"> <?php echo get_the_term_list( $post->ID, 'location', '', ' ', '' ); ?></span></div>
	<div class="proplist"><span>Тип недвижимости</span> <span class="propval"><?php echo get_the_term_list( $post->ID, 'property', '', ' ', '' ); ?></span></div>
	<div class="proplist"><span>Площадь</span> <span class="propval"> <?php echo get_the_term_list( $post->ID, 'area', '', ' ', '' ); ?></span></div>
</div>
	<div class="entry">
		<?php wpe_excerpt('wpe_excerptlength_archive', ''); ?>
		<a class="morer" href="<?php the_permalink() ?>">Отметить этот список</a>
		<div class="clear"></div>
	</div>

</div>

<?php endwhile; ?>

<?php getpagenavi(); ?>

<?php else : ?>

	<h1 class="title">Не найдено</h1>
	<p>Извините, ничего не нашлось. Воспользуйтесь навигацией или поиском, чтобы найти необходимую вам информацию.</p>

<?php endif; ?>


   
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
