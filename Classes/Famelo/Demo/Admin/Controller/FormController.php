<?php
namespace Famelo\Demo\Admin\Controller;

/*                                                                        *
 * This script belongs to the FLOW3 package "Debug.Toolbar".              *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Debug\Toolbar\Annotations as Debug;

/**
 */
class FormController extends \TYPO3\Flow\Mvc\Controller\ActionController {
	/**
	 * Index action
	 *
	 * @return void
	 */
	public function indexAction() {
	}

	/**
	 * Index action
	 *
	 * @return void
	 */
	public function editAction() {
		$widget = new \Famelo\Demo\Admin\Domain\Model\Widgets();
		$widget->setString('Hello World');
		$this->view->assign('widget', $widget);
	}

	/**
	 * Index action
	 *
	 * @return void
	 */
	public function saveAction() {
		$objects = $this->request->getInternalArgument('__objects');
		return '<div class="container">yea! i\'ve received an object :)</div>';
	}

}

?>