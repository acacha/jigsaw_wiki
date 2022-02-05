<?php

use App\Listeners\GenerateSitemap;
use Mni\FrontYAML\Markdown\MarkdownParser;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

/**
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     // Your code here
 * });
 */

$events->afterBuild(GenerateSitemap::class);

$events->beforeBuild(function ($jigsaw) {
//    $jigsaw->setConfig('navigation',[
//        'JORLS!' => [
//            'url' => 'docs/getting-started',
//            'children' => [
//                'Customizing Your Site' => 'docs/customizing-your-site',
//                'Navigation' => 'docs/navigation',
//                'Algolia DocSearch' => 'docs/algolia-docsearch',
//                'Custom 404 Page' => 'docs/custom-404-page',
//            ],
//        ],
//        'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
//    ]);
});


// SUPORT GITHUB FLAVOURED!
$container->bind(MarkdownParser::class, CustomParser::class);

class CustomParser implements MarkdownParser
{
    public function __construct()
    {
        $this->parser = new ParsedownExtra();
    }

    public function parse($markdown)
    {
        return $this->parser->parse($markdown);
    }
}