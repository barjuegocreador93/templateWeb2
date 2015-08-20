<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>wow</title>
    </head>    
    <body>
        <header>
            <h1>Title Page</h1>
            <div class="scla1 h_1"></div>
            <div class="scla2 h_1"></div>
            <div class="scla3 h_1"></div>
            <div class="scla4 h_1"></div>
        </header>
       
        <nav>
            <button class="activ1 getText">Iniciar Secion</button>
            <button class="activ2 getText">Gente</button>
            <button class="activ3 getText">Post</button>
            <button class="activ4 getText">Contactanos</button>
        </nav>
        <div>
            <section class="scla1">
                <form>
                    <input type="text" name="user" >
                    <input type="password" name="userpass">                        
                </form>
            </section>
            <section class="scla2">
                <form><input type="search"></form>
                <h2>Personas: </h2>
                <div id="frstpersons">
                    
                </div>
            </section>
            <section class="scla3">
                asdasd sdjhasjldkhasjdh
            </section>
            <section class="scla4">
                sdasdas ashdasda sdasdñajsdja
            </section>            
            
        </div>
        <?php
        
        echo "<p>hola</p>";        
        
        ?>
    </body>
    <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/FST-APP.js" type="text/javascript"></script>
    <script>
           $(document).ready(function()
           {
               var a= new doc("activ","scla");
               a.main();
               
           });
    </script>
</html>
