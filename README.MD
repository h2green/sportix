# Introducción
---
Este proyecto es una aplicación web de comercio electrónico desarrollada utilizando PHP, con un servidor configurado manualmente que incluye Nginx, MySQL, phpMyAdmin, DNS gratuito y un certificado SSL.

Desarrollado por un equipo colaborativo, este proyecto abarca tanto el frontend como el backend para proporcionar una experiencia completa de comercio electrónico.

La aplicación web proporciona una plataforma para comprar productos (ropa), con caracteristicas adicionales como inicio de sesión, registro, verificación de correo electrónico, encriptación de contraseñas y protección contra inyecciones SQL. Además, incluye páginas de guía para la escuela en la sección ASIDE.

El servidor fue configurado desde cero, incluyendo la instalación y configuración de Nginx como servidor web, MySQL como sistema de gestión de bases de datos, y la implementación de un certificado SSL para garantizar la seguridad de las consultas.

Este documento proporciona una descripción detallada de la aplicación, incluyendo su estructura de código, un diagrama de flujo, funcionalidad, proceso de instalación y configuración, y más. 

# Instalación y Configuración
---
Para instalar y configurar esta aplicación, necesitarás tener instalado un servidor con Nginx o Apache, MySQL y Composer para instalar Symfony Mailer/Mime. Aquí te proporcionamos los pasos generales que debes seguir:

## Requisitos Previos

1. **Servidor Web**: Necesitarás tener instalado Nginx o Apache en tu servidor. Puedes encontrar guías de instalación en los sitios web oficiales de Nginx o Apache.
2. **MySQL**: También necesitarás tener instalado MySQL. Puedes encontrar una guía de instalación en el sitio web oficial de MySQL.
3. **Composer**: Necesitarás tener instalado Composer para instalar Symfony. Puedes encontrar una guía de instalación en el sitio web oficial de Composer o en el sitio web oficial de Symfony.
4. **PHPUnit** (Opcional): Necesitaras tener instalado PHPUnit instalado y configurado para poder ejecutar las pruebas.

## Instalación de la aplicación

1. **Clonar el repositorio**: Clona el repositorio de la aplicación en tu servidor.
2. **Instalar dependencias**: Navega al directorio del proyecto y ejecuta <font style="color:orange">composer install</font> para instalar todas las dependencias necesarias especificadas en el archivo <font style="color:orange">composer.json</font>.
3. **Configurar la conexión a la base de datos**: Necesitarás cambiar los datos de la conexión a la base de datos en el archivo <font style="color:orange">backend/includes/dbconn.inc.php</font> para que coincidan con tu configuración de MySQL.
4. **Importar las tablas del esquema de la base de datos**: El repositorio viene con un schema definido de la base de datos listo para importar.

## Ejecución de la aplicación

Una vez que hayas completado los pasos anteriores, deberías poder iniciar la aplicación navegando a la URL de tu servidor en un navegador web.

# Estructura del código
---
La aplicación está organizada en varios directorios y archivos:

- <font style="color:orange">backend/</font>: Este directorio contiene la lógica principal de la aplicación, incluyendo los controladores, modelos y vistas.
- <font style="color:orange">IMG/</font>: Este directorio contiene todas las imágenes utilizadas en la aplicación.
- <font style="color:orange">JS/</font>: Este directorio contiene los scripts de JavaScript utilizados en la aplicación.
- <font style="color:orange">LAYOUT/</font>: Este directorio contiene los archivos PHP que definen la estructura básica de las páginas de la aplicación.
- <font style="color:orange">STYLE/</font>: Este directorio contiene los archivos CSS que definen el estilo de la aplicación.
- <font style="color:orange">composer.json</font>: Este archivo define las dependencias de PHP de la aplicación.
- <font style="color:orange">*.php</font>: Estos archivos en la raiz del proyecto son las páginas principales de la aplicación.

# Descripción general de la funcionalidad
---
Esta es una aplicación de comercio electrónico que permite a los usuarios registrarse, iniciar sesión, ver articulos, agregarlos al carrito y realizar compras. La aplicación también incluye características de seguridad como la verificación de correo electrónico, la encriptación de contraseñas y la protección contra inyecciones SQL.

# Descripción detallada de la funcionalidad
---

- **Registro e inicio de sesión**: Los usuarios pueden registrarse proporcionando su correo electrónico y una contraseña. La contraseña se encripta antes de almacenarse en la base de datos. Después del registro, los usuarios deben verificar su correo electrónico antes de poder realizar una compra. Los intentos de inyección SQL en el formulario de inicio de sesión son detectados y bloqueados. 
- **Ver artículos**:  Los usuarios pueden ver los productos disponibles para la venta. Los detalles de los productos se recuperan en la base de datos MySQL.
- **Carrito**: Los usuarios pueden agregar artículos a su carrito. El carrito se almacena en la sesión del usuario, por lo que persiste mientras el usuario está conectado.
- **Configuración de la sesión**: Al inicio de cada solicitud, se configuran los parámetros de la sesión. Esto incluye la configuración de la cookie de sesión para que expire después de un día, esté disponible en todas las páginas y en el dominio y solo se envíe con solicitudes del mismo sitio.
- **Inicio de la sesión**: Se inicia la sesión con <font style="color:orange">session_start()</font>. Esto crea una nueva sesión o reanuda la sesión existente basada en la cookie de sesión enviada por el cliente.
- **Regeneración de la sesión**: Si el usuario ha iniciado sesión, la sesión se regenera cada hora para evitar ataques de sesión. Esto se hace mediante la función <font style="color:orange">regenerate_session_id_loggedin()</font>, que no se muestra en el fragmento de código proporcionado, pero presumiblemente regenera el ID de la sesión. Si el usuario no ha iniciado sesión, la sesión se regenera cada vez que se carga la página. Esto es para proporcionar una capa adicional de seguridad, ya que los limita el tiempo de las sesiones que los atacantes podrían utilizar.

