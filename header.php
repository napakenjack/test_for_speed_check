<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class('hivideo-body'); ?>>
    <?php wp_body_open(); ?>
    <header class="hivideo-header">
        <div class="hivideo-header-inner">
            <a href="#home" class="hivideo-logo">HIVIDEO</a>

            <nav class="hivideo-nav" aria-label="Главное меню">
                <a href="#home" class="is-active">Главная</a>
                <a href="#catalog">Каталог</a>
                <a href="#advantages">Преимущества</a>
                <a href="#contacts">Контакты</a>
            </nav>

            <a href="#consult" class="hivideo-consult-btn">Консультация в Whatsapp</a>
        </div>
    </header>
