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


namespace BackendDocumentation;

use Contao\BackendTemplate;

class ModuleBackendDocumentation extends \Contao\BackendModule
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'be_documentation';


	/**
	 * Generate the module
	 *
	 * @throws \Exception
	 */
	protected function compile()
	{
		// load the markdown template
		$objTemplate = new BackendTemplate('be_documentation_markdown');

		// parse the template
		$strMarkdown = $objTemplate->parse();

		// set the parsed content
		$parsedown = new \Parsedown();
		$this->Template->content = $parsedown->text($strMarkdown);

		// add CSS
		$GLOBALS['TL_CSS'][] = 'system/modules/backend_documentation/assets/backend.css';

		/* source: https://github.com/sindresorhus/github-markdown-css */
		$GLOBALS['TL_CSS'][] = 'system/modules/backend_documentation/assets/markdown.css';
	}
}
