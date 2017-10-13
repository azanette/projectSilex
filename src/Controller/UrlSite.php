<?php
namespace SON\Controller;

use Silex\Application;

class UrlSite
{
    public function url(Application $app, $name)
    {
        return $name.', a url do site é '. $app['url_site'];
    }
}