from ast import If
import random
import pyfiglet 
import datetime
fecha_actual= datetime.date.today()
Dia_semana = fecha.isoweekday()
Pregunta_edad = int(input("¿Cuantos años tienes?"))
Pregunta_tipo_dia = input("¿Es día laboral o fin de semana?")
Pregunta_provincia = input("¿De qué provincia eres?")
Pregunta_altura = int(input("¿Cuanto mides en metros?"))
Pregunta_tipo_persona = input("Vienes sólo o en grupo de colegio o familiar?")

ser_socio=random.choice(range(1, 9))
Precio = 45

if (ser_socio <8):
  prompt = ("Eres socio")
else:
  prompt= ("No eres socio")
#Pregunta 1
if (Pregunta_edad > 65 and ser_socio < 8):
  Print=(" Vas a pagar 0 euros ")
elif ( Pregunta_edad < 65 or ser_socio < 8):
  Print = ("Vas a pagar 45 euros")
#Pregunta 2
if (ser_socio < 8 and Pregunta_provincia == "Madrid"):
  Print= ("Vas a pagar 22,50 euros")
elif (ser_socio > 8 or Pregunta_provincia =!"Madrid"):

  Print = ("Vas a pagar" + 45 + "euros")
# Pregunta 3
if (Pregunta_altura < 1,20 metros or Pregunta_edad <4 )
  print = (" Tu entrada es de 20,25 euros")
elif Print ("Tu entrada es de 45 euros")
#Pregunta 4
if (Pregunta_tipo_persona == "colegio" and dia_semana == "Lunes " or dia_Semana == "Viernes"):
  print = ("tu entrada es de 15,75 euros")
elif (Pregunta_tipo persona =! "colegio" and dia_semana =! "Lunes " or dia_Semana =! "Viernes"):
  print = ("tu entrada es de 45 euros")
#Pregunta 5
if ( dia_semana == "Jueves" and Pregunta_tipo_dia == "laboral"):
  print=("Día del estudiante, pagáis 13, 5 euros")
elif (dia_semana =! "Jueves" or Pregunta_tipo_dia =! "laboral"):
  print ("Tu entrada es de 45 euros")
#Pregunta 6
      
if ( Pregunta_edad < 18 and Pregunta_tipo_persona == "laboral"):
  print=("Tu entrada es de 32 euros")
elif (Pregunta_edad >= 18 or Pregunta_tipo_persona =! "laboral"):
  print ("Tu entrada es de 45 euros")
# Pregunta 7
if (Pregunta_tipo_persona == "familiar" and Pregunta_provincia =! "Madrid"):
  print ("Tu entrada es de 36 euros")
elif ("Tu entrada es de 45 euros")
#Pregunta 8
  if (18> Pregunta_edad <45 and ser_socio < 8):
    print=(40 euros)
  else if ("Tu entrada es de 45 euros")
  #Pregunta 9 
  if (Dia_semana=="Sabado" or Dia_semana =="Domingo"):
    print=("Tu entrada es de 48 euros")
  else if ("Tu entrada es de 45 euros")
# Pregunta 10
    if (dia_Semana ="Miércoles" and Pregunta_provincia=! "Madrid"):
      print=("Tu entrada es de 50 euros")
    else if ("Tu entrada es de 45 euros")
# Pregunta 11
    if ( dia_semana ="Sábado" or Dia_semana="Domingo" and Pregunta_tipo_persona= "individual" and Pregunta_provincia =!"Madrid"):
      print=("Tu entrada es de 53 euros")
# Pregunta 12