# Diagrama de Flujo representando la funcionalidad
---

## Nivel 0 -
```mermaid
graph TD
  subgraph "Aplicación de Comercio Electrónico"
    subgraph "Usuario"
      A[Registro e inicio de sesión]
      B[Ver artículos]
      C[Agregar artículos al carrito]
      D[Realizar compras]
      E[Verificación de correo]
      F[Encriptación de contraseñas]
      G[Protección contra inyecciones SQL]
    end
  end

  style A B C D E F G fill:#86C7F3,stroke:#333,stroke-width:2px;
  style subgraph "Aplicación de Comercio Electrónico" fill:#F8F9FA,stroke:#333,stroke-width:2px;
```

# Uso del proyecto
---

## Lado del cliente
1. **Registro e inicio de sesión**: Para utilizar la aplicación, primero debes registrarte proporcionando un correo electrónico y una contraseña. Después de registrarte, recibirás un correo electrónico de verificación. Una vez que verifiques tu correo electrónico, podrás realizar compras en la aplicación.
2. **Ver artículos**: Puedes ver los productos disponibles para la venta en la página principal de la aplicación.
3. **Agregar artículos al carrito**: Para agregar un producto a tu carrito, haz clic en el botón "Agregar al carrito" en la página del producto.
4. **Realizar compras**: Para comprar los productos en tu carrito, ve a la página del carrito y haz clic en el botón "Comprar".

## Lado del administrador
1. **Iniciar sesión en la base de datos**: Como administrador tendrás que iniciar sesión en la interfaz  <font style="color:orange">phpmyadminl</font> de la aplicación.
2. **Gestionar artículos**: Una vez que hayas iniciado sesión, tendrás acceso a la interfaz de administración donde puedes agregar, editar o eliminar productos.
3. **Gestionar usuarios**: También puedes ver y gestionar los usuarios registrados en la aplicación. <font style="color:orange">DISCLAIMER:</font> Van a aparecer las contraseñas encriptadas.

# Pruebas
---
Para garantizar la calidad del código, se deben realizar pruebas unitarias y de integración. Aquí te explicamos cómo hacerlo:
1. **Pruebas unitarias**: Las pruebas unitarias se utilizan para probar funciones individuales en el código. Para ejecutar las pruebas unitarias, puedes usar el comando <font style="color:orange">phpunit</font> seguido del nombre del nombre del archivo de prueba. Por ejemplo <font style="color:yellow">phpunit</font> <font style="color:lime">tests/ExampleTest.php</font>
2. **Pruebas de integración**:Las pruebas de integración se utilizan para probar cómo las diferentes partes de la aplicación trabajan juntas. Para ejecutar las pruebas de integración, puedes usar el comando <font style="color:orange">phpunit</font> seguido del nombre del archivo de prueba. Por ejemplo: <font style="color:yellow">phpunit</font> <font style="color:lime">tests/Integration/ExampleTest.php</font>

# Contribución
---
Agradecemos y valoramos cualquier contribución que desees hacer al proyecto. Aquí te explicamos cómo puedes hacerlo:

1. **Fork del repositorio**: Haz un fork del repositorio del proyecto en GitHub.
2. **Clona el repositorio**: Clona el repositorio a tu máquina local usando `git clone`.
3. **Crea una nueva rama**: Crea una nueva rama para tu característica o corrección de errores usando `git checkout -b nombre-de-tu-rama`.
4. **Realiza tus cambios**: Realiza los cambios que desees en tu rama.
5. **Ejecuta las pruebas**: Asegúrate de que todas las pruebas pasen después de tus cambios.
6. **Commit y push de tus cambios**: Haz un commit de tus cambios con un mensaje de commit descriptivo y haz push de tu rama a tu repositorio de GitHub.
7. **Crea un Pull Request**: En GitHub, crea un nuevo Pull Request desde tu rama hacia el repositorio original del proyecto.

# Licencia y Créditos:
---
## Licencia
Este proyecto se distribuye bajo la licencia Creative Commons Attribution 4.0	

## Créditos
Desarrollado por:

- **Valentin Tito**: Frontend
- **Brian Olesnievicz**: Backend
- **Joaquin Reynoso**: Fullstack 

Tiempo dedicado:
Le dedicamos aproximadamente 38 horas semanales.

## Retroalimentación y Mejoras
Apreciamos cualquier retroalimentación que puedan ofrecer. Algunos puntos que podríamos mejorar incluye:

1. El uso de la API de Mercado Libre para extraer los datos de los productos directamente de ahi.
2. El uso de una libreria para verificar tarjetas de credito, ya que lamentablemente no alcanzamos a añadir una función para comprar.
3. Crear una interfaz de administrador mas intuitiva y amigable, ya que se supone que esto lo utiliza el dueño de una tienda de ropa.
4. Implementar más características de seguridad para fortalecer la protección.

Agradecemos su atención y esperamos que encuentren útil nuestra aplicación de comercio electrónico en su revisión en la Expotécnica.

# Contacto
---
Si tiene alguna pregunta adicional, sugerencias o comentarios, no dude en ponerse en contacto con nosotros. Estamos disponibles para proporcionar información adicional o aclarar cualquier aspecto relacionado con nuestra aplicación de comercio electrónico.

## Equipo de Desarrollo
- **Valentin Tito**
  - Email: valentinstito@gmail.com

- **Joaquin Reynoso**
  - EmaiL: joaquinreynoso627@gmail.com

- **Brian Olesnievicz**
  - Email: brianolesnievicz@gmail.com
  - Linkedin: www.linkedin.com/in/brian-olesnievicz-68756b291