<?php include 'header_admin.php';?>


    <section data-stellar-background-ratio="0.5">
		<div class="position-relative text-center">
            <img src="../img/fondo.png" alt="" width="145%" style="filter: brightness(40%); position: relative; overflow: hidden; background-position: center center; background-size: cover; vertical-align: middle; display: -webkit-box; display: -webkit-flex; display: -ms-flexbox; display: flex; -webkit-box-align: center; -webkit-align-items: center; -ms-flex-align: center; align-items: center; min-height: 50vh; width: 100%; height: 50vh;">
        </div>    
		<div class="position-absolute top-50 start-50 translate-middle h-50">			
			<h5 class="text-danger fw-light">USUARIOS</h5>					
		</div> 
	</section>    
	
	<div class="container-fluid m-2">
		<ul class="breadcrumb mb-0 icono-prop">
			<li class="breadcrumb-item">
				<a href="listados.php"> 
					<i class="fas fa-home text-danger"></i>
				</a>
			</li>
			<li class="breadcrumb-item">
				<span style="font-size: 14px"><small>Usuarios </small></span>
			</li>
		</ul>
	</div>			
        
	   <br>	   
	
	<div class="row container-fluid m-2 p-2">
       <!-- SECCION PARA INSERTAR PROPIEDADES -->
	   <div class="col-md-5 mb-2">
            <div class="shadow-lg card">
                <div class="card-header label">                
                    <span><b><i class="fas fa-cubes"></i> BÚSQUEDA</b>
                    <br><span style="font-size: 8px"> <i><span style="color: red">*</span> Datos obligatorios</i></span>                    
                </div>
                <div class="card-body">                
                    <!-- Para recepcionar archivos uso enctype-->
                    <form action="usuarios.php" method="GET" enctype="multipart/form-data">                                                            
                        <div class="d-flex">
                            <div class="col-md-6 form-group label" style="font-size: 12px">   
                                <label for="importe"><span style="color: red">* </span><i class="fa fa-file-pdf-o" style="font-size:14px"></i> Listados</label>
                                <select class="form-select label" name="listados" id="listados" style="font-size: 12px" required>

                                <?php
                                       
                                       include 'listar.php';
                                       
                                       $i = 0;
                                       while ($i < count($query)){
                                        $a = $query[$i];
                                       // echo $a ."\n";
                                        $i++;                                        
                                ?>
                                    
                                    <option value="<?php echo $a['Listados']?>"><?php echo $a['Listados']?></option>                                    
                                    <?php
                                    }
                                    ?>
                                    
                                    <!--
                                    <option value="">-- Seleccione un listado --</option>
                                    <option value="PA40CECI">PA40CECI</option>
                                    <option value="PC40TCLV">PC40TCLV</option>
                                    <option value="PD11ACUO">PD11ACUO</option>
                                    <option value="PD11DIAR">PD11DIAR</option>
                                    <option value="PD11ECBD">PD11ECBD</option>
                                    <option value="PD11INAJ">PD11INAJ</option>
                                    <option value="PD11RCBN">PD11RCBN</option>
                                    <option value="PD11RCLK">PD11RCLK</option>
                                    <option value="PD11RCPF">PD11RCPF</option>
                                    <option value="PD11RCRP">PD11RCRP</option>
                                    <option value="PD11RCSV">PD11RCSV</option>
                                    <option value="PD11RCUO">PD11RCUO</option>
                                    <option value="PD11RCWM">PD11RCWM</option>
                                    <option value="PD11RCWV">PD11RCWV</option>
                                    <option value="PD11RECO">PD11RECO</option>
                                    <option value="PD11RECR">PD11RECR</option>
                                    <option value="PD11RINA">PD11RINA</option>
                                    <option value="PD11VFTA">PD11VFTA</option>
                                    <option value="PD12DIAR">PD12DIAR</option>
                                    <option value="PD12EBNB">PD12EBNB</option>
                                    <option value="PD12ESBA">PD12ESBA</option>
                                    <option value="PD12INAJ">PD12INAJ</option>
                                    <option value="PD12RECR">PD12RECR</option>
                                    <option value="PD12RSBA">PD12RSBA</option>
                                    <option value="PD12RSBN">PD12RSBN</option>
                                    <option value="PD12RSEG">PD12RSEG</option>
                                    <option value="PD12RSLK">PD12RSLK</option>
                                    <option value="PD12RSPF">PD12RSPF</option>
                                    <option value="PD12RSRP">PD12RSRP</option>
                                    <option value="PD12RSWM">PD12RSWM</option>
                                    <option value="PD12VFBA">PD12VFBA</option>
                                    <option value="PD12VFTA">PD12VFTA</option>
                                    <option value="PE12AVI1">PE12AVI1</option>
                                    <option value="PE12AVI2">PE12AVI2</option>
                                    <option value="PE12BARR">PE12BARR</option>
                                    <option value="PE12DIAR">PE12DIAR</option>
                                    <option value="PE12POBP">PE12POBP</option>
                                    <option value="PE12PREV">PE12PREV</option>
                                    <option value="PE12RCSA">PE12RCSA</option>
                                    <option value="PE12RCSI">PE12RCSI</option>
                                    <option value="PE12RENO">PE12RENO</option>
                                    <option value="PE12TABD">PE12TABD</option>
                                    <option value="PI40IDIA">PI40IDIA</option>
                                    <option value="PI40REOT">PI40REOT</option>
                                    <option value="PS11MORO">PS11MORO</option>
                                    <option value="PS11SQAP">PS11SQAP</option>
                                    <option value="PS73ASPA">PS73ASPA</option>
                                    <option value="PS73DIAR">PS73DIAR</option>
                                    <option value="PS73INPC">PS73INPC</option>
                                    -->
                                </select> 
                            </div> 	                        
                            <div class="p-3 text-center">                        
                                <!--<input class="btn btn-outline-success" id="buscar" name="buscar" type="submit" value="Buscar" style="font-size: 12px">-->                                
                                <button class="btn btn-outline-success" id="buscar" name="buscar" type="submit" value="buscar" style="font-size: 12px"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div> <!--cierra el body-->
            </div><!--cierra el card-->            
        </div><!--cierra el col--> 

		<!-- SECCION PARA LISTAR USUARIOS -->
        <div class="col-md-7">
            <div class="card h-75 shadow-lg">            
                <div class="card-header label" style="overflow-y:scroll">
                    <span><b><i class="fas fa-cubes"></i> EDICIÓN DE USUARIOS</b></span>
                    <br> <br> 
                    <table class="table-responsive table table-striped table-sm card-body cellspacing-0">
                        <thead>
                            <tr class="text-center">                                                                
                                <th scope="col" hidden>#</th> 
                                <th scope="col">Listados</th>                        
                                <th scope="col">Correo Electronico</th>                                                                      
                                <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody class="bodyContent">

                            <?php                            
                                if(isset($_GET['buscar'])){	
                                    $listados      = $_GET['listados'];   
                                    
                                   // include 'conexion.php'; *** Esta llamada mas arriba
                                    //$conexion = new conexion();  *** Esta llamada mas arriba                               
                                    $search = "SELECT * FROM listados WHERE Listados = '$listados'";
                                    $sqlSearch = $conexion->consultar($search);                                
                                                                    
                                    // Leemos Listado 1 por 1
                                    foreach($sqlSearch as $User){ 
                                    ?>							
                                        <tr class="input-select justify-content-center text-center">                                        
                                            <td hidden><?php echo $User['id'];?></td>                                        
                                            <td><i class="fa fa-file-pdf-o" style="font-size:20px;color:red"></i> <?php echo $User['Listados'];?></td>                                        
                                            <td><?php echo $User['Mail'];?></td>      								              
                                            <td class="d-flex py-3 justify-content-center">
                                                <!-- <a name="borrar" id="borrar" type="button" class="btn btn-outline-danger m-1" href="usuarios.php" onclick="confirmation(<?php echo $propiedades['id'];?>)"><i class="far fa-trash-alt"></i></a> -->
                                                <button type="button" class="btn btn-outline-success editbtn" data-bs-toggle="modal" data-bs-target="#editar"><i class="far fa-edit"></i></button>
                                                <button type="button" class="boton btn btn-outline-danger deletebtn" data-bs-toggle="modal" data-bs-target="#eliminar"><i class="far fa-trash-alt"></i></button>
                                            </td>
                                        </tr> 																	
                                    <?php #cerramos la llave del foreach
                                    }
                                } else {
                                    //include 'listar.php'; *** Esta llamada mas arriba
                                                                    
                                    foreach($query as $listados){ ;
                                    ?>
                                        <tr class="input-select text-center">     
                                            <td hidden><?php echo $listados['id'];?></td>                                                                           
                                            <td><i class="fa fa-file-pdf-o" style="font-size:20px;color:red"></i> <?php echo $listados['Listados'];?></td>
                                            <td><?php echo $listados['Mail'];?></td>      								              
                                            <td class="d-flex py-3">
                                                <!-- <a name="borrar" id="borrar" type="button" class="btn btn-outline-danger m-1" href="usuarios.php" onclick="confirmation(<?php echo $propiedades['id'];?>)"><i class="far fa-trash-alt"></i></a> -->
                                                <button type="button" class="btn btn-outline-success editbtn" data-bs-toggle="modal" data-bs-target="#editar"><i class="far fa-edit"></i></button>
                                                <button type="button" class="boton btn btn-outline-danger deletebtn" data-bs-toggle="modal" data-bs-target="#eliminar"><i class="far fa-trash-alt"></i></button>
                                            </td>
                                        </tr> 	
                                    <?php }
                                }?>                                                
                        </tbody>                                        
                    </table>                                                               
                </div> <!--cierra el col--> 

					<!--Ventana Modal para Actualizar--->
					<?php  include('modalEdit.php'); ?>

					<!--Ventana Modal para la Alerta de Eliminar--->
					<?php include('modalEliminar.php'); ?>
                </div>
		</div> <!-- CIERRA: Seccion para eliminar y modificar propiedades --> 
	</div>

<script>
	$('.editbtn').on('click',function(){
		$tr=$(this).closest('tr');
		var datos=$tr.children("td").map(function () {
            return $(this).text();
        });
        $('#id').val(datos[0]);
        $('#Listados').val(datos[1]);
        $('#Mail').val(datos[2]);        
	});
</script>


<script>
	$('.deletebtn').on('click',function(){
		$tr=$(this).closest('tr');
		var datos=$tr.children("td").map(function () {
            return $(this).text();
        });
        $('#delete_id').val(datos[0]);       
	});
</script>

    <script type="text/javascript">
		window.addEventListener("scroll", function(){
			var nav = document.querySelector("nav");
			nav.classList.toggle("abajo",window.scrollY>0);

			var nav = document.querySelector("nav");
			nav.classList.toggle("abajo",window.scrollY>0);
		})
	</script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

	<script src="https://kit.fontawesome.com/8552914272.js" crossorigin="anonymous"></script>

  </body>
</html>	   
