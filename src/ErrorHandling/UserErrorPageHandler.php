<?php
/**
 * Starlit App.
 *
 * @copyright Copyright (c) 2016 Starweb AB
 * @license   BSD 3-Clause
 */

namespace Starlit\App\ErrorHandling;

use Whoops\Handler\Handler;

/**
 * @author Andreas Nilsson <http://github.com/jandreasn>
 */
class UserErrorPageHandler extends Handler
{
    /**
     * @var string
     */
    protected $errorPagePath;

    /**
     * @param string $errorPagePath
     */
    public function __construct($errorPagePath)
    {
        $this->errorPagePath = $errorPagePath;
    }

    /**
     * @return int|null
     */
    public function handle()
    {
        if (php_sapi_name() === 'cli') {
            return Handler::DONE;
        }

        include $this->errorPagePath;

        return Handler::QUIT;
    }
}
