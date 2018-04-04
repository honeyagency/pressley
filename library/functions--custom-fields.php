<?php

function prepareHomepageFields()
{
    $heroImageId = get_field('field_5aa030b30b919');
    $heroImage   = null;
    if (!empty($heroImageId)) {
        $heroImage = new TimberImage($heroImageId);
    }
    $hero = array(
        'title' => get_field('field_5aa030a90b918'),
        'image' => $heroImage,
    );
    $bottleImageId = get_field('field_5aa030d50b91b');
    $bottleImage   = null;
    if (!empty($bottleImageId)) {
        $bottleImage = new TimberImage($bottleImageId);
    }

    $welcome = array(
        'title'   => get_field('field_5aa030f00b91c'),
        'content' => get_field('field_5aa030fc0b91d'),
        'link'    => get_field('field_5aa031120b91e'),
        'image'   => $bottleImage,
    );
    $meetImageId = get_field('field_5aa031760b927');
    $meetImage   = null;
    if (!empty($meetImageId)) {
        $meetImage = new TimberImage($meetImageId);
    }
    $meet = array(
        'title'   => get_field('field_5aa031260b920'),
        'content' => get_field('field_5aa031320b921'),
        'link'    => get_field('field_5aa031410b922'),
        'first'   => array(
            'name'  => get_field('field_5aa0314e0b923'),
            'title' => get_field('field_5aa031620b926'),
        ),
        'second'  => array(
            'name'  => get_field('field_5aa031610b925'),
            'title' => get_field('field_5aa031600b924'),
        ),
        'image'   => $meetImage,
    );
    $home = array(
        'hero'    => $hero,
        'welcome' => $welcome,
        'meet'    => $meet,
    );
    return $home;
}
function prepareSiteOptions()
{
    $social = array(
        'facebook'  => get_field('field_5ab55eb677bbd', 'options'),
        'instagram' => get_field('field_5ab55ebc77bbe', 'options'),
        'title'     => get_field('field_5ab5636c25e4f', 'options'),
        'signup'    => get_field('field_5ab55f38f5617', 'options'),
    );

    if (have_rows('field_5ab55f1103bf4', 'options')) {
        $nav = array();
        while (have_rows('field_5ab55f1103bf4', 'options')) {
            the_row();
            $nav[] = get_sub_field('field_5ab55f1a03bf5', 'options');
        }
    } else {
        $nav = null;
    }

    if (have_rows('field_5ab55f2603bf6', 'options')) {
        $store = array();
        while (have_rows('field_5ab55f2603bf6', 'options')) {
            the_row();
            $store[] = get_sub_field('field_5ab55f2603bf7', 'options');
        }
    } else {
        $store = null;
    }
    $footer = array(
        'navigation' => $nav,
        'store'      => $store,
    );
    $options = array(
        'social' => $social,
        'footer' => $footer,
    );
    return $options;
}
