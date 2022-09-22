<?php
function acf_block_render_callback_CarouselRepeated($block)
{
  $slug = str_replace('acf/', '', $block['name']);

  $context = Timber::get_context();
  $context['block'] = $block;
  $context['fields'] = get_fields();
  $category_reapeter = get_fields();
  $category = get_category($category_reapeter['select_category']);
  $context['category11'] = $category;
  $show_scroll = $category_reapeter['add_scrollbar'];
  $context['catname'] = $category->name;
  $context['catlink'] = get_the_permalink(199).'?category_name='.$category->slug;
  $items = array(
    'post_type' => "products",
    'orderby'        => 'rand',
    'category_name' => $category->slug,
    );
    
    $items = new WP_Query( $items );
    $items = $items->posts;
    foreach ($items as $item)
    {
      $title = get_the_title($item->ID);
      $excerpt = get_the_excerpt($item->ID);
      $image = get_the_post_thumbnail_url($item->ID,'');
      $url_post = get_the_permalink($item->ID);
      $table[$counter]=array('title_post' => $title, 'post_excerpt' => $excerpt, 'post_image' => $image, 'url_post' => $url_post);
      $counter++;
    }
    $context['args'] = $table;

  Timber::render('./CarouselRepeated.block.view.twig', $context);
}
