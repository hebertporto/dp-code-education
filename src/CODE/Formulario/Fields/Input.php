<?php


namespace CODE\Formulario\Fields;

use CODE\Formulario\Interfaces\FieldInterface;
use CODE\Formulario\Abstracts\FieldsAbstract;

class Input extends FieldsAbstract implements FieldInterface {

    private $label;
    private $type;
    private $placeholder;

    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
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

    public function getField()
    {
        $field = "\t" . "<label for='".$this->name."'>". $this->label .": </label><br />" . '<input type="' . $this->type . '" ';
        if (null !== $this->id) {
            $field .= 'id="' . $this->id . '" ';
        }

        if (null !== $this->name) {
            $field .= 'name="' . $this->name . '" ';
        }

        if (null !== $this->placeholder) {
            $field .= 'placeholder="' . $this->placeholder . '" ';
        }

        $field .= "/>";


        return $field . "\n";
    }
} 