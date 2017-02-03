<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link href="../less/styles.css" rel="stylesheet" type="text/css">
<style></style>
</head>

<body id="top" screen_capture_injected="true">
<div class="wrapper">
    <?php include ('includes/brand-header.php') ?>
    <header>
        <div class="container" >
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="">IU Help Desk Prototypes</h1>
                </div>
            </div>
        </div>
    </header>
    <div class="main-content container" role="main">
        <p> Interactive - search on 'thrclark' (user) or 'UCS-ALL' (group) to see results set:</p>
        <ul>
            <li> <a href="helpdesk1.php" target="_blank">Layout - side by side</a></li>
             <li> <a href="helpdesk2.php" target="_blank">Layout - stacked</a></li>
          
        </ul>
    </div>
</div>
</body>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $("#by_user").click(function() {
            $("#label_user").show();
            $("#label_group,#sr_userlabel,#sr_user, #sr_group,#sr_grouplabel").hide();
			$("#query").val("");
        });
        $("#by_group").click(function() {
            $("#label_user, #sr_userlabel, #sr_user, #sr_group,#sr_grouplabel").hide();
            $("#label_group").show();
			$("#query").val("");
        });

        $("#query").focusout(function() {
			
            if (this.value == "thrclark") {
                $("#sr_user,#sr_userlabel").css("display", "inline-block");
            } else {
                $("#sr_user,#sr_userlabel").css("display", "none");
            }
			 
        });
		
		$("#query").focusout(function() {
			
            if (this.value == "UCS-ALL") {
                $("#sr_group,#sr_grouplabel").css("display", "inline-block");
            } else {
                $("#sr_group,#sr_grouplabel").css("display", "none");
            }
        });
    });
</script>
</html>