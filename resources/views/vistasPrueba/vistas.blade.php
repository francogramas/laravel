<!DOCTYPE html>
<html>
    <head>
        <title>Vista</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
         
        </style>
    </head>
    <body>
        <form method="post">
            <div class="container">
            <div class="content">            
                <h2>Vistas, mi primer vista</h2>

                {!! csrf_field() !!}
                
                <textarea id="TxtArea"   ></textarea>
                <button type="submit" > Crear Nota</button>
            </div>
        </div>
    
        </form>
    </body>
</html>
