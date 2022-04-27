<?php

namespace App\Containers\PageSection\Page\Exceptions;

use App\Ship\Parents\Exceptions\Exception;
use Symfony\Component\HttpFoundation\Response;

class PageNotCreateException extends Exception
{
    protected $code = Response::HTTP_CONFLICT;
    protected $message = 'The page no';

}
