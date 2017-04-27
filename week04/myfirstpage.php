<!DOCTYPE html>
<html>
<head><title>My First</title></head>
<body>
    <h1> Passing Info</h1>
    
    <a href="pagetwo.php?id=2&fname=jervo"> Page 2 link</a>
    
    <h2>Complete Class List</h2>
    <ol>
        <?php
            $names = array("Ben","Axel", "Lou", "Brendan", "Kaitlyn", "Kristen", "Seamus", "Khan", "Su", "Anisa", "Deborah");
        
            for ($ndx=0; $ndx < count($names); $ndx++) {
                echo "<li>" . $names{$ndx} . "</li>";
            }
        ?>
    </ol>
    
    <h2>Even Number Only List</h2>
    <ul>
        <?php
        for ($ndx=0; $ndx < count($names); $ndx++) {
                if ($ndx % 2 != 0 ) {
                    echo "<li>" . $names{$ndx} . "</li>";
                }
            }
        ?>
    </ul>
    
    <h2>Alphabetical Class List</h2>
    <ul>
        <?php
            $sortedNames = $names;
            sort($sortedNames);
            for ($ndx = 0; $ndx < count($sortedNames); $ndx++) {
                echo"<li>" . $sortedNames{$ndx} . "</li>";
            }
        ?>
    </ul>
    
</body>

</html>