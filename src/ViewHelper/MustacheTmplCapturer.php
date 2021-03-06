<?php
/**
 * Starlit App.
 *
 * @copyright Copyright (c) 2016 Starweb AB
 * @license   BSD 3-Clause
 */

namespace Starlit\App\ViewHelper;

/**
 * Mustache template capture view helper.
 *
 * @author Andreas Nilsson <http://github.com/jandreasn>
 */
class MustacheTmplCapturer extends Capturer
{
    /**
     * Get captured content in and including script tags.
     *
     * @return string
     */
    public function getScript()
    {
        return '<script type="text/x-mustache" id="' . $this->activeContentKey . '">' . "\n"
            . $this->getContent()
            . "</script>\n";
    }
}
