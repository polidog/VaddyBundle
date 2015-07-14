<?php

namespace Polidog\VaddyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class VerificationController
{
    private $verification;

    public function __construct($verification)
    {
        $this->verification = $verification;
    }

    /**
     * @return Response
     */
    public function indexAction()
    {
        return new Response($this->verification);
    }
}
