<?php


namespace Interfaces;


interface ProductsParser
{
    public function getProducts();
    public function getProductLink();
    public function getProductName();
    public function getProductAttributes();
}