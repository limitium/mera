<?php
namespace Mera\UserBundle\Listener;

use FOS\UserBundle\Model\UserManagerInterface;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Symfony\Component\Security\Core\SecurityContextInterface;

class InteractiveLoginListener
{
    protected $userManager;
    protected $securityContext;

    public function __construct(UserManagerInterface $userManager)
    {
        $this->userManager = $userManager;
    }

    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
    {
        $user = $event->getAuthenticationToken()->getUser();

        if ($user instanceof UserInterface) {
            $first_name = $event->getRequest()->request->get("first_name");
            $last_name = $event->getRequest()->request->get("last_name");

            if (!$user->hasRole("admin") && (!$first_name || !$last_name)) {
                throw new BadCredentialsException("Введите Имя и Фамилию.");
            }
            $user->setFirstName($first_name);
            $user->setLastName($last_name);

            $this->userManager->updateUser($user);
        }
    }
}
