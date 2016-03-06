<?php

    function Clean($data)
	{
		$Value = strip_tags(trim($data));
		$Cleaned = htmlspecialchars($Value);
		return $Cleaned;
	}
	function Numeric($data)
	{
		return is_numberic($data);
	}	

?>