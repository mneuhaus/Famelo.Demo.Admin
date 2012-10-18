<?php

namespace Famelo\Demo\Admin\Domain\Model;

/*                                                                        *
 * This script belongs to the Flow package "Contacts".                    *
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
use TYPO3\Expose\Annotations as Expose;

/**
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 * @Flow\Scope("prototype")
 * @Flow\Entity
 */
class Inline {

	/**
	 * @var \Famelo\Demo\Admin\Domain\Model\Address
	 * @ORM\ManyToOne(inversedBy="inlineStacked", cascade={"all"})
	 * @Expose\Inline(element="TYPO3.Expose:InlineStacked")
	 */
	protected $addressStacked;

	/**
	 * @var \Famelo\Demo\Admin\Domain\Model\Address
	 * @ORM\ManyToOne(inversedBy="inlineTabular", cascade={"all"})
	 * @Expose\Inline(element="TYPO3.Expose:InlineTabular")
	 */
	protected $addressTabular;

	/**
	 * @var \Famelo\Demo\Admin\Domain\Model\Address
	 * @ORM\ManyToOne(inversedBy="inlineSeamless", cascade={"all"})
	 * @Expose\Inline(element="TYPO3.Expose:InlineSeamless")
	 */
	protected $addressSeamless;

	/**
	 * @var \Doctrine\Common\Collections\Collection<\Famelo\Demo\Admin\Domain\Model\Address>
	 * @ORM\ManyToMany(inversedBy="inlinesStacked", cascade={"all"})
	 * @Expose\Inline(element="TYPO3.Expose:InlineStacked")
	 */
	protected $addressesStacked;

	/**
	 * @var \Doctrine\Common\Collections\Collection<\Famelo\Demo\Admin\Domain\Model\Address>
	 * @ORM\ManyToMany(inversedBy="inlinesTabular", cascade={"all"})
	 * @Expose\Inline(element="TYPO3.Expose:InlineTabular")
	 */
	protected $addressesTabular;

	/**
	 * @var \Doctrine\Common\Collections\Collection<\Famelo\Demo\Admin\Domain\Model\Address>
	 * @ORM\ManyToMany(inversedBy="inlinesSeamless", cascade={"all"})
	 * @Expose\Inline(element="TYPO3.Expose:InlineSeamless")
	 */
	protected $addressesSeamless;

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