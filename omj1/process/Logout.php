<?php

		setcookie('role','',time()-7000000,'/');
		setcookie('ac','',time()-7000000,'/');
		echo "<script>alert('SuccessFul')</script>";
		echo "<script>window.location.href='/omj/index.php'</script>";

?>