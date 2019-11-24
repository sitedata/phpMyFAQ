<?php

namespace phpMyFAQ\Search;

/**
 * Abstract class for phpMyFAQ search classes.
 *
 * This Source Code Form is subject to the terms of the Mozilla Public License,
 * v. 2.0. If a copy of the MPL was not distributed with this file, You can
 * obtain one at http://mozilla.org/MPL/2.0/.
 *
 * @package   phpMyFAQ
 * @author    Thorsten Rinne <thorsten@phpmyfaq.de>
 * @copyright 2010-2019 phpMyFAQ Team
 * @license   http://www.mozilla.org/MPL/2.0/ Mozilla Public License Version 2.0
 * @link      https://www.phpmyfaq.de
 * @since     2010-06-06
 */

use phpMyFAQ\Configuration;

/**
 * Class AbstractSearch
 *
 * @package phpMyFAQ\Search
 */
abstract class AbstractSearch
{
    /**
     * @var Configuration
     */
    protected $config = null;

    /**
     * ResultSet
     *
     * @var resource
     */
    protected $resultSet = false;

    /**
     * AbstractSearch constructor.
     *
     * @param Configuration $config
     */
    public function __construct(Configuration $config)
    {
        $this->config = $config;
    }
}
