<?php

function acf_block_render_callback_AboutUs($block)
{
    $slug = str_replace('acf/', '', $block['name']);

    $context = Timber::get_context();
    $context['block'] = $block;
    $context['fields'] = get_fields();

    Timber::render('./AboutUs.block.view.twig', $context);
}