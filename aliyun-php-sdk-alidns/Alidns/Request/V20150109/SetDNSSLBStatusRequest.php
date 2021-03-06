<?php

namespace Alidns\Request\V20150109;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetDNSSLBStatus
 *
 * @method string getUserClientIp()
 * @method string getSubDomain()
 * @method string getLang()
 * @method string getOpen()
 */
class SetDNSSLBStatusRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Alidns',
            '2015-01-09',
            'SetDNSSLBStatus',
            'Alidns'
        );
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        $this->requestParameters['UserClientIp'] = $userClientIp;
        $this->queryParameters['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @param string $subDomain
     *
     * @return $this
     */
    public function setSubDomain($subDomain)
    {
        $this->requestParameters['SubDomain'] = $subDomain;
        $this->queryParameters['SubDomain'] = $subDomain;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $open
     *
     * @return $this
     */
    public function setOpen($open)
    {
        $this->requestParameters['Open'] = $open;
        $this->queryParameters['Open'] = $open;

        return $this;
    }
}
