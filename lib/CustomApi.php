<?php

namespace Dojah;

class CustomApi
{

    public function beforeSendHook(
        \GuzzleHttp\Psr7\Request &$request,
        \Dojah\RequestOptions $requestOptions,
        \Dojah\Configuration $configuration,
        $body = null
    ) {
    }

    public function beforeCreateRequestHook(
        string &$method,
        string &$resourcePath,
        array &$queryParams,
        array &$headers,
        &$httpBody,
    ) {
    }
}
