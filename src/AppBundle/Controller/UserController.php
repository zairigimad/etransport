<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    /**
     * @Route("/users", name="users_list")
     */
    public function listAction(Request $request)
    {
        $userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();
        return $this->render('users/list.html.twig', [
            'users' => $users,
        ]);
    }
}
