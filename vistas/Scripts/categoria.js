var tabla;

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
    $("#IdCategoria").val("");
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
        url: '../../ajax/categoria.php?op=listar',
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
        url:"../ajax/categoria.php?op=guardaryeditar",
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

function mostrar(IdCategoria)
{
    $.post("../ajax/categoria.php?op=mostrar",{IdCategoria : IdCategoria}, function(data, status)
    {
        data = JSON.parse(data);

        mostrarform(true);

        $("#Nombre").val(data.Nombre);
        $("#IdCategoria").val(data.IdCategoria);
    })
}
init();