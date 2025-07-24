# Proyecto Demo aplicaciones Telcos Ingeniería.

Este repositorio es el demo de la aplicación web empresarial que ofrece diversas soluciones para la gestión de procesos internos de la empresa Telcos Ingeniería S.A. La aplicación está diseñada para mejorar la eficiencia y facilitar la administración de diferentes áreas de la empresa.

Este demo es solamente una descripcion del proyecto que se realizó para la empresa, no se encontraran funcionalidades back-end por solicitud de la empresa.

El dearrollo sirve como solución a diferentes procesos de la compañia en donde se logra optimizar en gran impacto el consumo de papel, transformando procesos manuales a digitales, a continuacion se describen algunos de los procesos que se lograron digitalizar.

De igual forma, esta aplicación web tiene la fincionalidad de un Web Services, el cual gestiona la información que recibe de una aplicación móvil desarrollada en Android, para el registro de asistencia de los empleados de la compañia.

## Aplicaciones Incluidas

### 1. Módulo de administración de usuarios y asignación de roles.

- **Descripción:** Módulo para administrar el acceso a la plataforma de aplicaciones.
- **Funcionalidades Principales:**
  - Registro de usuarios.
  - Modificación de datos de usuarios.
  - Desactivación de usuarios.

  ![alt text](/public/assets/doc/image-1.png)

### 2. Gestión de Permisos Internos

- **Descripción:** Módulo para la solicitud y aprobación de permisos laborales. Los empleados pueden solicitar permisos y los coordinadores pueden aprobar o rechazar las solicitudes.
- **Funcionalidades Principales:**
  - Registro de permisos por parte de los empleados.
  - Aprobación o rechazo de permisos por parte de los Coordinadores.
  - Notificaciones automáticas para empleados y Coordinadores via correo electrónico.   
  
  ![alt text](/public/assets/doc/image-3.png)

### 3. Control de Asistencia

- **Descripción:** Sistema para el registro y seguimiento de la asistencia de los empleados. Incluye funcionalidades para gestionar horarios, ausencias y permisos.
- **Funcionalidades Principales:**
  - Registro de entradas y salidas por medio de la aplicación móvil desarrollada en android, contenida en otro repositorio.
  - Reportes de asistencia en formato excel para la gestión de nómina.

### 4. Gestión de Reportes de actividades

- **Descripción:** Herramienta para el registro de las actividades adicionales de un número de personas especificas.
- **Funcionalidades Principales:**
  - Registro de tiempo de actividades.
  - módulo de validación por el supervisor.
  - módulo de validación por el Lider o Coordinador.
  - Generación de reportes en excel.

  ![alt text](/public/assets/doc/image-4.png)

### 5. Módulo de Transportes - Pre-operacional motocicletas

- **Descripción:** Sistema para la gestión de pre-operacionales de motocicletas del area de operaciones y red externa de la compañía.
- **Funcionalidades Principales:**

  - Revision lista de chequeo de la motocicleta.
  - Carga de imagen en la cual se visualice la placa y un lateral de la moto.
  - Carga de imagen en la cual se visualice el kilometraje de la moto.
  - Carga de imagen en la cual se visualice el SOAT de la moto.
  - Carga de imagen en la cual se visualice factura de mantenimiento de la moto.
  - Módulo de solicitud para modificación de kilometraje o placa de la moto.
  - Módulo de Validación por parte del personal de transportes, quienes validarán la modificación de kilometraje o placa de la moto.
  - Módulo de Aprobación por parte del personal de control interno, quienes aprobaran la modificación de kilometraje o placa de la moto.
  - Generación de reportes en formato excel.ç

  ![alt text](/public/assets/doc/image-6.png)

  ### 6. Módulo de Transportes - Pre-operacional vehículos

- **Descripción:** Sistema para la gestión de pre-operacionales de vehículos del area de operaciones y red externa de la compañía.
- **Funcionalidades Principales:**

  - Revision lista de chequeo del vehículo.
  - Carga de imagen en la cual se visualice la placa y un lateral del vehículo.
  - Carga de imagen en la cual se visualice el kilometraje del vehículo.
  - Carga de imagen en la cual se visualice el SOAT del vehículo.
  - Carga de imagen en la cual se visualice factura de mantenimiento del vehículo.
  - Módulo de solicitud para modificación de kilometraje del vehículo.
  - Módulo de Validación por parte del personal de transportes, quienes validarán la modificación de kilometraje del vehículo.
  - Módulo de Aprobación por parte del personal de control interno, quienes aprobaran la modificación de kilometraje del vehículo.
  - Generación de reportes en formato excel.

  ![alt text](/public/assets/doc/image-5.png)

  ### 7. Módulo de HSEQ - Actos inseguros

- **Descripción:** Sistema para la gestión reportes de actos inseguras.
- **Funcionalidades Principales:**

  - Formulario para el reporte de actos inseguros.
  - Módulo de cierre de formulario actos inseguros.
  - Generación de reportes en formato excel con filtros específicos como fecha y cédula.

  ![alt text](/public/assets/doc/image-7.png)

  ### 8. Módulo de HSEQ - Condiciones inseguras

- **Descripción:** Sistema para la gestión reportes de condiciones inseguras.
- **Funcionalidades Principales:**
  - Formulario para el reporte de condiciones inseguras.
  - Módulo de cierre de formulario condiciones inseguras.
  - Generación de reportes en formato excel con filtros específicos como fecha y cédula.

![alt text](/public/assets/doc/image-8.png)  

## Requisitos del Sistema

- **Servidor Web:** Apache
- **Base de Datos:** MySQL/MariaDB
- **Lenguaje de Programación:** PHP/Laravel
- **Frontend:** HTML5, CSS3, JavaScript, Bootstrap, Ajax.
- **Versionamiento:** Git

## Instalación

1. Clona el repositorio:
   ```bash
   git clone https://github.com/demo.git
   ```
2. Navega al directorio del proyecto:
   ```bash
   cd gestion_telcos
   ```
3. Instala las dependencias:
   ```bash
   composer install
   phpoffice install
   ```
4. Configura los archivos de conexion que se encuentran en la carpeta `\web\demo\` con las credenciales de tu base de datos y otras configuraciones.

## Uso

Después de completar la instalación, puedes acceder a la aplicación en `https://demo/index.php`. Dependiendo del módulo que desees utilizar, debe configurar el perfil de usuario con los permisos especificados de la siguiente manera.

1. Adimistrador.
2. Aprobador permisos.
3. Consulta nomina.
4. Solicitante permisos.
5. Aprobador actividades.
6. Solicitante actividades.
7. Admin hseq.
8. Solicitante hseq.
9. Admin nomina.
10. Transportes admin.
11. Transporte motos.
12. Consulta tics.
13. Transportes vehículos.
14. Permisos_transportes_motos_actividades.
15. Permisos_transportes_vehículos_actividades.
16. Validador de actividades.

## Notas:

Se omiten las siguientes carpetas /assets/img, /assets/documentos, estas son las rutas de las carpetas donde se almacenan las imágenes de las diferentes aplicaciones que se describen en este documento.

## Manuales de usuario:
Enlace manuales de usuario:
- Gestion de contraseñas.
- Aplicacion Web Permisos.
- Reporte de actividades.
- Pre-operacional motocicletas.
- Pre-operacional vehículos.
- HSEQ - Reporte de actos inseguros.
- HSEQ - Reporte de condiciones inseguras.


## Licencia

Este proyecto está bajo la Licencia MIT - ver el archivo [LICENSE](LICENSE) para más detalles.
