$(document).ready(function() {
		$(function () {
			$('.fancybox').fancybox();
			});
		$(function () {
			$('#datetimepicker1').datetimepicker({
				language: 'es'
					});
					
					
				});
		$(function() {
			$('#datetimepicker2').datetimepicker({
			pickTime: false
			});
		  });

			//INICIO FORMULARIO equipo
			$('#Formularioequipo').bootstrapValidator({
				message: 'Este valor no es válido',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					nombre: {
						message: 'El nombre del equipo no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el nombbre del equipo y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 48,
								message: 'El status de la revista debe ser mayor de 2 y menos de 48 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9, ,_]*$/,
								message: 'El nombre de usuario sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					idpais: {
						message: 'El idpais no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario idpais y no puede estar vacío'
							},
							stringLength: {
								min: 1,
								max: 1,
								message: 'El idpais debe ser mayor de 1 y menos de 1 caracteres de largo'
							},
							regexp: {
								regexp: /^[0-9]*$/,
								message: 'El nombre de usuario sólo puede consistir en número'
							}
						}
					},
					escudo: {
						message: 'El escudo no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el escudo y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 45,
								message: 'El escudo debe ser mayor de 2 y menos de 45 caracteres de largo'
							},
						}
					},
				}
			});//FIN FORMULARIO equipo
			
	});//FIN DEL READY