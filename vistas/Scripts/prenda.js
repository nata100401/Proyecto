var tabla;

function init()
{
	mostrarform(false);
	listar();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	})

	$.post("../ajax/prenda.php?op=selectCategoria", function(r){
	            $("#IdCategoria").html(r);
	            $("#IdCategoria").selectpicker('refresh');

	});

    $.post("../ajax/prenda.php?op=selectProveedor", function(r){
				$("#IdProveedor").html(r);
				$("#IdProveedor").selectpicker('refresh');

});   


}

function limpiar()
{
	$("#Genero").val("");
	$("#Descripcion").val("");
	$("#TiempoGarantiaMes").val("");
	$("#ReferenciaPrenda").attr("src","");
	$("#Precio").val("");
	$("#Descuento").val();
	$("#IdPrenda").hide("");
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
					url: '../ajax/prenda.php?op=listar',
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
		url: "../ajax/prenda.php?op=guardaryeditar",
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

function mostrar(IdPrenda)
{ 
	$.post("../ajax/prenda.php?op=mostrar",{IdPrenda : IdPrenda}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);
		$("#IdCategoria").val(data.IdCategoria);
		$('#IdCategoria').selectpicker('refresh');
		$("#IdProveedor").val(data.IdProveedor);
		$('#IdProveedor').selectpicker('refresh');
		$("#Genero").val(data.Genero);
		$("#Descripcion").val(data.Descripcion);
		$("#TiempoGarantiaMes").val(data.TiempoGarantiaMes);
		$("#ReferenciaPrenda").val(data.ReferenciaPrenda);
		$("#Precio").val(data.Precio);
		$("#Desc").val(data.Descuento);
		$("#IdPrenda").val(data.IdPrenda);
 	})
}

function desactivar(IdPrenda)
{
	bootbox.confirm("¿Está Seguro de desactivar la prenda?", function(result){
		if(result)
        {
        	$.post("../ajax/prenda.php?op=desactivar", {IdPrenda : IdPrenda}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}

function activar(IdPrenda)
{
	bootbox.confirm("¿Está Seguro de activar la prenda?", function(result){
		if(result)
        {
        	$.post("../ajax/prenda.php?op=activar", {IdPrenda : IdPrenda}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}
init(); 