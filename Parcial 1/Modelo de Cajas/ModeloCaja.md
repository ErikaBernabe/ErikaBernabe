# **Modelo De Caja**
El modelo de caja es la manera en que se representan todos los elementos html en una página. Cada elemento genera una caja.La representación básica del modelo de cajas se basa en varios conceptos importantes que son:

|Partes Del Modelo De Caja| Definicion|
|:------------------------:|:-----------:|
|Content/Contenido |El contenido del cuadro, donde aparecen el texto y las imágenes|
|Padding/Relleno|  El área alrededor del contenido. es decir entre el contenido y el borde.|
|Border/Borde|El borde envuleve el padding y el content.|
|Margin/Margen|El area transparente afuera del borde y que las separa de la demas cajas|

Cada una de estas partes del modelo de cajas de CSS se puede alterar, cambiando sus dimensiones, colores, etc. Así pues, cada elemento HTML tendrá su propio borde, margen, relleno y contenido.

Existe una propiedad nueva (CSS3) que modifica este concepto y si la aplicamos, se considera el ancho del elemento a la distancia entre los bordes. Esta propiedad es box-sizing:border-box.

* El background (imagen o color) ocupa todo el elemento desde los bordes.
* El margin es la distancia desde el borde de un elemento hacia otro.
* El padding es la distancia desde el borde hacia el contenido.

Para que un elemento acepte las propiedades width, height, padding y margin tiene que ser de bloque. 


