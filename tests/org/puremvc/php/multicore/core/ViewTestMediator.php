<?php
/**
 * PureMVC PHP Multicore Unit Tests
 *
 * @author Michel Chouinard <michel.chouinard@gmail.com>
 *
 * Created on Jully 24, 2009
 *
 * @version 1.1
 * @author Michel Chouinard <michel.chouinard@gmail.com>
 * @author Michael Beck (https://github.com/mambax7/)
 * @copyright PureMVC - Copyright(c) 2006-2008 Futurescale, Inc., Some rights reserved.
 * @license http://creativecommons.org/licenses/by/3.0/ Creative Commons Attribution 3.0 Unported License
 * @package org.puremvc.php.multicore.unittest
 */
/**
 *
 */

use puremvc\php\multicore\interfaces\IMediator;
use puremvc\php\multicore\patterns\mediator\Mediator;
/**
 * A Mediator class used by ViewTest.
 *
 * @see ViewTest
        org\puremvc\php\core\view\ViewTest.php
 * @package org.puremvc.php.multicore.unittest
 */
class ViewTestMediator extends Mediator implements IMediator
{
    const NAME = 'ViewTestMediator';
    /**
     * Constructor
     */
    public function __construct( $mediatorName, $viewComponent = null )
    {
        parent::__construct( ViewTestMediator::NAME, $viewComponent );
    }

    /**
     * The Notification(s) this IMediator is interested in.
     *
     * @return an <b>Array</b> of the <b>INotification</b> names this <b>IMediator</b> has an interest in.
     * @see IMediator::listNotificationInterests()
     */
    public function listNotificationInterests()
    {
        // be sure that the mediator has some Observers created
        // in order to test removeMediator
        return array( 'ABC', 'DEF', 'GHI' );
    }
}

?>
