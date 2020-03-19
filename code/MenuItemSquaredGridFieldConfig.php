<?php

namespace Marketo\Heyday\Extensions;

use SilverStripe\Forms\Form;
use SilverStripe\ORM\DataExtension;
use SilverStripe\Forms\GridField\GridField;

class MenuAdminSquared extends DataExtension
{
    public function updateEditForm(Form $form)
    {
        $fields = $form->Fields();
        $MenuSet = $fields->dataFieldByName('MenuSet');

        if ($MenuSet instanceof GridField) {
            $MenuSetConfig = $MenuSet->getConfig();
            $MenuSetConfig->removeComponentsByType('GridFieldAddNewButton');
        }
    }
}
