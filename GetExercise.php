<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>HTTP GET</title>
    </head>
    <body>
        <h1>Testing an HTTP Get Request Using PHP's SuperGlobals</h1>
           
        <?php
        
        if (!empty($_GET)) {
            echo "<h2>Welcome $_GET[name]</h2>"; 
            echo "<h2>Your hobby is: $_GET[hobby]</h2>";
            
            echo "<h2> Your favourite food is $_GET[food]</h2>";
            echo "<h2> You eat this alongside your pet $_GET[pet]</h2>";
            
            $par = $_GET;
            ksort ($par);   //is this right? Sorted according to keys
            var_dump ($par);
                    
            
            echo "breakpoint - task above. default loop below";
            foreach($_GET as $key => $value){
            echo "<h4>$key has a value of $value</h4>";
            }
        }
        else{
        echo "<h2>We do not have your name or hobby information</h2>";
        }
        ?>
        <p>There won't be any output if you forget to enter some query parameters such as:</p>
        <h4>?name=Lisa&hobby=Playing the Saxophone</h4>
        <p>to the end of the url.</p>
       
   

    <p1> <br>Task1: I appended the following query string to the URL :
   http://localhost/Exercise15/GetExercise.php?name=Lisa&hobby=Playing the Saxophone
    append 2 query parameters to end of URL. Parse as a URL and printing in php/returning the value </br></p1>
Q - what is going on!!
    <p2> <br> Task2: Amend URL and change values of parameters, keep name/hobby parameter names
        http://localhost/Exercise15/GetExercise.php?name=Bush&hobby=Playing%20the%20Romance
       http://localhost/Exercise15/GetExercise.php?name=Lisa&hobby=Playing%20the%20Saxophone&passion=drumnbass&health-route=smoking&personal-symbol=dab </br></p2>  
<p3><br>   replace loop displaying parameters (foreach($_GET as $key => $value){
            echo "<h4>$key has a value of $value</h4>";
            replace with hard coded access to above named parameters</br></p3>
    </body>
</html>