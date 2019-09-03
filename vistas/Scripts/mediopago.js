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
          $("#NumeroConvenio").val("");
          $("#IdMedioPago").val("");
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
                url:'../ajax/mediopago.php?op=listar',
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
            url: "../ajax/mediopago.php?op=guardaryeditar",
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
    
    function mostrar(IdMedioPago){
        $.post("../ajax/mediopago.php?op=mostrar",{IdMedioPago :  IdMedioPago}, function(data, status)
        {
            data = JSON.parse(data);
            mostrarform(true);
            $("#Nombre").val(data.Nombre);
            $("#NumeroConvenio").val(data.NumeroConvenio);
            $("#IdMedioPago").val(data.IdMedioPago);
        })
    }
    
    
    //Funsiones para desactivar riesgos
    function desactivar(IdMedioPago){
        //El párametro result recibe tru o false dependiendo del click del usuario al mensaje de confirmacion 
        bootbox.confirm("?Esta seguro de desactivar este medio de pago",function(result){
            //si el resul es verdadero, desactivara la categoria de lo contrario no
            if (result) {
                //"e" es el resultado que se recibe de URL: .../ajax/categoria.php?op=desactivar
                $.post("../ajax/mediopago.php?op=desactivar",{IdMedioPago : IdMedioPago}, function(e){
                    bootbox.alert(e);
                    //Recarga la tabla datatable
                    tabla.ajax.reload();
                });
            }
        })
    }
    //funcion para activar los riesgos 
    function activar(IdMedioPago)
    {
        bootbox.confirm("¿Esta seguro que quiere activar este medio de pago?", function(result){
            if (result) {
                $.post("../ajax/mediopago.php?op=activar",{IdMedioPago : IdMedioPago}, function(e){
                    bootbox.alert(e);
                    tabla.ajax.reload();
                });
            }
        })
    
    }
    init();