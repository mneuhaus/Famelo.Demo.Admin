<?php

namespace Famelo\Demo\Admin\Domain\Model;

/*                                                                        *
 * This script belongs to the Flow package "Contacts".                   *
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
use TYPO3\Flow\Annotations as Flow;
use \TYPO3\Expose\Annotations as Expose;

/**
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 * @Flow\Scope("prototype")
 * @Flow\Entity
 */
class Widgets{
	/**
	 * @var string
	 * @Flow\Identity
	 * @Expose\Label("Simple String")
	 */
	protected $string;

	/**
	 * @var integer
	 * @ORM\Column(type="integer", nullable=true)
	 */
   #protected $integer;

	/**
	 * @var float
	 */
   #protected $float;

	/**
	 * @var boolean
	 */
	#protected $boolean = false;

	/**
	 * @var \DateTime
	 * Expose\Representation(datetimeFormat="Y-m-d")
	 */
	protected $date;

	/**
	 * @var \DateTime
	 * Expose\Representation(datetimeFormat="H:i:s")
	 */
	protected $time;

	/**
	 * @var \DateTime
	 */
	protected $datetime;

	/**
	 * @var \TYPO3\Flow\Resource\Resource
	 * @ORM\OneToOne
	 */
	#protected $resource;

	/**
	 * @var \Famelo\Demo\Admin\Domain\Model\Address
	 * @ORM\ManyToOne(inversedBy="comments")
	 */
   protected $address;

	/**
	 * @var \Doctrine\Common\Collections\Collection<\Famelo\Demo\Admin\Domain\Model\Address>
	 * @ORM\ManyToMany(inversedBy="widgets_manytomany")
	 * Expose\Ignore("list")
	 */
   protected $addresses;

	/**
	 * @var \Doctrine\Common\Collections\Collection<\Famelo\Demo\Admin\Domain\Model\Address>
	 * @ORM\ManyToMany(inversedBy="widgets_manytomany")
	 * Expose\Ignore("list")
	 * ContentManagement\Element("Chosen")
	 */
	protected $addressesChosen;

	/**
	 * @var string
	 * @Expose\Element("TYPO3.Form:MultiLineText")
	 * @Expose\Label("Simple Textarea")
	 */
	protected $textarea;

	/**
	 * @var string
	 * @Expose\Element("TYPO3.Form:Password")
	 * @Expose\Label("Password input")
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

	/**
	 * @var \Famelo\Demo\Admin\Domain\Model\Address
	 * @ORM\ManyToOne(inversedBy="inlineStacked", cascade={"all"})
	 */
	protected $addressStacked;

	/**
	 * @var \Famelo\Demo\Admin\Domain\Model\Address
	 * @ORM\ManyToOne(inversedBy="inlineTabular", cascade={"all"})
	 */
	protected $addressTabular;

	/**
	 * @var \Famelo\Demo\Admin\Domain\Model\Address
	 * @ORM\ManyToOne(inversedBy="inlineSeamless", cascade={"all"})
	 */
	protected $addressSeamless;

	/**
	 * @var \Doctrine\Common\Collections\Collection<\Famelo\Demo\Admin\Domain\Model\Address>
	 * @ORM\ManyToMany(inversedBy="inlinesStacked", cascade={"all"})
	 */
	protected $addressesStacked;

	/**
	 * @var \Doctrine\Common\Collections\Collection<\Famelo\Demo\Admin\Domain\Model\Address>
	 * @ORM\ManyToMany(inversedBy="inlinesTabular", cascade={"all"})
	 */
	protected $addressesTabular;

	/**
	 * @var \Doctrine\Common\Collections\Collection<\Famelo\Demo\Admin\Domain\Model\Address>
	 * @ORM\ManyToMany(inversedBy="inlinesSeamless", cascade={"all"})
	 */
	protected $addressesSeamless;

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

	/**
	 * @param  $addressStacked
	 */
	public function setAddressStacked($addressStacked) {
		$this->addressStacked = $addressStacked;
	}

	/**
	 * @return
	 */
	public function getAddressStacked() {
		return $this->addressStacked;
	}

	/**
	 * @param  $addressTabular
	 */
	public function setAddressTabular($addressTabular) {
		$this->addressTabular = $addressTabular;
	}

	/**
	 * @return
	 */
	public function getAddressTabular() {
		return $this->addressTabular;
	}

	/**
	 * @param  $addressesStacked
	 */
	public function setAddressesStacked($addressesStacked) {
		$this->addressesStacked = $addressesStacked;
	}

	/**
	 * @return
	 */
	public function getAddressesStacked() {
		return $this->addressesStacked;
	}

	/**
	 * @param  $addressesTabular
	 */
	public function setAddressesTabular($addressesTabular) {
		$this->addressesTabular = $addressesTabular;
	}

	/**
	 * @return
	 */
	public function getAddressesTabular() {
		return $this->addressesTabular;
	}

	/**
	 * @param object $addressSeamless
	 */
	public function setAddressSeamless($addressSeamless) {
		$this->addressSeamless = $addressSeamless;
	}

	/**
	 * @return object
	 */
	public function getAddressSeamless() {
		return $this->addressSeamless;
	}

	/**
	 * @param array $addressesSeamless
	 */
	public function setAddressesSeamless($addressesSeamless) {
		$this->addressesSeamless = $addressesSeamless;
	}

	/**
	 * @return array
	 */
	public function getAddressesSeamless() {
		return $this->addressesSeamless;
	}
}

?>