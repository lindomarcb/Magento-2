<?php

namespace Your\Extension\Plugin\SalesRule;

use Magento\SalesRule\Model\Rule\Condition\Address;

class AddressPlugin
{
    /**
     * Your Description.
     *
     * @param  Address
     *
     * @return Address
     */
    public function afterLoadAttributeOptions(Address $subject)
    {
        $options = $subject->getAttributeOption();

        if (!array_key_exists('payment_method', $options)) {
            $subject->setAttributeOption(array_merge($options, ['payment_method' => __('Payment Method')]));
        }

        return $subject;
    }
}