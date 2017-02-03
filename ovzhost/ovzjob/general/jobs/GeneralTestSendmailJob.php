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

namespace RNTFOREST\OVZJOB\general\jobs;

use RNTFOREST\OVZJOB\general\jobs\AbstractJob;

class GeneralTestSendmailJob extends AbstractJob {
    
    protected function defineJobType() {
        $this->JobType = "general_test_sendmail";
    }

    public function run() {
        $this->Context->getLogger()->debug("Try to send testmail.");
        mail($this->Params['TO'],'general_test_sendmail',$this->Params['MESSAGE']);
        $this->Done = 1;
        $this->Retval="Testmail sent.";
    }
}
