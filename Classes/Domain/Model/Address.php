<?php
namespace Demo\ContentManagement\Domain\Model;

/*                                                                        *
 * This script belongs to the FLOW3 package "AdminDemo".                  *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;
use Doctrine\ORM\Mapping as ORM;
use Foo\ContentManagement\Annotations as ContentManagement;

/**
 * A Address
 *
 * @FLOW3\Scope("prototype")
 * @FLOW3\Entity
 * @ContentManagement\Active
 * @ContentManagement\Group("CRM")
 */
class Address {
	
	/**
	 * @var string
	 * @FLOW3\Validate(type="NotEmpty")
	 * @ContentManagement\Search
	 * @ContentManagement\Label("Strasse")
	 */
	protected $street = "";
	
	/**
	 * @var string
	 */
	protected $housenumber;
	
	/**
	 * @var string
	 */
	protected $zip;
	
	/**
	 * @var string
	 * @FLOW3\Validate(type="NotEmpty")
	 */
	protected $city = "";
	
	/**
	 * @var string
	 * @ContentManagement\Filter
	 */
	protected $country;
	
	
	public function __toString(){
		return sprintf("%s %s, %s %s", $this->street, $this->housenumber, $this->zip, $this->city);
	}
	
	/**
	 * @param string $street
	 */
	public function setStreet($street) {
		$this->street = $street;
	}
	
	/**
	 * @return string
	 */
	public function getStreet() {
		return $this->street;
	}
	
	/**
	 * @param string $housenumber
	 */
	public function setHousenumber($housenumber) {
		$this->housenumber = $housenumber;
	}
	
	/**
	 * @return string
	 */
	public function getHousenumber() {
		return $this->housenumber;
	}
	
	/**
	 * @param string $zip
	 */
	public function setZip($zip) {
		$this->zip = $zip;
	}
	
	/**
	 * @return string
	 */
	public function getZip() {
		return $this->zip;
	}

	/**
	 * @param string $city
	 */
	public function setCity($city) {
		$this->city = $city;
	}
	
	/**
	 * @return string
	 */
	public function getCity() {
		return $this->city;
	}
	
	/**
	 * @param string $country
	 */
	public function setCountry($country) {
		$this->country = $country;
	}
	
	/**
	 * @return string
	 */
	public function getCountry() {
		return $this->country;
	}
}
?>