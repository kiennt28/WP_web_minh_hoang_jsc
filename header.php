<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="header">
        <nav id="primary-navbar" class="navbar navbar-expand-lg fixed-top"></nav>
    </header>
        <div id="container">
        <div class="logo">
            <?php home_menu('primary-menu'); ?>
        </div>
