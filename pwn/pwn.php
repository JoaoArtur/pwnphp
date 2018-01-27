<?php
    /*
    *         PwnPHP
    *   @author João Artur
    * www.github.com/JoaoArtur
    */

    namespace PwnPHP\loader;

    class PwnPHP {
        public function __construct() {
            require 'vendor/autoload.php';
            foreach (glob('pwn/class/*.php') as $class) {
                require $class;
            }
        }
        public function color($color) {
            $colors = [
                'Black'        => "0m\e[30m",
                'Blue'         => "0m\e[34m",
                'Green'        => "0m\e[32m",
                'Cyan'         => "0m\e[36m",
                'Red'          => "0m\e[31m",
                'Purple'       => "0m\e[35m",
                'Brown'        => "0m\e[33m",
                'Light Gray'   => "0m\e[37m", 
                'Dark Gray'    => "1m\e[30m",
                'Light Blue'   => "1m\e[34m",
                'Light Green'  => "1m\e[32m",
                'Light Cyan'   => "1m\e[36m",
                'Light Red'    => "1m\e[31m",
                'Light Purple' => "1m\e[35m",
                'Yellow'       => "1m\e[33m",
                'White'        => "1m\e[37m"
            ];
            $cores = [];
            foreach ($colors as $key=>$c) {
                $cores[str_replace(' ','',strtolower($key))] = $c;
            }
            if (isset($cores[$color])) {
                return "\e[".$cores[$color];
            }
        }
    }