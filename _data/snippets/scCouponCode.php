id: 22
name: scCouponCode
description: 'Handles the submission, remove action and view of coupon code'
category: SimpleCart
properties: 'a:7:{s:9:"submitVar";a:7:{s:4:"name";s:9:"submitVar";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:10:"couponcode";s:7:"lexicon";N;s:4:"area";s:0:"";}s:9:"actionKey";a:7:{s:4:"name";s:9:"actionKey";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:6:"coupon";s:7:"lexicon";N;s:4:"area";s:0:"";}s:7:"formTpl";a:7:{s:4:"name";s:7:"formTpl";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:12:"scCouponForm";s:7:"lexicon";N;s:4:"area";s:0:"";}s:9:"resultTpl";a:7:{s:4:"name";s:9:"resultTpl";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:14:"scCouponResult";s:7:"lexicon";N;s:4:"area";s:0:"";}s:10:"redirectTo";a:7:{s:4:"name";s:10:"redirectTo";s:4:"desc";s:0:"";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:14:"redirectScheme";a:7:{s:4:"name";s:14:"redirectScheme";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:4:"http";s:7:"lexicon";N;s:4:"area";s:0:"";}s:17:"placeholderPrefix";a:7:{s:4:"name";s:17:"placeholderPrefix";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:7:"coupon.";s:7:"lexicon";N;s:4:"area";s:0:"";}}'

-----

/**
 * Handles the submission, remove action and view of coupon code
 *
 * @author Bert Oost at OostDesign <support@modxsimplecart.com>
 * @package simplecart
 */
$sc = $modx->getService('simplecart','SimpleCart',$modx->getOption('simplecart.core_path',null,$modx->getOption('core_path').'components/simplecart/').'model/simplecart/',$scriptProperties);
if (!($sc instanceof SimpleCart)) return '';

$controller = $sc->loadController('Coupon');
$output = $controller->run($scriptProperties);

return $output;