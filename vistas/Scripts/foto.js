var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	})

	//Cargar los items al select categoria
	//r: son las opciones que devuelve el archivo ajax/articulo.php con el valor selectCategoria
    $.post("../../ajax/foto.php?op=selectExistencia", function(r){
        $("#IdExistencia").html(r);
        $("#IdExistencia").selectpicker('refresh');

});

	$("#imagenmuestra").hide();
}

//Función limpiar
function limpiar()
{
	
	$("#imagenmuestra").attr("src","");
	$("#imagenactual").val("");
	$("#IdFoto").hide("");
}

//Función mostrar formulario
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

//Función cancelarform
function cancelarform()
{
	limpiar();
	mostrarform(false);
}

//Función Listar
function listar()
{
	tabla=$('#tbllistado').dataTable(
	{
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'Bfrtip',//Definimos los elementos del control de tabla
	    buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
		        ],
		"ajax":
				{
					url: '../../ajax/foto.php?op=listar',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"iDisplayLength": 5,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}
//Función para guardar o editar

function guardaryeditar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../../ajax/foto.php?op=guardaryeditar",
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


function mostrar(IdFoto)
{
	$.post("../../ajax/foto.php?op=mostrar",{IdFoto : IdFoto}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);
		$("#IdExistencia").val(data.IdExistencia);
        $('#IdExistencia').selectpicker('refresh');
		$("#imagenmuestra").show();
		$("#imagenmuestra").attr("src","../../files/colores/"+data.imagen);
		$("#imagenactual").val(data.imagen);
		 $("#IdFoto").val(data.IdFoto);
 	})
}

init();