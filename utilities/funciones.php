<?php 

    function calcular_iva($compromiso2, $iva2)
    {
        return ($compromiso2%$iva2);  
    }

	function calcular_total($compromiso2, $periodo2)
	{
		return ($compromiso2/$periodo2);  
	}
?>