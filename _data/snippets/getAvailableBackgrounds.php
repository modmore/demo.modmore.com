id: 33
name: getAvailableBackgrounds
properties: 'a:0:{}'

-----

$backgrounds = array(
    'None=transparent',
    'Light grey=#eee',
    'Dark grey=#555; color: #fff',
    'Blue abstract=url(\'/assets/template/images/coming-bg.jpg\') no-repeat top center; color: #fff',
    'White mountains=url(\'/assets/template/images/getintouch-bg.jpg\') no-repeat top center',
    'Women with laptop=url(\'/assets/template/images/pricing-bg.jpg\') no-repeat top center',
    'Green Grasslands=url(\'/assets/uploads/images/template/grasslands.jpg\') no-repeat top center',
    'Grasslands with white flowers=url(\'/assets/uploads/images/template/green_white_grassland.jpg\') no-repeat top center',
);

return implode("\n", $backgrounds);