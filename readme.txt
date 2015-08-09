=== Google Mobile Sitemap Feed With Multisite Support ===
Contributors: artprojectgroup 
Donate link: http://www.artprojectgroup.es/tienda/donacion
Tags: Google, Google Mobile, Google Mobile Sitemap, sitemap, sitemap-mobile.xml
Requires at least: 2.6
Tested up to: 4.3
Stable tag: 1.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Genera dinámicamente el archivo sitemap-mobile.xml, un mapa de sitio para móviles de Google. No requiere ningún tipo de configuración.

== Description ==
[*Español*](http://wordpress.org/plugins/google-mobile-sitemap-feed-with-multisite-support/) - [*English*](http://goo.gl/0pQF38) - [*Italiano*](http://goo.gl/pmIWMQ) - [*Français*](http://goo.gl/PtxgBz) - [*Deutsch*](http://goo.gl/zYdpKI) 

**Google Mobile Sitemap Feed With Multisite Support** genera dinámicamente un mapa de sitio para móviles de Google creando un archivo `sitemap-mobile.xml ` virtual. 

= Características =
* No requiere ningún tipo de configuración, por lo que funciona de forma totalmente autónoma y automática.
* Es totalmente compatible con instalaciones de WordPress multisitio.
* Informa automáticamente a Google y a Bing cada vez que publiquemos una nueva entrada o página. 

= Origen =
**Google Mobile Sitemap Feed With Multisite Support** ha sido programado a partir de los plugins [*Google News Sitemap Feed With Multisite Support*](http://wordpress.org/plugins/google-news-sitemap-feed-with-multisite-support/) de [Tim Brandon](http://profiles.wordpress.org/users/timbrd/) y [*Google XML Sitemap for Mobile*](http://wordpress.org/plugins/google-mobile-sitemap/) de [Amit Agarwal](http://profiles.wordpress.org/labnol/), que aún siendo magníficos plugins no ofrecían todas las características que necesitábamos. Aún así su trabajo ha sido completamente imprescindible para la realización de este plugin.

= Complementos =
Se recomienda el uso de **Google Mobile Sitemap Feed With Multisite Support** junto a [**Google Image Sitemap Feed With Multisite Support**](http://wordpress.org/plugins/google-image-sitemap-feed-with-multisite-support/) que genera el archivo `sitemap-image.xml`, y [**Google Video Sitemap Feed With Multisite Support**](http://wordpress.org/plugins/google-video-sitemap-feed-with-multisite-support/) que genera el archivo `sitemap-mobile.xml`.


= Muy importante =
Se han descrito errores al utilizarlo conjuntamente con la última versión de **Google XML Sitemaps** con soporte para WordPress multisitio. Los errores están descritos en [¿Cómo arreglar la incompatibilidad de Google XML Sitemaps con nuestros plugins?](http://www.artprojectgroup.es/como-arreglar-la-incompatibilidad-de-google-xml-sitemaps-con-nuestros-plugins) donde encontrarás toda la información necesaria para solucionar la incompatibilidad detectada.

= Más información =
En nuestro sitio web oficial puede obtener más información sobre [**Google Mobile Sitemap Feed With Multisite Support**](http://www.artprojectgroup.es/plugins-para-wordpress/google-mobile-sitemap-feed-with-multisite-support). 

= Comentarios =
No olvides dejarnos tu comentario en:

* [Google Mobile Sitemap Feed With Multisite Support](http://www.artprojectgroup.es/plugins-para-wordpress/google-mobile-sitemap-feed-with-multisite-support) en Art Project Group.
* [Art Project Group](https://www.facebook.com/artprojectgroup) en Facebook.
* [@artprojectgroup](https://twitter.com/artprojectgroup) en Twitter.
* [+ArtProjectGroupES](https://plus.google.com/+ArtProjectGroupES/) en Google+.

= Más plugins =
Recuerda que puedes encontrar más [plugins para WordPress](http://www.artprojectgroup.es/plugins-para-wordpress) en [Art Project Group](http://www.artprojectgroup.es) y en nuestro perfil en [WordPress](http://profiles.wordpress.org/artprojectgroup/).

== Installation ==
1. Puedes:
 * Subir la carpeta `google-mobile-sitemap-feed-with-multisite-support` al directorio `/wp-content/plugins/` vía FTP. 
 * Subir el archivo ZIP completo vía *Plugins -> Añadir nuevo -> Subir* en el Panel de Administración de tu instalación de WordPress.
 * Buscar **Google Mobile Sitemap Feed With Multisite Support** en el buscador disponible en *Plugins -> Añadir nuevo* y pulsar el botón *Instalar ahora*.
2. Activar el plugin a través del menú *Plugins* en el Panel de Administración de WordPress.
3. Listo, ahora ya puedes disfrutar de él, y si te gusta y te resulta útil, hacer una [*donación*](http://www.artprojectgroup.es/tienda/donacion).

== Frequently Asked Questions ==
= ¿Necesita configuración? =
No, el plugin es totalmente autónomo.

= ¿Es compatible con instalaciones de WordPress multisitio? =
Si, es completamente compatible.

= ¿Existen incompatibilidades? =
Si, se han descrito errores al utilizarlo conjuntamente con el plugin **Google XML Sitemaps**. Los errores están provocados por un orden erróneo de las reglas de redirección de WordPress, ya que **Google XML Sitemaps** interpreta todos los tipos de mapas de sitios posibles. En [¿Cómo arreglar la incompatibilidad de Google XML Sitemaps con nuestros plugins?](http://www.artprojectgroup.es/como-arreglar-la-incompatibilidad-de-google-xml-sitemaps-con-nuestros-plugins) encontrarás toda la información sobre esta incompatibilidad y la solución a la misma.

== Screenshots ==
1. Captura de pantalla de sitemap-mobile.xml.

== Changelog ==
= 1.0 =
* Modificación de la estructura interna del plugin para ajustarse a los estándares de WordPress.
= 0.9.1 =
* Añadido borrado de caché al publicar nuevo contenido.
= 0.9 =
* Arreglo de error que provocaba un mensaje de error en versiones superiores a la 5.2 de PHP.
= 0.8 =
* Arreglo de error que borraba toda la configuración al desactivar el plugin.
* Corrección menor que evita la aparición de un código de error al recopilar información sobre el plugin.
* Uso de la API Transients de WordPress para mejorar las consultas.
= 0.7.1 =
* Cambio del enlace de donación.
= 0.7 =
* Añadida nueva función que limpia la base de datos al desinstalar el plugin.
= 0.6 =
* Arreglos menores en el código.
= 0.5 =
* Actualización de las hojas de estilo acorde al nuevo WordPress 8.
= 0.4 =
* Inclusión de nuevos botones y enlaces.
= 0.3 =
* Pequeños arreglos de código.
* Pequeño arreglo de la traducción.
= 0.2 =
* Pequeñas modificaciones y arreglos de código.
* Inclusión de enlaces.
* Actualización de los textos de información.
= 0.1 =
* Versión inicial.

== Upgrade Notice ==
= 1.0 =
* Modificación de la estructura interna del plugin para ajustarse a los estándares de WordPress.
= 0.9.1 =
* Añadido borrado de caché al publicar nuevo contenido.
= 0.9 =
* Arreglo de error que provocaba un mensaje de error en versiones superiores a la 5.2 de PHP.
= 0.8 =
* Arreglo de error que borraba toda la configuración al desactivar el plugin.
* Corrección menor que evita la aparición de un código de error al recopilar información sobre el plugin.
* Uso de la API Transients de WordPress para mejorar las consultas.
= 0.7.1 =
* Cambio del enlace de donación.
= 0.7 =
* Añadida nueva función que limpia la base de datos al desinstalar el plugin.
= 0.6 =
* Arreglos menores en el código.
= 0.5 =
* Actualización de las hojas de estilo acorde al nuevo WordPress 8.
= 0.4 =
* Inclusión de nuevos botones y enlaces.
= 0.3 =
* Pequeños arreglos de código.
* Pequeño arreglo de la traducción.
= 0.2 =
* Pequeñas modificaciones y arreglos de código.
* Inclusión de enlaces.
* Actualización de los textos de información.

==Traducciones ==
* *English*: by **Art Project Group** (default language).
* *Español*: por **Art Project Group**.

== ¿Por qué está esta página en español? ==
Mientras WordPress no nos permita a los desarrolladores realizar esta página en más de un idioma, elegiremos siempre el español.

A pesar de que es una apuesta muy arriesgada y de que reduce mucho las posibilidades de propagación de nuestros plugins, creemos que la comunidad hispana de WordPress es lo suficientemente amplia como para abocarla al idioma inglés hasta el final de los tiempos.

Por ello regalamos a esa gran comunidad hispana nuestros plugins con interfaces, instrucciones, tutoriales, soporte y páginas web en *WordPress.org* en español.

Esperamos que os guste nuestra iniciativa.

== Donación ==
¿Te ha gustado y te ha resultado útil **Google Mobile Sitemap Feed With Multisite Support** en tu sitio web? Te agradeceríamos una [pequeña donación](http://www.artprojectgroup.es/tienda/donacion) que nos ayudará a seguir mejorando este plugin y a crear más plugins totalmente gratuitos para toda la comunidad WordPress.

== Gracias ==
* A [Tim Brandon](http://profiles.wordpress.org/users/timbrd/) y [Amit Agarwal](http://profiles.wordpress.org/labnol/) por sus grandes plugins que han inspirado **Google Video Sitemap Feed With Multisite Support**.
* A todos los que lo usáis.
* A todos los que ayudáis a mejorarlo.
* A todos los que realizáis donaciones.
* A todos los que nos animáis con vuestros comentarios.

¡Muchas gracias a todos!
