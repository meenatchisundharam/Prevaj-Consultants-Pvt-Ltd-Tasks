# Prevaj-Consultants-Pvt-Ltd-Tasks
Task 1: 
Create an HTML page with a table view.
Add sort and pagination using plain JavaScript.
Create an infinite slider with arrow buttons using HTML, CSS, and plain JavaScript.

Task 2: 
Create a dynamic page using the MVC (Model-View-Controller) pattern.
Create a table.
Fetch data from a JSON file located in the asset directory.
Add sort and pagination features to the table.
Ensure page routers follow the sort and page query parameters.

MVC Architecture:

MVC is a software architectural pattern for implementing user interfaces on computers. It divides a given application into three interconnected parts. This is done to separate internal representations of information from the ways information is presented to, and accepted from the user.

MVC stands for "Model view And Controller".
The main aim of MVC Architecture is to separate the Business logic & Application data from the USER interface.
Different types of Architectures are available. These are 3-tier Architecture, N-tier Architecture, MVC Architecture, etc.
The main advantage of Architecture is Reusability, Security and Increasing the performance of Application.

![php-mvc-architecture](https://github.com/meenatchisundharam/Prevaj-Consultants-Pvt-Ltd-Tasks/assets/121151601/e59735d6-9f6b-44d6-9d99-2990547f99b1)
Model: Database operation such as fetch data or update data etc.

View: End-user GUI through which user can interact with system, i.e., HTML, CSS.

Controller: Contain Business logic and provide a link between model and view.

Let's understand this MVC concept in detail:

Model:
The Model object knows all about all the data that need to be displayed.
The Model represents the application data and business rules that govern to an update of data.
Model is not aware about the presentation of data and How the data will be display to the browser.

View:
The View represents the presentation of the application.
View object refers to the model remains same if there are any modifications in the Business logic.
In other words, we can say that it is the responsibility of view to maintain consistency in its presentation and the model changes.

Controller:
Whenever the user sends a request for something, it always goes through Controller.
A controller is responsible for intercepting the request from view and passes to the model for appropriate action.
After the action has been taken on the data, the controller is responsible for directly passes the appropriate view to the user.
In graphical user interfaces, controller and view work very closely together
