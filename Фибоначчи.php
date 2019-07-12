<?php
function Chislo($n)
{
    if ($n < 0) 
    {
       return 1; 
    }
    else 
    {
       return Chislo($n-1) + Chislo($n-2);
    }
}

for ($n = 0; $n <= 64; $n++) 
{
    echo(Chislo($n) . "<br/>");
}
