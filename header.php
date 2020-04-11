<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title(''); ?></title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    
    <?php if ( function_exists( 'the_custom_logo' ) ) : ?>
        <?php the_custom_logo(); ?>
    <?php else :?>
        <h5 class="my-0 mr-md-auto font-weight-normal">
            <?php bloginfo('name'); ?>
            <span><?php bloginfo('description'); ?></span>
        </h5>
    <?php endif;?>

    <?php 
        if ( function_exists('clean_custom_menus' ) ){
            clean_custom_menus([
                'menuName' => 'header-menu',
                'navClass' => 'my-2 my-md-0 mr-md-3',
                'aClass' => 'p-2 text-dark',
            ]);
        } 
    ?>

</div>

<div id="corpo">
    <div id="header">

        <?php 
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
        ?>

        <h1><?php bloginfo('name'); ?></h1>
        <h2><?php bloginfo('description'); ?></h2>
 
        <ul id="nav">
            <?php wp_list_cats('sort_column=name'); ?>
        </ul>
    </div>