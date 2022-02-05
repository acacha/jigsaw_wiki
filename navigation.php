<?php

//$navigation = collect([]);
//
//foreach ($docs as $doc) {
//    $navigation.push([
//        'prova' => $doc
//    ]);
//}
//dd($navigation);
//return $navigation;
return [
    'Getting Started' => [
        'url' => 'docs/INDEX.md',
        'children' => [
            'Android' => 'docs/ANDROID',
            'Navigation' => 'docs/navigation',
            'Algolia DocSearch' => 'docs/algolia-docsearch',
            '404' => 'docs/custom-404-page',
        ],
    ],
//    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
];
