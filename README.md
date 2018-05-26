# ETI
Laboratorio ETI - Obtención de datos de microred

# Software necesario
Xamp, arduino IDE, PHP 7, google charts, jquery, bootstrap

# Hardware necesrio
NodeMcu ESP8266

# Funcionamiento.
1 - Crear una base de datos en xamp con una tabla que posea los campos, voltaje y corriente
2 - Crear un archivo .PHP que permita recibir datos mediante post y esos datos recibidos los almacene en la base de datos
3 - Crear una página web donde se va a visualizar los datos qeu se encuentran en la base de datos, los cuales se visualizarán en tiempo real usando ajax.
2 - Programar NodeMCu como cliente para que este pueda enviar una petición tipo post al servidor

#NodeMCU
Este dispositivo se encarga de realizar la lectura de los sensores de voltaje y corriente, luego estos datos son enviados al servidor por una consulta tipo post

#sistema completo
El NODEMCU lee los datos de los sensores, los envía al servidor donde son almacenados, luego por medio de ajax se consulta la base de datos en el servidor y se obtienen los últimos datos ingresados en ella, e esta manera si ocurren un cambio en la lectura de los sensores, estos cambios se reflejan inmediatamente y el usuario los visualzia en tiempo real sin necesidad de actualizar la página web.


