<?php

namespace CODE\Formulario\Fields;

use CODE\Formulario\Interfaces\FieldInterface;
use CODE\Formulario\Abstracts\FieldsAbstract;
use CODE\Formulario\Interfaces\OptionInterface;

class Select extends FieldsAbstract implements FieldInterface {

    private $optionArr = array();
    private $label;

    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function addOption(OptionInterface $option)
    {
        $this->optionArr[] = $option;

        return $this;
    }

    public function getField()
    {
        $field = "\t<label>". $this->label ."</label><br /><select";
        if (null !== $this->id) {
            $field .= ' id="' . $this->id . '"';
        }
        if (null !== $this->name) {
            $field .= ' name="' . $this->name . '"';
        }
        $field .= ">\n";
        foreach($this->optionArr as $option) {
            $field .= "\t\t{$option->getField()}\n";
        }
        $field .= "\t</select>";

        return $field . "\n";
    }
} 