var tabla;

function init()
{
	mostrarform(false);
	listar();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	})

	$.post("../../ajax/exitencia.php?op=selectColor", function(r){
	            $("#IdColor").html(r);
	            $("#IdColor").selectpicker('refresh');

	});

    $.post("../../ajax/existencia.php?op=selectPrenda", function(r){
				$("#IdPrenda").html(r);
				$("#IdPrenda").selectpicker('refresh');

});   


}

function limpiar()
{
	$("#Numero").val("");
	$("#Talla").val("");
	$("#IdExistencia").hide("");
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
					url: '../../ajax/existencia.php?op=listar',
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
		url: "../../ajax/existencia.php?op=guardaryeditar",
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

function mostrar(IdExistencia)
{ 
	$.post("../../ajax/existencia.php?op=mostrar",{IdExistencia : IdExistencia}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);
		$("#IdColor").val(data.IdColor);
		$('#IdColor').selectpicker('refresh');
		$("#IdPrenda").val(data.IdPrenda);
		$('#IdPrenda').selectpicker('refresh');
		$("#Numero").val(data.Numero);
		$("#Talla").val(data.Talla);
		$("#IdExistencia").val(data.IdExistencia);
 	})
}

init(); 