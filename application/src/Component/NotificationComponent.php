<?php

namespace Component;

use Zantolov\Zamb\Core\Component\ComponentInterface;
use Zantolov\Zamb\Core\Model\Notification;
use Zantolov\Zamb\Core\Proxy\Session;

class NotificationComponent implements ComponentInterface
{
    public function render()
    {
        $notifications = Session::getFlashBag()->get('notification');

        return \View::render('Notification/notification-container.html.twig', array('notifications' => $notifications));
    }
}