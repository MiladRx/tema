<?php get_header(); ?> <!-- Henter header-sektionen af temaet -->

<div class="header">
<h1>Forbedr Din Fitnessrejse</h1>
    <a href="#services" class="btn"><?php echo get_theme_mod('button_text'); ?></a> <!-- Viser knaptekst fra Customizer og linker til services-sektionen -->
</div>

<div class="section" id="services">
    <h2><?php echo get_theme_mod('services_title'); ?></h2> <!-- Viser titel for tjenester fra Customizer -->
    <div class="services-grid">
        <?php for ($i = 1; $i <= 3; $i++): ?> <!-- Looper gennem 3 tjenester -->
        <div class="service">
            <h3><?php echo get_theme_mod("service_{$i}_title"); ?></h3> <!-- Viser titel for hver service fra Customizer -->
            <p><?php echo get_theme_mod("service_{$i}_description"); ?></p> <!-- Viser beskrivelse for hver service fra Customizer -->
        </div>
        <?php endfor; ?> <!-- Afslutter loopen -->
    </div>
</div>

<div class="section" id="testimonials">
    <h2>Udtalelser</h2>
    <blockquote>
        <p><?php echo get_theme_mod('testimonial', '"FitBrand forvandlede mit liv!" - Glad Kunde'); ?></p>
    </blockquote>
</div>

<div class="footer">
    <p>© 2024 FitBrand. Alle rettigheder forbeholdes.</p> <!-- Viser copyright-tekst -->
</div>

<?php get_footer(); ?> <!-- Henter footer-sektionen af temaet -->
