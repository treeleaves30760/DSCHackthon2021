## DSCHackthon2021

### Project Name 
### Team member
* 黃雯琪 ()
* 許博翔 (treeleaves30760@gmail.com)
* 王柏涵 (allen109061101@gapp.nthu.edu.tw)

### License: MIT

### The problem we found
During this pandemic, we should do our best to avoid contacting with others.

Living in the dormitory makes us think of a question: How to get our meal without walking out?
The answer to the question may be quite simple: food delivery system, but **what if a dormitory with hundreds of people order the meal at the same time**? This may result in lots of people swarming the entrance for the delivery.

And this is what we want to improve, **we hope to** develop a website that will **arrange the time for the students to get their meal one by one in order to keep decent social distance**.

### Techniques we use
* php
* angular
* html
* css
* javascript

### How to use
Our idea is simple: 
* When the delivery arrived, manager collect related INFO:
	* user's name
	* what the user ordered
* At the user side, they will see if their meal is arrived, they can press the button "reserve", and the backend will tell them when to pickup their meal
* We create a "pickup status" to tell whether the meal is picked up by the user

### Future plan
* Login system with the following 2 account type:
	* client (normal user)	// 實名制
	* manger 
* Authentication
	* At the manager side, manager can get the related INFO (QRcode) from the delivery man
	* At the user side, user need to insert the order INFO
	* At the backend, we will analyze the INFO between the manager side and the user side to check if the user had "actually" order the meal
	* After the analysis, the user will get a reservation number which is used to pick up his/her meal
* ultimate goal
	**premise: collaboration with food delivery platform, each order has its own unique QRcode**
	* We set a automatic 

