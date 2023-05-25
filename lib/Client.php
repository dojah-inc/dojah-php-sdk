<?php

namespace Dojah;

class Client
{
    public readonly \Dojah\Api\AMLApi $aML;
    public readonly \Dojah\Api\AuthenticationApi $authentication;
    public readonly \Dojah\Api\FinancialApi $financial;
    public readonly \Dojah\Api\GhKycApi $ghKyc;
    public readonly \Dojah\Api\GeneralApi $general;
    public readonly \Dojah\Api\KeKycApi $keKyc;
    public readonly \Dojah\Api\KYBApi $kYB;
    public readonly \Dojah\Api\KYCApi $kYC;
    public readonly \Dojah\Api\MLApi $mL;
    public readonly \Dojah\Api\ServicesApi $services;
    public readonly \Dojah\Api\UgKycApi $ugKyc;
    public readonly \Dojah\Api\WalletApi $wallet;
    public readonly \Dojah\Api\WebHooksApi $webHooks;

    /**
     * Constructor
     */
    public function __construct(
        string $Authorization = null,
        string $AppId = null,
        string $host = 'https://api.dojah.io',
        \Dojah\Configuration $config = null
    )
    {
        if ($config == null) {
            $config = new \Dojah\Configuration(
                Authorization: $Authorization,
                AppId: $AppId,
            );
            if ($host !== null) $config->setHost($host);
        }
        $this->aML = new \Dojah\Api\AMLApi($config);
        $this->authentication = new \Dojah\Api\AuthenticationApi($config);
        $this->financial = new \Dojah\Api\FinancialApi($config);
        $this->ghKyc = new \Dojah\Api\GhKycApi($config);
        $this->general = new \Dojah\Api\GeneralApi($config);
        $this->keKyc = new \Dojah\Api\KeKycApi($config);
        $this->kYB = new \Dojah\Api\KYBApi($config);
        $this->kYC = new \Dojah\Api\KYCApi($config);
        $this->mL = new \Dojah\Api\MLApi($config);
        $this->services = new \Dojah\Api\ServicesApi($config);
        $this->ugKyc = new \Dojah\Api\UgKycApi($config);
        $this->wallet = new \Dojah\Api\WalletApi($config);
        $this->webHooks = new \Dojah\Api\WebHooksApi($config);
    }
}
