<?php
namespace Dfe\PayFort;
use Magento\Sales\Model\Order\Payment\Transaction as T;
// 2017-08-17
/** @method Settings s() */
final class Method extends \Df\StripeClone\Method {
	/**
	 * 2017-08-17
	 * @override
	 * The result should be in the basic monetary unit (like dollars), not in fractions (like cents).
	 * @see \Df\Payment\Method::amountLimits()
	 * @used-by \Df\Payment\Method::isAvailable()
	 * @return null
	 */
	protected function amountLimits() {return null;}

	/**
	 * 2017-08-17
	 * @override
	 * @see \Df\StripeClone\Method::transUrlBase()
	 * @used-by \Df\StripeClone\Method::transUrl()
	 * @param T $t
	 * @return string
	 */
	protected function transUrlBase(T $t) {return '';}
}