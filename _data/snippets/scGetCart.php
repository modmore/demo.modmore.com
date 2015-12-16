id: 27
name: scGetCart
description: 'Gets the cart and process the contents into chunks'
category: SimpleCart
properties: 'a:15:{s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:6:"scCart";s:7:"lexicon";N;s:4:"area";s:0:"";}s:6:"rowTpl";a:7:{s:4:"name";s:6:"rowTpl";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:9:"scCartRow";s:7:"lexicon";N;s:4:"area";s:0:"";}s:12:"rowOptionTpl";a:7:{s:4:"name";s:12:"rowOptionTpl";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:16:"scCartRowOptions";s:7:"lexicon";N;s:4:"area";s:0:"";}s:14:"rowPropertyTpl";a:7:{s:4:"name";s:14:"rowPropertyTpl";s:4:"desc";s:0:"";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";s:17:"scCartRowProperty";s:7:"lexicon";N;s:4:"area";s:0:"";}s:9:"vatRowTpl";a:7:{s:4:"name";s:9:"vatRowTpl";s:4:"desc";s:0:"";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";s:12:"scCartVatRow";s:7:"lexicon";N;s:4:"area";s:0:"";}s:14:"freeProductTpl";a:7:{s:4:"name";s:14:"freeProductTpl";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:17:"scCartFreeProduct";s:7:"lexicon";N;s:4:"area";s:0:"";}s:8:"emptyTpl";a:7:{s:4:"name";s:8:"emptyTpl";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:11:"scCartEmpty";s:7:"lexicon";N;s:4:"area";s:0:"";}s:4:"view";a:7:{s:4:"name";s:4:"view";s:4:"desc";s:0:"";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:12:"viewProducts";a:7:{s:4:"name";s:12:"viewProducts";s:4:"desc";s:0:"";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:10:"includeTVs";a:7:{s:4:"name";s:10:"includeTVs";s:4:"desc";s:0:"";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:10:"processTVs";a:7:{s:4:"name";s:10:"processTVs";s:4:"desc";s:0:"";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:16:"totalMinDiscount";a:7:{s:4:"name";s:16:"totalMinDiscount";s:4:"desc";s:0:"";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:10:"cartPrefix";a:7:{s:4:"name";s:10:"cartPrefix";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:5:"cart.";s:7:"lexicon";N;s:4:"area";s:0:"";}s:11:"totalPrefix";a:7:{s:4:"name";s:11:"totalPrefix";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:6:"total.";s:7:"lexicon";N;s:4:"area";s:0:"";}s:8:"tvPrefix";a:7:{s:4:"name";s:8:"tvPrefix";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:3:"tv.";s:7:"lexicon";N;s:4:"area";s:0:"";}}'

-----

/**
 * Gets the cart and process the contents into chunks
 *
 * @author Bert Oost at OostDesign <support@modxsimplecart.com>
 * @package simplecart
 */
$sc = $modx->getService('simplecart','SimpleCart',$modx->getOption('simplecart.core_path',null,$modx->getOption('core_path').'components/simplecart/').'model/simplecart/',$scriptProperties);
if (!($sc instanceof SimpleCart)) return '';

$controller = $sc->loadController('Cart');
$output = $controller->run($scriptProperties);

return $output;