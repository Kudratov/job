<?php
include('../db_connect.php');
	if (! empty($_POST["id"])){
	    $query = "SELECT filiallar.filial 
		    		FROM branch_emp JOIN filiallar ON id = fil_id 
		    		WHERE fil_id ='" . $_POST["id"] . "'";
	    $results = $db->query($query);
	    ?>
		<select name="branch_name" id="filial-list" class="demoInputBox1">
			<option value disabled selected>Filialni tanlang</option>
		<?php
		    foreach ($results as $state) {
		        ?>
		<option value="<?php echo $state["filial"]; ?>"><?php echo $state["filial"]; ?></option>
		</select>
	<?php
	    }
	}


?>