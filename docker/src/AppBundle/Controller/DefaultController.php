<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/mem", name="testMemoryLimit")
     */
    public function testMemoryLimitAction(Request $request)
    {
        $hardLimit = 2000000000;
        $array = [];
        while (memory_get_usage(true) < $hardLimit) {
            $array[] = str_repeat('!', 50000);
        }
        return new JsonResponse(sprintf('Hardlimit %s reached', $hardLimit));
    }
    /**
     * @Route("/fatal", name="testFatal")
     */
    public function testFatalAction(Request $request)
    {
        $asd = null;
        $asd->fatalError();
    }
}
