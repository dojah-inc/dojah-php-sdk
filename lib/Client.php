<?php

namespace Dojah;

class Client
{
    
    public readonly \Dojah\Api\AMLApi $aML;
    
    public readonly \Dojah\Api\AuthenticationApi $authentication;
    
    public readonly \Dojah\Api\DocumentAnalysisApi $documentAnalysis;
    
    public readonly \Dojah\Api\FraudApi $fraud;
    
    public readonly \Dojah\Api\GhKycApi $ghKyc;
    
    public readonly \Dojah\Api\GeneralApi $general;
    
    public readonly \Dojah\Api\GlobalKycApi $globalKyc;
    
    public readonly \Dojah\Api\KeKycApi $keKyc;
    
    public readonly \Dojah\Api\KYBApi $kYB;
    
    public readonly \Dojah\Api\KYCApi $kYC;
    
    public readonly \Dojah\Api\MLApi $mL;
    
    public readonly \Dojah\Api\NigeriaKycApi $nigeriaKyc;
    
    public readonly \Dojah\Api\PurchaseApi $purchase;
    
    public readonly \Dojah\Api\ServicesApi $services;
    
    public readonly \Dojah\Api\TzKycApi $tzKyc;
    
    public readonly \Dojah\Api\UgKycApi $ugKyc;
    
    public readonly \Dojah\Api\VerificationsApi $verifications;
    
    public readonly \Dojah\Api\WebHooksApi $webHooks;
    
    public readonly \Dojah\Api\ZafKycApi $zafKyc;
    
    public readonly \Dojah\Api\ZwKycApi $zwKyc;

    /**
     * Constructor
     */
    public function __construct(
        string $apiKey = null,
        bool $verifySsl = null,
        string $host = 'https://api.dojah.io',
        \Dojah\Configuration $config = null
    )
    {
        if ($config == null) {
            $config = new \Dojah\Configuration(
                apiKey: $apiKey,
            );
            if ($host !== null) $config->setHost($host);
            if ($verifySsl !== null) $config->setVerifySsl($verifySsl);
        }
        $this->aML = new \Dojah\Api\AMLApi($config);
        $this->authentication = new \Dojah\Api\AuthenticationApi($config);
        $this->documentAnalysis = new \Dojah\Api\DocumentAnalysisApi($config);
        $this->fraud = new \Dojah\Api\FraudApi($config);
        $this->ghKyc = new \Dojah\Api\GhKycApi($config);
        $this->general = new \Dojah\Api\GeneralApi($config);
        $this->globalKyc = new \Dojah\Api\GlobalKycApi($config);
        $this->keKyc = new \Dojah\Api\KeKycApi($config);
        $this->kYB = new \Dojah\Api\KYBApi($config);
        $this->kYC = new \Dojah\Api\KYCApi($config);
        $this->mL = new \Dojah\Api\MLApi($config);
        $this->nigeriaKyc = new \Dojah\Api\NigeriaKycApi($config);
        $this->purchase = new \Dojah\Api\PurchaseApi($config);
        $this->services = new \Dojah\Api\ServicesApi($config);
        $this->tzKyc = new \Dojah\Api\TzKycApi($config);
        $this->ugKyc = new \Dojah\Api\UgKycApi($config);
        $this->verifications = new \Dojah\Api\VerificationsApi($config);
        $this->webHooks = new \Dojah\Api\WebHooksApi($config);
        $this->zafKyc = new \Dojah\Api\ZafKycApi($config);
        $this->zwKyc = new \Dojah\Api\ZwKycApi($config);
    }
}
