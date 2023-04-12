<?php

namespace App\Helpers;

use stdClass;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Support\MessageBag;
Use App\Models\Post;
/**
 *
 * Class to handle responses for api's
 *
 */

class ResponseHandler
{

    /**
     * success
     *
     * @param  string $body
     * @param  string $message
     * @return JsonResponse
     */
    public static function success(array|object $body = [], string $message = ""): JsonResponse
    {
        $message = empty($message) ? __('messages.general.success') : $message;
        return self::send(200, message: $message, body: $body);
    }

    /**
     * validationError
     *
     * @param  array $validationErrors
     * @param  string $message
     * @return JsonResponse
     */
    public static function validationError(MessageBag $validationErrors = null, string $message = ""): JsonResponse
    {
        $message = empty($message) ? __('messages.general.validation') : $message;
        return self::send(422, message: $message, errors: $validationErrors);
    }

    /**
     * authenticationError
     *
     * @param  string $message
     * @return JsonResponse
     */
    public static function authenticationError(string $message = ""): JsonResponse
    {
        $message = empty($message) ? __('messages.general.unauthenticated') : $message;
        return self::send(401, message: $message);
    }

    /**
     * failure
     *
     * @param  string $message
     * @param  object $exception
     * @return JsonResponse
     */
    public static function failure(string $message = "", object $exception = null): JsonResponse
    {
        $message = empty($message) ? __('messages.general.failed') : $message;

        if ($exception) {
            $exception = array(
                'line'  => $exception->getLine(),
                'file'  => $exception->getFile(),
                'message' => $exception->getMessage()

            );
        }
        return self::send(400, message: $message, exception: $exception);
    }

    /**
     * not found
     *
     * @param  string $message
     * @param  object $exception
     * @return JsonResponse
     */
    public static function notFound(): JsonResponse
    {
        $message = "Not found";
        return self::send(404, message: $message);
    }




}
