var tabla;

function init()
{
	mostrarform(false);
	listar();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	})

	$.post("../../ajax/entrada.php?op=selectPrenda", function(r){
	            $("#IdPrenda").html(r);
	            $("#IdPrenda").selectpicker('refresh');

	});

    $.post("../../ajax/entrada.php?op=selectProveedor", function(r){
				$("#IdProveedor").html(r);
				$("#IdProveedor").selectpicker('refresh');

});   

    $.post("../../ajax/entrada.php?op=selectColor", function(r){
                $("#IdColor").html(r);
                $("#IdColor").selectpicker('refresh');

    });   


}

function limpiar()
{
	$("#Cantidad").val("");
    $("#Fecha").val("");
    $("#Talla").val("");
	$("#IdEntrada").hide("");
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
					url: '../../ajax/entrada.php?op=listar',
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
		url: "../../ajax/entrada.php?op=guardaryeditar",
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

function mostrar(IdEntrada)
{ 
	$.post("../../ajax/entrada.php?op=mostrar",{IdEntrada : IdEntrada}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);
		$("#IdPrenda").val(data.IdPrenda);
		$('#IdPrenda').selectpicker('refresh');
		$("#IdProveedor").val(data.IdProveedor);
        $('#IdProveedor').selectpicker('refresh');
        $("#IdColor").val(data.IdColor);
		$('#IdColor').selectpicker('refresh');
        $("#Cantidad").val(data.Cantidad);
        ("#Fecha").val(data.Fecha);
		$("#Talla").val(data.Talla);
		$("#IdEntrada").val(data.IdEntrada);
 	})
}

init(); 