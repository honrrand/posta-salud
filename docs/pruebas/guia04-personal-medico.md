# Pruebas del módulo Personal médico (Guía 04)

Fecha: 24/11/2026 · Responsable: José Rodrigo Qquecaño Covarrubias

| Caso | Resultado | Observación |
|------|-----------|-------------|
| CP01 | OK        | 5 activos con etiqueta verde y n.° de citas |
| CP02 | OK        | Filtro Inactivos muestra 1 y Todos muestra 6 |
| CP03 | OK        | Búsqueda combinada con especialidad filtra correctamente |
| CP04 | OK        | Formulario vacío muestra mensajes de validación en español |
| CP05 | OK        | Colegiatura de 3 dígitos rechazada (4 a 6 dígitos) |
| CP06 | OK        | DNI o colegiatura duplicados rechazados (RN01) |
| CP07 | OK        | Especialidad alterada con F12 rechazada por Rule::in |
| CP08 | OK        | Profesional registrado con medico2@posta.test; activos sube a 6 |
| CP09 | OK        | Cuenta medico2 ya no aparece en el selector de cuentas libres |
| CP10 | OK        | Edición de especialidad sin falsos duplicados |
| CP11 | OK        | Edición con colegiatura de otro profesional rechazada (RN01) |
| CP12 | OK        | Dra. Huamán desactivada con aviso de citas por reprogramar |
| CP13 | OK        | Dra. Huamán reactivada correctamente |
| CP14 | OK        | route:list --path=personal-medico sin ruta DELETE |