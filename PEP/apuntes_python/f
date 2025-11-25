def saludar():  
    print("Hola desde la primera funcion")
Cabe recordar, que en el lenguaje no existen las llaves para delimitar el espacio de un bloque, sino que se realiza mediante indentación (4 espacios)

En el caso de querer ejecutar el código que está dentro de la función saludar, simplemente tendríamos que proceder a su llamada, incorporando los paréntesis en la llamada

print("Vamos a prodecer a la llamada de la funcion")  
saludar()
2.1. Uso de parámetros


Cuando creamos una función, tenemos la posibilidad de incorporar una serie de datos que esta puede tomas como entrada, de forma que se puede personalizar en cierto modo los datos que la función tiene para poder ejecutar. Esto datos toman el nombre de parámetros, y simplemente representan la referencia del elemento para poder utilizarlo dentro de la función, pero hasta que no la función no es llamada, estos argumentos no tienen ningún valor real

def saludar(nombre):  
    print(f"Hola {nombre}, espero que te encuentres bien.")

saludar("Juan")
En este caso, función saluda admite un solo parámetro que se ha nombrado como nombre, y al llamarla, será necesario pasarlo dentro de los paréntesis. En este caso la salida sería: “Hola Juan, espero que te encuentres bien”. En el caso de llamar a la función sin pasar un parámetro, obtendríamos un error.

Al igual que hemos pasado un parámetro, podríamos pasar tantos como nosotros quisiésemos, utilizándolos dentro de la misma función.

def saludar(nombre, apellido, repeticiones):  
    for i in range(repeticiones):  
        print(f"Hola {nombre} {apellido}, espero que te encuentres bien.")

saludar("Juan", "Gomez", 3)
En este ejemplo obtendríamos el saludo tres veces, incorporando el apellido dentro de la impresión por consola.

Se ha comentado antes, que en el caso de no pasar ningún parámetro obtendríamos un error, siempre y cuando no se hayan indicado parámetros por defecto. Esto es una opción dentro del lenguaje, que nos permite asociar un valor a un parámetro siempre y cuando este no sea indicado en la llamada. Siguiendo con el ejemplo del número de saludos, vamos a asociar al parámetro repeticiones un valor por defecto de 1, que será el que se le asigne si en la llamada no se pasa dicho parámetro

def saludar(nombre, apellido, repeticiones=1):  
    for i in range(repeticiones):  
        print(f"Hola {nombre} {apellido}, espero que te encuentres bien.")

saludar("Marta", "Jiménez")
En este caso, al igualar el parámetro a uno y en la llamada no pasar un tercer parámetro, el valor que tendrá repeticiones es de 1, obteniendo una única salida por consola. Sin embargo, en el caso de que, si se pase un tercer parámetro en la llamada, el valor que se le asociará es el del parámetro pasado. En este ejemplo vemos como se le asociaría el número 3.

saludar("Marta", "Jiménez", 3)
En el caso de querer utilizar parámetros por defecto, es muy importante que éstos sean los que están en la parte final de la función, ya que de lo contrario la llamada de ésta no se podría dar def saludar(nombre=”Juan”, apellido, edad) #Uso incorrecto def saludar(nombre, apellido, edad=18, experiencia=True) #Uso correcto Esto se debe a que la primera función al utilizar parámetros asociados a posiciones es imposible ubicar el segundo parámetro en caso de no indicar el primero. De la misma forma en la segunda función, tan solo será válida en caso de no indicar edad ni experiencia o no indicar experiencia. Lo que no podría darse es no indicar edad pero si experiencia, ya que al igual que antes sería imposible ubicar los parámetros.

2.2 Tipos de parámetros


Cuando se crean funciones, hemos podido comprobar que, para poder indicarles un dato de entrada a la función es necesario utilizar los parámetros separados por comas, pudiendo incluso darles un valor por defecto. Este tipo de parámetros se conocen como parámetros posicionales, ya que se asocian a una posición concreta:

def funcionParametros(param1, param2, param3):  
    print(f"param1: {param1}, param2: {param2}, param3: {param3}")

funcionParametros("valor1", "valor2", "valor3")
En este caso param1 se asocia al “valor1”, param2 al “valor2” y param3 al “valor3”, ya que así se ha indicado en cada una de las posiciones de la llamada. Sin embargo, para poder mejorar la forma en la que se lee una función y al final la manera en la que se interpreta el código, es posible el uso de parámetros nombrados. Para ello, simplemente hay que sustituir las posiciones por el nombre del parámetro en concreto. Siguiendo el ejemplo anterior y utilizando parámetros nombrados en este caso, obtendríamos el siguiente código

funcionParametros(param1="valor2", param2="valor3", param3="valor1")
De esta forma, queda bastante más claro cuál es el dato asociado a cada uno de los parámetros

2.3 Uso de args y kwargs


En algunas ocasiones, es necesario pasar por parámetros un numero indeterminado de datos, por lo que el uso tanto de parámetros posicionales como de parámetros nombrados no es posible. Imaginemos una función que me permite calcular la media de una serie de números, pero no se sabe cuántos son ni tampoco están ubicados en una estructura de datos. En este caso sería necesario utilizar como parámetro *args, el cual convierte a todos los parámetros pasados en una tupla (no mutable) para poder utilizarla dentro de la función. Veamos el siguiente ejemplo:

def calculo_media(*notas):  
    media = 0.0  
    print(f"Procedo a calcular la media de {len(notas)} notas")  
    for i in notas:  
        media += i

    media = len(notas)  
    print(f"La media obtenida es de : {media}")

calculo_media(1, 5, 7, 3)  
calculo_media(4, 9, 6)
En este caso, al utilizar un *args cuando se llama a la función se pueden pasar tantos parámetros como se quieran.

La salida obtenida de la ejecución del código sería la siguiente:

Procedo a calcular la media de 4 notas
La media obtenida es de : 4.0
Procedo a calcular la media de 3 notas
La media obtenida es de : 6.333

Otro de las posibilidades es utilizar los parámetros *kwargs. Su uso es muy similar al anterior, con la diferencia que los elementos indicados como parámetros (pueden ser tantos como se quieran) deben ser nombrados y se convertirán en diccionario dentro de la función. Veamos el siguiente ejemplo

def imporatar_usaurio(**kwargs):  
    print("Los datos pasados del usuarios son:")  
    for key, value in kwargs.items():  
        print(f"{key}: {value}")

imporatar_usaurio(nombre="Juan", apellido="Gomez", edad=25, ciudad="Madrid")
Cada uno de los parámetros nombrados en la función se convierten en parte de un diccionario, donde la clave es el nombre del parámetro y el valor el dato asociado. La salida de la ejecución del código anterior sería la siguiente

Los datos pasados del usuarios son:
nombre: Juan
apellido: Gomez
edad: 25
ciudad: Madrid

Esta característica es bastante útil cuando la información que se debe pasar a la función no siempre es la misma, teniendo la función la capacidad de convertir todos los datos pasados en una misma estructura. Ambos todos de parámetros se pueden combinar, lo único a tener en cuenta es el orden de los parámetros, ya que se debe guardar la nomenclatura de cada uno de los elementos, siendo *args posicionales y * kwargs nombrados. Un ejemplo sería la siguiente función

def suma_mixta(*args, **kwargs):  
    suma = 0  
    for i in args:  
        suma += i  
    print(f"La suma de los argumentos es: {suma}")  
    for key, value in kwargs.items():  
        print(f"{key}: {value}")

