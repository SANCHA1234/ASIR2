
Introducción

No ibstante, esta no fue la primera idea y tampoco la única, también tuvimos en mente elaborar una web que consistía en una página de búsqueda de empleo donde la gente describe sus habilidades y también permite registrarse al personal de rrhh, para reclutar personal.

1. Configuracion firewall

    - Permitir trafrico dns de la dmz a lan

    ![alt text](image.png)

    - Permitir trafico web de la dmz a lan

    ![alt text](image-1.png)

2. Configuracion servidor correo

    - Recepción de correo

![alt text](imagen-7.png)

    - Creación de usuarios

![alt text](imagen-10.png)

    - Cambios en el archivo main.cf de postfix

![alt text](imagen-8.png)

    - Usuario virtual

   ![alt text](imagen-9.png)

    - Archivo de búsqueda de usuarios

![alt text](imagen-11.png)

    - Directiva de autenticacion

![alt text](imagen-12.png)
3. Configuracion servidor mensajeria instantaneo
 
Para crear un servicio de chat entre comprador y vendedor, se ha instalado un debian 12 que actúa como servidor y se instaló el servicio prosody. 

Para ello, en el archivo de configuración,se procede a realizar los siguientes ajustes:

    - Establecer el dominio del chat

   ![alt text](imagen-6.png)

    - Permitir el registro de usuarios

   ![alt text](imagen-2.png)

    Estos son los usuarios creados que se han creado

   ![alt text](imagen-5.png)

    - Directorio de los certificados

   ![alt text](imagen-3.png)

    - Módulos

   ![alt text](imagen-4.png)

    - Configuración final

   ![alt text](imagen.png)
