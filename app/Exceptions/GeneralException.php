<?php

namespace App\Exceptions;

use App\Constants\{HttpCode, ConfigGeneral};
use Carbon\Carbon;
use Exception;

class GeneralException extends Exception
{
    protected $httpCode;
    protected $errors;

    public function __construct(string $message = null, $errors = array(), $httpCode = HttpCode::INTERNAL_SERVER_ERROR)
    {
        $this->message = $message ?? trans('error.unknow');
        $this->httpCode = $httpCode;
        $this->errors = $errors;
    }

    public function report()
    {
        return false;
    }

    public function render($request)
    {
        return response()->json([
            "message" => $this->message,
            "errors" => $this->errors,
            'locale' => app()->getLocale(),
            "server_time" => Carbon::now(ConfigGeneral::TIMEZONE_DEFAULT)]
        , $this->httpCode);
    }
}