suma_mixta(  
    1, 2, 3, 4, 5, 6, 7, 8, 9, 10, proyecto="Sumatorio", unidad="2", curso="python"  
)
En este caso los parámetros que son posicionales se quedan asociados a la tupla args, mientras que los que son nombrados forman parte del diccionario kwargs. Es importante decir que después del parámetro *kwargs no se puede definir ningún otro tipo de parámetro.

2.4. Uso del retorno


Además de poder ejecutar todo el código que se ubica dentro del bloque de la función, ésta puede retornar un valor determinado para que sea utilizado en aquellos sitios que sea necesario. Para poder indicar el tipo de retorno tan solo es necesario poner como última línea del método la palabra return, acompañada del dato que se quiera retornar para así poder utilizarlo en la llamada de la función. Veamos un ejemplo:

def procesar_informe(*datos):  
    print("Los datos se han recibido correctamente")  
    if len(datos) > 0:  
        return f"Nombre {datos[0]}nApellido {datos[1]}"  
    elif len(datos) > 2:  
        return "Cantidad de datos incorrecta"  
    else:  
        return "No se han recibido datos"  
print(procesar_informe("Gilbert", "Martinez"))
En este caso la llamada a la función procesar_informe retorna un string con los datos pasados por parámetros en el caso de ser 2 (recordar que el parámetro *args es una tupla). En caso contrario retornara o “cantidad incorrecta” o “no se han recibido datos”. Una vez llamada la función, al obtenerse el string, este puede ser utilizado desde cualquier parte, como por ejemplo dentro de una función print() como en el ejemplo.

2.5. Funciones lambda


Con lo visto hasta aquí, ha quedado claro que para poder definir una función es necesario el uso de la palabra reservada def así como el uso de opcional de parámetros y argumentos para poder escribir una función válida. Sin embargo, existe otro dipo de función que tiene la misma validez y realiza la misma ejecución pero que es más simple de crear. Su nombre es el de funciones lambda, funciones de flecha también llamadas funciones de flecha. Reciben este nombre porque no es necesario asociarle nombre alguno, simplemente es necesario igualarlo a una variable o definirla como parámetro dentro de una función.

Para poder crear un tipo de estas funciones se utiliza la palabra reservada lambda acompañada de los parámetros y el cuerpo de la función separado por : . Como se ha dicho antes, generalmente este tipo de funciones se asocia a una variable para que, al ser llamada, se ejecute la función lambda definida. Veamos un ejemplo:

# definición normal de la función  
def suma(a, b):  
    return a + b

# definición y uso de una función lambda  
sumaVar = lambda a, b: a + b  
print(sumaVar(7, 9))

Esta forma de utilizar las funciones es bastante útil, pero cobra especial relevancia cuando se utiliza como parámetro dentro de otra función:

alumnos = [("Ana", 7), ("Luis", 5), ("Pedro", 9)]  
ordenados = sorted(alumnos, key=lambda x: x[1])  
print(ordenados)
En este caso, la función lambda indicada en el parámetro key, indica que la forma de ordenación que tendrá la tupla es sobre la primera posición del elemento, es decir sobre la nota.

Modularidad

Cuando un programa empieza a crecer y tener muchas líneas de código, se vuelve cada vez más difícil de leer, mantener y reutilizar. Para evitar que todo quede mezclado en un solo archivo enorme, existe un concepto muy importante en programación: el modularidad**.** La idea de ésta es muy sencilla: dividir el programa en partes más pequeñas y organizadas, que se puedan trabajar por separado y luego juntar cuando sea necesario. En Python, esto se consigue gracias a los módulos.

Un módulo en Python no es más que un archivo .py que contiene funciones, variables o clases, y que se puede usar desde otros archivos. Esto te permite, por ejemplo, tener un archivo con todas las funciones matemáticas que usas, otro con validaciones, otro con menús, etc. Para poder utilizar esta funcionalidad es necesario cumplir dos cosas:

Que el archivo que se quiera utilizar está completo y no tenga ningún fallo de codificación

Que el archivo donde queremos utilizar el módulo definido en el punto 1 incorpore como primera línea la palabra reservada import. Esto hará que se importe todo el contenido del fichero y pueda ser utilzado en el fichero actual. En el caso de querer importar solo parte del fichero se utilizará la nomenclatura from nombre__modulo import nombre_funcion

Vamos a ver un ejemplo el código:

En el fichero operaciones.py incorporamos todas las operaciones matemáticas que queremos ejecutar a lo largo de nuestro programa

def sumar(a, b):  
    return a + b

def restar(a, b):  
    return a - b

def multiplicar(a, b):  
    return a * b

def dividir(a, b):  
    if b == 0:  
        return "Error: no se puede dividir entre cero."  
    return a / b

def potencia(base, exponente):  
    return base ** exponente

def raiz_cuadrada(x):  
    if x < 0:  
        return "Error: no se puede calcular la raíz de un número negativo."  
    return x ** 0.5
Una vez tenemos el fichero que realiza todas las operaciones, vamos a crear otro fichero llamado calculadora.py que pide al usuario dos operandos y realiza las operaciones sobre estos, pero llamando a las funciones ya definidas en el módulo anterior:

import operaciones

operando1 = int(input("Introduce el operando 1: "))  
operando2 = int(input("Introduce el operando 2: "))  
operacion = input("Indica la operación a realizar: ").strip()  
print(operacion)

if operacion == "suma":  
    resultado = operaciones.sumar(operando1, operando2)  
elif operacion == "resta":  
    resultado = operaciones.restar(operando1, operando2)  
elif operacion == "multiplicacion":  
    resultado = operaciones.multiplicar(operando1, operando2)  
elif operacion == "division":  
    resultado = operaciones.dividir(operando1, operando2)  
elif operacion == "potencia":  
    resultado = operaciones.potencia(operando1, operando2)  
elif operacion == "raiz":  
    resultado = operaciones.raiz_cuadrada(operando1)  
else:  
    resultado = None

print(f"El resultado de la operación es: {resultado}")
En el caso de solo querer importar alguna de las funciones se utilizaría como primera from X import X, ya no siendo necesaria la llamada al módulo dentro del código:

from operaciones import sumar, restar, multiplicar, dividir, potencia, raiz_cuadrada

operando1 = int(input("Introduce el operando 1: "))  
operando2 = int(input("Introduce el operando 2: "))  
operacion = input("Indica la operación a realizar: ").strip()  
print(operacion)

if operacion == "suma":  
    resultado = sumar(operando1, operando2)  
elif operacion == "resta":  
    resultado = restar(operando1, operando2)  
elif operacion == "multiplicacion":  
    resultado = multiplicar(operando1, operando2)  
elif operacion == "division":  
    resultado = dividir(operando1, operando2)  
elif operacion == "potencia":  
    resultado = potencia(operando1, operando2)  
elif operacion == "raiz":  
    resultado = raiz_cuadrada(operando1)  
else:  
    resultado = None

print(f"El resultado de la operación es: {resultado}")
En estos ejemplos hemos visto como poder importar un módulo creado por nosotros mismo, pero también existe la posibilidad de importar módulos del sistema o descargados para poder utilizar funcionalidades que ya están presentes en el lenguaje. Un ejemplo de uso de de módulos importados desde el sistema sería el siguiente:

import datetime  
now = datetime.datetime.now()  
print("Fecha y hora actual:", now)

date = datetime.datetime(2025, 5, 15)  
print("Fecha personalizada:", date.strftime("%d/%m/%Y"))
En este ejemplo se ha importado el módulo datetime que se encargad de la gestión de fechas, utilizando el método datetime.now para obtener la fecha actual y el constructor datetime para crear una fecha concreto así como el método srtftime para poder formatear una fecha.

Ejercicio


