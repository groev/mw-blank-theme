<?php

class RebstockOptionsClass
{
    public function __construct()
    {
        add_action('acf/init', array($this, 'register_acf_options_page'));
        add_action('acf/init', array($this, 'register_fields'));

    }

    public function register_acf_options_page()
    {
        acf_add_options_page(array(
            'page_title' => __('GL Einstellungen'),
            'menu_title' => __('GL Einstellungen'),
            'menu_slug' => 'gl-settings',
            'capability' => 'manage_options',
            'redirect' => false,
        ));
    }

    public function register_fields()
    {
        acf_add_local_field_group(array(
            'key' => 'group_5e9f1b3b0c0a1',
            'title' => 'GL Einstellungen',
            'fields' => array(
                array(
                    'key' => 'field_logo',
                    'label' => 'Logo',
                    'name' => 'logo',
                    'type' => 'image',
                    'instructions' => 'Bitte wählen Sie ein Logo aus.',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '30',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'url',
                    'preview_size' => 'medium',
                    'library' => 'all',
              
                    'max_size' => '',
                ),
                array(
                    'key' => 'field_favicon',
                    'label' => 'Favicon',
                    'name' => 'favicon',
                    'type' => 'image',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '30',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'url',
                    'preview_size' => 'medium',
                    'library' => 'all',
          
                    'min_size' => '',
                
                    'max_size' => '',
                ),
                array(
                    'key' => 'field_name',
                    'label' => 'Name',
                    'name' => 'name',
                    'type' => 'text',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                ),
                array(
                    'key' => 'field_phone',
                    'label' => 'Telefon',
                    'name' => 'phone',
                    'type' => 'text',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                ),
                array(
                    'key' => 'field_footer_columns',
                    'label' => 'Footer Spalten',
                    'name' => 'footer_columns',
                    'type' => 'repeater',
                    'instructions' => 'Bitte fügen Sie die Footer Spalten hinzu.',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '100',
                        'class' => '',
                        'id' => '',
                    ),
                    'collapsed' => 'field_footer_column',

                    'layout' => 'block',
                    'button_label' => 'Spalte hinzufügen',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_footer_column',
                            'label' => 'Spalte',
                            'name' => 'column',
                            'type' => 'wysiwyg',
                            'required' => 1,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '100',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'tabs' => 'all',
                            'toolbar' => 'full',
                            'media_upload' => 1,
                            'delay' => 0,
                        ),
                    ),
                   
                ),
                array(
                    'key' => 'field_leistungen',
                    'label' => 'Text über Leistungen',
                    'name' => 'leistungen_intro',
                    'type' => 'wysiwyg',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '100',
                        'class' => '',
                        'id' => '',
                    ),
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'gl-settings',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',

        ));
    }
}
$init = new RebstockOptionsClass();
