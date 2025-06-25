# 📦 Ejercicios con Arrays en PHP

Este repositorio contiene una serie de ejercicios prácticos enfocados en el uso y manipulación de **arrays en PHP**, incluyendo arrays indexados, asociativos, funciones personalizadas y operaciones básicas de programación.

---

## 🧪 Descripción general

El objetivo de estos ejercicios es comprender cómo se crean, recorren, modifican y utilizan los arrays en PHP, tanto simples como asociativos, así como aplicar funciones básicas para trabajar con ellos.

---

## 🔢 Nivel 1 - Ejercicios

### ✅ Ejercicio 1: Recorrer un array

- Crear un array con 5 números enteros.
- Mostrar cada número por pantalla uno a uno.

### ✅ Ejercicio 2: Eliminar y reorganizar un array

- Crear un array `$X = array(10, 20, 30, 40, 50, 60);`
- Mostrar su tamaño.
- Eliminar un elemento del array.
- Mostrar nuevamente el tamaño del array actualizado.

### ✅ Ejercicio 3: Función de coincidencia de caracteres

- Crear una función que reciba:
  - Un array de palabras.
  - Un carácter.
- La función debe devolver `true` si **todas** las palabras del array contienen ese carácter.

📌 _Ejemplo:_  
`["hola", "Php", "Html"]` con `"h"` → `true`  
`["hola", "Php", "Html"]` con `"l"` → `false`

### ✅ Ejercicio 4: Array asociativo personal

- Crear un array asociativo con información personal:
  - nombre
  - edad
  - email
  - comida favorita

---

## 🔢 Nivel 2 - Ejercicios

### ✅ Ejercicio 1

Crea un programa que contenga dos arrays de números enteros/floats. Una vez creados, muestra por pantalla el resultado de:

-La intersección de los dos arrays (números en común)
-La mezcla de ambos arrays.

### ✅ Ejercicio 2

Crea un programa que liste las notas de los/as alumnos/as de una clase. Por eso deberemos utilizar un array asociativo donde la clave será el nombre de cada alumno/a.

Además, crea una función que, dadas las notas de todos los alumnos/as, nos muestre tanto la media de la nota de cada alumno, como la nota media de la clase entera.

## 🔢 Nivel 3 - Ejercicios

### ✅ Ejercicio 1 - array_map()

Dado un array de enteros, haz un programa que:

Devuelva cada valor del array elevado al cubo utilizando la función array_map().

### ✅ Ejercicio 2 - array_filter()

Dado un array de strings, haz un programa que:

Devuelva un array donde sólo estén los strings que tengan un nombre par de caracteres usando la función array_filter().

### ✅ Ejercicio 3 - array_reduce()

Dado un array de enteros, haz un programa que nos devuelva la suma de los enteros del array que sean primeros  utilizando la función array_reduce().

## Requisitos

-PHP 7.4 o superior
-Acceso a consola o terminal (CMD, PowerShell, Terminal de Linux/Mac)
-Editor de código como VS Code

## 💻 Cómo clonar este repositorio

Si deseas clonar el proyecto desde GitHub y ejecutarlo en tu equipo, sigue estos pasos:

git clone <https://github.com/Antonia90/1.3-Arrays.git>
cd arrays_nivel_1

## ▶️ Ejecución

Para visualizar los ejercicios:

Asegúrate de que el servidor PHP esté corriendo (opcional, recomendado):

php -S localhost:8000

Abre tu navegador y accede a <http://localhost:8000/ejercicios_nivel_1.php>
