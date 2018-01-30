<?php
/**
* @copyright Copyright (c) ARONET GmbH (https://aronet.swiss)
* @license AGPL-3.0
*
* This code is free software: you can redistribute it and/or modify
* it under the terms of the GNU Affero General Public License, version 3,
* as published by the Free Software Foundation.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU Affero General Public License for more details.
*
* You should have received a copy of the GNU Affero General Public License, version 3,
* along with this program.  If not, see <http://www.gnu.org/licenses/>
*
*/

namespace RNTForest\lxd\forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Validation;
use Phalcon\Validation\Validator\StringLength as StringLengthValidator;
use Phalcon\Validation\Validator\Regex as RegexValidator;
use Phalcon\Validation\Validator\PresenceOf as PresenceOfValidator;

class SnapshotForm extends \RNTForest\core\forms\FormBase
{
    
    public function initialize($entity = null, $userOptions = null)
    {

        $this->add(new Hidden("virtual_servers_id"));

        // name
        $element = new Text("name");
        $message = $this->translate("virtualserver_name");
        $element->setLabel($message);
        $message = $this->translate("virtualserver_snapshotname");
        $element->setAttribute("placeholder",$message);
        $element->setFilters(array('striptags', 'string'));
        $message = $this->translate("virtualserver_name_required");
        $message1 = $this->translate("virtualserver_snapshotname_replica");
        $message2 = $this->translate("virtualserver_snapshotname_required");        
        $element->addValidators(array(
            new PresenceOfValidator(array(
                'message' => $message
            )),
            new StringLengthValidator(array(
                'max' => 64,
                'min' => 3,
            )),
            new RegexValidator(array(
                'pattern' => '/^(?!.*replica).*$/',
                'message' => $message1
            )),
            new RegexValidator(array(
                'pattern' => '/^[äöüÄÖÜ0-9a-zA-Z-_().!?\s]{3,64}$/',
                'message' => $message2
            )),
        ));
        $this->add($element);

        // description
        $element = new Text("description");
        $message = $this->translate("virtualserver_description");
        $element->setLabel($message);
        $element->setAttribute("placeholder",$message);
        $element->setFilters(array('striptags', 'string'));
        $message = $this->translate("virtualserver_description_valid");
        $element->addValidators(array(
            new StringLengthValidator(array(
                'max' => 250,
                'message' => $message
            ))
        ));
        $this->add($element);
    }

}
