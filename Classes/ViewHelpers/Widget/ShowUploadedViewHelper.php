<?php
namespace TYPO3\CMS\MediaUpload\ViewHelpers\Widget;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Fabien Udriot <fabien.udriot@typo3.org>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Widget which displays a media upload.
 */
class ShowUploadedViewHelper extends \TYPO3\CMS\Fluid\Core\Widget\AbstractWidgetViewHelper {

	/**
	 * @var \TYPO3\CMS\MediaUpload\ViewHelpers\Widget\Controller\ShowUploadedController
	 * @inject
	 */
	protected $controller;

	/**
	 * @return void
	 */
	public function initializeArguments() {
		$this->registerArgument('property', 'int', 'The property name used for identifying and grouping uploaded files. Required if form contains multiple upload fields', FALSE, '');
	}

	/**
	 * Returns an carousel widget
	 *
	 * @return string
	 */
	public function render() {
		return $this->initiateSubRequest();
	}
}

?>