import tkinter as tk
from tkinter import messagebox
import random
import datetime

class NavarredondaApp:
    def __init__(self, root):
        self.root = root
        self.root.title("3 jinetes")
        self.root.geometry("400x300")

        
        self.datos = {
            "Caballo": 3,
            "3": 3,
            "sota": 2
           
        }
        
        self.PRECIO_BASE = 0
        self.fecha_actual = datetime.date.today()
        self.dia_semana = self.fecha_actual.strftime("%A").lower()

        self.crear_menu()
        
       
        tk.Label(root, text="3 jinetes", font=("Arial", 14, "bold")).pack(pady=50)
        tk.Label(root, text="Use el menú 'Calcular' para introducir datos").pack()

    def crear_menu(self):
        menu_barra = tk.Menu(self.root)
        self.root.config(menu=menu_barra)

        # Menu Calcular
        menu_calcular = tk.Menu(menu_barra, tearoff=0)
        menu_barra.add_cascade(label="palos", menu=menu_calcular)

        
        menu_calcular.add_command(label="Persona", command=self.ventana_persona)
        menu_calcular.add_command(label="Grupo", command=self.ventana_grupo)
        menu_calcular.add_command(label="Tipo de Día", command=self.ventana_tipo_dia)
        
        # Ver Resultado
        menu_barra.add_command(label="oros", command=self.mostrar_resultado)
        menu_calcular = tk.Menu(menu_barra, tearoff=0)
        menu_calcular = tk.Menu(menu_barra, tearoff=0)
        menu_barra.add_cascade(label="palos", menu=menu_calcular)      
        # Opción Salir
        menu_barra.add_command(label="Resultado", command=self.root.quit)

    # Persona
    def ventana_persona(self):
        v = tk.Toplevel(self.root)
        v.title("palos")
        v.geometry("300x250")

        tk.Label(v, text="oros:").grid(row=3, column=0)
        var_prov = tk.StringVar(value=self.datos["oros"])
        tk.Radiobutton(v, text="3", variable=var_prov, value="3").grid(row=3, column=1, sticky="w")
        tk.Radiobutton(v, text="caballo", variable=var_prov, value="caballo").grid(row=4, column=1, sticky="w")
        tk.Radiobutton(v, text="sota", variable=var_prov, value="sota").grid(row=4, column=1, sticky="w")
        def guardar():
            try:
               
                self.datos["Oros"] = var_prov.get()
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

        
        if d["oros"] == 'sota' :
            precio + 2 
        elif d["oros"] == "3":
            precio + 3
        elif d["oros"] == "caballo":
            precio + 3
        
        
      

        # Muestra los datos
        info_texto = f"""
        DATOS INTRODUCIDOS:
        --------------------------
        : {d['2']} puntos
        3: {d['3']} 
        Sota: {['2'] }
        PRECIO FINAL: {precio:.2f} €
        """
        tk.Label(res, text=info_texto, justify="left", font=("Courier", 10)).pack(pady=10)
        tk.Button(res, text="Cerrar", command=res.destroy).pack()

if __name__ == "__main__":
    root = tk.Tk()
    app = NavarredondaApp(root)
    root.mainloop()
  -------------------------------  
    
    
    import read from yogi
x=1
y= read (int)
x, y = map(int, input().split())
start = max(x, y)
end = min(x, y)
for i in range(start, end - 1, -1):
    print(i)

x, y = map(int, input().split())


