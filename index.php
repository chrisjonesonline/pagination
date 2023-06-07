<html>
<head>
<title>Pagination</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<h1>Pagination</h1>
<hr /><br />

<?php  

include_once ('server/config.php');

    //define total number of results you want per page  
    $results_per_page = 4;  

    //find the total number of results stored in the database  
    $query = "select *from users";  
    $result = mysqli_query($conn, $query);  
    $number_of_result = mysqli_num_rows($result);  

    //determine the total number of pages available  
    $number_of_page = ceil ($number_of_result / $results_per_page);  

    //determine which page number visitor is currently on  
    if (!isset ($_GET['page']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['page'];  
    }  

    //determine the sql LIMIT starting number for the results on the displaying page  
    $page_first_result = ($page-1) * $results_per_page;  

    //retrieve the selected results from database   
    $query = "SELECT *FROM users LIMIT " . $page_first_result . ',' . $results_per_page;  
    $result = mysqli_query($conn, $query);  

    //display the retrieved result on the webpage  
    while ($row = mysqli_fetch_array($result)) {  
		
		echo $row['id'] . ' ' . $row['fullName'] . '<br />';
		
    }
	
	echo '<br /><hr />';

    //display the link of the pages in URL  
    for($page = 1; $page<= $number_of_page; $page++) {  
        echo '| <a href = "index.php?page=' . $page . '">' . 'Page ' . $page . ' </a> ';
    } echo ' |';

?>  
</body>
</html>