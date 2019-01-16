<?php
namespace PortmonePayment\Portmone\Model;


/**
 * Class AdditionalConfigProvider
 *
 * @package PortmonePayment\Portmone\Model
 */
class AdditionalConfigProvider implements \Magento\Checkout\Model\ConfigProviderInterface
{
    public function getConfig()
    {
        $config['payment']['instructions']['portmone'] = '';
        return $config;
    }
}