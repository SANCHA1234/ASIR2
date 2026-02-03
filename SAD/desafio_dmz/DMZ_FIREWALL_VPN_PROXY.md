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