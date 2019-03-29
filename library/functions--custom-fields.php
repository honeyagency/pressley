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
        'age'    => get_field('field_5ad12e27daa3d', 'options'),
    );
    return $options;
}

function prepareVinesFields()
{

    if (have_rows('field_5ac66e7bdf21c')) {
        $land = array();
        while (have_rows('field_5ac66e7bdf21c')) {
            the_row();
            if (have_rows('field_5ac66eacdf21f')) {
                $details = array();
                while (have_rows('field_5ac66eacdf21f')) {
                    the_row();
                    $details[] = array(
                        'title'   => get_sub_field('field_5ac66eb8df220'),
                        'content' => get_sub_field('field_5ac66ec3df221'),
                    );
                }
            }
            $land[] = array(
                'title'       => get_sub_field('field_5ac66e98df21d'),
                'description' => get_sub_field('field_5ac66ea0df21e'),
                'details'     => $details,
            );

        }
    }
    $landImageId = get_field('field_5ac68ec3b9390');
    $landImage   = null;
    if (!empty($landImageId)) {
        $landImage = new TimberImage($landImageId);
    }
    $mapImageId = get_field('field_5ace6f96ea44e');
    $mapImage   = null;
    if (!empty($mapImageId)) {
        $mapImage = new TimberImage($mapImageId);
    }
    $vines = array(
        'title'       => get_field('field_5ac66dfedf217'),
        'description' => get_field('field_5ac66e0edf218'),
        'map'         => $mapImage,
        'image'       => $landImage,
        'land'        => $land,
    );
    return $vines;
}

function prepareStoryFields()
{
    $intro = array(
        'title'       => get_field('field_5accf7ce8c5c4'),
        'description' => get_field('field_5accf7ce8c5d1'),
    );

    $brand = array(
        'title'       => get_field('field_5accf7fb92a3c'),
        'description' => get_field('field_5accf96c92a3d'),
    );

    if (have_rows('field_5accf97c92a3e')) {
        $team = array();
        while (have_rows('field_5accf97c92a3e')) {
            the_row();
            $teamImageId = get_sub_field('field_5accf99c92a3f');
            $teamImage   = null;
            if (!empty($teamImageId)) {
                $teamImage = new TimberImage($teamImageId);
            }
            $team[] = array(
                'image'       => $teamImage,
                'title'       => get_sub_field('field_5accf9ac92a40'),
                'name'        => array(
                    'first' => get_sub_field('field_5accf9e592a42'),
                    'last'  => get_sub_field('field_5accfa2d829c9'),
                ),

                'description' => get_sub_field('field_5accf9b392a41'),
            );
        }
    } else {
        $team = null;
    }

    $mooseImageId = get_field('field_5accfa4f829cb');
    $mooseImage   = null;
    if (!empty($mooseImageId)) {
        $mooseImage = new TimberImage($mooseImageId);
    }
    $moose = array(
        'image'       => $mooseImage,
        'title'       => get_field('field_5accfa63829cc'),
        'description' => get_field('field_5accfa79829cd'),
    );
    $story = array(
        'intro' => $intro,
        'brand' => $brand,
        'team'  => $team,
        'moose' => $moose,
    );
    return $story;
}
function prepareWine()
{
    $details = array(
        'vintage' => get_field('field_5acd24818ef9a'),
        'cost'    => get_field('field_5acd349f07a96'),
        'volume'  => get_field('field_5acd34ab07a97'),
        'button'  => get_field('field_5acd33d9a6f7d'),
    );
    $winesPageImageId = get_field('field_5acd293405fd6');
    $winesPageImage   = null;
    if (!empty($winesPageImageId)) {
        $winesPageImage = new TimberImage($winesPageImageId);
    }
    $bottleImageId = get_field('field_5acd2f0ab8928');
    $bottleImage   = null;
    if (!empty($bottleImageId)) {
        $bottleImage = new TimberImage($bottleImageId);
    }
    if (have_rows('field_5ace656628d70')) {
        $icons = array();
        while (have_rows('field_5ace656628d70')) {
            the_row();

            $wineIcon   = null;
            $wineIconId = get_sub_field('field_5c9e6fe8bdc98');

            if (!empty($wineIconId)) {
                $wineIcon = new TimberImage($wineIconId);
            }
            $icons[] = array(
                'class' => get_sub_field('field_5ace657428d71'),
                'text'  => get_sub_field('field_5ace657e28d72'),
                'image' => $wineIcon,
            );
        }
    }

    $images = array(
        'wines'  => $winesPageImage,
        'bottle' => $bottleImage,
    );
    $wine = array(
        'details' => $details,
        'images'  => $images,
        'icons'   => $icons,
    );
    return $wine;
}
