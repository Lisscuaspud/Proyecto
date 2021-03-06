# PROYECTO 

# DATOS:

**NOMBRE:** Joseline Cuaspud 

**CARRERA:** Telecomunicaciones 

**NRC:** 5416-5407

**ASIGNATURA:** Fundamentos de circuitos eléctricos 

**TUTOR:** Darwin Omar Alulema Flores

# TEMA:

**Ejemplo para conexión de una APP Android desarrollada en APP inventor con un servicio web.**

# OBJETIVO GENERAL:

- Realizar la conexión de una APP Android desarrollada en App inventor con un servidor web.

# OBJETIVOS  ESPECÍFICOS:

-  Detallar el proceso de para generar el servicio web con la herramienta de desarrollo XAMPP.

- Emplear APP inventor para desarrollar la aplicación en base al servicio web. 

# DESCRIPCIÓN:

**¿De qué trata el ejemplo?**

Generación de una aplicación que tiene un servicio web de una calculadora que guarda las notas que ingresa un usuario y mediante lógica de programación en el editor de texto ATOM crea un algoritmo para obtener el promedio total de las notas y comprueba si el usuario aprueba o no. 

**Desarrollo:**

1. Vamos a generar un servicio web a travez de xampp, esta herramienta es un servidor independiente de plataforma de código libre nos permite instalar de forma sencilla Apache en el ordenador,incluye además servidores de bases de datos como MySQL ySQLite con sus respectivos gestores phpMyAdmin y phpSQLiteAdmin. Incorpora también el intérprete de PHP, el intérprete de Perl, servidores de FTP como ProFTPD ó FileZilla FTP Serve, etc.
Para poder generar el servidor necesitamos una puerta de enlace, en nuestro caso la modificamos a 8080.

![](https://user-images.githubusercontent.com/84998005/128438533-0536b0ee-8364-49e1-a439-a22739fa69db.png)

2. Nos dirigimos a realizar los servicios en el disco local c, en la carpeta XAMPP, en htdocs, y se crean las carpetas dónde van a contener los documentos php o html, los cuales se visualizarán a través del servidor web. 

![](https://user-images.githubusercontent.com/84998005/128445261-b4690ef9-0df6-4f70-bfdf-2702a529a2cb.png)

3.Vamos a utilizar el editor de texto ATOM, con un tipo de lenguaje de programación con el fin de crear los archivos (vistaCalc.php, servicioCalc.php), que se guardaran en las carpetas creadas en el paso anterior. 

![](https://user-images.githubusercontent.com/84998005/128447811-8edf29a0-5ada-4438-915a-a6487a0d21ae.png)

![](https://user-images.githubusercontent.com/84998005/128447817-c402fb23-d7a5-4fd7-b553-9f76c913598c.png)

4. Para acceder al servicio web mediante la url como método de comprobación debemos escribir en el navegador http://localhost:8080/calcws/servicioCalc. Donde 8080 es la puerta de enlace / a donde quiero acceder.
Se despliegan los archivos guardados en la carpeta calcws.

![](https://user-images.githubusercontent.com/84998005/128449603-83c0c815-b306-41e2-88f5-3695abf67e4b.png)

Como el usuario debe ingresar los valores para que el servicio funcione implemtenamos a la url Nota1=10, Nota2=13, Nota3=15 de la siguiente manera:
http://localhost:8080/calcws/servicioCalc.php?btn1=true&txtNota1=10&txtNota2=13&txtNota3=15. Verificamos que esta funcionando .

![](https://user-images.githubusercontent.com/84998005/128450995-9cd40ce3-6fea-4e8e-88ab-a2beae86f00e.png)

5. Ahora, esta interfaz vamos a trasladar al App inventor, que es un entorno de desarrollo visual de aplicaciones para dispositivos Android, donde se realizara el diseño de la calculadora, colocándole una imagen, textbox para ingresar letras, button (botón) y lo más importante el webviewer ya que este se conectara con nuestro servicio web.

![](https://user-images.githubusercontent.com/84998005/128452386-8dbb1ac1-02bc-47c3-ad23-7dd5d2dabaae.png)

6. Procedemos a realizar la programación grafica para nuestra app con las herramientas necesarias teniendo en cuenta se utilizará la url global de nuestro servicio para acceder a los valores que ingrese el usuario. 

![](https://user-images.githubusercontent.com/84998005/128453727-e81b020b-d1bb-4af8-8790-b90cab84630e.png)

7.Puede funcionar de distintas maneras, una de ellas es a través de usb conectado al celular previamente descargada la app y conectado a la misma red, la que vamos a utilizar en ese caso es la del emulador que descargamos previamente (aiStarted). 

![](https://user-images.githubusercontent.com/84998005/128454924-6408e056-a7dc-4591-8223-7ff481f6095f.png)

Finalmente ingresamos los valores y observamos que la aplicación funciona de manera correcta. 

![](https://user-images.githubusercontent.com/84998005/128454893-991f1f2a-c35f-4626-a8b8-e34173b3fe69.png)

![](https://user-images.githubusercontent.com/84998005/128454926-9996f9e4-66f6-42f9-8241-e7e52293d3f9.png)


# CONCLUSION: 

- Mediante el uso del paquete de software libre XAMPP se logró generar un servicio web empleando el servidor HTTP Apache.

- Se pudo acceder de manera exitosa a este servicio web mediante la conexión con la interfaz de usuario generada en el entorno de desarrollo App Inventor y la herramientas que este nos brinda.

- El servicio web que realizamos se almaceno de manera correcta y lo comprobamos en los anteriores pasos. 

# ANEXOS: 

DIRECCION DEL SERVICIO WEB 

http://localhost:8080/calcws/servicioCalc.php?btn1=true&txtNota1=10&txtNota2=10&txtNota3=10

DISEÑO APP

http://ai2.appinventor.mit.edu/#5226472599322624




