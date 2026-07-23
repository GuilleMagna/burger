# burger

Sitio WordPress del proyecto Burger.

## Desarrollo local

La copia local está pensada para ejecutarse con XAMPP desde `C:\localhost\burger`.
La base de datos y la configuración de cada entorno se mantienen fuera de Git.

## Archivos privados

No se versionan:

- `wp-config.php` ni archivos `.env`
- dumps SQL
- backups de migración `.wpress`
- archivos ZIP o TAR
- contenido de `wp-content/uploads`
- cachés, logs y archivos temporales

Antes de desplegar, configura las credenciales y restaura la base de datos por un
canal privado.
