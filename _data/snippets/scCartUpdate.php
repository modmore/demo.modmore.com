id: 21
name: scCartUpdate
description: 'Updates products'' quantity or removes a product from the cart'
category: SimpleCart
properties: 'a:5:{s:9:"submitVar";a:7:{s:4:"name";s:9:"submitVar";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:10:"updatecart";s:7:"lexicon";N;s:4:"area";s:0:"";}s:11:"quantityVar";a:7:{s:4:"name";s:11:"quantityVar";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:8:"quantity";s:7:"lexicon";N;s:4:"area";s:0:"";}s:9:"removeVar";a:7:{s:4:"name";s:9:"removeVar";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:6:"remove";s:7:"lexicon";N;s:4:"area";s:0:"";}s:10:"redirectTo";a:7:{s:4:"name";s:10:"redirectTo";s:4:"desc";s:0:"";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:14:"redirectScheme";a:7:{s:4:"name";s:14:"redirectScheme";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:4:"http";s:7:"lexicon";N;s:4:"area";s:0:"";}}'

-----

/**
 * Updates products' quantity or removes a product from the cart
 *
 * @author Bert Oost at OostDesign <support@modxsimplecart.com>
 * @package simplecart
 */
$sc = $modx->getService('simplecart','SimpleCart',$modx->getOption('simplecart.core_path',null,$modx->getOption('core_path').'components/simplecart/').'model/simplecart/',$scriptProperties);
if (!($sc instanceof SimpleCart)) return '';

$controller = $sc->loadController('Cart');
$controller->setAction('update');
$output = $controller->run($scriptProperties);

return $output;