<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

table{
    width: 90%;
}
table , td, th {
	border: 1px solid #595959;
	border-collapse: collapse;
}

table tbody tr td p, #encabezado{
    text-align: center;
}

#encabezado {
    background-color: #a19f9f;
    color:#000;
}

.clave {
    text-align: right;
}

td, th {
	padding: 3px;
	width: 30px;
	height: 25px;
}
th {
	background: #f0e6cc;
}
.even {
	background: #fbf8f0;
}
.odd {
	background: #fefcf9;
}
    </style>
</head>
<body>
    <script>
        function printPage() {
            window.print();
        }
    </script>
    <table>
        <tbody>
            <tr>
                <td colspan="2" rowspan="2"><img src="../img/atc.png" width="100px" id="atc" aling="center"></td>
                <td colspan="4" rowspan="2"><p aling="center">Lista de Asistencia</p></td>
                <td class="clave">F.RH.025</td>
            </tr>
            <tr>
                <td class="clave">6-07/21</td>
            </tr>
            <tr>
                <td colspan="2">Curso:</td>
                <td colspan="5"></td>
            </tr>
            <tr>
                <td colspan="2">Tema:</td>
                <td colspan="3"></td>
                <td>Sala:</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">Instructor</td>
                <td colspan="3"></td>
                <td>Horario:</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">Empresa:</td>
                <td colspan="3"></td>
                <td>Ciudad:</td>
                <td></td>
            </tr>
            <tr>
                <td id="encabezado">#</td>
                <td id="encabezado">NO. DE EMPLEADO</td>
                <td id="encabezado">NOMBRE COMPLETO</td>
                <td id="encabezado">FIRMA</td>
                <td id="encabezado">PUESTO</td>
                <td id="encabezado">CALIFICACI??N</td>
                <td id="encabezado">FECHA</td>
            </tr>

    <button onclick="printPage()">Imprimir</button>

</body>
</html>
