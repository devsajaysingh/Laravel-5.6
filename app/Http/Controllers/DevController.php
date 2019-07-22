<?php
namespace App\Http\Controllers;

use Auth;

Class DevController extends Controller{
	function paypal_function(){
		require __DIR__.'/../vendor/autoload.php';

		//require_once '/../lib/ArmorPayments/ArmorPayments.php';
		//require_once '../vendor/lib/ArmorPayments/ArmorPayments.php';
	?>
		<h2>Paypal Escrow</h2>
		<input type="submit" name="jhfjhg" value="Submit">
	<?php	
	}
}	