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
  
namespace RNTForest\ovz\interfaces;

interface MonLocalBehaviorInterface {
    /**
    * Returns the Status and Value of a MonLocalLogs in use of the given arguments.
    * 
    * @param string $ovzStatistics JSON
    * @param numeric $warnvalue
    * @param numeric $maxvalue
    * @return \RNTForest\ovz\utilities\MonLocalValueStatus
    */
    public function execute($ovzStatistics,$warnvalue,$maxvalue);
    
    /**
    * Returns a human readable string.
    * 
    * @param numeric $ovzStatistics JSON
    * @param numeric $warnvalue
    * @param numeric $maxvalue
    * @return string
    */
    public function genThresholdString($actvalue,$warnvalue,$maxvalue);
}