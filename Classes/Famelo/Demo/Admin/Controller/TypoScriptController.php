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
class TypoScriptController extends \TYPO3\Flow\Mvc\Controller\ActionController {

	/**
	 * @var string
	 */
	protected $defaultViewObjectName = 'TYPO3\\TypoScript\\View\\TypoScriptView';

	/**
	 * Index action
	 *
	 * @return void
	 */
	public function indexAction() {
	}

}

?>