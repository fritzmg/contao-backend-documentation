<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2017 Leo Feyer
 *
 * @package   backend_documentation
 * @author    Fritz Michael Gschwantner <https://github.com/fritzmg>
 * @license   LGPL-3.0+
 * @copyright Fritz Michael Gschwantner 2017
 */


/**
 * Register the back end module.
 */
$GLOBALS['BE_MOD']['system']['documentation'] = array('callback' => 'BackendDocumentation\ModuleBackendDocumentation');


/**
 * Add CSS for the back end.
 */
if (TL_MODE == 'BE')
{
	$GLOBALS['TL_CSS'][] = 'system/modules/backend_documentation/assets/backend.css';

	/* source: https://github.com/sindresorhus/github-markdown-css */
	$GLOBALS['TL_CSS'][] = 'system/modules/backend_documentation/assets/markdown.css';
}
