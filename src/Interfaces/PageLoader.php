<?php

namespace App\Interfaces;

interface PageLoader
{
    public function load($url);
    public function getPage();
    public function getLoadResult();
}