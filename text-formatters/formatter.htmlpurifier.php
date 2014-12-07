<?php

require_once EXTENSIONS . '/htmlpurifier/vendor/autoload.php';

class FormatterHTMLPurifier extends TextFormatter
{
    private $formatter;

    public function __construct()
    {
        if (!$this->formatter) {

            $this->formatter = new HTMLPurifier(array(

                'Cache.SerializerPath' => CACHE
            ));
        }
    }

    public function about()
    {
        return array('name' => 'HTML Purifier');
    }

    public function run($string)
    {
        return trim($this->formatter->purify($string));
    }
}
