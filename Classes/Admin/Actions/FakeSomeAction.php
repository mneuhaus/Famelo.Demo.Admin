<?php

namespace Demo\ContentManagement\Admin\Actions;

/* *
 * This script belongs to the FLOW3 framework.                            *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License as published by the *
 * Free Software Foundation, either version 3 of the License, or (at your *
 * option) any later version.                                             *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser       *
 * General Public License for more details.                               *
 *                                                                        *
 * You should have received a copy of the GNU Lesser General Public       *
 * License along with the script.                                         *
 * If not, see http://www.gnu.org/licenses/lgpl.html                      *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use Doctrine\ORM\Mapping as ORM;
use TYPO3\FLOW3\Annotations as FLOW3;

/**
 * Action to create a new Being
 *
 * @version $Id: AbstractValidator.php 3837 2010-02-22 15:17:24Z robert $
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 * @FLOW3\Scope("prototype")
 */
class FakeSomeAction extends \Foo\ContentManagement\Core\Actions\AbstractAction {
	
	/**
	 * Function to Check if this Requested Action is supported
	 * @author Marc Neuhaus <mneuhaus@famelo.com>
	 * */
	public function canHandle($being, $action = null, $id = false) {
		if(stristr($being, "Demo\ContentManagement\Domain\Model") && !$id)
			return in_array($action, array("list", "create"));
		return false;
	}
	
	public function __toString() {
		return "Fake some!";
	}
	
	/**
	 * Create objects
	 *
	 * @param string $being
	 * @param array $ids
	 * @author Marc Neuhaus <mneuhaus@famelo.com>
	 * */
	public function execute() {
		$being = $this->request->getArgument("being");
		for ($i=0; $i < 25; $i++) {
			$object = new $being();
			
			switch ($being) {
				case 'Demo\ContentManagement\Domain\Model\Company':
						$data = array(
							"name" => \Demo\ContentManagement\Faker\Company::name()
						);
					break;
				
				case 'Demo\ContentManagement\Domain\Model\Address':
						$data = array(
							"street" => \Demo\ContentManagement\Faker\Address::streetName(),
							"housenumber" => \Demo\ContentManagement\Faker\Address::numerify("##"),
							"zip" => \Demo\ContentManagement\Faker\Address::zipCode(),
							"city" => \Demo\ContentManagement\Faker\Address::city(),
							"country" => \Demo\ContentManagement\Faker\Address::ukCountry(),
						);
					break;
					
				case 'Demo\ContentManagement\Domain\Model\Variants':
						$data = array(
							"name" => \Demo\ContentManagement\Faker\Lorem::sentence(3),
							"startdate" => \Demo\ContentManagement\Faker\Date::random()->format(\DateTime::W3C),
							"enddate" => \Demo\ContentManagement\Faker\Date::random()->format(\DateTime::W3C),
							"description" => \Demo\ContentManagement\Faker\Lorem::paragraph(4),
						);
					break;
					
				case 'Demo\ContentManagement\Domain\Model\Event':
						$data = array(
							"title" => \Demo\ContentManagement\Faker\Lorem::sentence(3),
							"startdate" => \Demo\ContentManagement\Faker\Date::random()->format(\DateTime::W3C),
							"enddate" => \Demo\ContentManagement\Faker\Date::random()->format(\DateTime::W3C)
						);
					break;
					
				case 'Demo\ContentManagement\Domain\Model\Person':
						$data = array(
							"firstname" => \Demo\ContentManagement\Faker\Name::firstName(),
							"lastname" => \Demo\ContentManagement\Faker\Name::lastName()
						);
					break;
					
				case 'Demo\ContentManagement\Domain\Model\Message':
						$data = array(
							"sender" => \Demo\ContentManagement\Faker\Entity::getRandom("Person")->getIdentity(),
							"receipients" => array(\Demo\ContentManagement\Faker\Entity::getRandom("Person")->getIdentity()),
							"subject" => \Demo\ContentManagement\Faker\Lorem::sentence(5),
							"content" => \Demo\ContentManagement\Faker\Lorem::paragraph(4),
						);
					break;
						
				default:
					# code...
					break;
			}
			
			if(isset($data)){
				$result = $this->adapter->createObject($being, $data);
			}
		}
		
		$arguments = array(
			"being" => \Foo\ContentManagement\Core\API::get("classShortNames", $being)
		);
		$this->controller->redirect('list', "standard", "admin", $arguments);
	}
	
	
}
?>