=======================================PARA EL FUNCIONAMIENTO ADECUADO============================================

1. Software necesario
    
   Se recomienda tener instalado el paquete de software wamp para 
   el funcionamiento optimo (cualquier paquete con apache y msql funciona),
   junto a un software capaz de importar bases de datos mysql 
   (ej. phpmyadmin mysql workbench)

   Un Editor de texto (bloc de notas, notepad++, atom, Visual Studio Code)

2. Colocar el proyecto dentro de localhost

    Dentro de la carpeta donde esta ubicado su localhost, colocar
    la carpeta conteniendo el sitio (por defecto proyectoWebII)

2. Importar BD

   Dentro de su RDBMS cree una base de datos llamada 'proyectofinal'
   e importe el archivo 'proyectofinal.sql' que esta dentro de la 
   carpeta 'config' 

3. Verificacion del puerto mysql

   En caso de que mysql use el puerto 3306, ir a config/conexion.php
   y quitar el comentario de la linea 11 y comentar la linea 10
    
        $conectar = $this->dbh = new PDO("mysql:local=localhost;port=3306;dbname=proyectofinal","root","");

   Si se usa un puerto diferene al 3306 o 3308, cambiar el valor del parametro 
   port por el puerto que este usando

4. Ingresar al sitio 

    Ya con todo listo, inicie su paquete de software y en un navegador 
    ingrese a localhost/proyectoWebII