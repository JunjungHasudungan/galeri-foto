<?php

namespace App\Constants;

class HttpCode {
    public const OK = 200;
    public const CREATED = 201;

    public const BAD_REQUEST = 400;
    public const UNAUTHORIZED = 401;
    public const FORBIDDEN = 403;
    public const NOT_FOUND = 404;
    public const UNPROCESSABLE_CONTENT = 422;

    public const INTERNAL_SERVER_ERROR = 500;
    public const NOT_IMPLEMENTED = 501;
    public const TOO_MANY_REQUESTS = 429;
}
