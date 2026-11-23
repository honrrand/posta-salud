# Pruebas manuales — Módulo de Pacientes (Laboratorio N° 03)

| # | Caso de prueba | Entrada / Acción | Resultado esperado | Estado |
|---|---|---|---|---|
| 1 | Listado con paginación (RF05) | Entrar a `/pacientes` | Muestra 10 pacientes ordenados por apellido y enlaces de paginación | OK |
| 2 | Búsqueda por DNI (RF05) | Escribir dígitos iniciales del DNI en el buscador | Filtra coincidencias por prefijo de DNI | OK |
| 3 | Búsqueda por apellido (RF05) | Escribir parte del apellido en minúsculas | Filtra sin distinguir mayúsculas/minúsculas y mantiene filtro al paginar | OK |
| 4 | Registro válido (RF04) | Completar formulario en `/pacientes/create` con datos válidos | Crea el paciente, redirige a su ficha y muestra aviso verde | OK |
| 5 | Validación de campos vacíos (RN01) | Enviar formulario de registro en blanco | Muestra mensajes de error en español debajo de cada campo | OK |
| 6 | Validación de DNI duplicado (RN01) | Intentar registrar un DNI ya existente en la BD | Rechaza el envío con «Ya existe un paciente con este DNI.» | OK |
| 7 | Validación de fecha futura (RN01) | Ingresar una fecha de nacimiento posterior a hoy | Rechaza el envío con «La fecha de nacimiento no puede ser futura.» | OK |
| 8 | Validación de formato de celular (RN01) | Ingresar celular con menos de 9 dígitos o que no empiece con 9 | Muestra error de 9 dígitos y que debe empezar con 9 | OK |
| 9 | Ver ficha del paciente (RF05) | Clic en «Ver» desde el listado | Muestra datos completos del paciente y sus últimas 5 citas | OK |
| 10 | Edición de datos válidos (RF06) | Clic en «Editar», modificar dirección o celular y guardar | Actualiza los datos, vuelve a la ficha y muestra aviso verde | OK |
| 11 | Edición sin conflicto de DNI (RN01) | Editar un paciente manteniendo su propio DNI | Guarda los cambios sin marcar el DNI como duplicado | OK |
| 12 | Edición con DNI de otro paciente (RN01) | Cambiar el DNI al de otro paciente ya registrado | Rechaza el envío con «Ya existe un paciente con este DNI.» | OK |
| 13 | Eliminar paciente con citas (RF07) | Clic en «Eliminar» en la ficha de un paciente con citas | Impide borrar y muestra aviso rojo «No se puede eliminar: el paciente tiene citas registradas.» | OK |
| 14 | Eliminar paciente sin citas (RF07) | Clic en «Eliminar» en la ficha de un paciente sin citas | Elimina el registro, redirige al listado y muestra aviso verde | OK |
| 15 | Paciente inexistente (RF05) | Abrir `/pacientes/99999` | Muestra página de error 404 Not Found | OK |