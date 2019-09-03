var tabla;

$.post("../ajax/proveedor.php", {op:"selectDepartamento"}, function(r){
	$("#IdDepartamento").html(r);
	$("#IdDepartamento").selectpicker('refresh');

});

function listarciudades()
{
	dep=$("#IdDepartamento").val();
	$.post("../ajax/proveedor.php", {op:"selectCiudad",depar:dep}, function(r){
		$("#IdCiudad").html(r);
		$("#IdCiudad").selectpicker('refresh');
	
	});
	
} 

function init()
{
	mostrarform(false);
	listar();
	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	})
}


	function limpiar()
	{
		$("#Nombre").val("");
		$("#Telefonos").val("");
		$("#NIT").val("");
		$("#Email").val("");
	}

	function mostrarform(flag)
	{
		limpiar();
		if (flag)
		{
			$("#listadoregistros").hide();
			$("#formularioregistros").show();
			$("#btnGuardar").prop("disabled",false);
			$("#btnagregar").hide();
		}
		else
		{
			$("#listadoregistros").show();
			$("#formularioregistros").hide();
			$("#btnagregar").show();
		}
	}

function cancelarform()
{
	limpiar();
	mostrarform(false);
}



function listar()
{
	tabla=$('#tbllistado').dataTable(
	{
		"aProcessing": true,
	    "aServerSide": true,
	    dom: 'Bfrtip',
	    buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
		        ],
		"ajax":
				{
					url: '../ajax/proveedor.php?op=listar',
					type : "get",
					dataType : "json",
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"iDisplayLength": 5,
	    "order": [[ 0, "desc" ]]
	}).DataTable();
}

function guardaryeditar(e)
{
	e.preventDefault();
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/proveedor.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          mostrarform(false);
	          tabla.ajax.reload();
	    }

	});
	limpiar();
}

function mostrar(IdProveedor)
{
	$.post("../ajax/proveedor.php?op=mostrar",{IdProveedor : IdProveedor}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);
		$("#IdDepartamento").val(data.IdDepartamento);
		$('#IdDepartamento').selectpicker('refresh');
		$("#IdCiudad").val(data.IdCiudad);
		$('#IdCiudad').selectpicker('refresh');
		$("#Nombre").val(data.Nombre);
		$("#Telefonos").val(data.Telefonos);
		$("#NIT").val(data.NIT);
		$("#Email").val(data.Email);
 		$("#IdProveedor").val(data.IdProveedor);
 	})
}

init();