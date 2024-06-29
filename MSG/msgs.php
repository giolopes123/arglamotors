<?php		
	if(isset($_GET['msg'])){
		$msg =  ucfirst($_GET['msg']);
		echo("
				<div class='alert alert-success mt-5' role='alert' id='alertas'>
				  <b>$msg</b> com sucesso!
				</div>"
			);
		echo("<script>
				setTimeout(() => {
					$('#alertas').hide();
				}, 1000);
			</script>");
	}

?>