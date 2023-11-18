<?php

use Obelaw\Framework\Builder\Contracts\FieldType;
use Obelaw\Framework\Builder\Form\Fields;

return new class
{
    public function form(Fields $form)
    {
        $form->addField(FieldType::TEXT, [
            'label' => 'name',
            'model' => 'name',
            'rules' => 'required',
            'placeholder' => 'IPhone x6',
            'order' => 10,
        ]);
    }
};
