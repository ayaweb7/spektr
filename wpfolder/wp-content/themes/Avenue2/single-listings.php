<?php get_header(); ?>

<div id="content" >

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">
<div class="title">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка на запись <?php the_title(); ?>"><?php the_title(); ?></a></h2> 
</div>

<div class="propsmeta clearfix">
	<div class="propslist"><span>Цена - </span> <span class="propval"> <?php $price=get_post_meta($post->ID, 'wtf_price', true); echo $price; ?></span></div>
	<div class="propslist"><span>Местоположение - </span> <span class="propval"> <?php echo get_the_term_list( $post->ID, 'location', '', ' ', '' ); ?></span></div>
	<div class="propslist"><span>Недвижимость - </span> <span class="propval"><?php echo get_the_term_list( $post->ID, 'property', '', ' ', '' ); ?></span></div>
	<div class="propslist"><span>Спален - </span> <span class="propval"> <?php echo get_the_term_list( $post->ID, 'bedrooms', '', ' ', '' ); ?></span></div>
	<div class="propslist"><span>Ванная - </span> <span class="propval"> <?php $bath=get_post_meta($post->ID, 'wtf_bath', true); echo $bath; ?></span></div>
	<div class="propslist"><span>Гараж - </span> <span class="propval"> <?php $garage=get_post_meta($post->ID, 'wtf_garage', true); echo $garage; ?></span></div>
</div>

<div class="entry">

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
	<a href="<?php the_permalink() ?>"><img class="propsimg" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&amp;h=300&amp;w=650&amp;zc=1" alt=""/></a>
		<?php } else { ?>
	<a href="<?php the_permalink() ?>"><img class="propsimg" src="<?php bloginfo('template_directory'); ?>/images/dummy.jpg" alt="" /></a>
<?php } ?>
</div>
<?php the_content('Читать полностью &raquo;'); ?>

<div class="clear"></div>
<?php wp_link_pages(array('before' => '<p><strong>Страницы: </strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</div>

<div class="intlink clearfix">
<span class="intext"> Вас заинтересовала эта недвижимость - <?php $pid=get_post_meta($post->ID, 'wtf_pid', true); echo $pid; ?> ? </span> <span class="intbutt"> <a href="mailto:<?php echo the_author_meta('user_email'); ?>?Subject=<?php the_title(); ?> [<?php $pid=get_post_meta($post->ID, 'wtf_pid', true); echo $pid; ?>] ">Свяжитесь со мной</a> </span>
</div>



</div>

<?php comments_template(); ?>
<?php endwhile; else: ?>

		<h1 class="title">Не найдено</h1>
		<p>Извините, ничего не нашлось. Воспользуйтесь навигацией или поиском, чтобы найти необходимую вам информацию.</p>

<?php endif; ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
