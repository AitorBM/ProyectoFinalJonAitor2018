Ejemplos
|----------------------------------------------|
||
|[Ejemplo formato .md](https://stackedit.io/app)|
|[otro](https://confluence.atlassian.com/bitbucketserver/markdown-syntax-guide-776639995.html)
[otro](http://commonmark.org/help/)|

---

# PROCESO REALIZADO

- ## Montar Photon junto con el sensor.
  - Se coloca la placa Photon en la base de conexiones.
  - Se coloca el sensor y mediante jumpers se conecta a Photon.
  > **Info** aquí: [Montaje](https://learn.adafruit.com/dht/connecting-to-a-dhtxx-sensor)<br/>
    `Gracias también a Ion`
- ## Configurar conexion desde app móvil
- ## En la web de [Particle](https://build.particle.io/build) seleccionar nuestro dispositivo.
  > [Aquí](https://www.arduino.cc/reference/en/) hay información de como programar Photon
- ## Añadir las librerias
- ## Escibir el código y flashearlo en Photon
- ## Comprobar mediante los led que esta encendido y ejecutando el código correctamente
- ## Comprobar desde console.particle.io que envia datos correctamente
- ## Instalar Vagrant
- ## Instalar Virtual Box y su extension pack
- ## Construir el VagrantBox
    - Hemos seguido [este](https://scotch.io/tutorials/how-to-create-a-vagrant-base-box-from-an-existing-one) tutorial.
    
    Queremos crear una máquina Ubuntu 16.04/Xenial64 por lo que ejecutamos
```sh
$ sudo vagrant init ubuntu/xenial64
```
    Y levantamos la máquina
```sh
$ vagrant up
```
- ## Conectarse a el mediante ssh
```sh
$ vagrant ssh
```
- ## Instalar programas y servicios necesarios en el servidor
```sh
$ sudo apt-get update
$ sudo apt-get install aptitude
$ cd Desktop
```
- ## Apagar la máquina
```sh
$ vagrant halt
```
- ## Configurar VagrantFile
- ## Compartir una carpeta para añadir y editar la web
- ## Añadir el script al servidor
- ## Crear la BD y sus tablas
|                |ASCII                          |HTML                         |
|----------------|-------------------------------|-----------------------------|
|Single backticks|`'Isn't this fun?'`            |'Isn't this fun?'            |
|Quotes          |`"Isn't this fun?"`            |"Isn't this fun?"            |
