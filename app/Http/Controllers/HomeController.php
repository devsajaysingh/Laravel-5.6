<?php
namespace App\Http\Controllers;

use View;

Class HomeController extends Controller{

    public function getBackup(){
        return view('/welcome');
    }

    public function postBackup(){

        /* Get username and password from environment file */

        $username = env('DB_USERNAME','');
        $password = env('DB_PASSWORD','');

        /* All db backup file name  */

        $bkupFileName = 'all_db_bkup.sql';

        /* Dumping with username and password */

        $finalBackup = 'mysqldump -u '.$username.' -p'.$password.' --all-databases > '.$bkupFileName;

        /* Command execute */

        exec($finalBackup, $output, $return);

        /* Success */

        $resultString = "Backup file generated successfully, Please check public directory for file ".public_path()."/".$bkupFileName;

        return View::make('welcome')->with('resultString',$resultString);
    }

}