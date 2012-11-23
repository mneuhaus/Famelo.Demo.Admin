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
class HelperController extends \TYPO3\Flow\Mvc\Controller\ActionController {
	/**
	 * The persistenceManager
	 *
	 * @var \TYPO3\Flow\Persistence\Doctrine\PersistenceManager
	 * @Flow\Inject
	 */
	protected $persistenceManager;

	/**
	 * Index action
	 *
	 * @return void
	 */
	public function clearDatabaseAction() {
		$output = '';
		$output .= 'Deleted ' . $this->clearRepository('address') . ' Addresses <br />';
		return $output;
	}

	public function clearRepository($entity) {
		$repositoryClass = '\Famelo\Demo\Admin\Domain\Repository\\' . ucfirst($entity) . 'Repository';
		$repository = new $repositoryClass();

		$objects = $repository->findAll();
		foreach ($objects as $object) {
			$this->persistenceManager->remove($object);
		}
		return count($objects);
	}

}

?>