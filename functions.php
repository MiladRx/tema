<?php
// Indlæsning af stylesheets
function fitbrand_enqueue_styles() {
    // Indlæser temaets stylesheet
    wp_enqueue_style('fitbrand-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'fitbrand_enqueue_styles'); // Aktiverer stilen ved at tilføje den til WordPress’ script-håndtering

// Registrer indstillinger til Customizer
function fitbrand_customize_register($wp_customize) {
  
    // Knap Tekst
    $wp_customize->add_setting('button_text', array(
        'default' => 'Kom i gang', // Standardtekst for knappen
        'transport' => 'refresh', // Opdateringstype
    ));
    $wp_customize->add_control('button_text', array(
        'label' => __('Button Text', 'fitbrand'), // Etiket i Customizer
        'section' => 'title_tagline', // Sektion i Customizer
        'type' => 'text', // Kontroltype (tekstfelt)
    ));

    // Tjenester Titel
    $wp_customize->add_setting('services_title', array(
        'default' => 'Vores Tjenester', // Standardtitel for tjenester
        'transport' => 'refresh', // Opdateringstype
    ));
    $wp_customize->add_control('services_title', array(
        'label' => __('Services Title', 'fitbrand'), // Etiket i Customizer
        'section' => 'title_tagline', // Sektion i Customizer
        'type' => 'text', // Kontroltype (tekstfelt)
    ));

    // Indstillinger for tjenester (3 i alt)
    for ($i = 1; $i <= 3; $i++) {
        // Titel for hver service
        $wp_customize->add_setting("service_{$i}_title", array(
            'default' => "Service {$i} Title", // Standardtitel
            'transport' => 'refresh', // Opdateringstype
        ));
        $wp_customize->add_control("service_{$i}_title", array(
            'label' => __("Service {$i} Title", 'fitbrand'), // Etiket i Customizer
            'section' => 'title_tagline', // Sektion i Customizer
            'type' => 'text', // Kontroltype (tekstfelt)
        ));

        // Beskrivelse for hver service
        $wp_customize->add_setting("service_{$i}_description", array(
            'default' => "Service {$i} description.", // Standardbeskrivelse
            'transport' => 'refresh', // Opdateringstype
        ));
        $wp_customize->add_control("service_{$i}_description", array(
            'label' => __("Service {$i} Description", 'fitbrand'), // Etiket i Customizer
            'section' => 'title_tagline', // Sektion i Customizer
            'type' => 'textarea', // Kontroltype (tekstområde)
        ));

        // Udtalelser
    $wp_customize->add_setting('testimonial', array(
        'default' => '"FitBrand forvandlede mit liv!" - Glad Kunde', // Standardudtalelse
        'transport' => 'refresh', // Opdateringstype
    ));
    $wp_customize->add_control('testimonial', array(
        'label' => __('Testimonial', 'fitbrand'), // Etiket i Customizer
        'section' => 'title_tagline', // Sektion i Customizer
        'type' => 'textarea', // Kontroltype (tekstområde)
    ));
    
    }

    
}
add_action('customize_register', 'fitbrand_customize_register'); // Binder vores registreringsfunktion til Customizer
