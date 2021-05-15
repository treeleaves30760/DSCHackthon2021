## DSCHackthon2021

### Project Name 
### Team member
* 黃雯琪 (angelh52@gmail.com)
* 許博翔 (treeleaves30760@gmail.com)
* 王柏涵 (allen109061101@gapp.nthu.edu.tw)

### License: MIT

### The problem we found
During this pandemic, we should do our best to avoid contacting with others.

Living in the dormitory makes us think of a question: How to get our meal without walking out?
The answer to the question may be quite simple: food delivery system, but **what if a dormitory with hundreds of people order meals at the same time**? This may result in lots of people swarming the entrance for the delivery.

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
* At the user side, they will see if their meal has arrived, they can press the "reserve" button, and the backend will tell them when to pick up their meal 
* We create a "pickup status" to tell whether the meal had been picked up by the user

### Future plan
* Login system with the following 2 account type:
	* client (normal user)	// 實名制
	* manger 
* Authentication
	* At the manager side, manager can get the related INFO (QRcode) from the delivery man
	* At the user side, user need to insert the order INFO
	* At the backend, we will analyze the INFO between the manager side and the user side to check if the user had "actually" order the meal
	* After the analysis, the user will get a reservation number which is used for picking up his/her meal
* ultimate goal
	* **premise: collaboration with food delivery platform, each order has its own unique QRcode**
	* Problem we found: what if hundreds of order arrived at the same time? the contact between the manager and the delivery men is inevitable!!
	* Solution: We use machine to receive the delivery instead of the manager
	* Step:
		1. We set a automatic food machine which contains lots of blocks to store the food
		2. When the food delivery men arrived, they need to scan the QRcode, after getting the INFO of the food, the machine will open a block for the delivery men to put the food inside.
		3. At the user side, When they get the notification to pick up the food, they also need to scan the QRcode of his/her food. After authentication, the machine will open the block which contains his/her food.
		4. After picking up the food, the system will show that "Enjoy your meal!"

