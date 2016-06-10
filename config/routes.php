<?php

use NoahBuscher\Macaw\Macaw;

Macaw::get('fuck', function() {
	echo "fuck success!!!";
});
Macaw::get('', 'HomeController@home');
//Macaw::get('(:all)', function($fu) {
//	echo "failed!!!" . $fu;
//});

Macaw::dispatch();