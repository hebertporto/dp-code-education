<?php

namespace CODE\Formulario;

use CODE\Formulario\Interfaces\Formulario;
use CODE\Formulario\Interfaces\FieldInterface;

class FormHtml implements Formulario{

    private $itemArr = array();
    private $method;
    private $action;
    private $form;

    public function addItem(FieldInterface $item)
    {
        $this->itemArr[] = $item;

        return $this;
    }

    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    public function buildForm()
    {
        $this->form = "<form";
        if (null !== $this->action) {
            $this->form .= ' action="' . $this->action . '"';
        }
        if (null !== $this->method) {
            $this->form .= ' method="' . $this->method . '"';
        }
        $this->form .= ">\n";

        foreach ($this->itemArr as $item) {
            $this->form .= $item->getField() . "<br />\n";
        }

        $this->form .= "<br ><button type='submit'>Enviar</button></form>";
    }

    public function getForm()
    {
        if (null == $this->form) {
            $this->buildForm();
        }

        return $this->form;
    }

    public function render()
    {
        echo $this->getForm();
    }
} 