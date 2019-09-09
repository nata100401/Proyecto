	//Adrian
    var tabla;
    function init() {
        mostrarform(false);
        listar();
        $("#formulario").on("submit",function(e)
        {
            guardaryeditar(e);
        })
        
    }
      function limpiar() {
          $("#Nombre").val("");
          $("#Apellido").val("");
          $("#Documento").val("");
          $("#Telefono").val("");
          $("#Rol").val("");
          $("#Clave").val("");
          $("#IdEmpleado").val("");
        }
        
     function mostrarform(bandera) {
            limpiar();
            if (bandera) {
                $("#listadoregistros").hide(); 
                $("#formularioregistros").show(); 
                $("#btnGuardar").prop("disabled",false);
                $("#btnagregar").hide(); 
            }
    
            else{
                $("#listadoregistros").show(); 
                $("#formularioregistros").hide();
                $("#btnagregar").show();  
            }
        }
    
    function cancelaform()
     {
        mostrarform(false);
    }
    
    function listar()
     {
        tabla=$("#tbllistado").dataTable(
            {
            "aProcessing":true,
            "aServerSide":true,
            dom: 'Bfrtip',
            buttons:[
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdf'
            ],
            "ajax":{
                url:'../../ajax/empleado.php?op=listar',
                type : "get",
                dateType : "json",
                error: function(e){
                    console.log(e.responseText);
                }
            },
            "bDestroy": true,
            "iDisplayLength": 5,
            "order": [[ 0, "desc"]]
        }
        ).DataTable();
    }
    
    function guardaryeditar(e){
        e.preventDefault(); //No se activará la acción predeterminada del evento
        $("#btnGuardar").prop("disabled",true);
        var formData = new FormData($("#formulario")[0]);
    
        $.ajax({
            url: "../../ajax/empleado.php?op=guardaryeditar",
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
    
    function mostrar(IdEmpleado){
        $.post("../../ajax/empleado.php?op=mostrar",{IdEmpleado :  IdEmpleado}, function(data, status)
        {
            data = JSON.parse(data);
            mostrarform(true);
            $("#Nombre").val(data.Nombre);
            $("#Apellido").val(data.Apellido);
            $("#Documento").val(data.Documento);
            $("#Telefono").val(data.Telefono);
            $("#Rol").val(data.Rol);
            $("#Clave").val(data.Clave);
            $("#IdEmpleado").val(data.IdEmpleado);
        })
    }
    
    
    //Funsiones para desactivar riesgos
    function desactivar(IdEmpleado){
        //El párametro result recibe tru o false dependiendo del click del usuario al mensaje de confirmacion 
        bootbox.confirm("?Esta seguro de desactivar a este empleado",function(result){
            //si el resul es verdadero, desactivara la categoria de lo contrario no
            if (result) {
                //"e" es el resultado que se recibe de URL: .../ajax/categoria.php?op=desactivar
                $.post("../../ajax/empleado.php?op=desactivar",{IdEmpleado : IdEmpleado}, function(e){
                    bootbox.alert(e);
                    //Recarga la tabla datatable
                    tabla.ajax.reload();
                });
            }
        })
    }
    //funcion para activar los riesgos 
    function activar(IdEmpleado)
    {
        bootbox.confirm("¿Esta seguro que quiere activar a este empleado?", function(result){
            if (result) {
                $.post("../../ajax/empleado.php?op=activar",{IdEmpleado : IdEmpleado}, function(e){
                    bootbox.alert(e);
                    tabla.ajax.reload();
                });
            }
        })
    
    }
    init();