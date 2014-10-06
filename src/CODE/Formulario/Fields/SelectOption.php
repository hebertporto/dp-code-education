<?php

namespace CODE\Formulario\Fields;


use CODE\Formulario\Interfaces\OptionInterface;

class SelectOption implements OptionInterface{

    private $text;
    private $value;

    public function setText($text){
        $this->text = $text;
        return $this;
    }
    public function setValue($value){
        $this->value = $value;
        return $this;
    }
    public function getField(){

        $form = "<option";

        if (null !== $this->value) {
            $form .= ' value="' . $this->value . '"';
        }
        $form .= ">";
        if (null !== $this->text) {
            $form .= $this->text;
        }
        $form .= "</option>";

        return $form;
    }

} 