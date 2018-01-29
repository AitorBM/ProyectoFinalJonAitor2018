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
  > **Info** aquí: [Montaje](https://learn.adafruit.com/dht/connecting-to-a-dhtxx-sensor).<br/>
    `Gracias también a Ion`
- ## Configurar conexion desde app móvil
- ## En la web de [Particle](https://build.particle.io/build) seleccionar nuestro dispositivo.
  > [Información](https://www.arduino.cc/reference/en/) de como programar Photon.<br/>
    [Ejemplo](https://openhomeautomation.net/cloud-data-logger-particle-photon/) de programa que lee con el sensor.
- ## Añadir las librerias:
  > DHT, Adafuit, 
- ## Escibir el código y flashearlo en Photon.
- ## Comprobar mediante los led que esta encendido y ejecutando el código correctamente.
  > Verde fijo si está encendido correctamente.
  > Otro led azul parpadeando por cada loop del código.
- ## Comprobar desde la [consola]()console.particle.io que envia datos correctamente.
- ## Instalar [VirtualBox](https://www.virtualbox.org/wiki/Downloads) y su [Extension Pack](https://download.virtualbox.org/virtualbox/5.2.6/Oracle_VM_VirtualBox_Extension_Pack-5.2.6-120293.vbox-extpack).
- ## Instalar [Vagrant](https://www.vagrantup.com/downloads.html).
- ## Construir el VagrantBox.
    - Hemos seguido éste [tutorial](https://scotch.io/tutorials/how-to-create-a-vagrant-base-box-from-an-existing-one).
    
    Queremos crear una máquina Ubuntu 16.04/Xenial64 por lo que ejecutamos.
```sh
$ sudo vagrant init ubuntu/xenial64
```
    Y levantamos la máquina
```sh
$ vagrant up
```
- ## Conectarse a el mediante ssh.
```sh
$ vagrant ssh
```
- ## Instalar programas y servicios necesarios en el servidor.
```sh
$ sudo apt-get update
$ sudo apt-get install aptitude
$ cd Desktop
```
- ## Apagar la máquina.
```sh
$ vagrant halt
```
- ## Configurar VagrantFile.
- ## Compartir una carpeta para añadir y editar la web y el script js.
- ## El objetivo es almacenar los datos en BD mediante MQTT.
  > [Ejemplo](http://ediy.com.my/blog/item/143-store-messages-from-mosquitto-mqtt-broker-into-sql-database).
- ## Crear la BD y sus tablas
|       ID       |     TOPIC      |       MSG      |
|----------------|----------------|----------------|
|       `1`      |      temp      |       23       |
|                |                |                |