Realiza el siguiente ejercicio para practicar lo visto en esta unidad: Crea un programa en Python que permita gestionar una lista de productos de una tienda. El programa debe utilizar funciones para realizar las siguientes operaciones: Agregar productos con su nombre y precio. Mostrar todos los productos disponibles. Buscar un producto por su nombre y mostrar su precio. Calcular el precio total de todos los productos. Organiza tu código en funciones separadas para cada una de estas acciones. El usuario debe poder elegir qué hacer mediante un menú simple. Además, tendrás que utilizar estructuras de control como listas para poder almacenar todos los productos

Conclusiones

Como hemos podido comprobar, el uso de funciones y la aplicación del diseño modular son herramientas clave para escribir programas más eficientes, ordenados y fáciles de mantener. Saber dividir un problema en partes más pequeñas y tratables no solo nos permite trabajar de manera más estructurada, sino también comprender mejor el código que escribimos y detectar errores con mayor facilidad.

Dominar estos conceptos nos prepara para afrontar proyectos complejos, donde la claridad y la reutilización del código son esenciales para poder llevar a buen puerto el proyecto. Además de esto, nos acerca a las buenas prácticas de programación que se utilizan en el mundo laboral, haciendo que nuestros programas sean más robustos y escalables.

Introducción
Turtle es una librería de Python usada para generar gráficos de forma creativa. Requiere tener instalada otra extensión llamada Tkinter, pero viene incluida en la mayoría de distribuciones de Python.
Si no está instalado Turtle, podemos hacerlo mediante el comando del gestor de paquetes de Python (llamado "PIP", "Pip Installs Packages"):
pip install turtle # o PythonTutrtle
Aunque este paso no debería ser necesario. Si no deja instalarlo porque carecemos de un entorno virtual en el que trabajar, si no queremos crear uno, podemos eludirlo con:
python3 -m pip config set global.break-system-packages true
Más documentación: Turtle.
Procedimiento
Para ver como funciona rápidamente la librería, podemos abrir la terminal (ctrl + alt + t) y escribir lo siguiente:
python3

from turtle import *

forward(100)
left(90)
forward(100)
left(90)
forward(100)
left(90)
forward(100)
Tras presionar el enter, nos daremos cuenta de que se dibuja un cuadrado en una ventana nueva.
Una vez completado los pasos anteriores, entramos en Visual Studio Code, o nuestro editor de confianza, y escribimos lo siguiente dentro de un archivo de Python:
from turtle import *

forward(100)
done()
Funciones básicas
Ya lo hemos visto, aunque no ha sido explicado: las funciones más básicas de Trutle son forward() y left(). La primera función produce un avance en la tortuga (el cursor, vaya), y la segunda hace girar a la izquierda. Hay muchas funciones más, aunque ya no son tan esenciales. Estas son:
right().
done(): Pausa el programa.
penup().
pendown().
setpos().
speed().
color().
bgcolor().
pensize().
hideturtle().
showturtle().
El uso de controladores de flujo, como while o for, son muy recomendables para llevar a cabo patrones más complejos. Por ejemplo, mi foto de perfil de GitHub está hecho gracias a estas tecnologías:
![[Ejemplo Turtle.png]]
Ejercicios
Ejercicio 1: Dibujar la estrella de La Salle
En un archivo de Python, usando la librería de Turtle, debes dibujar una estrella de forma creativa, y que se parezca lo más posible a la de La Salle.
Ejercicio 2: Escribir tu nombre
Escribe tu nombre en Turtle usando Python. Queda prohibido usar la función write() (que escribe directamente el texto que se le indica).
Ejercicio 3: Dibuja algo creativo
Haz gala de tus conocimientos en Python y Turtle para dibujar lo que quieras. La única condición es que se deben ejecutar más de 30 funciones (si un bucle ejecuta una función más de una vez, entonces cuenta para el total).
Recomendación: una práctica común en Python, y que se complementa muy bien con Turtle, es hacer bucles con contador, de la siguiente manera:
for i in range(1, 360):
	forward(i)
	left(i)
	
# O su versión en `while`, que es similar pero se repite infinitamente

cont = 1

while True:
	forward(i)
	left(i)
	
	cont += 1
from turtle import *

speed(0)

for i in range(1, 360000):
	forward(i%90)
    left(i)
    print(i)
    
     if i%180 == 0:
         setpos(0, 0)

—------------------------------------------------------------------------------------------------------------------------

Sintaxis básica
Ya con todos los puntos clave aprendidos, vamos a ver ahora los elementos base de la sintaxis de Python. Como ya se ha comentado, Python es un lenguaje interpretado, por lo que no necesita de un compilador para poder ejecutar las líneas de código, las cuales son ejecutadas de una en una. Por ello, su sintaxis es bastante simple, dentro de las cuales cabe recordad los siguientes elementos: • Comentarios: son las partes del código que no se ejecutan, sino que sirven como documentación. Para poder escribir un comentario se utilizan # en el caso de ser una sola línea o “”” o ‘’’ en el caso de ser comentario de línea múltiple.
# petición de datos al usuario  
nombre = input("¿Cuál es tu nombre? ")  
correo = input("¿Cuál es tu correo? ")  
edad = int(input("¿Cuál es tu edad? "))

“””  
salida de datos por consola  
método de salida por consola con print y mostrar los datos obtenidos  
“””  
print(  
    f"El correo de {nombre} es {correo}, el cual cuenta con {len(correo)} caracteres con {edad} años"  
)
• Las variables no necesitan de tipado, ya que este se asigna con el valor en el momento de la asignación.  
• Los bloques no tienen llaves: esto es una de las cosas que más llaman la atención, ya que para un bloque (función, sentencia de control o similar), no es necesario indicar las { } para marcar el ámbito, sino que se hace con una indentación,tabulación o sangría.


if edad < 18:  
    print("El usuario es menor de edad, por lo que no puede acceder a la plataforma")  
else:  
    print(  
        f"El correo de {nombre} es {correo}, el cual cuenta con {len(correo)} caracteres con {edad} años"  
    )
Otra de las cosas importantes en el lenguaje es que no es necesario el uso de ; para indicar el final de una línea, ya que el enter indica esto.


Elementos del lenguaje
Como en todo lenguaje de programación, los elementos base del lenguaje son: variables, métodos, operadores y estructuras de control. Estos elementos integrados entre sí, permiten la creación de cualquier código de programación y la ejecución de múltiples tareas. A continuación, se explica en detalle cada uno de ellos:
Variables
Las variables representan aquellas partes de código donde se quiere almacenar datos de forma que estos sean accedidos desde diferentes partes en el código, bien sea para hacer referencia a ellas y capturar su valor o para modificarlo de alguna forma. Ya se ha explicado que a la hora de definir una variable no es necesario indicar que tipo de dato guarda dentro, ya que esto se hace en el momento de asignar el valor, pero si es necesario conocer los tipos de datos principales:
• int: números enteros sin decimal  
• float: números con decimales, donde la parte decimal se representa con un .  
• str: cadena de caracteres, definida entre “”  
• bool: valor de true o false muy utilizado para decisiones lógicas  
• list: lista ordenada y dinámica para poder guardar diferentes datos  
• tuple: lista ordenada y estática para poder guardar diferentes datos  
• dict: diccionario de datos asociando par clave-valor.


