# Sistema de la Posta de Salud Comunitaria

Proyecto base desarrollado con Laravel y PostgreSQL para la gestión clínica de atención primaria (pacientes, personal médico, citas y atenciones).

- **Asignatura:** DSI406 · Tecnología Backend
- **Institución:** IES Túpac Amaru
- **Estudiante:** [Jose Rodrigo Qquecalño Covarrubias]

## Requisitos del entorno

- PHP 8.3+
- Composer
- PostgreSQL 18
- Laragon / Servidor local

## Instalación y puesta en marcha

1. Clonar el repositorio:
   ```bash
   git clone [https://github.com/honrrand/posta-salud.git](https://github.com/honrrand/posta-salud.git)
   cd posta-salud
   ## Datos de prueba
Comando: php artisan migrate:fresh --seed

| Usuario               | Rol             | Contraseña |
|-----------------------|-----------------|------------|
| admin@posta.test      | administrador   | password   |
| medico@posta.test     | personal_medico | password   |
| recepcion@posta.test  | recepcion       | password   |