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
