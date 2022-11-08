<?php

namespace Alsharie\JawaliPayment\Responses;


class JawaliWalletAuthResponse extends JawaliResponse
{

    /**
     * @return mixed|void
     */
    public function getAccessToken()
    {
        return $this->responseBody('access_token');
    }


}