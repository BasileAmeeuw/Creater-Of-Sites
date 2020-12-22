# Creator of sites project

This project has as goal to provide an open-source code of PhP for the ones who need to have a first template to elaborate a site to send products.
The sites can be cut up in two parts, one part for setting the new products to send in a JSON file and a second one to send the products with a fictitious payment device.

## Getting Started

To run this code, you have several possibilities depending of your &OS. But in the tutorial below we'll use WampServer.

### Prerequisites

Before downloading this code, you have to have at least one text editor but I recomand you VS Code which is going to help you for testing your code.
For the test you will need phpUnit and you also need WampServer of a similar one as said before.
You need also to download Git if you want to follow this tutorial step by step. (but you can always used the .zip file and copy it)

### Installing 

To make the code work locally you have to follow the next instructions.

1. First you have to install WampServer (or another one):
 * To do this I recommend you to follow this tutorial <a href="https://www.w3resource.com/php/installation/install-wamp.php"> WampServer </a>

2. When it's done, you have to clone this repository from github in the repository www in the repository WampServer like this:
* You clone from the github like this
<img src="https://github.com/BasileAmeeuw/Creator-of-Sites/blob/master/Image/Clone.gif" width="700" height="450">
* Then you clone it in the right repository in your computer.
<img src="https://github.com/BasileAmeeuw/Creator-of-Sites/blob/master/Image/Wamp.gif" width="700" height="450">

3. After that you should be able to make the code run on a navigator Browser, I recommend Firefox but you can do it with a lot of others.
* You enter "localhost" on Firefox or 127.0.0.1:8000 (that is the adress set by default but it can be changed.)
* Then you should see a page with several functions, the best way to be sure that it works is not to click on Creator-of-Sites but to tap it himself after a slash in the adress location:
<img src="https://github.com/BasileAmeeuw/Creator-of-Sites/blob/master/Image/localhost.gif" width="700" height="450">
 * Now you should be on the first right page.

### Installation for the tests

I recommend you Visual Studio Code (<a href="https://code.visualstudio.com/"> Visual Studio Code </a>) !
You have to install several plug-ins on VS Code ! (in addition to Php of course).
* You have to install PHPUnit and facultatively PHPUnit Test Explorer.
<img src="https://github.com/BasileAmeeuw/Creator-of-Sites/blob/master/Image/phpUnit.gif" width="700" height="450">

## Coding requirement (MVC architecture)

This code is implemented in a MVC architecture, it'll be not successful if you change it. 
It's also possible to make all part of the architecture as class but not necessary. I've made it for the model files because it was easier for the test and to arrange it.
There is also a bit of javascript for one form, to pick all the informations from the json but normally you don't have to modify it !

## Tests runing 

If you have install the two plug-ins here above, you have 2 ways to run the tests.

1. First you go in the folder, you open one of the testClass and then you run the test one by one like this.
(You will see the results in the Output and you have to choose PHPUnit Language Server)
<img src="https://github.com/BasileAmeeuw/Creator-of-Sites/blob/master/Image/test1by1.gif" width="700" height="450">

2. Second method is to test all test together with the terminal. You can do it also directly on VS code (if you have the plug-ins for)
* You go in the right folder with the teminal comand "cd"
* You enter the comand "./vendor/bin/phpunit tests" 
<img src="https://github.com/BasileAmeeuw/Creator-of-Sites/blob/master/Image/testall.gif" width="700" height="450">

### What about tests

These tests are testing the methods in the model (managerClasses) because it's the only place where there are operations between objects.

### How coding tests

There are several tests for one single methods because there are several things to tests and every one test only one thing by test.

# What for 

This implementation in PhP is to be used to send products that we can add in a local database of type Json. So that we can easily take this DB and set it somewhere else.
We have 5 different views. 
<img src="https://github.com/BasileAmeeuw/Creator-of-Sites/blob/master/Image/views.gif" width="700" height="450"><br>
The first one is to chose, the second one to set the products in the Json and the other one to command.
You can always go check in the file public/js/Products.json what were insert in it. (test.json has been created only for testing)

## Built With

* <a href="https://www.php.net/"> PHP </a>
* https://github.com/sebastianbergmann/phpunit

## Contributing

Please read [CONTRIBUTING.md](https://github.com/BasileAmeeuw/Creator-of-Sites/blob/master/CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests to us.

## Author

* **AMEEUW Basile** - *Initial work*

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

# Still to do

First improve a lot of basic function or put new function in. We could imagine a page for recomandation or add it to a actual page.
It can be good if anyone can set something in the CSS file which is setted in public.
