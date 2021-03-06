<?php
/**
 * Starlit App.
 *
 * @copyright Copyright (c) 2016 Starweb AB
 * @license   BSD 3-Clause
 */

namespace Starlit\App\ViewHelper;

use Starlit\App\View;

/**
 * @author Andreas Nilsson <http://github.com/jandreasn>
 */
abstract class AbstractViewHelper
{
    /**
     * @var View
     */
    protected $view;

    /**
     * @param View $view
     * @return AbstractViewHelper
     */
    public function setView(View $view)
    {
        $this->view = $view;

        return $this;
    }
}
