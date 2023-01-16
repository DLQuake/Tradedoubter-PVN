<?php

function acf_block_render_callback_NewsDescription($block)
{
    $slug = str_replace('acf/', '', $block['name']);

    $context = Timber::get_context();
    $context['block'] = $block;
    $context['fields'] = get_fields();

    Timber::render('./NewsDescription.block.view.twig', $context);
}