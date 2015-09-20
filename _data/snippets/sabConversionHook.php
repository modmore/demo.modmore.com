id: 8
name: sabConversionHook
description: 'Hook for use with FormIt to register a conversion to SimpleAB. (Part of SimpleAB)'
category: SimpleAB
properties: null

-----

/**
 * @var modX $modx
 * @var SimpleAB $simpleAB
 * @var fiHooks $hook
 */

/** Load the SimpleAB service class */
$corePath = $modx->getOption('simpleab.core_path',null,$modx->getOption('core_path').'components/simpleab/');
if (!$simpleAB = $modx->getService('simpleab', 'SimpleAB', $corePath.'model/simpleab/')) {
    return 'SimpleAB not found in ' . $corePath;
}

$fi = $hook->formit->config;
$resetPick = (bool)$modx->getOption('sabResetPick', $fi, true);

$tests = $modx->getOption('sabTests', $fi);
if (!$tests || empty($tests)) {
    /**
     * If we don't have any test ID(s), we'll log the issue and return true to prevent
     * cancelling any other progress in the FormIt processing.
     */
    $modx->log(modX::LOG_LEVEL_ERROR,'[SimpleAB.sabConversionHook] Make sure you add the &sabTests property to your FormIt call.');
    return true;
}

$simpleAB->registerConversion($tests, $resetPick);
return true;