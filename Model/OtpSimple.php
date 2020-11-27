<?php
/**
 * Payment Model
 *
 * PHP Version 7
 *
 * @category  OtpSimple
 * @package   Iconocoders
 * @author    Iconocoders <support@icoders.co>
 * @copyright 2017-2020 Iconocoders
 * @license   GNU GENERAL PUBLIC LICENSE  - https://github.com/IconoCoders/OTPSimplePay-Magento2/blob/master/LICENSE
 * @version   GIT: Release: 2.3.3
 * @link      http://iconocoders.com
 */
namespace Iconocoders\OtpSimple\Model;

use Magento\Payment\Model\Method\AbstractMethod;

/**
 * OtpSimple
 */
class OtpSimple extends AbstractMethod
{

    /**
     * Payment code
     *
     * @var string
     */
    protected $_code = 'otpsimple';

    /**
     * Availability option
     *
     * @var bool
     */
    protected $_isOffline = true;

    /**
     * Get instructions text from config
     *
     * @return string
     */
    public function getInstructions()
    {
        return trim($this->getConfigData('instructions'));
    }
}
