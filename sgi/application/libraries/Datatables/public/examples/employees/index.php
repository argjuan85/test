<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>DataTables example</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css"/>
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $('#example').dataTable( {
                "serverSide": true,
                "ajax" : "ajax.php"
            } );
        } );
    </script>
</head>
<body id="dt_example">
<div id="container">
    <h1>Datatables - 300k data example.</h1>
    <table border="0" cellpadding="4" cellspacing="0" class="display" id="example">
        <thead>
        <tr>
            <th width="40%">Name</th>
            <th width="40%">Last name</th>
            <th width="20%">Birth Date</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>loading...</td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>