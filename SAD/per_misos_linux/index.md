# Ejercicio 1 Gestión de permisos en un entorno de trabajo multiusuario

## Paso 1 Creación Crear un entorno simulado de usuarios y grupos

![alt text](image-2.png)

![](image-3.png)

![alt text](image-4.png)

Creación de grupo

![alt text](image-5.png)

Adhesión al grupo de los usuarios

![alt text](image-6.png)

## Paso 2: Configuración de permisos básicos
Configura los permisos para que solo los usuarios del grupo devEria2 puedan escribir en el directorio:

![alt text](image-7.png)

Verifica mostrando los permisos del directorio:

![alt text](image-8.png)

Propietario (sancha): El usuario sancha es el dueño del directorio y tiene permisos de lectura, escritura y ejecución (rwx).

Grupo (devEria2): El grupo devEria2 es el grupo propietario. Los usuarios que pertenecen a este grupo tienen permisos de lectura, escritura y ejecución (rwx). 

Otros: Cualquier otro usuario que no sea sancha ni pertenezca al grupo devEria2 solo tiene permiso de lectura (r--). No pueden escribir ni acceder al directorio.

## Paso 3: Configuración de permisos avanzados
monon1 debe tener permisos completos (lectura, escritura, ejecución) en todo el proyecto. Cambia el propietario del directorio a monon1:

![alt text](image-9.png)

Los otros dos usuarios del grupo solo deben poder leer y ejecutar archivos, pero no modificarlos. Cambia los permisos de modo que el grupo devEria2 solo tenga permisos de lectura y ejecución:

![](image-10.png)

![](image-11.png)

![](image-12.png)
Preguntas:
¿Qué sucede si un usuario fuera del grupo devEria2 intenta acceder al directorio?

Va a poder acceder y leer el contenido pero no va a poder modificarlo.

¿Qué sucede si tronko2 intenta modificar un archivo dentro del directorio?

Que al quitarle ese permiso, puede modificarlo, pero no va a poder guardar esos cambios.


# Ejercicio 2 Control de Acceso con el Bit SGID en Directorios
Escenario:

El equipo de desarrollo necesita colaborar en un subdirectorio dentro de di_recto. Queremos asegurarnos de que cualquier archivo creado en ese subdirectorio tenga automáticamente el mismo grupo propietario (devEria2), para facilitar la colaboración.

Paso 1: Crear un subdirectorio para colaboración

Crea un subdirectorio llamado di_afano dentro de di_recto:

![alt text](image-13.png)

Cambia el grupo propietario del subdirectorio a devEria2:

![alt text](image-14.png)

Paso 2: Aplicar el bit SGID

Aplica el bit SGID al subdirectorio di_afano, para que todos los archivos creados en él hereden el grupo propietario:

![alt text](image-15.png)

Verifica y muestra los permisos del subdirectorio:

Paso 3: Crear archivos de prueba

Cambia a tronko2 y crea un archivo llamado archivo_tronko2.txt dentro del subdirectorio di_afano:

Verifica y muestra los permisos y el grupo propietario del archivo:

Preguntas:

¿Cuál es el grupo propietario del archivo creado por tronko2?

¿Qué ventaja aporta el bit SGID en un entorno de colaboración?

Ejercicio 3: Gestión de Archivos Temporales con Sticky Bit
Escenario:

Se ha creado un directorio temporal compartido entre todos los usuarios del sistema. Necesitas asegurarte de que los usuarios puedan crear y modificar sus propios archivos, pero no puedan eliminar o modificar los archivos de otros usuarios.

Paso 1: Crear un directorio temporal

Crea un directorio llamado tmp_ran0 en /tmp:

Cambia los permisos para que todos los usuarios puedan leer, escribir y ejecutar en el directorio:

Paso 2: Aplicar el sticky bit

Aplica el sticky bit al directorio para evitar que los usuarios eliminen archivos de otros:

Verifica los permisos del directorio:

Paso 3: Crear archivos de prueba

Cambia a monon1 y crea un archivo en el directorio temporal:

Cambia a birmingan3 y verifica si puede eliminar el archivo de monon1:

Preguntas:

¿Pudo birmingan3 eliminar el archivo de monon1? ¿Por qué?

¿Cómo ayuda el sticky bit a mejorar la seguridad en directorios compartidos?

Ejercicio 4: Configuración de umask y Creación de Archivos Nuevos
Escenario:

Quieres configurar el entorno de trabajo para que todos los archivos nuevos creados por los usuarios tengan permisos predeterminados restrictivos (solo lectura y escritura para el propietario, sin acceso para el grupo y otros).

Paso 1: Configurar umask

Verifica el valor actual de umask:

Cambia el valor de umask a 077 para que los archivos creados sean accesibles solo por el propietario:

Paso 2: Crear archivos de prueba

Crea un archivo nuevo llamado gomaesp_umask y verifica sus permisos:

Paso 3: Restablecer umask

Si deseas restaurar el valor predeterminado de umask, puedes hacerlo:

Preguntas:

¿Cómo afectó el valor de umask a los permisos de los nuevos archivos?

¿Cómo podrías usar umask para mejorar la seguridad de los archivos en un sistema multiusuario?

Ejercicio 5: Implementación de ACLs
Queremos que birmingan3 pueda leer un archivo específico dentro de un nuevo directorio que se tiene que crear llamado archivos_criticos, pero sin poder modificarlo.

Habilita ACLs en el sistema si no están habilitadas (si ya lo están, omite este paso):

(El resto del ejercicio no es visible en la imagen.)