# vehicle
dummy vehicle business logic implementation on symfony and php 7

# Business logic details:
Needs to implement Vehicle business logic. Vehicles can have derivatives: car, truck, boat, plane, etc.
Every vehicle must have possibility to refuel. Car can play radio, boat can swin, plane can take off, etc.

# To install:
Docker support is included.
Api-platform project was used as symfony 3.3 distribution with REST support included.

1. Clone github proejct
2. Install docker and docker-machine.
2. From project dir
$ docker-compose up -d
3. (On Windows) run such commands:
winpty docker exec apiplatform_app_1 bin/console doctrine:schema:update --force
where apiplatform_app_1 is container name where php project runs. 

# To run tests:
winpty docker exec apiplatform_app_1 ./vendor/bin/phpunit

# Useful links:
http://localhost:8001/app_dev.php/myvehicle

where 8001 port is local port that is configured in VirtualBox NAT settings for virtual machine (I manually needed to configure).

# Implementation details.
Doctrine single table inheritance support was used and took into account in order to impelemnt such business logic on db level.
Several entities were impelemented that extend from main Entity\Vehicle entity.
Business logic was implemented by means of php Traits composition (composition over inheritance principle).
Pair of tests were written to test entities main behaviour with/without db.
Api-platform adds support of REST framework and possible api implementation.





