id: 24
name: scCreateOrder
description: "Creates the order and parses all the fields into the database\nNOTE: Works as FormIt hook, use it that way!! Pass the properties in the FormIt call"
category: SimpleCart
properties: 'a:9:{s:9:"submitVar";a:7:{s:4:"name";s:9:"submitVar";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:8:"checkout";s:7:"lexicon";N;s:4:"area";s:0:"";}s:11:"deliveryKey";a:7:{s:4:"name";s:11:"deliveryKey";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:14:"deliveryMethod";s:7:"lexicon";N;s:4:"area";s:0:"";}s:18:"deliveryRemarksKey";a:7:{s:4:"name";s:18:"deliveryRemarksKey";s:4:"desc";s:54:"This one is DEPRECATED! Now up to custom order fields!";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:14:"deliveryMethod";s:7:"lexicon";N;s:4:"area";s:0:"";}s:10:"paymentKey";a:7:{s:4:"name";s:10:"paymentKey";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:13:"paymentMethod";s:7:"lexicon";N;s:4:"area";s:0:"";}s:12:"orderAddress";a:7:{s:4:"name";s:12:"orderAddress";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:14:"deliverAddress";a:7:{s:4:"name";s:14:"deliverAddress";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:13:"excludeFields";a:7:{s:4:"name";s:13:"excludeFields";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:17:"deliverFreeAmount";a:7:{s:4:"name";s:17:"deliverFreeAmount";s:4:"desc";s:71:"When empty, the system setting "simplecart.deliverfree_amount" is used!";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:15:"orderFreeAmount";a:7:{s:4:"name";s:15:"orderFreeAmount";s:4:"desc";s:69:"When empty, the system setting "simplecart.orderfree_amount" is used!";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}}'

-----

/**
 * Creates the order and parses all the fields into the database
 * NOTE: Works as FormIt hook, use it that way!! Pass the properties in the FormIt call
 * 
 * @author Bert Oost at OostDesign <support@modxsimplecart.com>
 * @package simplecart
 */
$sc = $modx->getService('simplecart','SimpleCart',$modx->getOption('simplecart.core_path',null,$modx->getOption('core_path').'components/simplecart/').'model/simplecart/',$scriptProperties);
if (!($sc instanceof SimpleCart)) return '';

$controller = $sc->loadController('Order');
$output = $controller->run($scriptProperties);

return $output;