<?php
    /*
    *         PwnPHP
    *   @author João Artur
    * www.github.com/JoaoArtur
    */

    require 'pwn/pwn.php';
    use PwnPHP\loader;
    use PwnPHP\tools;
    use PwnPHP\field;

    $PwnPHP = new loader\PwnPHP;
    
    $PwnField = new field\Field;
    $PwnField->new('URL');

    $PwnHTTP = new tools\HTTP();
    $PwnHTTP->get($PwnField->get());
    echo $PwnPHP->color('yellow')."\n";
    print_r($PwnHTTP->header());
    echo "\n";