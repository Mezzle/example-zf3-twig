<?php
/**
 * @author Martin Meredith <martin@sourceguru.net>
 * @copyright 2017 Martin Meredith
 * @licence https://www.gnu.org/licenses/gpl-3.0.txt GPLv3
 */

namespace Application\View\Helper;
use Zend\View\Helper\AbstractHelper;

/**
 * GetClass
 *
 * @package Application\View\Helper
 */
class GetClass extends AbstractHelper
{
    public function __invoke($class)
    {
        return get_class($class);
    }
}
