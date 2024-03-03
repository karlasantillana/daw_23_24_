La conexión a la base de datos -pufosa- en localhost/phpmyadmin se hace 
mediante el archivo conexionBBDDPufosa.php.

[index_login.php] Intrucciones de usuario y contraseña:
Usuario -> empleado_ID (Ejemplo: 7505)
Contraseña -> Inicial_del_segundo_apellido en mayúscula + empleado_ID (Ejemplo: K7505) 

Permisos según la función del usuario:
Presidente y Manager -> CRUD de las 5 tablas (cliente, empleado, trabajo, departamento, ubicación).
Resto de usuarios -> CRUD solo de la tabla CLIENTES.

////////////////////////////////////////////////////////////////////////////

