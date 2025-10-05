import random
import datetime
import pyfiglet

PRECIO_BASE = 45.00
fecha_actual = datetime.date.today()

# Para saber si es socio o no
es_socio = random.random() < 0.8

Dia_semana = fecha_actual.strftime("%A").lower()

print(" Ingreso de Datos ")

try:
    edad = int(input("¿Cuántos años tienes? "))
    altura = float(input("¿Cuánto mides en metros? (Ej: 1.55) "))
    tipo_dia = input("¿Es día laboral o fin de semana? ('laboral' / 'fin de semana'): ").strip().lower()
    provincia = input("¿De qué provincia eres? ('madrid' / 'otra provincia'): ").strip().lower()
    tipo_grupo = input("Tipo de grupo ('familiar', 'colegio' o 'individual'): ").strip().lower()
except ValueError:
    print("Error: Asegúrate de introducir números para la edad y la altura.")
    exit()

# Mostrar si es socio o no 
print(f"\nINFO: Es socio del club: {'SÍ' if es_socio else 'NO'}")
print(f"INFO: El día de la semana detectado es: {Dia_semana.capitalize()}")
print("-" * 30)

# Tarifas

precio_final = PRECIO_BASE
ajuste_aplicado = "Tarifa Base "

# PRIORIDAD 1: El visitante es socio del club y la edad es mayor de 65 años
if es_socio and edad > 65:
    precio_final = 0.00
    ajuste_aplicado = "Entrada Gratuita "

# PRIORIDAD 2: El visitante es socio del club  reside en Madrid
elif es_socio and provincia == 'madrid':
    precio_final *= (1 - 0.50) 
    ajuste_aplicado = "Descuento del 50% "

# PRIORIDAD 3: La altura es inferior a 1.20 metros O la edad es menor de 4 años
elif altura < 1.20 or edad < 4:
    precio_final *= (1 - 0.45) 
    ajuste_aplicado = "Descuento del 45% "

# PRIORIDAD 4: El grupo es de 'colegio' Y la entrada es un Lunes o Viernes
elif tipo_grupo == 'colegio' and Dia_semana in ['lunes', 'viernes']:
    precio_final *= (1 - 0.35) 
    ajuste_aplicado = "Descuento del 35% "

# PRIORIDAD 5: El día de la semana es JUEVES y el tipo de día es laboral
elif Dia_semana == 'jueves' and tipo_dia == 'laboral':
    precio_final *= (1 - 0.30) 
    ajuste_aplicado = "Descuento del 30% "

# PRIORIDAD 6: El visitante es menor de 18 años y la entrada es un día laboral
elif edad < 18 and tipo_dia == 'laboral':
    precio_final *= (1 - 0.25) 
    ajuste_aplicado = "Descuento del 25% "

# PRIORIDAD 7: El grupo es 'familiar' y reside en 'otra provincia'.
elif tipo_grupo == 'familiar' and provincia == 'otra provincia':
    precio_final *= (1 - 0.20) 
    ajuste_aplicado = "Descuento del 20% "

# PRIORIDAD 8: La edad está entre 18 y 25 años y no es socio.
elif 18 <= edad <= 25 and not es_socio:
    precio_final *= (1 - 0.10) 
    ajuste_aplicado = "Descuento del 10% "

# PRIORIDAD 9: La entrada es un SÁBADO o DOMINGO y el grupo es 'familiar'
elif Dia_semana in ['sábado', 'domingo'] and tipo_grupo == 'familiar':
    precio_final *= (1 + 0.05) 
    ajuste_aplicado = "Recargo del 5% "

# PRIORIDAD 10: El día de la semana es MIÉRCOLES y no reside en Madrid
elif Dia_semana == 'miércoles' and provincia != 'madrid':
    precio_final *= (1 + 0.10) 
    ajuste_aplicado = "Recargo del 10% "

# PRIORIDAD 11: La entrada es en fin de semana y el grupo es 'individual' Y reside en 'otra provincia'
elif tipo_dia == 'fin de semana' and tipo_grupo == 'individual' and provincia == 'otra provincia':
    precio_final += 8.00 
    ajuste_aplicado = "Recargo fijo de €8.00 "

# PRIORIDAD 12: Ninguna de las anteriores se cumple
else:
    # Se queda con el PRECIO_BASE inicial (45.00)
    ajuste_aplicado = "Tarifa Base "

# Redondea el precio
precio_formateado = f"{precio_final:.2f}"

# Formato del precio final
banner = pyfiglet.figlet_format(precio_formateado, font="slant")

print("\n\n" + "=" * 50)
print(f"REGLA APLICADA: {ajuste_aplicado}")
print("PRECIO FINAL DE LA ENTRADA:")
print(banner)
print("=" * 50)