Si bien estos no son todos los tipos de datos que existen (ya que nosotros podemos crear nuestros propios datos con lo que se conoce como objeto), sí son los principales.
Importante:
Existe la posibilidad de cambiar entre tipos las variables, utilizando el método del tipo de dato al que quiero pasar y la variable que quiero pasar: Por ejemplo, para pasar un int a double habría que poner el siguiente código:
numeroDecimal = 34.87  
numeroEntero = int(numeroDecimal)  
print(f"El número decimal es {numeroDecimal} y el número entero es {numeroEntero}")
En el caso de querer saber de qué tipo es una variable se puede utilizar el método type, indicando la variable en cuestión entre paréntesis
print(type(numeroDecimal))
Métodos
Los métodos representan las funcionalidades que se pueden ejecutar sobre un objeto cualquiera. Existe la posibilidad de crear nuestros propios métodos o utilizar aquellos que el lenguaje ya trae por defecto y nos aportan funcionalidades muy interesantes para poder trabajar con ellos. Antes de empezar a utilizarlos, es bueno recordar que a la hora de ejecutar un método basta con llamarlo por su nombre y poner entre paréntesis todos los parámetros que el método necesita para funcionar. De esta forma, en el caso de querer utilizar el método print que permite escribir un elemento por consola, tendríamos que pasarle por parámetros aquellos elementos que queramos mostrar.
print(“Mensaje a mostrar”)
Alguno de los métodos más interesantes que podemos encontrar en el lenguaje son:
• input(): permite leer por teclado un dato y asociarlo a una variable. Pide como parámetros el texto que se mostraré en la petición
• print(): escribe por consola el texto indicado como parámetro
• upper(), lower(): estos método permite pasar a mayúscula o minúscula respectivamente un texto indicado por parámetros
• strip(): permite eliminar espacios en blanco de un string pasado por parámetros
• replace(): permite sustituir un grupo de caracteres por otro en un string
• find(): permite obtener la posición de un grupo de caracteres en una palabra, retornando su posición
• len(): retorna la longitud del objeto que se pasa por parámetro, siendo la cantidad de letras en el caso de pasar un string o un número en el caso de pasar una lista
• type(): retorna la clase del objeto que se pasa por parámetros
• int(), float(): retorna el elemento pasado por parámetro en el tipo correspondiente
En el siguiente código podemos ver ejemplos de uso de los métodos explicados
# Pedimos al usuario que introduzca su nombre  
nombre = input("Introduce tu nombre: ")

# Limpiamos los espacios en blanco  
nombre_limpio = nombre.strip()

# Mostramos el nombre en diferentes formatos  
print("En mayúsculas:", nombre_limpio.upper())  
print("En minúsculas:", nombre_limpio.lower())

# Reemplazamos un nombre por otro, por ejemplo si alguien se llama "Juan"  
nombre_modificado = nombre_limpio.replace("Juan", "Juanjo")  
print("Nombre con modificación:", nombre_modificado)

# Buscamos si el apellido "Gómez" está en el nombre  
posicion = nombre_limpio.find("Gómez")  
if posicion != -1:  
    print("El apellido 'Gómez' empieza en la posición:", posicion)  
else:  
    print("El apellido 'Gómez' no se encuentra en el nombre.")

# Mostramos la longitud del nombre  
print("Número de caracteres:", len(nombre_limpio))

# Mostramos el tipo de dato que es la variable nombre_limpio  
print("El tipo de dato de la variable es:", type(nombre_limpio))

# Convertimos edad a número entero  
edad_str = input("¿Cuántos años tienes? ")  
edad = int(edad_str)  
print("Edad como número entero:", edad)

# Mostramos también esa edad como número decimal (float)  
edad_float = float(edad)  
print("Edad como número decimal:", edad_float)
Operadores
Binarios - Resta aritmética entre dos operadores. + Suma aritmética entre dos operadores. * Multiplicación aritmética entre dos operadores. ** Potencia aritmética de la base y el exponente / División aritmética entre dos operadores. En este caso hay que tener en cuenta que la división entre dos números enteros es un número entero. % Módulo o resto aritmético entre dos operadores. Se trata del resto de la división entre dos números. Un ejemplo del uso de estos operadores sería el siguiente
# Operadores aritméticos binarios  
a = 10  
b = 3

suma = a + b  # Suma: 13  
resta = a - b  # Resta: 7  
multiplicacion = a * b  # Multiplicación: 30  
division = a / b  # División 3.333 (periodo en este caso float)  
division_entera = a // b  # División entera: 3  
modulo = a % b  # Módulo: 1  
potencia = a**b  # Potencia: 10^3 = 1000
Operadores comparación
Obtiene como resultado el booleano de comparar que un operando es mayor que otro
=
Obtiene como resultado el booleano de comparar que un operando es mayor o igual que otro
<
Obtiene como resultado el booleano de comparar que un operando es menor que otro
<=
Obtiene como resultado el booleano de comparar que un operando es menor o igual que otro
==
Obtiene como resultado el booleano de comparar que un operando es igual que otro
!=
Obtiene como resultado el booleano de comparar que un operando es diferente que otro
Un ejemplo de uso de estos operadores sería el siguiente
# Operadores de comparación  
a = 10  
b = 5

igual = a == b          # ¿a es igual a b? → False  
diferente = a != b      # ¿a es distinto de b? → True  
mayor_que = a > b       # ¿a es mayor que b? → True  
menor_que = a < b       # ¿a es menor que b? → False  
mayor_o_igual = a >= b  # ¿a es mayor o igual que b? → True  
menor_o_igual = a <= b  # ¿a es menor o igual que b? → False
Operadores lógicos
and
Obtiene como resultado true todas las condiciones de la sentencia son verdaderas. En caso contrario el resultado es false. A diferencia del operador & es que si la primera condición es false el resto no se evalúa
or
Obtiene como resultado true si una de las condiciones de la sentencia es verdaderas. En caso contrario el resultado es false. A diferencia del operador & es que si la primera condición es true el resto no se evalúa
not
Obtiene el valor booleano inverso del booleano indicado
Un ejemplo de uso de estos operadores sería el siguiente
# Operadores lógicos  
a = True  
b = False

resultado_and = a and b   # AND lógico: True si ambos son True  
resultado_or = a or b     # OR lógico: True si al menos uno es True  
resultado_not_a = not a   # NOT lógico: invierte el valor de a
edad = 10  
if edad < 18:  
    print("El usuario es mejor de edad")  
elif edad < 65:  
    print("El usuario está en edad labora")  
else:  
    print("El usuario que ha ganado la jubilacion")

print("Mensaje ejecutado fuera de bloque")
1.1. Estructuras de selección
Este tipo de estructura es la más sencilla dentro de Python, ya que permite indicar cual es la parte de código que se debe ejecutar dependiendo de un valor o condición lógica. Entre estas estructuras podemos encontrar
1.1.1. If – if/else – if/elif/else
Cuando queramos que nuestro programa tome decisiones en tiempo de ejecución, utilizaremos la estructura if ya que, gracias a ella, Python podrá ejecutar un bloque u otro en función de si se cumple o no una condición booleana. En este caso tendremos la posibilidad de utilizar una sola condición (if), dos (if/else) o varias (if – elif – else), teniendo en cuenta que solo una de ellas podrá ser la correcta, y en el caso de cumplirse una, el resto no se analizarán. A continuación, podemos ver un ejemplo de esta estructura combinando diferentes if numero = int(input("Por favor introduce el valor numérico que quieres evaluar "))
if numero<0 or numero>=100:  
    if numero<10:  
        print("valor entre 0 y 10")  
    elif numero<100:  
        print("valor de 2 cifras mayor que 100")  
else:  
    print("Valor no válido")
