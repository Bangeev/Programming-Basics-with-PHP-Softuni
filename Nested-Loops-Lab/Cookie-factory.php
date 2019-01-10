
<?php
$count = intval(readline());
            for ($i = 1; $i <=$count; $i++)
            {
                $ingradient = readline();
 
                $eggs = false;
                $flour = false;
                $sugar = false;
 
                while (true)
                {
                    if ($ingradient == "eggs")
                    {
                        $eggs = true;
                    }
                    else if ($ingradient == "flour")
                    {
                        $flour = true;
                    }
                    else if ($ingradient=="sugar")
                    {
                        $sugar = true;
                    }
                    else if ($ingradient=="Bake!")
                    {
                        if ($eggs&&$sugar&&$flour==true)
                        {
                            echo("Baking batch number {$i}..." . PHP_EOL);
                            break;
                        }
                        else
                        {
                            echo("The batter should contain flour, eggs and sugar!" . PHP_EOL);
                           
                        }
                       
 
                    }
 
 
 
                    $ingradient = readline();
                }
            }