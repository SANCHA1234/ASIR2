# Desafío 1:

## Configuracion VBOX
### 1. Firewall Externo (FW1 - pfSense)
FW1 (pfSense)

![alt text](image-2.png)


![alt text](image-3.png)

### 2. Firewall Interno (FW2 - pfSense)

![alt text](image-4.png)

## Configuracion interna
### 1. Configuración de Firewalls con pfSense
#### 1.1. Configuración del Firewall Externo (FW1)

Permitir acceso al servidor VPN en la DMZ:
Interfaz: WAN
Proto: UDP
Puerto: 1194
Destino: 192.168.1.10

![](image-5.png)


Permitir tráfico desde DMZ hacia Internet:
Interfaz: DMZ
Proto: TCP/UDP
Puerto: Any
Destino: Any


![alt text](image-20.png)

Bloquear tráfico directo de DMZ a LAN (excepto VPN a Proxy):
Interfaz: DMZ
Proto: Any
Destino: 192.168.0.0/24
Acción: Block

![alt text](image-21.png)

Excepción: 192.168.1.10 -> 192.168.0.10

![alt text](image-22.png)

NAT en FW1
Outbound NAT: Habilita NAT automático o manual.
Regla NAT: Traduce 192.168.1.0/24 → WAN (masquerade).


![alt text](image-9.png)


#### 1.2. Configuración del Firewall Interno (FW2)
Reglas de Firewall (DMZ y LAN)
Permitir tráfico del Proxy a Internet:
Interfaz: LAN
Proto: TCP
Origen: 192.168.0.10
Destino: Any
Puerto: 80, 443

![alt text](image-10.png)


Permitir tráfico de Cliente Interno al Proxy (3128):
Interfaz: LAN
Proto: TCP
Origen: 192.168.0.0/24
Destino: 192.168.0.10
Puerto: 3128
Permitir tráfico de la VPN al Proxy:
Interfaz: DMZ
Proto: TCP
Origen: 192.168.1.10
Destino: 192.168.0.10
Puerto: 3128

![alt text](image-11.png)

Bloquear tráfico directo de DMZ a LAN (excepto VPN a Proxy):
Interfaz: DMZ
Proto: Any
Destino: 192.168.0.0/24
Acción: Block

![alt text](image-15.png)

Excepción: 192.168.1.10 -> 192.168.0.10

![alt text](image-16.png)

Reglas aplicadas a la LAN


![alt text](image-19.png)

Reglas Aplicadas a la DMZ

![alt text](image-18.png)


NAT en FW2
Outbound NAT: Automático.

![alt text](image-14.png)

#### 3. Cliente Interno


![alt text](image-24.png)


Pruebas de conectividad

![alt text](image-17.png)

![alt text](image-23.png)

# 4. Configuracion Servidor proxy

![alt text](image-32.png)

## 1.Definir las redes permitidas

![alt text](image-26.png)


## 2.Configurar el puerto del Proxy

![alt text](image-27.png)

## 3.Crea una lista negra de URLs prohibidas:


![alt text](image-28.png)


![alt text](image-29.png)

## 4.Aplica restricciones basadas en tiempo:


![alt text](image-30.png)


## 5.Resumen de la configuracion en el archivo squid.conf:


![alt text](image-31.png)

## 6.Configuracion ip:

![alt text](image-33.png)


# 5. Servidor VPN


![alt text](image-34.png)

## 1. Carpeta donde guardamos los certificados

![alt text](image-35.png)

## 2. Desarrollo de certificados

./easyrsa init-pki: Limpiamos y preparamos la base de datos de certificados.

![alt text](image-36.png)

./easyrsa build-ca nopass: Creamos la Llave Maestra (CA). Es el archivo que firmará todos los demás certificados para decir "este usuario es de confianza".

![alt text](image-37.png)

./easyrsa gen-req server nopass: El servidor genera su propia identificación.

![alt text](image-38.png)

./easyrsa sign-req server server: La Llave Maestra firma la identidad del servidor. Ahora el servidor es oficial.

![alt text](image-39.png)

./easyrsa gen-dh: Generamos el protocolo Diffie-Hellman, que asegura que las llaves de cifrado cambien constantemente.

![alt text](image-40.png)

openvpn --genkey --secret ta.key: Añadimos una capa de seguridad extra (TLS-Auth) para que el servidor ignore ataques externos de gente que ni siquiera tiene esta llave.

## 3. Configuracion del cliente

Configuramos cómo se debe comportar el servidor al recibir gente.

sudo nano /etc/openvpn/server/server.conf: Aquí definimos:

Puerto 1194: La puerta de entrada.

10.8.0.0/24: El "pasillo" virtual por donde caminan los clientes.

Push route 192.168.0.0...: El mapa que le damos al cliente para que sepa llegar a tu red local.

![alt text](image-41.png)

## 4. Enrutamiento

pasar el tráfico hacia internet o la LAN.

net.ipv4.ip_forward=1: Le decimos a Ubuntu: "No te quedes los paquetes para ti, déjalos pasar de una red a otra".

iptables -t nat -A POSTROUTING -s 10.8.0.0/24 -o eth0 -j MASQUERADE:

![alt text](image-42.png)

## 5. Identidad del cliente

Para que el cliente se autentifique cuando se conecte con el servidor

![](image-43.png)


![alt text](image-44.png)