1.1.2. Match
En el caso de querer ejecutar un código directamente asociado al valor de una variable, la estructura if puede resultar muy tediosa. Para ello, es recomendable utiliza la estructura Match la cual evalua el valor de una variable y ejecuta de forma directa el caso correspondiente, pudiendo seleccionar un caso por defecto utilizando el carácter _
Importante: La estructura de control match tan solo funciona de Python 3.10 en adelante
A continuación, podemos ver un ejemplo de esta estructura combinando con la estructura if
opcion = input("Selecciona una opción (1, 2, 3):")  
match opcion:  
    case "1":  
        print("Has seleccionado la opción 1: Ver perfil.")  
    case "2":  
        print("Has seleccionado la opción 2: Editar perfil.")  
    case "3":  
        print("Has seleccionado la opción 3: Cerrar sesión.")  
    case _:  
        print("Opción no válida. Inténtalo de nuevo.")
1.2. Estructuras de repetición
Otro tipo de estructuras muy utilizadas son las de repetición. Éstas no permiten realizar ejecución de bloques de código recurrente sin necesidad de escribir n veces las mismas líneas. Son muy útiles para recorrer colecciones de datos o para ejecutar recursivamente una función sobre una condición lógica **1.2.1. For** La primera opción dentro de las estructuras de repetición es la del for. Esta estructura permite ejecutar un bloque de código en un rango determinado (indicando un incremento). Para ello se utiliza el método range(), pasando como parámetros el valor inicial, final e incrementeo del código. En cada iteración, la variable definida tomará un nuevo valor:
for i in range(1,10,3):  
    print(i)
En este caso la salida sería 1,4,7 que que se ha indicado un incrementeo de 3. En el caso de querer hacer un decremento sería con un range a negativo
for i in range(10,1,-3):  
    print(i)
Otra de las opciones es indicar una colección de datos en vez del método range, pudiendo así asignar a la variable creada cada uno de los elementos de la colección. Para ello, la colección se puede indicar de forma interna en la estructura o crearla fuera y nombrarla en la estructura
for i in [1,2,3,4,5,6,7,8,9,10]:  
    print(i)

alumnos = ["Juan","Maria", "Jorge","Claudia", "Marcos","Celia"]  
for i in alumnos:  
    print(i)

# donde i va tomando los valores de la coleccion
Nota
Dentro de la estructura de control, se pueden utilizar tantas estructuras como sean necesarias, incluso anidar el mismo tipo de estructura.
for i in range(1,10):  
    print(f"Tabla del {i}")  
    for j in range(1,10):  
        print(f"{i}*{j}={i*j}")
1.2.2. While
Esta estructura de control permite repetir un bloque de código dependiendo de una condición lógica. Una de las cosas importante cuando se utiliza este tipo de estructura, es que antes de ejecutar el bloque, se analiza la condición de repetición, por lo que puede no llegar a ejecutarse nunca
Importante: La condición de evaluación tiene que cambiar en algún momento. De no ser así, el bloque de repetición entrará en un bucle infinito a no ser que se aplique un break
Un ejemplo del uso de la estructura sería la siguiente
contador = 1

contador = 1  
while contador <= 5:  
    print("Valor:", contador)  
    contador += 1   
print("Saliendo del bloque while")
Como podemos ver, el bloque se repetirá siempre y cuando la variable contador sea inferior o igual a 5. Dentro del bloque es importante lo que comentábamos de modificar dicha condición para que pueda salir de la ejecución. Si hacemos un ejemplo más cercando al mundo informático, podemos utilizar un bloque while para dejar la aplicación bloqueada hasta realizar un login correcto:
nombre = input("introduce el nombre del usuario")  
password = input("introduce la pass del usuario")

while nombre != "admin" or password != "admin":  
    print("Login incorrecto")  
    nombre = input("introduce el nombre del usuario")  
    password = input("introduce la pass del usuario")

print("Login correcto, puedes continuar")
Nota
En Pyhton no existe la estructura de control do-while. Sin embargo podríamos similar su uso con un while (true) y un break en el caso de no cumplir la condición correspondiente.
while True:  
    numero = int(input("Introduce la opción a mostrar:"))  
    if numero == 7:  
        print("Has seleccionado la opción de salir")  
        break  
    print("Vuelve a seleccionad una opción.")  
print("Saliendo el ")
2. Estructuras de datos
Cuando hablamos de variables en un lenguaje de programación, nos referimos a la capacidad del lenguaje a guardar un dato para utilizarlo a posteriori bien sea referenciándolo para acceder al valor guardado o para poder modificarlo. En el caso de querer guardar más de un valor, la primera posibilidad es utilizar más de una variable, pero en algunos casos esta no es la mejor opción, siendo las estructuras de datos la solución. Es por tanto que las estructuras de datos representan un conjuto de datos guardados en una misma unidad. Las estructuras principales dentro de Python son list, tuplas, diccionarios y conjunto o set.
2.1. List
Una lista de datos, es una estructura de datos ordenada, lo cual quiere decir que los elementos están asociados a posiciones siendo el 0 la primera, y mutable de elementos los cuales pueden ser de cualquier tipo. Para poder crear una lista se utilizan []
listaElementos = ["Elemento1", "Elemento2", "Elemento3"]
Las acciones que se pueden hacer sobre estos elementos son:
Acceder a un dato: utilizando la posición del elemento se puede acceder a él indicando el índice.
print(listaElementos[0])
Modificar un dato: utilizando la posición del elemento que se quiere modificar e igualando al nuevo valor que se quiere asociar.
listaElementos[0] = "Elemento1 modificado"
Agregar un elemento: como se trata de una estructura mutable en cualquier momento se pueden agregar elemento, haciéndolo en la última posición de la lista.
listaElementos.append("Elemento nuevo")
Agregar un elemento en una posición determinada: muy similar al caso anterior, pero indicando la posición donde se agrega. El resto de los elementos de la derecha, se moverán una posición.
listaElementos.insert("Elemento adicional", 1)
Eliminar un elemento: indicando el valor del elemento que se quiere borrar, la lista eliminará el primer elemento que coincida con el valor indicado. El resto de elemento de la derecha se moverán una posición.
Existe también la posibilidad de eliminar el elemento indicando la posición que se quiere borrar
listaElementos.remove("Elemento1")  
del listaElementos[0]
Estas son las acciones básicas sobre una lista, pero también podemos utilizar alguno de los métodos asociados para acceder a acciones avanzadas
Iterar sobre los elementos: para ello es necesario utilizar la estructura de control for, obteniendo cada uno de los elementos de la colección de uno en uno.
for item in listaElementos:  
    print(item)
Obtener la posición de un elemento: Para ello se utiliza el método index(), retornando la posición del valor indicado. En el caso de no encontrarlo se retorna un ValueError
listaElementos.index("Elemento2")
Filtrar elemento: no se trata de un método como tal, sino una concatenación de sentencias de control, utilizando el for y el if de forma conjunta
p = [p for p in listaElementos if "2" in p]
Ordenar una lista: utilizando el método sort(), pudiendo indicar entre los paréntesis la condición de ordenación
listaElementos.sort(key=len)
Importante: En Python se puede acceder a la posición de un elemento a través de de posiciones negativas, siendo el elemento en la posición -1 el último elemento de la lista, el -2 el antepenúltimo y así sucesivamente.
Ejercicio
Realiza el siguiente ejercicio para practicar las listas: Crea una aplicación en consola donde se permitan gestionar las calificaciones de la asignatura. Para ello, mediante un menú permite las siguientes acciones • Introducir notas: el usuario introducirá notas hasta que meta un -1. Esto indicará que la introducción ha terminado. Una vez realizado esto volverá a aparecer el mené • Listar notas: se mostrarán todas las notas de una en una. • Obtener extremos: se mostrarán la nota más alta y baja. • Obtener información: se mostrarán los siguientes datos sobre las notas: total introducidas, número suspensos, número aprobador, nota media
2.2. Tuplas
Las tuplas son una estructura de datos muy similar a las listas apartado anterior con la diferencia que son no mutables, es decir que no pueden alterar su tamaño (no se puede ni agregar elementos y eliminarlos). Para poder crear una tupla se indican los elementos que forman parte de ella
trabajadores = ("Juan", "Patricia", "Maria")
Los métodos de acceso, modificación de valor, obtención de longitud y recorrido son idénticos a los vistos en las listas, siendo la diferencia la no posibilidad de agregar elementos y los paréntesis a la hora de crear la colección.
Nota: Es posible desempaquetar una tupla, o lo que es lo mismo crear variables asignándolas de forma directa a los elementos que forman parte de esta.
 datos = ("Ford", "Mustang", 2025, 500, 60000)  
  marca, modelo, anio, cv, precio = datos
