<?php>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h2>Notes</h2>
        <ul>
            @foreach ($notes as $note)             
            <li>
                {{ $note->note }}
            </li>
            @endforeach
        </ul>
        <div>            
            <ul>
                @foreach ($notes as $note) 
                <li>
                    {{ $note->note }}
                </li>
                @endforeach                
            </ul>                
        </div>
        
    </body>
</html>