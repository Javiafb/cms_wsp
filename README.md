# Proyecto CMS de WhatsApp

## Descripción

Este proyecto es un Sistema de Gestión de Contenidos (CMS) para administrar grupos y usuarios de WhatsApp. Permite a los administradores gestionar grupos, usuarios y visualizar estadísticas relevantes a través de un panel de control intuitivo.

## Características

- **Gestión de Grupos**: Crear, editar y eliminar grupos de WhatsApp.
- **Gestión de Usuarios**: Administrar usuarios, asignar roles y permisos.
- **Estadísticas**: Visualización de estadísticas sobre la actividad de los grupos y usuarios.
- **Autenticación**: Sistema de inicio de sesión seguro para administradores.
- **Interfaz Intuitiva**: Panel de control fácil de usar con gráficos y tablas.

## Requisitos

- PHP 7.4 o superior
- MySQL 5.7 o superior
- Servidor web (Apache, Nginx, etc.)
- Composer

## Instalación

1. Clona el repositorio en tu servidor local:

   ```bash
   git clone https://github.com/Javiafb/cms_wsp.git
   ```

2. Navega al directorio del proyecto:

   ```bash
   cd cms_wsp/admin/panel

   ```

3. Importa la base de datos desde el archivo `cms_wsp.sql`:
   ```bash
   mysql -u tu_usuario -p nombre_de_tu_base_de_datos < cms_wsp.sql
   ```

## Uso

### Gestión de Grupos

- Navega a la sección de grupos en el panel de administración.
- Crea, edita o elimina grupos según sea necesario.
- Visualiza estadísticas sobre la actividad de los grupos.

### Gestión de Usuarios

- Navega a la sección de usuarios en el panel de administración.
- Administra usuarios, asigna roles y permisos.
- Visualiza estadísticas sobre la actividad de los usuarios.

### Estadísticas

- Visualiza gráficos y tablas con información relevante sobre la actividad de los grupos y usuarios.
- Filtra los datos por fechas y otros criterios.

## Contribución

Si deseas contribuir a este proyecto, por favor sigue los siguientes pasos:

1. Haz un fork del repositorio.
2. Crea una nueva rama.
3. Realiza tus cambios y haz commit.
4. Sube tus cambios a tu fork.
5. Abre un Pull Request en el repositorio original.

### Vista de Usuarios

![vista usuario](/public/img/docs/imagenes/img7.png)

![vista usuario](/public/img/docs/imagenes/img6.png)

### Panel de Control

![Panel de Control usuario](/public/img/docs/imagenes/img5.png)

![Panel de Control usuario](/public/img/docs/imagenes/img4.png)

## Aadmin

![Panel de Control administrador](/public/img/docs/imagenes/img3.png)

![Panel de Control administrador](/public/img/docs/imagenes/img2.png)

![Panel de Control administrador](/public/img/docs/imagenes/img1.png)

## Licencia

Este proyecto está licenciado bajo la Licencia MIT. Para más información, consulta el archivo `LICENSE`.
