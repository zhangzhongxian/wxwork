<?php
/**
 * author : abel.tang
 * Date: 2019-09-03  10:01
 */

namespace wxwork\api\src\message;


use wxwork\utils\Utils;

class NewsArticle
{
    public $title = null; // string
    public $description = null; // string
    public $url = null; // string
    public $picurl = null; // string
    public $btntxt = null; // string

    public function __construct($title = null, $description = null, $url = null, $picurl = null, $btntxt = null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->url = $url;
        $this->picurl = $picurl;
        $this->btntxt = $btntxt;
    }

    public function CheckMessageSendArgs()
    {
        Utils::checkNotEmptyStr($this->title, "title");
        Utils::checkNotEmptyStr($this->url, "url");
    }

    public function Article2Array()
    {
        $args = array();

        Utils::setIfNotNull($this->title, "title", $args);
        Utils::setIfNotNull($this->description, "description", $args);
        Utils::setIfNotNull($this->url, "url", $args);
        Utils::setIfNotNull($this->picurl, "picurl", $args);
        Utils::setIfNotNull($this->btntxt, "btntxt", $args);

        return $args;
    }
}