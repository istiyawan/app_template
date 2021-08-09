<!doctype html>
<html lang="en">
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <link href="../css/style.css" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
        <script src="./node_modules/@fortawesome/fontawesome-free/js/brands.js"></script>
        <script src="./node_modules/@fortawesome/fontawesome-free/js/solid.js"></script>
        <script src="./node_modules/@fortawesome/fontawesome-free/js/fontawesome.js"></script>
        <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "searching":false,
                "dom":'rtip',
                "info":false

            });
        } );
        </script>
        <title> </title>
    </head>
    <body>
        <?php include("./header.php");?>
        <?php include("./sidemenu.php");?>
        <?php include("./listdata.php");?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> 
    </body>
</html>
