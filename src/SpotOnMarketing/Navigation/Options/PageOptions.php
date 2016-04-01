<?php

namespace SpotOnMarketing\Navigation\Options;

class PageOptions extends Options implements OptionsInterface
{
    /** @var array */
    protected $defaults = [
        'options' => [
            // Render in menu
            'render' => true,

            // Route parameters
            'route_parameters' => [],

            // Label
            'label' => '',
            'escape_html' => true,

            // Classes
            'li_class' => null,
            'ul_class' => null,
        ],

        // Attributes
        'attributes' => [],

        // Sub pages
        'pages' => []
    ];
}
