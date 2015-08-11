<?php

class FormatterHTMLPurifier extends TextFormatter
{
    private $htmlPurifier;

    public function __construct()
    {
        $this->htmlPurifier = new HTMLPurifier([

            'Cache.SerializerPath' => CACHE
        ]);
    }

    public function about()
    {
        return [ 'name' => 'HTML Purifier' ];
    }

    public function run($string)
    {
        return trim($this->htmlPurifier->purify($string));
    }
}
