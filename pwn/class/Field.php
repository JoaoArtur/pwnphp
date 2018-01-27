<?php
    /*
    *         PwnPHP
    *   @author João Artur
    * www.github.com/JoaoArtur
    */
    namespace PwnPHP\field;

    class Field {
        public function new($title) {
            echo "$title: ";
            $this->titulo = $title;
            $this->param  = fgets(STDIN);
            $this->param  = str_replace(["\n","\r"],'',$this->param);
        }
        public function get() {
            return $this->param;
        }
    }