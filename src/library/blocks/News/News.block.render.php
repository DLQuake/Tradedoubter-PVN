<?php

function acf_block_render_callback_News($block)
{
	global $paged;
	if (!isset($paged) || !$paged){
		$paged = 1;
	}
	$slug = str_replace('acf/', '', $block['name']);

	$context = Timber::get_context();
	$context['block'] = $block;
	$context['fields'] = get_fields();
	$args = array(
        'post_type' => 'post',
        'posts_per_page' => 9,
		'paged' => $paged,
    );

    $context['posts'] = Timber::get_posts( $args );

	Timber::render('./News.block.view.twig', $context);
}