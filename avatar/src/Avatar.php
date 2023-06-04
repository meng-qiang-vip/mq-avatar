<?php


namespace Mq\Avatar;


class Avatar
{
    public function __construct()
    {
    }

    public function getContent():string{
        $url=config("mq.url");
        return "你很好".$url;
    }
}