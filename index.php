<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--Import Google Icon Font-->
        <link href="css/icon.css" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css">
        
        <!--link rel="stylesheet" type="text/css" href="css/datTaables.bootstrap4.css">
        <link rel="stylesheet" type="text/css" href="css/datatables.css">
        <link rel="stylesheet" type="text/css" href="css/geral.css"-->

        <title>Controle de Estoque</title>
    </head>
    <body>

        
        <!--table id="table-padrao" class="tabela table-striped table-bordered">
            <thead>
                <tr>
                    <th class="label">Sigla</th>
                    <th class="label">Descrição</th>
                    <th class="text-center label" style="width: 60px;">Ação</th>
                </tr>
            </thead>
            <tbody id="result-code"></tbody>
        </table-->


        <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.mask.min"></script>
        <!--script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script-->
        <!--script type="text/javascript" src="js/jquery.dataTables.min.js"></script-->
        <!--script type="text/javascript" src="js/datatables.min.js"></script>
        <script type="text/javascript" src="js/datatable.script.js"></script-->

        <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

        <script type="text/javascript" src="js/loadButton.js"></script>
        <script type="text/javascript" src="js/geral.js"></script>
        <script>

            Object.assign(setup_datatable, {
                "ordering": false,
				"aLengthMenu": [10, 25, 50, 100]
            });
			
            var table = $("table#table-padrao").DataTable(setup_datatable);
            
        </script>
    </body>
</html>