import tkinter as tk
from tkinter import messagebox
import random
import datetime

class NavarredondaApp:
    def __init__(self, root):
        self.root = root
        self.root.title("Atracciones NAVARREDONDA")
        self.root.geometry("400x300")

        
        self.datos = {
            "edad": 21,
            "altura": 1.55,
            "socio": random.random() < 0.8,
            "provincia": "otra provincia",
            "grupo": "individual",
            "tipo_dia": "laboral"
        }
        
        self.PRECIO_BASE = 45.00
        self.fecha_actual = datetime.date.today()
        self.dia_semana = self.fecha_actual.strftime("%A").lower()

        self.crear_menu()
        
       
        tk.Label(root, text="Bienvenidos a NAVARREDONDA", font=("Arial", 14, "bold")).pack(pady=50)
        tk.Label(root, text="Use el menú 'Calcular' para introducir datos").pack()

    def crear_menu(self):
        menu_barra = tk.Menu(self.root)
        self.root.config(menu=menu_barra)

        # Menu Calcular
        menu_calcular = tk.Menu(menu_barra, tearoff=0)
        menu_barra.add_cascade(label="Calcular", menu=menu_calcular)
        
        menu_calcular.add_command(label="Persona", command=self.ventana_persona)
        menu_calcular.add_command(label="Grupo", command=self.ventana_grupo)
        menu_calcular.add_command(label="Tipo de Día", command=self.ventana_tipo_dia)
        
        # Ver Resultado
        menu_barra.add_command(label="Ver Resultado", command=self.mostrar_resultado)
        
        # Opción Salir
        menu_barra.add_command(label="Salir", command=self.root.quit)

    # Persona
    def ventana_persona(self):
        v = tk.Toplevel(self.root)
        v.title("Datos de Persona")
        v.geometry("300x250")

        tk.Label(v, text="Edad:").grid(row=0, column=0, padx=10, pady=5)
        ent_edad = tk.Entry(v)
        ent_edad.insert(0, str(self.datos["edad"]))
        ent_edad.grid(row=0, column=1)

        tk.Label(v, text="Altura (m):").grid(row=1, column=0, padx=10, pady=5)
        ent_altura = tk.Entry(v)
        ent_altura.insert(0, str(self.datos["altura"]))
        ent_altura.grid(row=1, column=1)

        var_socio = tk.BooleanVar(value=self.datos["socio"])
        tk.Checkbutton(v, text="¿Es Socio?", variable=var_socio).grid(row=2, columnspan=2, pady=5)

        tk.Label(v, text="Provincia:").grid(row=3, column=0)
        var_prov = tk.StringVar(value=self.datos["provincia"])
        tk.Radiobutton(v, text="Madrid", variable=var_prov, value="madrid").grid(row=3, column=1, sticky="w")
        tk.Radiobutton(v, text="Otra", variable=var_prov, value="otra provincia").grid(row=4, column=1, sticky="w")

        def guardar():
            try:
                self.datos["edad"] = int(ent_edad.get())
                self.datos["altura"] = float(ent_altura.get())
                self.datos["socio"] = var_socio.get()
                self.datos["provincia"] = var_prov.get()
                v.destroy()
            except ValueError:
                messagebox.showerror("Error", "Introduce valores numéricos válidos")

        tk.Button(v, text="Guardar", command=guardar, bg="green", fg="white").grid(row=5, columnspan=2, pady=10)

    #  Grupo
    def ventana_grupo(self):
        v = tk.Toplevel(self.root)
        v.title("Seleccionar Grupo")
        v.geometry("200x200")

        lb = tk.Listbox(v, height=3)
        opciones = ["individual", "familiar", "colegio"]
        for op in opciones: lb.insert(tk.END, op)
        lb.pack(pady=10)

        def guardar():
            if lb.curselection():
                self.datos["grupo"] = lb.get(lb.curselection())
                v.destroy()
            else:
                messagebox.showwarning("Atención", "Selecciona una opción")

        tk.Button(v, text="Guardar", command=guardar).pack()

    # Tipo dia
    def ventana_tipo_dia(self):
        v = tk.Toplevel(self.root)
        v.title("Tipo de Día")
        v.geometry("200x150")

        var_dia = tk.StringVar(value=self.datos["tipo_dia"])
        tk.Radiobutton(v, text="Laboral", variable=var_dia, value="laboral").pack(anchor="w", padx=20)
        tk.Radiobutton(v, text="Fin de Semana", variable=var_dia, value="fin de semana").pack(anchor="w", padx=20)

        tk.Button(v, text="Guardar", command=lambda: [self.datos.update({"tipo_dia": var_dia.get()}), v.destroy()]).pack(pady=10)

    # Precios
    def mostrar_resultado(self):
        res = tk.Toplevel(self.root)
        res.title("Resultado Final")
        res.geometry("350x300")

        precio = self.PRECIO_BASE
        regla = "Tarifa Base"
        
        d = self.datos 
        dia = self.dia_semana

        
        if d["socio"] and d["edad"] > 65:
            precio = 0.0; regla = "Entrada Gratuita (Socio > 65)"
        elif d["socio"] and d["provincia"] == "madrid":
            precio *= 0.5; regla = "Descuento 50% (Socio Madrid)"
        elif d["altura"] < 1.20 or d["edad"] < 4:
            precio *= 0.55; regla = "Descuento 45% (Niño/Bajo)"
        elif d["grupo"] == "colegio" and dia in ["lunes", "viernes"]:
            precio *= 0.65; regla = "Descuento 35% (Colegio Lun/Vie)"
        elif dia == "jueves" and d["tipo_dia"] == "laboral":
            precio *= 0.70; regla = "Descuento 30% (Jueves Laboral)"
        elif d["edad"] < 18 and d["tipo_dia"] == "laboral":
            precio *= 0.75; regla = "Descuento 25% (Menor Laboral)"
        elif d["grupo"] == "familiar" and d["provincia"] == "otra provincia":
            precio *= 0.80; regla = "Descuento 20% (Familia No Madrid)"
        elif 18 <= d["edad"] <= 25 and not d["socio"]:
            precio *= 0.90; regla = "Descuento 10% (Joven no socio)"
        elif dia in ["sábado", "domingo", "saturday", "sunday"] and d["grupo"] == "familiar":
            precio *= 1.05; regla = "Recargo 5% (Familiar Finde)"
        elif dia in ["miércoles", "wednesday"] and d["provincia"] != "madrid":
            precio *= 1.10; regla = "Recargo 10% (Miércoles No Madrid)"
        elif d["tipo_dia"] == "fin de semana" and d["grupo"] == "individual" and d["provincia"] == "otra provincia":
            precio += 8.00; regla = "Recargo fijo 8€ (Indiv. Finde No Madrid)"

        # Muestra los datos
        info_texto = f"""
        DATOS INTRODUCIDOS:
        --------------------------
        Edad: {d['edad']} años
        Altura: {d['altura']} m
        Socio: {'Sí' if d['socio'] else 'No'}
        Provincia: {d['provincia'].capitalize()}
        Grupo: {d['grupo'].capitalize()}
        Tipo Día: {d['tipo_dia'].capitalize()}
        Día Semana: {dia.capitalize()}
        --------------------------
        REGLA: {regla}
        PRECIO FINAL: {precio:.2f} €
        """
        tk.Label(res, text=info_texto, justify="left", font=("Courier", 10)).pack(pady=10)
        tk.Button(res, text="Cerrar", command=res.destroy).pack()

if __name__ == "__main__":
    root = tk.Tk()
    app = NavarredondaApp(root)
    root.mainloop()