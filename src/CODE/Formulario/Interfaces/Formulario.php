<?php
namespace CODE\Formulario\Interfaces;

interface Formulario {

    public function addItem(FieldInterface $item);
    public function setAction($action);
    public function setMethod($method);
    public function render();
} 