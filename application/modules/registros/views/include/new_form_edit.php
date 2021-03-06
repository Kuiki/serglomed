<?= validation_errors(); ?>
<form id="updateClient" role="form" method="post" data-id="<?= $id ?>" >
    <div class="row">
        <div class="col-md-4">
			<?php if($rol == 4): ?>
				<div class="form-group">

					<label>Fecha de Registro</label>

					<div class="input-group col-md-12">

						<span class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</span>

						<input name="fregistro" value="<?= $getRegistro->getFregistro()->format('d/m/Y') ?>" class="form-control" type="text" disabled>

					</div>

				</div>

			<?php else: ?>

				<div class="form-group">
				
					<label>Fecha de Registro</label>
					<div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-week-start="1" data-date-language="es">

						<input name="fregistro" value="<?= $getRegistro->getFregistro()->format('d-m-Y') ?>" type="text" class="form-control" readonly>

						<span class="input-group-btn">

							<button class="btn default" type="button">

								<i class="fa fa-calendar"></i>

							</button>

						</span>

					</div>

				</div>

			<?php endif ?>
        </div>
        <div class="col-md-4">
            <div class="form-group">

                <label>Campaña</label>

                <div class="input-group col-md-12">

                    <input disabled name="name" value="<?= $getRegistro->getCampaign()->getName() ?>" class="form-control md-text" type="text">

                </div>

            </div>
        </div>
        <div class="col-md-4">
			<?php if($rol  != 4): ?>
				<div class="form-group">

					<label>Operario</label>

					<select table="registros" field="idUsuario" key="<?= $id ?>" name="usuario" class="form-control md-select">

						<?php foreach($getUsuarios as $usuario): ?>

							<option <?php if($getRegistro->getIdusuario()->getId() == $usuario->getId()) echo 'selected' ?> value="<?= $usuario->getId() ?>"><?= $usuario->getNombre() ?> <?= $usuario->getApellidos() ?></option>

						<?php endforeach ?>

					</select>

				</div>
			<?php else: ?>
				<div class="form-group">
					
					<label>Operario</label>

					<div class="input-group col-md-12">

						<span class="input-group-addon">
							<i class="fa fa-pencil"></i>
						</span>

						<input table="registros" field="name" key="<?= $id ?>" name="usuario" value="<?= $getRegistro->getidUsuario()->getNombre() ?> <?= $getRegistro->getidUsuario()->getApellidos() ?>" class="form-control md-text" type="text" disabled>

					</div>

				</div>  
			<?php endif ?>
        </div>

        <div class="clearfix"></div>

        <div class="col-md-4">
            <div class="form-group">
                
                <label>Nombre</label>

                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                    </span>

                    <input table="registros" field="name" key="<?= $id ?>" name="name" value="<?= $getRegistro->getName() ?>" class="form-control md-text" type="text">

                </div>

            </div>  
        </div>
        <div class="col-md-8">
            <div class="form-group">

                <label>Apellidos</label>

                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                    </span>

                    <input table="registros" field="first_name" key="<?= $id ?>" name="first_name" value="<?= $getRegistro->getFirstName() ?> <?= $getRegistro->getLastName() ?>" class="form-control md-text" type="text">

                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">

                <label>DNI</label>

                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                    </span>

                    <input table="registros" field="document_number" key="<?= $id ?>" name="document_number" value="<?= $getRegistro->getDocumentNumber() ?>" class="form-control md-text" type="text">

                </div>

            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-group">

                <label>Fecha de nacimiento</label>

                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </span>

                    <input table="registros" field="bird_date" key="<?= $id ?>" name="bird_date" value="<?= $getRegistro->getBirdDate()->format('d/m/Y') ?>" class="form-control md-text" type="text">

                </div>

            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">

                <label>Edad actuarial</label>

                <div class="input-group col-md-12">
                    
                    <span class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                    </span>

                    <input table="registros" field="modality" key="<?= $id ?>" name="age" class="form-control md-text age" value="<?= $getRegistro->getAge() ?>" type="text">

                </div>

            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">

                <label>Sexo</label>

                <div class="input-group col-md-12">

                    <select table="registros" field="gender" key="<?= $id ?>" name="last_name" class="form-control md-select">

                        <option></option>
                        <option <?php if( $getRegistro->getGender() == 'Hombre') echo 'selected' ?> value="M">H</option>
                        <option <?php if( $getRegistro->getGender() == 'Mujer') echo 'selected' ?> value="F">M</option>

                    </select>

                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">

                <label>Teléfono</label>

                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                    </span>

                    <input table="registros" field="telephone" key="<?= $id ?>" name="telephone" value="<?= $getRegistro->getTelephone() ?>" class="form-control md-text" type="text">

                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">

                <label>Móvil</label>

                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                    </span>

                    <input table="registros" field="telephone" key="<?= $id ?>" name="telephone" value="<?= $getRegistro->getTelephone() ?>" class="form-control md-text" type="text">

                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">

                <label>Email</label>

                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                    </span>

                    <input table="registros" field="email" key="<?= $id ?>" name="email" value="<?= $getRegistro->getEmail() ?>" class="form-control md-text" type="text">

                </div>

            </div>

        </div>
        
        <div class="col-md-4">
            <div class="form-group">

                <label>Modalidad</label>

                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                    </span>

                    <input table="registros" field="modality" key="<?= $id ?>" name="modality" value="<?= $getRegistro->getModality() ?>" class="form-control md-text" type="text">

                </div>

            </div>
        </div>


        <div class="col-md-4">


            <div class="form-group">

                <label>Periocidad</label>

                <div class="input-group col-md-12">

                   <select table="registros" field="periodicity" key="<?= $id ?>" class="form-control md-select">

                        <option></option>
                        <option <?php if( $getRegistro->getPeriodicity() == 'Anual') echo 'selected' ?> value="Anual">Anual</option>
                        <option <?php if( $getRegistro->getPeriodicity() == 'Semestral') echo 'selected' ?> value="Semestral">Semestral</option>
                        <option <?php if( $getRegistro->getPeriodicity() == 'Trimestral') echo 'selected' ?> value="Trimestral">Trimestral</option>
                        <option <?php if( $getRegistro->getPeriodicity() == 'Único') echo 'selected' ?> value="Único">Único</option>

                   </select>

                </div>

            </div>

        </div>

        <div class="col-md-4">
            
            <div class="form-group">

                <label>Vencimiento</label>

                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </span>

                    <input table="registros" field="renovation" key="<?= $id ?>" name="renovation" value="<?= $getRegistro->getRenovation()->format('d/m/Y') ?>" class="form-control md-text" type="text">

                </div>

            </div>

        </div>

        <div class="col-md-4">
            <div class="form-group">

                <label>Capital</label>

                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                    </span>

                    <input table="registros" field="capital" key="<?= $id ?>" name="capital" value="<?= number_format(intval($getRegistro->getCapital()), 0, ',', '.') ?>" class="form-control md-text" type="text">

                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">

                <label>Prima</label>

                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                    </span>

                    <input table="registros" field="prima" key="<?= $id ?>" name="prima" value="<?= number_format(intval($getRegistro->getPrima()), 0, ',', '.') ?>" class="form-control md-text" type="text">
                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">

                <label>Cob. Actual</label>

                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                    </span>

                    <input table="registros" field="actual_cob" key="<?= $id ?>" name="actual_cob" value="<?= $getRegistro->getActualCob() ?>" class="form-control md-text" type="text">

                </div>

            </div>
        </div>
        
        <div class="col-md-4">
            
        </div>

        <div class="col-md-4">

            <div class="form-group">

                <label style="color:green !important">Prima OPC1</label>

                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                    </span>

                    <input table="registros" field="prima_opc1" key="<?= $id ?>" name="prima_opc1" value="<?= $getRegistro->getPrimaOpc1() ?>" class="form-control md-text" type="text">

                </div>

            </div>

            <div class="form-group">

                <label style="color:green !important">Ahorro. € OPC1</label>

                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                    </span>

                    <input table="registros" field="ahorroeu_opc1" key="<?= $id ?>" name="ahorroeu_opc1" value="<?= $getRegistro->getAhorroeuOpc1() ?>" class="form-control md-text" type="text">

                </div>

            </div>

        </div>


        <div class="col-md-4">
            <div class="form-group">

                <label style="color:green !important">Cob. OPC1</label>

                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                    </span>

                    <input table="registros" field="cob_opc1" key="<?= $id ?>" name="cob_opc1" value="<?= $getRegistro->getCobOpc1() ?>" class="form-control md-text" type="text">

                </div>

            </div>

            <div class="form-group">

                <label style="color:green !important">Ahorro % OPC1</label>

                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                    </span>

                    <input table="registros" field="ahorropercent_opc1" key="<?= $id ?>" name="ahorropercent_opc1" value="<?= $getRegistro->getAhorropercentOpc1() ?>" class="form-control md-text" type="text">

                </div>

            </div>
        </div>

        <div class="col-md-4">
            
        </div>

        <div class="col-md-4">
            <div class="form-group">

                <label style="color:orange !important">Prima OPC2</label>

                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                    </span>

                    <input table="registros" field="Prima_opc2" key="<?= $id ?>" name="Prima_opc2" value="<?= $getRegistro->getPrimaOpc2() ?>" class="form-control md-text" type="text">

                </div>

            </div>

            <div class="form-group">

                <label style="color:orange !important">Ahorro. € OPC2</label>

                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                    </span>

                    <input table="registros" field="ahorroeu_opc2" key="<?= $id ?>" name="ahorroeu_opc2" value="<?= $getRegistro->getAhorroeuOpc2() ?>" class="form-control md-text" type="text">

                </div>

            </div>
        </div>
        
        
        <div class="col-md-4">
            <div class="form-group">

                <label style="color:orange !important">Cob. OPC2</label>

                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                    </span>

                    <input table="registros" field="cob_opc1" key="<?= $id ?>" name="cob_opc1" value="<?= $getRegistro->getActualCob() ?>" class="form-control md-text" type="text">

                </div>

            </div>

            <div class="form-group">

                <label style="color:orange !important">Ahorro % OPC2</label>

                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                    </span>

                    <input table="registros" field="ahorropercent_opc2" key="<?= $id ?>" name="ahorropercent_opc2" value="<?= $getRegistro->getAhorropercentOpc2() ?>" class="form-control md-text" type="text">

                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">

                <label>Nueva Periocidad</label>

                <div class="input-group col-md-12">

                    <select table="registros" field="new_periodicity" key="<?= $id ?>" class="form-control md-select">
                        <option></option>
                        <option <?php if( $getRegistro->getNewPeriodicity() == 'Anual') echo 'selected' ?> value="Anual">Anual</option>
                        <option <?php if( $getRegistro->getNewPeriodicity() == 'Semestral') echo 'selected' ?> value="Semestral">Semestral</option>
                        <option <?php if( $getRegistro->getNewPeriodicity() == 'Trimestral') echo 'selected' ?> value="Trimestral">Trimestral</option>
                        <option <?php if( $getRegistro->getNewPeriodicity() == 'Único') echo 'selected' ?> value="Único">Único</option>
                    </select>

                </div>

            </div>
        </div>


        <div class="col-md-4">
            <div class="form-group">

                <label>Nº Prestamo</label>

                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                    </span>

                    <input table="registros" field="ahorropercent_opc2" key="<?= $id ?>" name="lending_number " value="<?= $getRegistro->getLendingNumber() ?>" class="form-control md-text" type="text">

                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <?php if (trim($getRegistro->getSelecRies()) == 'TLS'): ?>
                    <label style="color:red !important;">Selección Médica</label>
                <?php else: ?>
                    <label>Selección Médica</label>
                <?php endif ?>
                
                
                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                    </span>

                    <input table="registros" field="selec_ries" key="<?= $id ?>" name="selec_ries " value="<?= $getRegistro->getSelecRies() ?>" class="form-control md-text" type="text">

                </div>

            </div>
        </div>


        <div class="col-md-8">

            <div class="form-group">

                <label>Dirección</label>

                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                    </span>

                    <input table="registros" field="address" key="<?= $id ?>" name="address" value="<?= $getRegistro->getAddress() ?>" class="form-control md-text" placeholder="Persona que consta como administrador de la empresa" type="text">

                </div>

            </div>
            
        </div>

        <div class="col-md-4">
            <div class="form-group">

                <label>CP</label>

                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                    </span>

                    <input table="registros" field="zip" key="<?= $id ?>" name="zip" value="<?= $getRegistro->getZip() ?>" class="form-control md-text" type="text">

                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">

                <label>Población</label>

                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                    </span>

                    <input table="registros" field="city" key="<?= $id ?>" name="city" value="<?= $getRegistro->getCity() ?>" class="form-control md-text" type="text">

                </div>

            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-group">

                <label>Provincia</label>

                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                    </span>

                    <input table="registros" field="province" key="<?= $id ?>" name="province" value="<?= $getRegistro->getProvince() ?>" class="form-control md-text" type="text">

                </div>

            </div>
        </div>
        
        <div class="clearfix"></div>

        <!--
        <div class="col-md-4">
            <div class="form-group">

                <label>Tipo de vía</label>

                <div class="input-group col-md-12">

                    <span class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                    </span>

                    <input table="registros" field="way" key="<?= $id ?>" name="way" value="<?= $getRegistro->getWay() ?>" class="form-control md-text" type="text">

                </div>

            </div>

        </div>
                
        -->

		<div class="col-md-3">
			<button class="btn green actualizar-datos" type="submit">Actualizar Datos</button>
		</div>
		<div class="clearfix"></div>
		<br>
		<div class="col-md-12">
		<div class="alert alert-success" id="actualizado" role="alert" style="background: transparent;display:none;">
			Cliente actualizado correctamente.
		</div>
		</div>
        
    </div>
    

</form>

    
<hr/>

<form action="<?= site_url('registros/setDataSecondaryForm/'.$id) ?>" role="form" method="post">

    <div class="row">

        <div class="form-body">

            <?= $secondForm ?>

            <div class="form-group col-md-12">

                <button name="submit" class="btn green" type="submit" id="salto">Guardar</button>

            </div>

        </div>

    </div>

</form>
