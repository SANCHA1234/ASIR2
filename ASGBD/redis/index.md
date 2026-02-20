Acceder al cliente de Redis:

redis-cli

Probar un comando básico:

PING Debería responder con PONG.

Especificar una base de datos (por defecto usa la 0) 

redis-cli -n 1

Parte 1: Comandos básicos en Redis


Comprueba cada uno de los siguientes comandos en tu instalación:

Comandos básicos para claves

Establecer y obtener el valor de una clave
SET clave valor
GET clave

 Eliminar una clave
DEL clave

 Verificar si una clave existe
EXISTS clave

 Establecer una clave con tiempo de expiración (en segundos)
SETEX clave tiempo valor

 Obtener el tiempo restante de una clave
TTL clave

 Renombrar una clave
RENAME clave nueva_clave

Listas

 Agregar elementos al principio y al final de una lista
LPUSH mi_lista valor1
RPUSH mi_lista valor2

 Obtener todos los elementos de una lista
LRANGE mi_lista 0 -1

 Obtener y eliminar el primer o último elemento de una lista
LPOP mi_lista
RPOP mi_lista

 Longitud de la lista
LLEN mi_lista

Conjuntos (Sets)

 Agregar elementos a un conjunto
SADD mi_conjunto valor1 valor2

 Obtener todos los elementos de un conjunto
SMEMBERS mi_conjunto

 Verificar si un elemento pertenece a un conjunto
SISMEMBER mi_conjunto valor1

 Eliminar un elemento de un conjunto
SREM mi_conjunto valor1

 Operaciones entre conjuntos (intersección, unión, diferencia)
SINTER conjunto1 conjunto2
SUNION conjunto1 conjunto2
SDIFF conjunto1 conjunto2
Hashes

 Agregar un campo a un hash
HSET mi_hash campo1 valor1

 Obtener el valor de un campo
HGET mi_hash campo1

 Obtener todos los campos y valores
HGETALL mi_hash

 Verificar si un campo existe
HEXISTS mi_hash campo1

 Eliminar un campo
HDEL mi_hash campo1
Administración de bases de datos

 Cambiar de base de datos
SELECT número_base_datos

 Ver claves en la base de datos actual
KEYS *

 Limpiar todas las claves de la base de datos actual
FLUSHDB

 Limpiar todas las claves de todas las bases de datos
FLUSHALL
Información y monitoreo

 Obtener información del servidor
INFO

 Ver estadísticas en tiempo real
MONITOR

 Ver configuración actual
CONFIG GET *

 Cambiar configuración (temporalmente, mientras Redis esté en ejecución)
CONFIG SET parametro valor

Copias de seguridad y restauración
 Forzar la creación de un snapshot
SAVE

 Realizar una copia asincrónica
BGSAVE




Parte 2: Uso de un cliente visual
Instalar RedisInsight (cliente visual oficial)
Descargar la última versión desde la web oficial:
https://redis.com/redis-enterprise/redis-insight/
Instalar RedisInsight:
sudo dpkg -i <archivo_descargado>.deb
Abrir RedisInsight:
redisinsight
Conectar al servidor Redis (por defecto, host: 127.0.0.1, puerto: 6379).
Explorar Redis desde RedisInsight
Crear claves, insertar datos en listas o hashes, y observar las estructuras visualmente.

Parte 3: Otro ejercicio
1. Operaciones
Crear un sistema de gestión de inventario:
Añade 5 productos (usando hashes con HSET).
Incrementa el stock de uno de los productos (HINCRBY).
Elimina un producto.

2. Simular un carrito de compras
Crear un carrito con la estructura de listas:
LPUSH carrito "Producto1" "Producto2"
LRANGE carrito 0 -1

3. Ranking de usuarios
Usar un conjunto ordenado para guardar puntuaciones:
ZADD ranking 100 "usuario1" 200 "usuario2" 150 "usuario3"
ZRANGE ranking 0 -1 WITHSCORES
ZREVRANK ranking "usuario2"

4. Simulación de notificaciones
Usar listas para simular una cola de notificaciones:
LPUSH notificaciones "Notificación 1" "Notificación 2"
RPOP notificaciones

Parte 5: Otro Ejercicio Más
Diseña un sistema de control de tareas con Redis. Debe permitir:
Añadir tareas con nombre y prioridad.
Consultar todas las tareas en orden de prioridad.
Marcar tareas como completadas (eliminarlas de la lista).
Pistas: Usa listas (LPUSH y LPOP) o conjuntos ordenados (ZADD y ZRANGE).


