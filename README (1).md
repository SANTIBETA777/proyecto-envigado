# Guía de despliegue para E-School


## Requisitos previos
- Cuenta activa en GitHub.
- Cuenta en Railway para alojar el proyecto
- Cuenta en Render para alojar la base de datos


## Preparación del proyecto
1. Crear la base de datos de PostgreSQL y copia las credenciales en tus archivos `.env` del proyecto 
(por ejemplo `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME` y `DB_PASSWORD`).
2. Crear un nuevo proyecto en Railway y conectar el repositorio de GitHub donde subiste tu proyecto.


## Configuración para Railway
1. Actualizar el archivo `.env.production` con las credenciales que Railway provea.
2. Configurar en Railway el comando de build: `npm run build`.
3. Configurar el comando de arranque: `php artisan serve`.
4. Establecer cualquier variable de entorno adicional directamente en la sección **Variables** del panel de Railway.


## Despliegue
1. Empujar los cambios a GitHub para que Railway los detecte.
2. Ejecutar el despliegue manualmente desde Railway 
3. Verificar los logs en Railway para confirmar que el build y el arranque ocurren sin errores.


## Notas útiles
- Si el despliegue falla, revisar primero que las migraciones de base de datos se hayan ejecutado correctamente.
- Considerar habilitar alertas o notificaciones dentro de Railway para enterarse de fallos de manera temprana.
- Mantener sincronizado el archivo `.env.production` con cualquier cambio que se realice en el entorno local.
- Si falla el css añadir la ruta del css (`ASSET_URL`=https://e-school-production.up.railway.app)
- Poner de url, la url del proyecto (`APP_URL`=https://e-school-production.up.railway.app)
- Si se usa vite, añadirlo (`VITE_APP_URL`=https://e-school-production.up.railway.app)
- Añadir paquetes adicionales si se necesitan (`NIXPACKS_NODE_VERSION`="18")
- Poner el modo debug en false

