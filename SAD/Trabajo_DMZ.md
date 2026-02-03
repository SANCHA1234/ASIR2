## 1. Índice

1. [VPN](#vpn)
2. [Firewall](#firewall)
3. [Servidor Proxy](#proxy)
4. [DMZ](#estudio-dmz)
5. [Link presentación](#link-de-la-presentacion)
6. [Bibliografía](#bibiliografia)

# VPN

## ¿Qué es una VPN?

Es una conexión digital entre el equipo y un servidor remoto propiedad de un proveedor de VPN, 
creando un túnel de punto a punto que cifra los datos personales, enmascara la dirección IP y 
permite pasar por un lado los firewalls y los bloques de sitios web en Internet.

Esto garantiza que la actividad en línea esté protegida y sea privada y más segura.

- Virtual, porque no hay cables físicos implicados en la conexión.
- Privada, porque, a través de esta conexión, nadie más puede ver los datos ni la actividad de navegación.
- En red, porque varios dispositivos (su ordenador y el servidor VPN) funcionan de manera conjunta para mantener el vínculo establecido.

## Tipos de VPN

- VPN de acceso remoto:

    Ofrece a los usuarios fuera del sitio la capacidad de conectarse a la red de una organización, o a un servidor remoto, desde el dispositivo personal. Esto se puede lograr escribiendo las credenciales de autenticación a través de una página de inicio de sesión, que le autoriza a realizar la conexión a través del explorador web.

- VPN de sitio a sitio:

    Es una red interna privada formada por varias redes dentro de una organización, que están conectadas entre sí a redes de área local (LAN) a través de la red pública de Internet. Esta configuración permite a los usuarios de dos redes independientes, tanto dentro como adyacentes a la organización, compartir recursos entre sí, a la vez que limita el acceso total a todos los recursos, lo que garantiza que la comunicación dentro de la empresa siga siendo lo más privada y segura posible

- VPN para móbiles:

    También siguen protegiendo los datos cuando la conectividad a Internet es puntual o inestable, o al alternar entre datos móviles y Wi-Fi. Mientras la aplicación se esté ejecutando, la conexión VPN permanecerá segura y el dispositivo permanecerá protegido.


## Ventajas

- Proteger datos

    Los datos confidenciales, como los correos electrónicos profesionales, la información de pago y el etiquetado de ubicación, se transmiten constantemente en línea. Una conexión VPN cifra estos datos en código y los representa como ilegibles para cualquier persona sin una clave de cifrado.

- Teletrabajo

    Quienes trabajan desde casa pueden acceder a los recursos de la empresa a través de una conexión privada desde cualquier lugar, siempre y cuando tengan acceso a Internet.

- Evasión de la censura:

    La suplantación de ubicación ofrece a estos usuarios la capacidad de eludir firewalls, ver sitios web bloqueados y moverse libremente por Internet.

- Acesso a la información

    Algunos sitios y servicios restringen su contenido multimedia en función de la ubicación geográfica, lo que supone que puede no tener acceso a determinados tipos de contenido. Una VPN oculta o suplanta la ubicación del servidor local para que aparezca como si estuviera en otro lugar (por ejemplo, en otro país).

## Funcionamiento

1. Conexión Inicial: Al activar la VPN, tu dispositivo se conecta a un servidor VPN remoto, no directamente a Internet.
2. Encriptación: Tu cliente VPN cifra todos tus datos
3. Túnel Seguro: Estos datos cifrados viajan a través de un "túnel" seguro hasta el servidor VPN, impidiendo que tu ISP o hackers los espíen.
4. Enmascaramiento de IP: El servidor VPN recibe tus datos, los descifra y los envía a la página web o servicio que quieres visitar, pero usando su propia dirección IP, no la tuya.
5. Respuestas: La respuesta del sitio web vuelve al servidor VPN, que la cifra y te la envía de vuelta por el túnel seguro para que tu dispositivo la descifre. 

![alt text](image-3.png)


### Protocolos
- OpenVPN:

    Utiliza tecnología de cifrado de 256 bits, proporciona tunelización a través de SSL/TSL y usa tecnología de código abierto, lo que significa que cualquiera puede ver su código fuente y solucionar posibles vulnerabilidades. Más para uso general

- SSTP:

     Incluye cifrado de 256 bits y certificaciones SSL/TSL para la autenticación. Está integrado de forma nativa en el sistema operativo Windows y es compatible con Microsoft.

- WireGuard

    Es un protocolo más reciente,código abierto, lo que significa que cualquiera puede revisar el código fuente, notificar errores y exigir responsabilidades a los proveedores. Y también utiliza cifrado de AES de 256 bits. Más para gente sin experiencia.


# Firewall

Un firewall es un dispositivo de seguridad de red diseñado para monitorear, filtrar y controlar el tráfico de red entrante y saliente basado en reglas de seguridad predeterminadas. El propósito principal de un firewall es establecer una barrera entre una red interna confiable y redes externas no confiables.

Los firewalls vienen en formas de hardware y software, y funcionan inspeccionando paquetes de datos y determinando si los permiten o bloquean en función de un conjunto de reglas. Las organizaciones pueden configurar estas reglas para permitir o denegar el tráfico en función de varios criterios, como direcciones IP de origen y destino, números de puerto y tipo de protocolo. 

Por lo tanto, los firewalls regulan el tráfico entrante y saliente, protegiendo la red de:

Amenazas externas: como virus, puertas traseras, correos electrónicos de suplantación de identidad y ataques de denegación de servicio (DoS). Los firewalls filtran los flujos de tráfico entrantes, evitando el acceso no autorizado a datos sensibles y frustrando posibles infecciones de malware.

Amenazas internas: como actores maliciosos conocidos o aplicaciones riesgosas. Un firewall puede aplicar reglas y políticas para restringir ciertos tipos de tráfico saliente, lo que ayuda a identificar actividades sospechosas y mitigar la exfiltración de datos.

Existieron 4 generaciones de firewalls

1ª Generación (1989) - Filtrado de Paquetes  Analizan paquetes individuales según reglas básicas. Limitación: No ven el contenido (malware).

2ª Generación - Stateful (Con Estado) Rastrean el estado y contexto de las conexiones activas. Limitación: Aún les cuesta ver amenazas dentro de las aplicaciones.

3ª Generación - Proxy (Aplicación) Actúan como intermediarios entre cliente y servidor, filtrando respuestas completas.

4ª Generación (2010) - NGFW (Next-Gen) Combinan lo anterior con IPS (Prevención de Intrusiones), control de aplicaciones y detección de amenazas avanzadas.

### Ventajas

- Seguridad de red mejorada:

    Un cortafuegos desempeña un papel vital para evitar que los paquetes dañinos lleguen A su red, manteniendo su información confidencial e infraestructura A salvo de posibles peligros. Al examinar y filtrar el tráfico entrante y saliente, actúa como una barrera contra los intentos no autorizados para acceder a su sistema, como la piratería informática o la violación de datos.   

- Protección para múltiples sistemas:

    Los cortafuegos basados en red, como los routers, proporcionan la ventaja de proteger varios sistemas al mismo tiempo. Este enfoque centralizado ofrece comodidad y escalabilidad, especialmente para empresas con múltiples dispositivos conectados ala red.

### Desventajas

- Impacto en el rendimiento:

    Los cortafuegos de Software que realizan filtrado de paquetes tienen el potencial de afectar el rendimiento del sistema ya que analizan cada paquete de datos. Esta tarea exigente puede resultar en una red más lenta o mayor retraso. Por otro lado, los firewalls de hardware alivian este problema mediante la transferencia del proceso de filtrado al hardware dedicado, lo que garantiza un rendimiento óptimo de la red.

- La complejidad del mantenimiento:

    Configurar y mantener un cortafuegos puede ser una tarea complicada, especialmente para personas sin experiencia técnica. Requiere un monitoreo continuo, actualización y reglas de administración para asegurar que el cortafuegos permanezca efectivo contra nuevas amenazas. Un cortafuegos mal configurado o mal mantenido puede crear vulnerabilidades, lo que puede conducir A violaciones de seguridad.

    ![alt text](image-2.png)


# Estudio DMZ
 
Una DMZ  o zona desmilitarizada es una red perimetral que protege y agrega una capa adicional de seguridad a la red de área local interna de una organización del tráfico no confiable. El objetivo final de una red de zona desmilitarizada es permitir que una organización acceda a redes no confiables, como Internet, mientras garantiza que su red privada o LAN permanezca segura. Este tipo de herramientas pueden ser tanto dispositivos específicos dedicados, o software, como el integrado por defecto en el sistema operativo Windows o OS X. 

Los dispositivos dedicados, por lo general, cuentan con más capacidades de procesamiento que los basados en software, ya que se han diseñado específicamente para esa tarea, aunque por el contrario, su coste económico es superior. Normalmete se implementan en servidores web, servidores DNS, servidor de correo y servidores FTP.

### Ventajas de una DMZ

- Aumento de la Seguridad: 

    Aísla los servicios públicos del resto de la red, reduciendo el riesgo de que una vulnerabilidad en uno de estos servicios exponga la red interna.

- Mitigación de Ataques: 

    Proporciona un área controlada donde los atacantes pueden ser detectados y mitigados antes de que puedan acceder a datos más sensibles en la red interna.

- Facilita el Cumplimiento:

    Muchas normativas de seguridad recomiendan o requieren el uso de una DMZ para proteger datos sensibles y cumplir con los estándares de seguridad.

### Desventajas de una DMZ

- Complejidad de Implementación:

    Configurar y mantener una DMZ requiere una planificación cuidadosa y recursos adicionales.

- Costos:
 
    Implementar una DMZ puede incrementar los costos debido a la necesidad de hardware adicional (firewalls, servidores) y personal especializado para gestionar la infraestructura.

![alt text](image-1.png)

# Proxy

### ¿Que és un servidor proxy?

Un servidor proxy es un servidor intermediario que se encuentra entre un cliente y un servidor de destino. Actúa como un puente para se produzca la comunicación entre las partes y aporta un nivel adicional de seguridad y privacidad porque enmascara la dirección IP del cliente. 

### Tipos: 

- Forward Proxy
    
    El más común. Se sitúa delante de los clientes y se usa para pasar las solicitudes a internet.

- Reverse Proxy
    
    Se sitúa delante de los servidores web. Se usa para proteger al servidor, equilibrar la carga de tráfico y mejorar la velocidad.

- Proxy Anónimo
    
    Oculta tu dirección IP original para que el sitio web no sepa quién eres, aunque el sitio sabe que estás usando un proxy.

- Proxy Transparente
    
    No oculta ninguna información. Se suele usar en empresas o escuelas para filtrar contenido o autenticar usuarios.

- Proxy de Alta Anonimidad
    
    Cambia periódicamente la IP que presenta al sitio web y oculta que es un proxy, siendo el más difícil de rastrear.


### Funcionamiento

El proceso es el siguiente:

1. Tú envías la solicitud al proxy.
2. El proxy la recibe, la procesa (puede cambiar tu dirección IP) y la envía al sitio web.
3. El sitio web responde al proxy.
4. El proxy te devuelve la información a ti.

![alt text](image-4.png)

### Ventajas

- Privacidad y Anonimato: Al ocultar tu dirección IP real, los sitios web no pueden rastrear tu ubicación física ni tus hábitos de navegación con facilidad.
- Seguridad: Puede actuar como un firewall, bloqueando el acceso a sitios maliciosos o filtrando software espía.
- Acceso a Contenido Restringido: Permite saltarse bloqueos geográficos o censura.
- Velocidad y Ahorro de Ancho de Banda: Los proxies pueden guardar un caché de las páginas web visitadas. Si otra persona solicita la misma página, el proxy la entrega más rápido sin tener que descargarla de nuevo de internet.
- Control Parental o Empresarial: Permite a los administradores bloquear el acceso a redes sociales, sitios de juegos o contenido inapropiado dentro de una red local.

### Inconvenientes

- Riesgos de Seguridad: Cuando usas un proxy, todo tu tráfico pasa por un servidor que no te pertenece.

    - Registro de datos: El administrador del proxy puede ver y registrar todo lo que haces (sitios visitados, contraseñas no cifradas, datos personales).

    - Inyección de anuncios o malware: Algunos proxies gratuitos pueden insertar publicidad en las páginas que visitas o, en el peor de los casos, código malicioso.

- Falta de Cifrado Real

    A diferencia de una VPN (Red Privada Virtual), la mayoría de los proxies no cifran tu tráfico. Esto significa que, aunque ocultas tu IP ante el sitio web final, tu proveedor de internet (ISP) o alguien en una red Wi-Fi pública aún podría "espiar" lo que estás haciendo.

- Rendimiento y Velocidad

    - Latencia: Al añadir un "intermediario" en el camino, la conexión suele ser más lenta.

    - Sobrecarga: Los proxies gratuitos suelen estar saturados de usuarios, lo que provoca caídas constantes o velocidades de navegación muy bajas.

- Incompatibilidad y Bloqueos

    - Detección: Muchos servicios tienen bases de datos de IPs de proxies conocidos y bloquean el acceso automáticamente.

    - No cubren todo el sistema: Normalmente, un proxy se configura en una aplicación específica (como el navegador). Si otras aplicaciones de tu computadora se conectan a internet, lo harán con tu IP real, a menos que configures cada una.

- Cookies y Rastreo de Navegador

    Aunque el proxy oculte tu IP, los sitios web aún pueden identificarte mediante cookies o fingerprinting (huella digital del navegador). El proxy por sí solo no garantiza un anonimato total si no limpias tus datos de navegación.


# Arquitectura de red

En la red se observa, el firewall que cumple la función de vigilar los paquetes de todas las redes que están involucradas: Como la red interna de la DMZ; la de la VPN; la del proxy y la de internet que entra. Además bloquea el acceso a la dmz desde internet para evitar cualquier tipo de ataque, por eso sólo se puede acceder desde fuera a través de la VPN.

Por otro lado, tenemos la VPN que a través del "túnel" permite conectar a los dispositivos que tengan este elemento a la red, para que estén conectados a la red de la empresa.De esta forma, pueden enviar obtener los datos que necesitan y al estar cifrado, se evita una posible filtración por parte de algún atacante.

Además, en la zona DMZ, se encuentran los servidores principales, como el DNS, el email y el servidor web. Su función se centra en protegerlos recursos más importantes en una red interna privada. Con este recurso los usuarios pueden acceder a internet, pero los servidores esenciales están protegidos.

Y el servidor proxy, se encarga de Controlar el acceso a Internet bloquear páginas o servicios no autorizados,registrar qué usuarios acceden a qué sitios,detectan tráfico sospechoso,bloquean tanto malware, anuncios o descargas peligrosas. El proxy puede guardar copias de: Páginas web y archivos frecuentes.

![alt text](image-5.png)

# Link de la presentación

- [Enlace_a_canva](https://www.canva.com/design/DAG-fHdUX8o/fsLCKNguZGL9a53CvBEeUA/edit?utm_content=DAG-fHdUX8o&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton)

 
 # Bibiliografía
- [Firewall](https://www.fortinet.com/lat/resources/cyberglossary/firewall)
- [vpn](https://azure.microsoft.com/es-es/resources/cloud-computing-dictionary/what-is-vpn) 
- [servidor_proxy](https://brightdata.es/blog/101-proxy/what-is-proxy-server) 
- [Funcionamiento_ VPN](https://www.kaspersky.es/resource-center/definitions/what-is-a-vpn)
- [firewall_2](https://www.fortinet.com/lat/resources/cyberglossary/firewall)
- [DMZ](https://www.fortinet.com/lat/resources/cyberglossary/what-is-dmz)
- [DMZ_2](https://www.incibe.es/empresas/blog/dmz-y-te-puede-ayudar-proteger-tu-empresa)
- [Ventajas_y_desventajas_firewall](https://es.hi-network.com/what-are-the-advantages-and-disadvantages-of-using-a-firewall.html)

