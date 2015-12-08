id: 36
source: 1
name: NextReset
properties: 'a:0:{}'

-----

$lastReset = (int)$modx->getOption('demo_reset_time');
$timeBetweenResets = 3600 * 24; // 1 hour

$nextReset = $lastReset + $timeBetweenResets;
$left = $nextReset - time();

if ($left < 30) {
  return 'any second now';
}
if ($left < 300) {
  return 'in a few minutes';
}
if ($left < 600) {
  return 'within 10 minutes';
}
if ($left < 1200) {
  return 'within 20 minutes';
}
if ($left < 1800) {
  return 'in about 30 minutes';
}
if ($left < 2700) {
  return 'in about 45 minutes';
}
if ($left < 3600) {
  return 'in about an hour';
}
if ($left < (3600 * 3)) {
  return 'within 3 hours';
}
if ($left < (3600 * 6)) {
  return 'within 6 hours';
}
if ($left < (3600 * 12)) {
  return 'within 12 hours';
}
return 'in more than 12 hours';