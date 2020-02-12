<?php 
function features_custom_post() {
    // creo e registro il custom post type
    register_post_type( 'features', /* nome del custom post type */
        // definisco le varie etichette da mostrare nei menù
        array('labels' => array(
				'name' => 'Features', /* nome, al plurale, dell'etichetta del post type. */
				'singular_name' => 'Feature', /* nome, al singolare, dell'etichetta del post type. */
				'all_items' => 'Tutte le features', /* testo nei menu che indica tutti i contenuti del post type */
				'add_new' => 'Aggiungi nuova', /*testo del pulsante Aggiungi. */
				'add_new_item' => 'Aggiungi nuova feature', /* testo per il pulsante Aggiungi nuovo post type */
				'edit_item' => 'Modifica feature', /*  testo modifica */
				'new_item' => 'Nuova feature', /* testo nuovo oggetto */
				'view_item' => 'Visualizza features', /* testo per visualizzare */
				'search_items' => 'Cerca feature', /* testo per la ricerca*/
				'not_found' =>  'Nessuna feature trovata', /* testo se non trova nulla */
				'not_found_in_trash' => 'Nessuna feature trovata nel cestino', /* testo se non trova nulla nel cestino */
				'parent_item_colon' => ''
            ), /* fine dell'array delle etichette del menu */
            'description' => 'Features in homepage', /* descrizione del post type */
            'public' => true, /* definisce se il post type sia visibile sia da front-end che da back-end */
            'publicly_queryable' => true, /* definisce se possono essere fatte query da front-end */
            'exclude_from_search' => false, /* esclude (false) il post type dai risultati di ricerca */
            'show_ui' => true, /* definisce se deve essere visualizzata l'interfaccia di default nel pannello di amministrazione */
            'query_var' => true,
            'menu_position' => 8, /* definisce l'ordine in cui comparire nel menù di amministrazione a sinistra */
            'menu_icon' => 'dashicons-schedule', /* imposta l'icona da usare nel menù per il posty type */
            'rewrite'   => array( 'slug' => 'features', 'with_front' => true ), /* specificare uno slug per le URL */
            'has_archive' => true, /* definisci se abilitare la generazione di un archivio (tipo archive-cd.php) */
            'capability_type' => 'post', /* definisci se si comporterà come un post o come una pagina */
            'hierarchical' => false, /* definisci se potranno essere definiti elementi padri di altri */
            /* la riga successiva definisce quali elementi verranno visualizzati nella schermata di creazione del post */
            'supports' => array( 'title', 'editor', 'thumbnail')
        ) /* fine delle opzioni */
    ); /* fine della registrazione */
 
}
?>