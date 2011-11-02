<?php
/**
 * Inflect some words
 *
 * @author Dmitry "vredniy" Zudochkin
 * @url http://nano.yandex.ru/project/inflect/
 */

class YandexInflector
{
    protected $_availableFormats = array('json', 'xml');
    protected $_format = 'json';


    public function setFormat($format)
    {
        if (in_array($format, $this->_availableFormats))
            $this->_format = $format;

        return $this;
    }

    public function inflect($word)
    {
        #$word = urlencode($word);
        $url =  'http://export.yandex.ru/inflect.xml?' . http_build_query(array(
            'name' => $word,
            'format' => $this->_format
        ));
        return file_get_contents($url);
    }
}
