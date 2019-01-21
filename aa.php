<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Absensi Sekolah</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body id="page-top" class="index">

    <table class="table table-condensed table-bordered table-striped volumes">
    <thead>
      <tr>
        <th>ID</th>
        <th>Director</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>


<?php

        foreach ($natcco_members as $nattco) {

        $id = $nattco['id'];
        echo "<tr>
              <td>".++$counter."</td>
              <td>".$nattco['director']."</td>
              <td><a href='#' class='b'>".$nattco['agent_name']."</a></td>
              <td>".$nattco['address']."</td>
             </td>";

?>

<!-- Modal HTML -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Choose your actions!</h4>
            </div>
            <div class="modal-body" align="center">
                                <a href='update_sub_agent.php?id=<?php echo urlencode(htmlspecialchars($id)) ?>' class='btn btn-success'><i class='icon-pencil'></i> Edit</a> 
                                <a href='owner.php?id=".urlencode(htmlspecialchars($id))."' class='btn btn-info'><i class='icon-user'></i> Owner</a> 
                                <a href='fla.php?id=".urlencode(htmlspecialchars($id))."' class='btn btn-warning'><i class='icon-list-alt'></i> FLA</a>  
                                <a href='delete.php?id=".urlencode(htmlspecialchars($id))."' class='btn btn-danger'><i class='icon-remove'></i> Delete</a> 
           </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

          <?php "</tr>";

    }

?>

</tbody>
</table> 
    
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</body>

</html>
