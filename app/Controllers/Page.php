<?php namespace App\Controllers;

    class Page extends BaseController
{
    public function about()
        {
            echo "<h1 style='text-align: center; font-family: arial;'>About Page <br><br>";
            echo "Alvin Alfharisi <br>
                    2004411201</h1>";
        }
    
    public function contact()
        {
            echo "Contact Page";
        }

    public function faqs() 
        {
            echo "Faqs page";
        }
}
?>