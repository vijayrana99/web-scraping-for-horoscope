<?php

require('simpleHtmlDom/simple_html_dom.php');

// Create DOM from URL or file
// you need to remove $offset on simple_html_dom.php line 75
$html = file_get_html('https://www.hamropatro.com/rashifal');

// creating an array of elements
$horoscope = [];

foreach ($html->find('div.item') as $rashifal) {

    $horoscopeTitle       = $rashifal->find('h3', 0)->plaintext;
    $horoscopeDescription = $rashifal->find('p', 0)->plaintext;

    $horoscope[] = [
        'title'       => $horoscopeTitle,
        'description' => $horoscopeDescription
    ];
}

var_dump($horoscope);