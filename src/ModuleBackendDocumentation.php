<?php

declare(strict_types=1);

/*
 * (c) INSPIRED MINDS
 */

namespace InspiredMinds\ContaoBackendDocumentation;

use Contao\BackendModule;
use Contao\BackendTemplate;

class ModuleBackendDocumentation extends BackendModule
{
    /**
     * Template.
     *
     * @var string
     */
    protected $strTemplate = 'be_documentation';

    /**
     * Generate the module.
     *
     * @throws \Exception
     */
    protected function compile(): void
    {
        // load the markdown template
        $objTemplate = new BackendTemplate('be_documentation_markdown');

        // parse the template
        $strMarkdown = $objTemplate->parse();

        // set the parsed content
        $parsedown = new \Parsedown();
        $this->Template->content = $parsedown->text($strMarkdown);

        // add CSS
        $GLOBALS['TL_CSS'][] = 'bundles/contaobackenddocumentation/backend.css';

        /* source: https://github.com/sindresorhus/github-markdown-css */
        $GLOBALS['TL_CSS'][] = 'bundles/contaobackenddocumentation/markdown.css';
    }
}
