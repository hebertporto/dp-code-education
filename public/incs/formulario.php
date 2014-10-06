<?php
use CODE\Formulario\FormHtml;

use CODE\Formulario\Fields\Input;
use CODE\Formulario\Fields\TextArea;
use CODE\Formulario\Fields\Select;
use CODE\Formulario\Fields\SelectOption;
?>
<h3>
    Formulário HTML <small>gerado com php</small>
</h3>

<?php


$form = (new FormHtml())->setAction("")->setMethod("POST");
    $form->addItem((new Input())->setLabel('Nome:')->setType('text')->setId('nome')->setName('nome'))
         ->addItem((new Input())->setLabel('E-mail:')->setType('email')->setId('email')->setName('email'))
         ->addItem((new TextArea())->setLabel('Assunto')->setId('assunto')->setName('assunto')->setRows('3'))
        ->addItem(
            (new Select())->setLabel('Nível de Prioridade: ')->setId("nivel")->setName("nivel")
                ->addOption((new SelectOption())->setValue("1")->setText("Nível 1"))
                ->addOption((new SelectOption())->setValue("2")->setText("Nível 2"))
        )
         ->render();
