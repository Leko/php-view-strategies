<?php

namespace Rush\Strategy;

/**
 * Required Pug(https://github.com/pug-php/pug)
 */
class Pug implements \Rush\ViewStrategy
{
    /**
     * @param string             $path    Template file path
     * @param array|\ArrayAccess $params  Local template params
     * @param array              $globals Global template params
     * @return string Rendered string
     */
    public function render($path, $params)
    {
        $pug = new \Pug\Pug();
        return $pug->render($path, $params);
    }
}
