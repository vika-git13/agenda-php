# 🗂️ Agenda en PHP (DWES – Tarea Unidad 2)

Proyecto sencillo de gestión de contactos utilizando **PHP**, **sesiones** y **formularios HTML**.  
El objetivo de esta tarea es practicar:

- Manejo de `$_SESSION`
- Envío y recepción de datos mediante formularios (`POST` / `GET`)
- Gestión de arrays asociativos en PHP
- Manipulación de datos del usuario (añadir, actualizar, eliminar)

---

## ✨ Funcionalidades

✔ Añadir un nuevo contacto (nombre + teléfono)  
✔ Actualizar el teléfono si el contacto ya existe  
✔ Eliminar un contacto escribiendo solo el nombre  
✔ Mostrar la agenda en forma de tabla  
✔ Vaciar toda la agenda con un botón  
✔ Guardado persistente durante la sesión del usuario  

---

## 📌 Lógica del comportamiento

- Si el usuario introduce **solo nombre**, sin teléfono → el contacto se **elimina**.  
- Si introduce **nombre + teléfono**, y el nombre ya existe → se **actualiza** el teléfono.  
- Si el nombre **no existe** → se crea un nuevo contacto.  
- Botón “Vaciar agenda” elimina todos los contactos de la sesión.

---

## 📂 Estructura del proyecto

```
📁 agenda-php
│── Tarea02.php     # Lógica principal + HTML
│── style.css       # Estilos básicos
└── README.md       # (este archivo)
```

---

## 🧠 Tecnologías

- PHP (sesiones, arrays, condiciones)
- HTML5
- CSS3

---

## 👩‍💻 Autora

**Viktoriia Bohoslavska**  
Proyecto de DWES (Unidad 2)  