En las listas también existe esta posibilidad, pero al ser una colección dinámica el uso es más marginal (se puede utilizar el * al lado de la variable para indicar la extracción de la parte parcial de la lista)
2.3. Diccionarios
Otra de las posibilidades a la hora de utilizar la colección de datos son los diccionarios. A diferencia de las vistas, los diccionarios me permiten no solo meter datos en una colección mutable, sino que lo hacen relacionando una clave a un valor. Para la creación de un diccionario realizaremos
trabajador = {  
    "nombre": "Celia",  
    "edad": 23,  
    "especialidad": "Informática",  
    "titulación": "Ingeniería",  
    "conocimientos": ["Programación", "Sistemas", "BigData"]  
}
Con esta forma de gestionar los datos, podemos jerarquizar la información, accediendo a ella a través de su clave asociada. A la hora de asignar claves, lo que tenemos que tener en cuenta es lo siguiente: no pueden ser mutables (un string, int, float, bool) y deben ser únicas (una clave no puede ser duplicada en un mismo diccionario). Los principales métodos que se utilizan en este tipo de colecciones son los siguientes:
Acceso a elementos: Para poder acceder a un elemento de un diccionario, se utiliza la clave asociada. También se puede utilizar el método get para el acceso
print(trabajador["nombre"])
Modificar elementos: Muy similar al acceso del elemento, con la diferencia que hay que indicar el nuevo valor de este
trabajador["edad"] = trabajador["edad"]+1
Eliminar elementos: Para poder eliminar un elemento del diccionario se utiliza la función del, indicando cual es el elemento que se quiere eliminar
del trabajador["titulación"]
Añadir elementos: En el caso de querer añadir un elemento que no exista en el diccionario, se indica la clave y el valor que tendrá.
trabajador["especialidad"] = "Inteligencia artificial"
Recorrer elementos: Utilizando la estructura de control for podemos acceder a las claves del diccionario, y una vez tenemos esta acceder elementos de forma iterativa
for item in trabajador:  
    print(f"{item}: {trabajador[item]}")  
    if item == "conocimientos":  
        for c in trabajador[item]:  
            print(f"t{c}")
Además de estas acciones, se pueden utilizar funciones avanzadas
Obtener todos los elementos: para ello se utiliza el método values
for item in trabajador.values():  
    print(item)
Obtener todas las claves: para ello se utiliza el método keys
for item in trabajador.keys():  
    print(item)
Saber si un elemento está dentro del diccionario: para ello se evalúa mediante el operador in 2.4. Conjuntos La última de las colecciones que veremos son los conjuntos o set. Estas colecciones son muy similares a las listas, con la diferencia que no se permiten elementos duplicados y además son no ordenadas. Para poder definir un conjunto se utilizan las llaves o la función set:
numeros = {1, 2, 3}  
numerosSet = set([2, 3, 4])
ImportanteEn caso de tener elementos duplicados dentro de un conjunto, Python elimina automáticamente los segundos datos duplicados
Las acciones comunes con este tipo de elementos son:
Agregar datos: se utiliza el método add
numeros.add(4)
Eliminar datos: se utiliza el método distart (si no existe el elemento a borrar no da error) o remove (si no existe el elemento a borrar da error)
numeros.discard(1)  
numeros.remove(5) 
en este caso obtendíamos un error al no estar el elemento 5
Vaciar datos: se utiliza el método clear.
numeros.clear()
Recorrer los elementos: se utiliza una estructura for
for i in numeros:  
    print(i)
