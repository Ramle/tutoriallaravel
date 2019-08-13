<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerEjemplo extends Controller
{
    public function Matriz()
        {for($i=1; $i<=4; $i++)
            {$o="OXOXOXO";
             $x='XOXOXOX';
             echo $o."<br>".$x."<br>";
            }
        }

    public function numeropar($num)
        {if($num%2==0)
            {echo "numero par";
            }
          else
            { echo "numero impar";
            }
        }
}
