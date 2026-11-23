# Pruebas manuales — Módulo de Pacientes (Laboratorio N° 03)

| # | Caso de prueba | Entrada / Acción | Resultado esperado | Estado |
|---|---|---|---|---|
| 1 | Listado con paginación | Entrar a `/pacientes` | Muestra 10 pacientes ordenados por apellido y enlaces de paginación | OK |
| 2 | Búsqueda por DNI | Escribir dígitos iniciales del DNI en el buscador | Filtra coincidencias por prefijo de DNI | OK |
| 3 | Búsqueda por apellido | Escribir parte del apellido en minúsculas | Filtra sin distinguir mayúsculas/minúsculas y mantiene filtro al paginar | OK |
| 4 | Registro válido | Completar formulario en `/pacientes/create` con datos válidos | Crea el paciente, redirige a su ficha y muestra aviso verde | OK |
| 5 | Validación de campos vacíos | Enviar formulario de registro en blanco | Muestra mensajes de error en español debajo de cada campo | OK |
| 6 | Validación de DNI duplicado | Intentar registrar un DNI ya existente en la BD | Rechaza el envío con «Ya existe un paciente con este DNI.» | OK |
| 7 | Validación de fecha y celular | Ingresar fecha futura o celular de 8 dígitos | Muestra errores de fecha futura y formato de celular (9 dígitos, empieza con 9) | OK |
| 8 | Edición sin conflicto de DNI | Editar celular de un paciente manteniendo su mismo DNI | Actualiza los datos sin marcar el DNI como duplicado | OK |
| 9 | Eliminar paciente con citas | Clic en Eliminar en la ficha de un paciente con citas | Impide borrar y muestra aviso rojo «No se puede eliminar: el paciente tiene citas registradas.» | OK |
| 10 | Eliminar paciente sin citas | Clic en Eliminar en la ficha de un paciente sin citas | Elimina el registro, redirige al listado y muestra aviso verde | OK |
| CP15 | Paciente inexistente (RF05) | Abrir `/pacientes/99999` | Muestra página de error 404 Not Found | OK |