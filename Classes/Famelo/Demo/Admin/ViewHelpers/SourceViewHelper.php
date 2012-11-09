<?php
namespace Famelo\Demo\Admin\ViewHelpers;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Fluid".                 *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

/**
 * @api
 */
class SourceViewHelper extends \TYPO3\Fluid\Core\ViewHelper\AbstractViewHelper {
	/**
	 * Render the link.
	 *
	 * @param array $files
	 * @return string The rendered link
	 */
	public function render($files) {
		$output = '';
		if (is_array($files)) {
			$sources = array();
			foreach ($files as $file) {
				$sources[] = array(
					'code' => file_get_contents(FLOW_PATH_ROOT . $file),
					'filename' => basename($file),
					'filepath' => $file
				);
			}

			$this->templateVariableContainer->add('sources', $sources);
			$output = $this->renderChildren();
			$this->templateVariableContainer->remove('sources');
		}
		return $output;
	}

}
?>