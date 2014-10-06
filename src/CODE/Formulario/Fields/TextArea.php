<?php

namespace CODE\Formulario\Fields;

use CODE\Formulario\Abstracts\FieldsAbstract;
use CODE\Formulario\Interfaces\FieldInterface;

class TextArea extends FieldsAbstract implements FieldInterface{

    private $label;
    private $rows;

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

    public function setRows($rows)
    {
        $this->rows = $rows;

        return $this;
    }

    public function getField()
    {
        $form = "\t";
        $form .= "<label for='".$this->name."'>". $this->label .": </label><br />";
        $form .= '<textarea';
        if (null !== $this->id) {
            $form .= ' id="' . $this->id . '"';
        }
        if (null !== $this->name) {
            $form .= ' name="' . $this->name . '"';
        }
        if (null !== $this->rows) {
            $form .= ' rows="' . $this->rows . '"';
        }
        $form .= '></textarea>';

        return $form . "\n";
    }

} 