import random
import datetime
import pyfiglet
for i in range(5):
    print("ingreso de datos")


    Precio_base = 3.50


    try:
        Nombre=input("Cual es tu nombre?").strip().lower()
        num_perritos=int(input("Cuantos perritos quieres?"))
        Tipo_servicio=input("Elige entre rápido,normal o lento ").strip().lower()
    except ValueError:

        print("Vuelve a escribirlo")
        exit()

    if num_perritos >0 :
        print (f"El precio inicial es :{Precio_base*num_perritos}€")
        print (f"El total de pedidos:{i}")
        if Tipo_servicio == "rapido":
            print (f"Precio final:{Precio_base*num_perritos + 0.1*Precio_base*num_perritos}€")
            
        elif Tipo_servicio =="lento":
            print(f" Precio final:{Precio_base*num_perritos - 0.2*Precio_base*num_perritos} €" )
            print (f"Numero de perritos total:{num_perritos}")
        elif num_perritos >5 and Tipo_servicio == "lento":
            alert("Riesgo de Cliente Insatisfacido")
            print(f"Total de pedidos: {i}")
    
