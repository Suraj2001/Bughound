<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bughound</title>
        <link rel="stylesheet" href="../assets/styles/nav_menu_style.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    </head>
    <body>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Bug Report</a>
                <div class="dropdown-content">
                    <a href="create_report.php">Create</a>
                    <a href="search_reports.php?source=update">Update</a>
                    <a href="search_reports.php?source=search">Search</a>
                </div>
            </li>
            <?php
				// See if user that logged in is of manager level (user level of 5)
				session_start();
				$user_level = $_SESSION['user_level'];
				
				if($user_level == 5) {
					echo '<li class="dropdown">
					<a href="javascript:void(0)" class="dropbtn">Manage Database</a>
					<div class="dropdown-content">
						<a href="manage_programs.php">Programs</a>
						<a href="manage_functional_areas.php">Functional Areas</a>
						<a href="manage_employees.php">Employees</a>
						<a href="manage_export.php">Exports</a>
					</div>
					</li>';
				}
			?>
            <li style="float:right"><a class="active" href="search.php">Search</a></li>
        </ul>

        <h2><center><font color="gray">Bughound Bug Tracking Software</font></center></h2>

        <h1><center><font color="red">[TODO]</font></center></h1>
    </body>
</html>
