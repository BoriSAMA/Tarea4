
<section class="my-pets-content my-3 mx-3">
	<div class="container">
		<h4>Mis mascotas</h4>
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Nombre de la mascota</th>
					<th scope="col"><i class="fa fa-paw mr-1" aria-hidden="true"></i>Tipo</th>
					<th scope="col"><i class="fa fa-filter mr-1" aria-hidden="true"></i>Raza</th>
					<th scope="col"><i class="fa fa-medkit mr-1" aria-hidden="true"></i>Ultima vacuna</th>
					<th scope="col"><i class="fa fa-heart mr-1" aria-hidden="true"></i>Adopcion</th>
				</tr>
			</thead>
			<tbody>
				<?php
					if(isset($mascotas)){
						$filas = '';
						foreach ($mascotas as $key) {
						$filas .= "<tr>";
								$filas .= "<td>".$key['nombreMascota']."</td>";
								$filas .= "<td>".$key['tipoMascota']."</td>";
								$filas .= "<td>".$key['razaMascota']."</td>";
								$filas .= "<td>".$key['fechaUltimaVacuna']."</td>";
								$filas .= "<td>".$key['fechaAdopcion']."</td>";
						$filas .= "</tr>";
						}
						echo $filas;
					}

                    
                    
                ?>
			</tbody>
		</table>
	</div>
</section>
	