Nota: Es como se trata de una estructura no ordenada, no se puede acceder a los datos directamente, sino que tan solo se puede hacer un recorrido de los mismos. En el caso de querer hacer un acceso directo, tendríamos que convertir el conjunto en lista o tupla para poder accederlo, utilizando el método list() o tuple()
Además de las operaciones normales, sobre los conjuntos también se puede operar para realizar uniones:
1. Unión: se obtienen un set con los valores de dos conjuntos, eliminando aquellos datos que están duplicados
2. Intersección: se obtiene un set con los valores duplicados de dos conjuntos, eliminando aquellos que no lo son
3. Diferencia: se obtiene un set con los valores que están en el conjunto A pero no en el B
4. Diferencia simétrica: se obtiene un set con los valores que están en el conjunto A y B pero obviando los comunes
Un ejemplo de cada una de ellas sería el siguiente código
conjunto1 = {1,2,3,4,5}  
conjunto2 = {3,4,5,6,7}  
# {1234567}  
conjuntoUnion = conjunto1.union(conjunto2)  
# {345}  
conjuntoInters = conjunto1.intersection(conjunto2)  
# {12}  
conjuntoDif = conjunto1.difference(conjunto2)  
# {1267}  
conjuntoDif = conjunto1.symmetric_difference(conjunto2)
Ejercicio
Realiza el siguiente ejercicio para practicar lo visto en esta unidad: Crea una aplicación que permita gestionar los proyectos de una empresa. Para ello sigue estos pasos: • Pregunta al usuario cuantos proyectos va a registrar • Por cada proyecto, pide el código, nombre, responsable y presupuesto del proyecto • Guarda la información de todos los proyectos en un diccionario (puedes utilizar el código como la clave y como valor puedes utilizar otro diccionario o lista • Muestra por consola solo el nombre y presupuesto de cada uno de los proyectos Conclusiones Cuando se realiza un código de programación, se ha comprobado a lo largo de la unidad que las estructuras de control representan un elemento básico para poder modelar y “reconducir” el código dependiendo de condiciones lógicas o ejecuciones recurrentes. Además, también hemos podido ver que el uso de estructuras de datos permite juntar diferentes tipos de datos en un mismo elemento para poder así.

def saludar():  
    print("Hola desde la primera funcion")
Cabe recordar, que en el lenguaje no existen las llaves para delimitar el espacio de un bloque, sino que se realiza mediante indentación (4 espacios)
En el caso de querer ejecutar el código que está dentro de la función saludar, simplemente tendríamos que proceder a su llamada, incorporando los paréntesis en la llamada
print("Vamos a prodecer a la llamada de la funcion")  
saludar()
2.1. Uso de parámetros
Cuando creamos una función, tenemos la posibilidad de incorporar una serie de datos que esta puede tomas como entrada, de forma que se puede personalizar en cierto modo los datos que la función tiene para poder ejecutar. Esto datos toman el nombre de parámetros, y simplemente representan la referencia del elemento para poder utilizarlo dentro de la función, pero hasta que no la función no es llamada, estos argumentos no tienen ningún valor real
def saludar(nombre):  
    print(f"Hola {nombre}, espero que te encuentres bien.")

saludar("Juan")
En este caso, función saluda admite un solo parámetro que se ha nombrado como nombre, y al llamarla, será necesario pasarlo dentro de los paréntesis. En este caso la salida sería: “Hola Juan, espero que te encuentres bien”. En el caso de llamar a la función sin pasar un parámetro, obtendríamos un error.
Al igual que hemos pasado un parámetro, podríamos pasar tantos como nosotros quisiésemos, utilizándolos dentro de la misma función.
def saludar(nombre, apellido, repeticiones):  
    for i in range(repeticiones):  
        print(f"Hola {nombre} {apellido}, espero que te encuentres bien.")

saludar("Juan", "Gomez", 3)
En este ejemplo obtendríamos el saludo tres veces, incorporando el apellido dentro de la impresión por consola.
Se ha comentado antes, que en el caso de no pasar ningún parámetro obtendríamos un error, siempre y cuando no se hayan indicado parámetros por defecto. Esto es una opción dentro del lenguaje, que nos permite asociar un valor a un parámetro siempre y cuando este no sea indicado en la llamada. Siguiendo con el ejemplo del número de saludos, vamos a asociar al parámetro repeticiones un valor por defecto de 1, que será el que se le asigne si en la llamada no se pasa dicho parámetro
def saludar(nombre, apellido, repeticiones=1):  
    for i in range(repeticiones):  
        print(f"Hola {nombre} {apellido}, espero que te encuentres bien.")

saludar("Marta", "Jiménez")
En este caso, al igualar el parámetro a uno y en la llamada no pasar un tercer parámetro, el valor que tendrá repeticiones es de 1, obteniendo una única salida por consola. Sin embargo, en el caso de que, si se pase un tercer parámetro en la llamada, el valor que se le asociará es el del parámetro pasado. En este ejemplo vemos como se le asociaría el número 3.
saludar("Marta", "Jiménez", 3)
En el caso de querer utilizar parámetros por defecto, es muy importante que éstos sean los que están en la parte final de la función, ya que de lo contrario la llamada de ésta no se podría dar def saludar(nombre=”Juan”, apellido, edad) #Uso incorrecto def saludar(nombre, apellido, edad=18, experiencia=True) #Uso correcto Esto se debe a que la primera función al utilizar parámetros asociados a posiciones es imposible ubicar el segundo parámetro en caso de no indicar el primero. De la misma forma en la segunda función, tan solo será válida en caso de no indicar edad ni experiencia o no indicar experiencia. Lo que no podría darse es no indicar edad pero si experiencia, ya que al igual que antes sería imposible ubicar los parámetros.
2.2 Tipos de parámetros
Cuando se crean funciones, hemos podido comprobar que, para poder indicarles un dato de entrada a la función es necesario utilizar los parámetros separados por comas, pudiendo incluso darles un valor por defecto. Este tipo de parámetros se conocen como parámetros posicionales, ya que se asocian a una posición concreta:
def funcionParametros(param1, param2, param3):  
    print(f"param1: {param1}, param2: {param2}, param3: {param3}")

funcionParametros("valor1", "valor2", "valor3")
En este caso param1 se asocia al “valor1”, param2 al “valor2” y param3 al “valor3”, ya que así se ha indicado en cada una de las posiciones de la llamada. Sin embargo, para poder mejorar la forma en la que se lee una función y al final la manera en la que se interpreta el código, es posible el uso de parámetros nombrados. Para ello, simplemente hay que sustituir las posiciones por el nombre del parámetro en concreto. Siguiendo el ejemplo anterior y utilizando parámetros nombrados en este caso, obtendríamos el siguiente código
funcionParametros(param1="valor2", param2="valor3", param3="valor1")
De esta forma, queda bastante más claro cuál es el dato asociado a cada uno de los parámetros
2.3 Uso de args y kwargs
En algunas ocasiones, es necesario pasar por parámetros un numero indeterminado de datos, por lo que el uso tanto de parámetros posicionales como de parámetros nombrados no es posible. Imaginemos una función que me permite calcular la media de una serie de números, pero no se sabe cuántos son ni tampoco están ubicados en una estructura de datos. En este caso sería necesario utilizar como parámetro *args, el cual convierte a todos los parámetros pasados en una tupla (no mutable) para poder utilizarla dentro de la función. Veamos el siguiente ejemplo:
def calculo_media(*notas):  
    media = 0.0  
    print(f"Procedo a calcular la media de {len(notas)} notas")  
    for i in notas:  
        media += i

    media = len(notas)  
    print(f"La media obtenida es de : {media}")

calculo_media(1, 5, 7, 3)  
calculo_media(4, 9, 6)
En este caso, al utilizar un *args cuando se llama a la función se pueden pasar tantos parámetros como se quieran.
La salida obtenida de la ejecución del código sería la siguiente:
Procedo a calcular la media de 4 notas
La media obtenida es de : 4.0
Procedo a calcular la media de 3 notas
La media obtenida es de : 6.333
Otro de las posibilidades es utilizar los parámetros *kwargs. Su uso es muy similar al anterior, con la diferencia que los elementos indicados como parámetros (pueden ser tantos como se quieran) deben ser nombrados y se convertirán en diccionario dentro de la función. Veamos el siguiente ejemplo
def imporatar_usaurio(**kwargs):  
    print("Los datos pasados del usuarios son:")  
    for key, value in kwargs.items():  
        print(f"{key}: {value}")

imporatar_usaurio(nombre="Juan", apellido="Gomez", edad=25, ciudad="Madrid")
Cada uno de los parámetros nombrados en la función se convierten en parte de un diccionario, donde la clave es el nombre del parámetro y el valor el dato asociado. La salida de la ejecución del código anterior sería la siguiente
Los datos pasados del usuarios son:
nombre: Juan
apellido: Gomez
edad: 25
ciudad: Madrid
Esta característica es bastante útil cuando la información que se debe pasar a la función no siempre es la misma, teniendo la función la capacidad de convertir todos los datos pasados en una misma estructura. Ambos todos de parámetros se pueden combinar, lo único a tener en cuenta es el orden de los parámetros, ya que se debe guardar la nomenclatura de cada uno de los elementos, siendo *args posicionales y * kwargs nombrados. Un ejemplo sería la siguiente función
def suma_mixta(*args, **kwargs):  
    suma = 0  
    for i in args:  
        suma += i  
    print(f"La suma de los argumentos es: {suma}")  
    for key, value in kwargs.items():  
        print(f"{key}: {value}")

suma_mixta(  
    1, 2, 3, 4, 5, 6, 7, 8, 9, 10, proyecto="Sumatorio", unidad="2", curso="python"  
)
En este caso los parámetros que son posicionales se quedan asociados a la tupla args, mientras que los que son nombrados forman parte del diccionario kwargs. Es importante decir que después del parámetro *kwargs no se puede definir ningún otro tipo de parámetro.
2.4. Uso del retorno
Además de poder ejecutar todo el código que se ubica dentro del bloque de la función, ésta puede retornar un valor determinado para que sea utilizado en aquellos sitios que sea necesario. Para poder indicar el tipo de retorno tan solo es necesario poner como última línea del método la palabra return, acompañada del dato que se quiera retornar para así poder utilizarlo en la llamada de la función. Veamos un ejemplo:
def procesar_informe(*datos):  
    print("Los datos se han recibido correctamente")  
    if len(datos) > 0:  
        return f"Nombre {datos[0]}nApellido {datos[1]}"  
    elif len(datos) > 2:  
        return "Cantidad de datos incorrecta"  
    else:  
        return "No se han recibido datos"  
print(procesar_informe("Gilbert", "Martinez"))
En este caso la llamada a la función procesar_informe retorna un string con los datos pasados por parámetros en el caso de ser 2 (recordar que el parámetro *args es una tupla). En caso contrario retornara o “cantidad incorrecta” o “no se han recibido datos”. Una vez llamada la función, al obtenerse el string, este puede ser utilizado desde cualquier parte, como por ejemplo dentro de una función print() como en el ejemplo.
2.5. Funciones lambda
Con lo visto hasta aquí, ha quedado claro que para poder definir una función es necesario el uso de la palabra reservada def así como el uso de opcional de parámetros y argumentos para poder escribir una función válida. Sin embargo, existe otro dipo de función que tiene la misma validez y realiza la misma ejecución pero que es más simple de crear. Su nombre es el de funciones lambda, funciones de flecha también llamadas funciones de flecha. Reciben este nombre porque no es necesario asociarle nombre alguno, simplemente es necesario igualarlo a una variable o definirla como parámetro dentro de una función.
Para poder crear un tipo de estas funciones se utiliza la palabra reservada lambda acompañada de los parámetros y el cuerpo de la función separado por : . Como se ha dicho antes, generalmente este tipo de funciones se asocia a una variable para que, al ser llamada, se ejecute la función lambda definida. Veamos un ejemplo:
# definición normal de la función  
def suma(a, b):  
    return a + b

# definición y uso de una función lambda  
sumaVar = lambda a, b: a + b  
print(sumaVar(7, 9))

Esta forma de utilizar las funciones es bastante útil, pero cobra especial relevancia cuando se utiliza como parámetro dentro de otra función:

alumnos = [("Ana", 7), ("Luis", 5), ("Pedro", 9)]  
ordenados = sorted(alumnos, key=lambda x: x[1])  
print(ordenados)
En este caso, la función lambda indicada en el parámetro key, indica que la forma de ordenación que tendrá la tupla es sobre la primera posición del elemento, es decir sobre la nota.
Modularidad
Cuando un programa empieza a crecer y tener muchas líneas de código, se vuelve cada vez más difícil de leer, mantener y reutilizar. Para evitar que todo quede mezclado en un solo archivo enorme, existe un concepto muy importante en programación: el modularidad**.** La idea de ésta es muy sencilla: dividir el programa en partes más pequeñas y organizadas, que se puedan trabajar por separado y luego juntar cuando sea necesario. En Python, esto se consigue gracias a los módulos.
Un módulo en Python no es más que un archivo .py que contiene funciones, variables o clases, y que se puede usar desde otros archivos. Esto te permite, por ejemplo, tener un archivo con todas las funciones matemáticas que usas, otro con validaciones, otro con menús, etc. Para poder utilizar esta funcionalidad es necesario cumplir dos cosas:
Que el archivo que se quiera utilizar está completo y no tenga ningún fallo de codificación
Que el archivo donde queremos utilizar el módulo definido en el punto 1 incorpore como primera línea la palabra reservada import. Esto hará que se importe todo el contenido del fichero y pueda ser utilzado en el fichero actual. En el caso de querer importar solo parte del fichero se utilizará la nomenclatura from nombre__modulo import nombre_funcion
Vamos a ver un ejemplo el código:
En el fichero operaciones.py incorporamos todas las operaciones matemáticas que queremos ejecutar a lo largo de nuestro programa
def sumar(a, b):  
    return a + b

def restar(a, b):  
    return a - b

def multiplicar(a, b):  
    return a * b

def dividir(a, b):  
    if b == 0:  
        return "Error: no se puede dividir entre cero."  
    return a / b

def potencia(base, exponente):  
    return base ** exponente

def raiz_cuadrada(x):  
    if x < 0:  
        return "Error: no se puede calcular la raíz de un número negativo."  
    return x ** 0.5
Una vez tenemos el fichero que realiza todas las operaciones, vamos a crear otro fichero llamado calculadora.py que pide al usuario dos operandos y realiza las operaciones sobre estos, pero llamando a las funciones ya definidas en el módulo anterior:
import operaciones

operando1 = int(input("Introduce el operando 1: "))  
operando2 = int(input("Introduce el operando 2: "))  
operacion = input("Indica la operación a realizar: ").strip()  
print(operacion)

if operacion == "suma":  
    resultado = operaciones.sumar(operando1, operando2)  
elif operacion == "resta":  
    resultado = operaciones.restar(operando1, operando2)  
elif operacion == "multiplicacion":  
    resultado = operaciones.multiplicar(operando1, operando2)  
elif operacion == "division":  
    resultado = operaciones.dividir(operando1, operando2)  
elif operacion == "potencia":  
    resultado = operaciones.potencia(operando1, operando2)  
elif operacion == "raiz":  
    resultado = operaciones.raiz_cuadrada(operando1)  
else:  
    resultado = None

print(f"El resultado de la operación es: {resultado}")
En el caso de solo querer importar alguna de las funciones se utilizaría como primera from X import X, ya no siendo necesaria la llamada al módulo dentro del código:
from operaciones import sumar, restar, multiplicar, dividir, potencia, raiz_cuadrada

operando1 = int(input("Introduce el operando 1: "))  
operando2 = int(input("Introduce el operando 2: "))  
operacion = input("Indica la operación a realizar: ").strip()  
print(operacion)

if operacion == "suma":  
    resultado = sumar(operando1, operando2)  
elif operacion == "resta":  
    resultado = restar(operando1, operando2)  
elif operacion == "multiplicacion":  
    resultado = multiplicar(operando1, operando2)  
elif operacion == "division":  
    resultado = dividir(operando1, operando2)  
elif operacion == "potencia":  
    resultado = potencia(operando1, operando2)  
elif operacion == "raiz":  
    resultado = raiz_cuadrada(operando1)  
else:  
    resultado = None

print(f"El resultado de la operación es: {resultado}")
En estos ejemplos hemos visto como poder importar un módulo creado por nosotros mismo, pero también existe la posibilidad de importar módulos del sistema o descargados para poder utilizar funcionalidades que ya están presentes en el lenguaje. Un ejemplo de uso de de módulos importados desde el sistema sería el siguiente:
import datetime  
now = datetime.datetime.now()  
print("Fecha y hora actual:", now)

date = datetime.datetime(2025, 5, 15)  
print("Fecha personalizada:", date.strftime("%d/%m/%Y"))
En este ejemplo se ha importado el módulo datetime que se encargad de la gestión de fechas, utilizando el método datetime.now para obtener la fecha actual y el constructor datetime para crear una fecha concreto así como el método srtftime para poder formatear una fecha.
Ejercicio
Realiza el siguiente ejercicio para practicar lo visto en esta unidad: Crea un programa en Python que permita gestionar una lista de productos de una tienda. El programa debe utilizar funciones para realizar las siguientes operaciones: Agregar productos con su nombre y precio. Mostrar todos los productos disponibles. Buscar un producto por su nombre y mostrar su precio. Calcular el precio total de todos los productos. Organiza tu código en funciones separadas para cada una de estas acciones. El usuario debe poder elegir qué hacer mediante un menú simple. Además, tendrás que utilizar estructuras de control como listas para poder almacenar todos los productos
Conclusiones
Como hemos podido comprobar, el uso de funciones y la aplicación del diseño modular son herramientas clave para escribir programas más eficientes, ordenados y fáciles de mantener. Saber dividir un problema en partes más pequeñas y tratables no solo nos permite trabajar de manera más estructurada, sino también comprender mejor el código que escribimos y detectar errores con mayor facilidad.
Dominar estos conceptos nos prepara para afrontar proyectos complejos, donde la claridad y la reutilización del código son esenciales para poder llevar a buen puerto el proyecto. Además de esto, nos acerca a las buenas prácticas de programación que se utilizan en el mundo laboral, haciendo que nuestros programas sean más robustos y escalables.
