<?php
namespace Famelo\Demo\Admin\Domain\Model;

/*                                                                        *
 * This script belongs to the Flow package 'Contacts'.                   *
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
 * @Flow\Entity
 */
class Configurations {

	/**
	 * @var string
	 */
	protected $name;



	/**
	 * @var string
	 */
	protected $ignoreCompletly = '';

	/**
	 * @var string
	 */
	protected $ignoreListView;



	/**
	 * @var string
	 */
	protected $widget;

	/**
	 * @var string
	 */
	protected $optionsProvider;

	/**
	 * @param string $ignoreCompletly
	 */
	public function setIgnoreCompletly($ignoreCompletly) {
		$this->ignoreCompletly = $ignoreCompletly;
	}

	/**
	 * @return string
	 */
	public function getIgnoreCompletly() {
		return $this->ignoreCompletly;
	}

	/**
	 * @param string $ignoreListView
	 */
	public function setIgnoreListView($ignoreListView) {
		$this->ignoreListView = $ignoreListView;
	}

	/**
	 * @return string
	 */
	public function getIgnoreListView() {
		return $this->ignoreListView;
	}

	/**
	 * @param string $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	public function setOptions($options) {
		$this->options = $options;
	}

	public function getOptions() {
		return $this->options;
	}

	/**
	 * @param string $optionsProvider
	 */
	public function setOptionsProvider($optionsProvider) {
		$this->optionsProvider = $optionsProvider;
	}

	/**
	 * @return string
	 */
	public function getOptionsProvider() {
		return $this->optionsProvider;
	}

	/**
	 * @param string $widget
	 */
	public function setWidget($widget) {
		$this->widget = $widget;
	}

	/**
	 * @return string
	 */
	public function getWidget() {
		return $this->widget;
	}


}

?>