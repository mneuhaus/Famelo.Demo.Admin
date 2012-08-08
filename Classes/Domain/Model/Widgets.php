<?php

namespace Demo\ContentManagement\Domain\Model;

/*                                                                        *
 * This script belongs to the FLOW3 package "Contacts".                   *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License as published by the Free   *
 * Software Foundation, either version 3 of the License, or (at your      *
 * option) any later version.                                             *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        *
 * You should have received a copy of the GNU General Public License      *
 * along with the script.                                                 *
 * If not, see http://www.gnu.org/licenses/gpl.html                       *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use Doctrine\ORM\Mapping as ORM;
use TYPO3\FLOW3\Annotations as FLOW3;
use TYPO3\Admin\Annotations as Admin;

/**
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 * @FLOW3\Scope("prototype")
 * @FLOW3\Entity
 * @Admin\Active
 * @Admin\Group("Testcases")
 * @Admin\Set(title="Default Types", properties="string,integer,float,boolean,date,time,datetime,resource,tag,tags")
 * @Admin\Set(title="Textinput", properties="textarea,autoexpand,fullrte,markdown")
 * @Admin\Set(title="Relations", properties="address, addresses, addressesChosen")
 */
class Widgets{
	/**
	 * @var string
	 * @FLOW3\Identity
	 */
	protected $string;
	
	/**
	 * @var integer
	 * @ORM\Column(type="integer", nullable=true)
	 */
#	protected $integer;
	
	/**
	 * @var float
	 */
#	protected $float;
	
	/**
	 * @var boolean
	 */
	protected $boolean = false;
	
	/**
	 * @var \DateTime
	 * @Admin\Representation(datetimeFormat="Y-m-d")
	 */
	protected $date;
	
	/**
	 * @var \DateTime
	 * @Admin\Representation(datetimeFormat="H:i:s")
	 */
	protected $time;
	
	/**
	 * @var \DateTime
	 */
	protected $datetime;
	
	/**
	 * @var \TYPO3\FLOW3\Resource\Resource
	 * @ORM\OneToOne
	 */
	#protected $resource;
	
	/**
	 * @var \Demo\ContentManagement\Domain\Model\Address
	 * @ORM\ManyToOne(inversedBy="comments")
	 */
	protected $address;
	
	/**
	 * @var \Doctrine\Common\Collections\Collection<\Demo\ContentManagement\Domain\Model\Address>
	 * @ORM\ManyToMany(inversedBy="widgets_manytomany")
	 * @Admin\Ignore("list")
	 */
	protected $addresses;
	
	/**
	 * @var \Doctrine\Common\Collections\Collection<\Demo\ContentManagement\Domain\Model\Address>
	 * @ORM\ManyToMany(inversedBy="widgets_manytomany")
	 * @Admin\Ignore("list")
	 * ContentManagement\Element("Chosen")
	 */
	#protected $addressesChosen;
	
	/**
	 * @var string
	 * @Admin\Element("TYPO3.Form:MultiLineText")
	 */
	protected $textarea;

	/**
	 * @var string
	 * @Admin\Element("TYPO3.Form:Password")
	 */
	protected $password;
	
	/**
	 * @var string
	 */
	#protected $fullrte;
	
	/**
	 * @var string
	 */
	#protected $markdown;

    public function __construct(){
		$this->date = new \DateTime();
		$this->time = new \DateTime();
		$this->datetime = new \DateTime();
    }

    public function __toString() {
        return $this->string;
    }

    /**
     * @param  $string
     */
    public function setString($string) {
    	$this->string = $string;
    }
    
    /**
     * @return 
     */
    public function getString() {
    	return $this->string;
    }

    /**
     * @param  $boolean
     */
    public function setBoolean($boolean) {
    	$this->boolean = $boolean;
    }
    
    /**
     * @return 
     */
    public function getBoolean() {
    	return $this->boolean;
    }

    /**
     * @param  $date
     */
    public function setDate($date) {
    	$this->date = $date;
    }
    
    /**
     * @return 
     */
    public function getDate() {
    	return $this->date;
    }

    /**
     * @param  $datetime
     */
    public function setDatetime($datetime) {
    	$this->datetime = $datetime;
    }
    
    /**
     * @return 
     */
    public function getDatetime() {
    	return $this->datetime;
    }

    /**
     * @param  $time
     */
    public function setTime($time) {
    	$this->time = $time;
    }
    
    /**
     * @return 
     */
    public function getTime() {
    	return $this->time;
    }

    /**
     * @param  $textarea
     */
    public function setTextarea($textarea) {
    	$this->textarea = $textarea;
    }
    
    /**
     * @return 
     */
    public function getTextarea() {
    	return $this->textarea;
    }

    /**
     * @param  $password
     */
    public function setPassword($password) {
    	$this->password = $password;
    }
    
    /**
     * @return string
     */
    public function getPassword() {
    	return $this->password;
    }

    /**
     * @param string $address
     */
    public function setAddress($address) {
    	$this->address = $address;
    }
    
    /**
     * @return object
     */
    public function getAddress() {
    	return $this->address;
    }

    /**
     * @param object $addresses
     */
    public function setAddresses($addresses) {
    	$this->addresses = $addresses;
    }
    
    /**
     * @return object
     */
    public function getAddresses() {
    	return $this->addresses;
    }

    /**
     * @param object $addressesChosen
     */
    public function setAddressesChosen($addressesChosen) {
    	$this->addressesChosen = $addressesChosen;
    }
    
    /**
     * @return object
     */
    public function getAddressesChosen() {
    	return $this->addressesChosen;
    }
}

?>