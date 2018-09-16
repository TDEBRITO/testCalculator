# Symfony 4 Calculator 

Using the latest version of Symfony (http://symfony.com/doc/current/setup.html)
create a simple calculator that can handle the following calculation types: plus,
minus, multiplication, division.

Realisation time : 80 minutes



## Technical details / Requirements:
 Current project is built using :
- Symfony 4.1 framework
- Docker 

## Installation:
	
    - git clone https://github.com/TDEBRITO/testCalculator.git
    
    - open .env file in project directory (copy .env.dist and create .env file out of it (in same location) if not exists)
    ( I've left all informations to make it simpler - bad practice )
   
    - go to project directory and run: docker-compose build (if you want to start it with docker) 
    - then run: make-docker up
    
    You now need to install the project
    
    Enter the docker:
    - docker-compose run php bash
    
    Install the project
    - composer install
  
    * If you have no error, the project is running on 127.0.0.1 or calculatortest.local (add it to your hosts file)
    
    - go to /calculator
    
    - do your math (and enjoy)

