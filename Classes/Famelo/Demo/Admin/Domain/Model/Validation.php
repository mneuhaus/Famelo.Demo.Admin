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

/**
 * @Flow\Entity
 */
class Validation {

	/**
	 * @var string
	 * @Flow\Validate(type="NotEmpty")
	 */
	protected $required;

	/**
	 * @var string
	 * @Flow\Validate(type="String")
	 */
	protected $string;

	/**
	 * @var string
	 * @Flow\Validate(type="EmailAddress")
	 */
	protected $email;

	/**
	 * @var string
	 * @Flow\Validate(type="StringLength", options={ "minimum"=1, "maximum"=100 })
	 */
	protected $stringlength;

    /**
     * @param string $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param string $required
     */
    public function setRequired($required) {
        $this->required = $required;
    }

    /**
     * @return string
     */
    public function getRequired() {
        return $this->required;
    }

    /**
     * @param string $string
     */
    public function setString($string) {
        $this->string = $string;
    }

    /**
     * @return string
     */
    public function getString() {
        return $this->string;
    }

    /**
     * @param string $stringlength
     */
    public function setStringlength($stringlength) {
        $this->stringlength = $stringlength;
    }

    /**
     * @return string
     */
    public function getStringlength() {
        return $this->stringlength;
    }

}

?>