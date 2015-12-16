id: 20
name: scAddProduct
description: 'Add products to the cart and can redirect to the cart if wanted'
category: SimpleCart
properties: 'a:7:{s:9:"submitVar";a:7:{s:4:"name";s:9:"submitVar";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:7:"addcart";s:7:"lexicon";N;s:4:"area";s:0:"";}s:12:"productIdVar";a:7:{s:4:"name";s:12:"productIdVar";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:9:"productid";s:7:"lexicon";N;s:4:"area";s:0:"";}s:11:"quantityVar";a:7:{s:4:"name";s:11:"quantityVar";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:8:"quantity";s:7:"lexicon";N;s:4:"area";s:0:"";}s:10:"redirectTo";a:7:{s:4:"name";s:10:"redirectTo";s:4:"desc";s:0:"";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:14:"redirectScheme";a:7:{s:4:"name";s:14:"redirectScheme";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:4:"http";s:7:"lexicon";N;s:4:"area";s:0:"";}s:10:"clearOnAdd";a:7:{s:4:"name";s:10:"clearOnAdd";s:4:"desc";s:0:"";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:15:"optionKeyPrefix";a:7:{s:4:"name";s:15:"optionKeyPrefix";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:18:"simplecart_option_";s:7:"lexicon";N;s:4:"area";s:0:"";}}'

-----

/**
 * Add products to the cart and can redirect to the cart if wanted
 *
 * @author Bert Oost at OostDesign <support@modxsimplecart.com>
 * @package simplecart
 */
$sc = $modx->getService('simplecart','SimpleCart',$modx->getOption('simplecart.core_path',null,$modx->getOption('core_path').'components/simplecart/').'model/simplecart/',$scriptProperties);
if (!($sc instanceof SimpleCart)) return '';

$controller = $sc->loadController('Cart');
$controller->setAction('add');
$output = $controller->run($scriptProperties);

return $output;