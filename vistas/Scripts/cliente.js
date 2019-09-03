var tabla;

function init(){
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
    $("#Apellido").val("");
    $("#Telefono").val("");
    $("#Email").val("");
    $("#Documento").val("");
    $("#Direccion").val("");
    $("#Clave").val("");
    $("#IdCliente").val("");
}

function mostrarform(bandera)
{
    limpiar();
    if (bandera)
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
    mostrarform(false);
}

function listar()
{
    tabla=$('#tbllistado').dataTable(
    {
        "aProccesing":true,
        "aServerSide":true,
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdf'
        ],
    "ajax":
    {
        url: '../ajax/cliente.php?op=listar',
        type: "get",
        dataType: "json",
        error: function(e){
            console.log(e.responseText);
        }
    },
    "bDestroy":true,
    "iDisplayLength":5,
    "order": [[0, "desc"]]
    }).DataTable();
}

function guardaryeditar(e)
{
    e.preventDefault();
    $("#btnGuardar").prop("disabled",true);
    var formData = new FormData($("#formulario")[0]);

    $.ajax({
        url:"../ajax/cliente.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType:false,
        processData: false,

        success: function(datos)
        {
            alert(datos);
            mostrarform(false);
            tabla.ajax.reload();
        }
    });

    limpiar();
}

function mostrar(IdCliente)
{
    $.post("../ajax/cliente.php?op=mostrar",{IdCliente : IdCliente}, function(data, status)
    {
        data = JSON.parse(data);

        mostrarform(true);

        $("#Nombre").val(data.Nombre);
        $("#Apellido").val(data.Apellido);
        $("#Telefono").val(data.Telefono);
        $("#Email").val(data.Email);
        $("#Documento").val(data.Documento);
        $("#Direccion").val(data.Direccion);
        $("#Clave").val(data.Clave);
        $("#IdCliente").val(data.IdCliente);
    })
}
init();