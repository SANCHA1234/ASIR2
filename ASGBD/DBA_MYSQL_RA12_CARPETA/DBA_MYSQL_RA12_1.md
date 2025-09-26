# Parámetros
# PARAMETROS

## innodb_buffer_pool_size
- Parámetro que determina la cantidad de RAM asignada a la memoria caché del motor de almacenamiento InnoDB para datos e índices.
## innodb_log_file_size
- Parámetro que dicta el tamaño en bytes de los archivos de registro de confirmación almacenados por MySQL.
## max_connections
- Parámetro que establece el número máximo de conexiones de cliente simultáneas permitidas al servidor MySQL.
## query_cache_size
- Parámetro que especifica la cantidad de memoria asignada para el caché.
## table_open_cache
- Parámetro responsable de establecer el número máximo de tablas que el servidor puede tener abiertas durante una sola instancia de caché.
## tmp_table_size
- Parámetro que define el tamaño máximo permitido para una tabla temporal que se crea en memoria.
## max_heap_table_size
- Parámetro que establece el tamaño máximo (en bytes) de las tablas que se almacenan en memoria
## innodb_flush_log_at_trx_commit
- Parámetro de MySQL que controla la frecuencia con la que el registro de transacciones de InnoDB se escribe en el disco y la forma en que se maneja la durabilidad de las transacciones, afectando el equilibrio entre rendimiento y durabilidad de los datos.
## log_bin
Parámetro que habilita el registro binario.
## slow_query_log
Parámetro que registra las consultas SQL que tardan más de un tiempo específico en ejecutarse, ayuda a identificar cuellos de botella y ayuda a mejorar el rendimiento de la base dedatos.
## slow_query_log_file
Parámetro que especifica la ruta del archivo de registro (log) donde se guardarán las consultas que tardan más tiempo en ejecutarse de lo que se define en el parámetro long_query_time.
## long_query_time
Parámetro que define el tiempo mínimo en segundos que debe tardar una consulta en ejecutarse para ser considerada lenta y registrarse en el Slow Query Log.
## bind-address
Parámetro que especifica la dirección IP en la que el servidor de base de datos escuchará las conexiones entrantes, controlando así la accesibilidad del servidor desde otras máquinas.
## innodb_file_per_table
Parámetro que controla si el motor InnoDB crea un archivo de datos separado (.ibd) para cada tabla o si almacena todas las tablas en un único archivo de tablas del sistema.
## performance_schema
Parámetro que recopila y almacena datos de bajo nivel sobre el rendimiento interno del servidor de la base de datos.


# Entrevistas

## Entrevista 1
| Parámetro | Valor | Justificación|
|-----------|-----------|-----------|
|innodb_buffer_pool_size|65%RAM|Puesto que pide que vaya a tiempo real|
|max_connections|200|De esta forma nos aseguramos de que todos los usuarios que quieran conectarse puedan, pero evitamos que haya demasiadas consultas a la vez. |
|innodb_log_file_size|20 %|Utilizando la mitad de dos discos que estén en Raid 1|
|table_open_cache|200|Evita que el servidor emplee tiempo en volver a sacar datos ya pedidos.
|long query time|5 Segundos|Tiene que ser el acceso instantáneo|
|innodb_file_per_table|1|De esta forma queda habilitado que cada tabla innodb tenga su propio archivo .ibd.|
|slow_query_log|ON |Saber que tablas son las más demandadas permite destinar mejor los recursos. |


## Entrevista 2
| Parámetro | Valor | Justificación|
|-----------|-----------|-----------|
|Table_open_cache|200|Evita que el servidor emplee tiempo en volver a sacar datos ya pedidos.|
|max_heap_table_size|100 MB|Al tratarse de grandes volúmenes de datos. Reducimos el número de tablas.|
|long_query_time|20 segundos|Al tratarse de una búsqueda de datos amplia, va a emplear más tiempo en buscar información|
|slow_query_log|ON|Poder identificar cuales son los datos que  más tiempo tardan en cargar, permite adecuar los recursos.|
|slow_query_log file|ON|Si se identifica con rapidez, las rutas más utilizadas, se puede priorizar con respecto a otras|
|innodb_buffer_pool_size|70 % de Ram|Debido a la gran cantidad de datos que contiene.|
## Entrevista 3
| Parámetro | Valor | Justificación|
|-----------|-----------|-----------|
|Max connections|400 de solicitudes de acceso|De esta forma nos aseguramos de que todos los usuarios que quieran conectarse puedan y chatear en simultáneamente, pero evitamos que haya demasiadas consultas a la vez.|
|innodb_flush_log_at_trx_commit|ON|Para controlar el rendimiento del disco frente a la carga de datos en el servidor|
| innodb_log_file_size|ON|De 5 Bytes, para asegurar que los comentarios en las publicaciones se quedan guardados|
|innodb_buffer_pool_size|70 % de RAM|Debido a la carga de datos constante y a la interacción de los usuarios|

# Mysql
Para el ejemplo en los cambiios, voy a ejemplificar con un servidor de 32 Gb de RAM
## Archivo original
<img width="736" height="692" alt="image" src="https://github.com/user-attachments/assets/0919687f-7f23-496b-9c90-fd7c18c2a2b6" />

## Archivo adaptado a la entrevista 1

<img width="1055" height="862" alt="image" src="https://github.com/user-attachments/assets/10a41ce1-ae7e-41da-a5f8-7d56a209ea84" />

## Archivo adaptado a la entrevista 2

<img width="1048" height="788" alt="image" src="https://github.com/user-attachments/assets/7505ac12-a179-4681-a4bb-e2381c215eba" />

## Archivo adpatado a la entrevista 3

<img width="1063" height="769" alt="image" src="https://github.com/user-attachments/assets/f00ad57c-264e-4f73-9775-34a27e2b52cb" />



