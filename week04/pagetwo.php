<!DOCTYPE html>
<html>
<head>
<title>Page Two</title>
</head>
<body>
    <pre>
      <?php
            print_r($_GET);    
      ?>
    </pre>
    
    <?php
        $id = $_GET['id'];
        $fname = $_GET['fname'];
    
        echo $id . "......" . $fname;
    ?>
    
</body>
</html>