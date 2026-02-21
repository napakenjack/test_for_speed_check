<?php get_header(); ?>

<main>
    <section id="home" class="hivideo-hero">
        <div class="hero-corner hero-corner-top-left"></div>
        <div class="hero-corner hero-corner-top-right"></div>
        <div class="hero-corner hero-corner-bottom-left"></div>
        <div class="hero-corner hero-corner-bottom-right"></div>

        <div class="hero-rec"><span class="dot"></span>REC</div>
        <div class="hero-1080">1080P</div>
        <div class="hero-battery" aria-hidden="true"></div>

        <div class="hero-content">
            <h1>Видеонаблюдение для<br>дома и бизнеса в<br>Казахстане</h1>
            <p>Камеры, которые ставятся за<br>10-20 минут и дают полный<br>контроль с телефона.</p>
            <a href="#catalog" class="hero-round-btn">Подобрать камеру</a>
        </div>
    </section>

    <section id="catalog" class="catalog-section">
        <div class="catalog-wrap">
            <p class="catalog-kicker"><span class="dot"></span>категории</p>
            <h2>Категории каталога</h2>

            <a href="#" class="catalog-active-row" aria-label="PTZ камеры">
                <span class="arrow-circle" aria-hidden="true">↙</span>
                <span>PTZ камеры</span>
                <span class="arrow-circle" aria-hidden="true">↙</span>
            </a>

            <ul class="catalog-list">
                <li><a href="#">Домашние камеры</a></li>
                <li><a href="#">Комплекты</a></li>
                <li><a href="#">Сетевые решения</a></li>
                <li><a href="#">Уличные камеры</a></li>
            </ul>
        </div>
    </section>

    <section id="solutions" class="solutions-section">
        <div class="solutions-wrap">
            <p class="solutions-kicker"><span class="dot"></span>решения</p>
            <h2>Решения</h2>

            <div class="solutions-grid">
                <article class="solution-card">
                    <img src="https://images.unsplash.com/photo-1616594039964-3f740fc52e8f?q=80&w=900&auto=format&fit=crop" alt="Квартира">
                    <div class="solution-overlay"></div>
                    <div class="solution-corners" aria-hidden="true"></div>
                    <div class="solution-content">
                        <h3><span class="dot"></span>Квартира</h3>
                        <p>Уведомления на телефон, онлайн-просмотр, контроль детей и животных.</p>
                    </div>
                </article>

                <article class="solution-card">
                    <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=900&auto=format&fit=crop" alt="Склад и парковка">
                    <div class="solution-overlay"></div>
                    <div class="solution-corners" aria-hidden="true"></div>
                    <div class="solution-content">
                        <h3><span class="dot"></span>Склад / парковка</h3>
                        <p>Большая территория, мощный зум, авто-отслеживание, ночной цвет.</p>
                    </div>
                </article>

                <article class="solution-card">
                    <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=900&auto=format&fit=crop" alt="Частный дом">
                    <div class="solution-overlay"></div>
                    <div class="solution-corners" aria-hidden="true"></div>
                    <div class="solution-content">
                        <h3><span class="dot"></span>Частный дом</h3>
                        <p>Ворота, двор, авто, участок. Видно лица и номера даже ночью.</p>
                    </div>
                </article>

                <article class="solution-card">
                    <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?q=80&w=900&auto=format&fit=crop" alt="Магазины и кафе">
                    <div class="solution-overlay"></div>
                    <div class="solution-corners" aria-hidden="true"></div>
                    <div class="solution-content">
                        <h3><span class="dot"></span>Магазины / кафе</h3>
                        <p>Касса, зал, склад, дисциплина сотрудников.</p>
                    </div>
                </article>

                <article class="solution-card">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=900&auto=format&fit=crop" alt="Предприятие">
                    <div class="solution-overlay"></div>
                    <div class="solution-corners" aria-hidden="true"></div>
                    <div class="solution-content">
                        <h3><span class="dot"></span>Предприятие</h3>
                        <p>Офис, КПП, цеха, удалённые филиалы.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
