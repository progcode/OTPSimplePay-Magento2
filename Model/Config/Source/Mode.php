<?php
/**
 * Payment Module Mode Source
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
namespace Iconocoders\OtpSimple\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Mode
 *
 * PHP Version 7
 *
 * @category  OtpSimple
 * @package   Iconocoders
 * @author    Iconocoders <support@icoders.co>
 * @copyright 2017-2020 Iconocoders
 * @license   Apache License 2.0  - https://github.com/IconoCoders/OTPSimplePay-Magento2/blob/master/LICENSE
 * @version   GIT: Release: 1.0
 * @link      http://iconocoders.com
 */
class Mode implements ArrayInterface
{
    /**
     * To Option Array
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 1, 'label' => __('Sandbox')],
            ['value' => 0, 'label' => __('Live')],
        ];
    }
}
