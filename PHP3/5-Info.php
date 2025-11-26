<?php
//phpinfo(): Muestra toda la informacion de la configuracion de ph, por defecto el parametro es INFO_ALL
echo "<h2 style= 'color:red'>phpinfo: muestra toda la informacion de PHP</h2>";
phpinfo();
echo "<br>";
//phpinfo(INFO_MODULES): Muestra solamente la informacion de los modulos.
echo "<h2 style= 'color:red'>phpinfo(INFO_MODULES): muestra solo la informacion de los modulos de PHP</h2>";
phpinfo(INFO_MODULES);

