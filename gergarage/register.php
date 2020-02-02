<?php
include('session.php');

  // Usar essa parte para criar a confirmacao do booking
//   if(array_key_exists('type', $_POST)) { 

			

// 		$sql = "INSERT INTO vehicle (License, Type, Engine_type, Make) 
// 		VALUES( '$type', '$make','$license_number','$vehicle_engine_type');";
// 		echo '<script type="text/javascript">alert("'.$sql.'");</script>';
// 		$result = mysqli_query($link, $sql);

// 		$sql2 = "INSERT INTO 'maintenance' ( 'type_maintenance', 'comment') 
// 		VALUES('$type_maintenance', '$comment');";
// 		$result = mysqli_query($link, $sql2);
// 	}
?>


<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8"/>


    <head>
        <title>The best solution to your vehicle</title>
       <link rel="stylesheet" href="_css/estilo.css"/>
    </head>
    <body>
	<?php echo var_dump($_POST); ?>
    <div id="interface">
            <header id=cabecalho>
                <hgroup>
                    <h1>Ger's Garage</h1>
                    <h2>The best solution to your vehicle</h2>
                </hgroup>
                
                <img id="icone" src="img/car_and_motorcycle.png">


                <!--Navbar-->

               
                <nav id="menu">
                    <h1>Menu Principal</h1>
                    <ul>
                        <li>Home</li>
                        <li><a href="appointment.php">Appointment</a></li>                 
                        <li>Services</li>
                        <li>Contact us</li>
                        <li><a href="signOut.php">Logout</a></li>
                    </ul>
                </nav>
            </header>  






	<div class="container">
	<div class="main-login main-center">
			<form method="post">
		<div class="form-row">
                    <div class="col-4">
                        <label for="">Name</label>
                        <input type="name" class="form-control" name="fname" value = "<?php echo $_SESSION['user_name']; ?>"  />
                    </div>

                    <div class="col">
                        <label for="">Surname</label>
                        <input type="name" class="form-control" name="sName" value = "<?php echo $_SESSION['user_surname']; ?>" readonly />

			      </div>
				  <div class="col">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" value = "<?php echo $_SESSION['user_email']; ?>" readonly />

			      </div>
				  <div class="col">
                        <label for="">Date</label>
						<input type="date" class="form-control" name="date" value = "<?php echo date('Y-m-d', strtotime($_POST['date'])); ?>" readonly  />
						
			      </div>
				  <div class="col">
                        <label for="">Time</label>
                        <input type="text" class="form-control" name="time" value = "<?php echo  $_POST['timeslot']; ?>" readonly />

			      </div>
                    </div>


		
				<div class="form-group">
					<label for="make">Make</label>
					<select class="form-control" id="make" name="make" onchange="ChangeVehicleList()">
						<option value="">-- Vehicle --</option>
						<option value="TOYOTA">Toyota</option>
						<option value="VOLVO">Volvo</option>
						<option value="VOLKSWAGEN">Volkswagen</option>
						<option value="BMW">BMW</option>
						
					</select>
					<br>

					<label for="type">Type</label>
					<select class="form-control" name="type" id="type" required>
					</select>
					<br>

					<label for="engine_type">Engine Type</label>
					<select class="form-control" name="engine_type" id="engine_type">
						<option>Diesel</option>
						<option>Petrol</option>
						<option>Hybrid</option>
						<option>Eletric</option>
					</select>
					<br>

					<div class="form-group">
						<label for="license">License:</label>
						<input name="license" type="license" class="form-control" placeholder="Enter License number" id="license" required>
					</div>
					<br>
					
					<!--Os dados devem ser inseridos na tabela maintanence-->
					<label for="service_type">Service Type</label>
                <select class="form-control" name="service_type" id="service_type" required>
                    <option></option>
                    <option value="1">Annual Service</option>
                    <option value="2">Major Service</option>
                    <option value="3">Repair / Fault</option>
                    <option value="4">Major Repair</option>
                </select>
                <br>

				<div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" name="comment" rows="3" id="comment"></textarea>
                </div>

					<button name="reg_vehicle" type="submit" class="btn btn-primary">Register Vehicle</button>
				</div>

				

			</form>
		</div>
	</div>
</body>

	<script>
		var vehiclesAndModels = {};
		vehiclesAndModels['TOYOTA'] = ['Allion', 'Estima', 'Echo'];
		vehiclesAndModels['VOLVO'] = ['V70', 'XC60', 'XC90'];
		vehiclesAndModels['VOLKSWAGEN'] = ['Golf', 'Polo', 'Scirocco', 'Touareg'];
		vehiclesAndModels['BMW'] = ['M6', 'X5', 'Z3'];

		function ChangeVehicleList() {
			var vehicleList = document.getElementById("make");
			var modelList = document.getElementById("type");
			var selectVehicle = vehicleList.options[vehicleList.selectedIndex].value;
			while (modelList.options.length) {
				modelList.remove(0);
			}
			var vehicles = vehiclesAndModels[selectVehicle];
			if (vehicles) {
				var i;
				for (i = 0; i < vehicles.length; i++) {
					var vehicle = new Option(vehicles[i], vehiclesAndModels[i]);
					modelList.options.add(vehicle);
				}
			}
		}
	</script>





</body>

</html>