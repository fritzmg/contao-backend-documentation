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
 * Register the templates
 */
TemplateLoader::addFiles(array(
	'be_documentation'          => 'system/modules/backend_documentation/templates',
	'be_documentation_markdown' => 'system/modules/backend_documentation/templates',
));
