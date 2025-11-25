Gestión de Pedidos de Puesto de Perritos Calientes Ambulantes en la Salle
El objetivo es simular el procesamiento de 5 pedidos, utilizando un bucle for para calcular la ganancia total y evaluar la eficiencia del servicio.
1. Entrada
Utiliza un bucle for que itere 5 veces (simulando 5 pedidos). 
En cada iteración (por cada pedido), el programa debe pedir:
Nombre del Cliente.
Cantidad de Perritos.
Tipo de Servicio: 'rápido', 'normal', o 'lento'.
Notita: Si la Cantidad de Perritos es menor o igual a 0$, el pedido se considera Cancelado y debe ser descartado (no genera ganancias ni se procesa, pero sí se cuenta como intento).
2. Procesamiento
Cálculo de Ganancia: Sólo si el pedido es válido (Cantidad de Perritos > 0), calcula la Ganancia del Pedido (GP). El precio base de un perrito es €3.50.
GP = Cantidad de Perritos x Precio Base €
Modificación por Servicio: Aplica un ajuste a la Ganancia del Pedido basado en el Tipo de Servicio:
Si el servicio es 'rápido': Recargo del 10% sobre la Ganancia del Pedido.
Si el servicio es 'lento': Descuento del 20% sobre la Ganancia del Pedido.
Alerta: Si un pedido supera 5 perritos Y el servicio es 'lento', imprime "Riesgo de Cliente Insatisfacido".
3. Salida
El Total de Pedidos Válidos.
El número de pedidos con servicio 'lento'.
La Ganancia Total Acumulada, redondeada a dos decimales en €.

Entrega:
Código fuente: fichero con extensión .py
Pantallazos de varias ejecuciones con sus entradas y salidas.
