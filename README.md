# Vessels Reports API 

Create a **RESTful API** with Laravel 5.5 that serves vessels reports from the provided csv files.
Use the reports.csv and vessels.csv files as your data source and import them into a database schema of your choice. 

Columns supplied are the following:

**vessels.csv**

* **name**: the vessel name
* **imo**: unique vessel identification number
* **email**: unique vessel email address

**reports.csv**

* **imo**: vessel's imo.
* **created_on**: the received datetime of the report
* **conditionType**: vessel's condition (steaming, anchor)
* **meHours**: vessel's main engine working hours
* **meCons** (tn): vessel's main engine fuel consumption
* **auxHours**: vessel's auxiliary engine working hours
* **auxCons** (tn): vessel's auxiliary engine fuel consumption
* **observed distance** (nautical miles): the observed distance of the vessel

**The API must support the following:**
* filterable by: **imo** (one or more), **condition**, **time frame** as well as **fuel_consumption** (greater,lower either for meCons or auxCons). The output must contain the reports data along with the vessel name and email from vessels.csv file.
* Create a rate limiter to limit requests per user to **5/hour**. Use the request ip address to define the user. 
* Create a log for the incoming requests (e.g database table, plain text etc.)
* Return the output based on an input parameter that defines the format (JSON, CSV)
* Make the necessary validation for the incoming request values.

Please, fork the repository and create a pull request that contains your implementation. Use your name as the branch name.
