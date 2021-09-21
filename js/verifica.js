function validacionTexto()
{
    const user = document.getElementById('NombreU').value;
    const pass = document.getElementById('Pass').value;
    var err = "";

    if( (/^[a-zA-Z]+$/i.test(user)) == false )
    {
        err ='Evite espacios, numeros y caracteres especiales en su nombre de usuario. ';
        
    }
    if ( (/^[a-z0-9A-Z]+$/i.test(pass)) == false)
    {
        err += 'Evite espacios y caracteres extraños en su contraseña'; 
    }

    if(err=="")
    {
        return true;
    }
    else
    {
        alert(err);
        return false;
    }
    
}

function validar()
{
    const user = document.getElementById('NombreU').value;
    const pass = document.getElementById('Pass').value;
    const corr = document.getElementById('Correo').value;
    var err = "";

    if( (/^[a-zA-Z]+$/i.test(user)) == false )
    {
        err ='Evite espacios, numeros y caracteres especiales en su nombre de usuario. ';
        
    }
    if ( (/^[a-z0-9A-Z]+$/i.test(pass)) == false)
    {
        err += 'Evite espacios y caracteres extraños en su contraseña'; 
    }
    


    if(err=="")
    {
        return true;
    }
    else
    {
        alert(err);
        return false;
    }
}

