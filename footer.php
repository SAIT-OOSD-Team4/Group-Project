<!DOCTYPE html>
<html>

    <head></head>
    <body>
        Copyright &copy; 2014<br>
                <script>
                    var x; 
                    for(x=1; x<=50; x++) document.write('-');/*display underscore footer*/
                    document.write("<br>");
                    document.write(days[today.getDay()]+", ");/*display date on footer*/
                    document.write(months[today.getMonth()].toUpperCase()+" "+today.getDate()+", "+today.getFullYear());
                </script>  
    </body>
</html>