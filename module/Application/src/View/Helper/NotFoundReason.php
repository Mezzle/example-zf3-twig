<?php
/**
 * @author Martin Meredith <martin@sourceguru.net>
 * @copyright 2017 Martin Meredith
 * @licence https://www.gnu.org/licenses/gpl-3.0.txt GPLv3
 */

namespace Application\View\Helper;

use Zend\Mvc\Application;
use Zend\View\Helper\AbstractHelper;
use Zend\View\Helper\HelperInterface;
use Zend\View\Renderer\RendererInterface as Renderer;

/**
 * NotFoundReasonHelper
 *
 * @package Application\View\Helper
 */
class NotFoundReason extends AbstractHelper
{
    public function __invoke($reason) {
        switch ($reason) {
            case Application::ERROR_CONTROLLER_CANNOT_DISPATCH:
                $reasonMessage = 'The requested controller was unable to dispatch the request.';
                break;
            case Application::ERROR_MIDDLEWARE_CANNOT_DISPATCH:
                $reasonMessage = 'The requested middleware was unable to dispatch the request.';
                break;
            case Application::ERROR_CONTROLLER_NOT_FOUND:
                $reasonMessage = 'The requested controller could not be mapped to an existing controller class.';
                break;
            case Application::ERROR_CONTROLLER_INVALID:
                $reasonMessage = 'The requested controller was not dispatchable.';
                break;
            case Application::ERROR_ROUTER_NO_MATCH:
                $reasonMessage = 'The requested URL could not be matched by routing.';
                break;
            default:
                $reasonMessage = 'We cannot determine at this time why a 404 was generated.';
                break;
        }

        return $reasonMessage;
    }
}
