FORMAT: 1A
HOST: http://manoloudis.gr

# Dynamarine Vessels Reports API

Api for Vessels and Vessel reports

## Rate Limiting
Service is rate-limited. Requests are limited to 5/hour per ip

# Group Vessels

## Vessels Collection [/vessels]

### Get All Vessels [GET /vessels]

Get all Vessels stored in Database

+ Response 200 (application/json)
    + Attributes
        - vessels(array[Vessel])

+ Response 429 (plain/text)
    + Body

            Requests per hour limit exceeded.



### Get Specific Vessel [GET /vessel/{id}]

Get Specific Vessel information

+ Parameters
    - id: `1` - The ID of the Vessel

+ Response 200 (application/json)
    + Attributes
        - Include Vessel

+ Response 429 (plain/text)
    + Body

            Requests per hour limit exceeded.

### Get Specific Vessel Reports [GET /vessel/{id}/reports]

Get Specific Vessel information with all its Reports.

+ Parameters
    - id: `1` - The ID of the Vessel

+ Response 200 (application/json)
    + Attributes
        - Include Vessel
        - reports (array[ReportWihtoutVessel])

+ Response 429 (plain/text)
    + Body

            Requests per hour limit exceeded.


# Group Reports

## Reports Collection [/reports]

### Get All Reports [GET /reports{?vessels,fuel_consumption,condition,date_from,date_to,format}]

Get all Reports in Database or use Filters narrow the results.

Available filters:
1. vessels[]
2. fuel_consumption[main|auxiliary][greater|lower]
3. condition
4. date_from
5. date_to

Available Response formats are application/json and plain/text in csv logic.

You can change the default application/json format to csv with the use on format parameter.

Request example. http://manoloudis.gr/reports?vessels[]=9327475&fuel_consumption[main][greater]=2.5&condition=steaming&date_from=2016-01-01&date_to=2018-01-10&format=csv

+ Parameters
    + vessels (array[number], optional) - Filter Reports by one or more Vessel imo numbers.
    + fuel_consumption (array[main|auxiliary][greater|lower], optional) - Filter Reports by Fuel Consumption on Main or Auxiliary Engine. Search for greater or/and lower values.
        - main: (array)
            - greater: `5` (number)
            - lower: `10.5` (number)
        - auxiliary: (array)
            - greater: `5` (number)
            - lower: `10` (number)
    + condition: `steaming` (enum[string],optional)
        + Members
            + `steaming`
            + `anchor`
    + date_from: `2017-12-01` (string, optional) - Filter Reports by date, get all that are equal or greater than requested value.
    + date_to: `2017-12-31` (string, optional) - Filter Reports by date, get all that are equal or lower than requested value.
    + format: `csv` (string, optional) - Select Response type between json and csv. Default Response type json

+ Response 200 (application/json)
    + Attributes
        - Reports (array[Report])

+ Response 200 (plain/text)
    + Body

            Vessel_imo,Vessel_email,created_on,conditionType,meHours,meCons,auxHours,auxCons,observedDistance
            9275983,vesselb@dynamarine.com,"2016-01-01 02:15:05",steaming,24.0,24.69,24,2.03,333.0
            9224570,vesselc@dynamarine.com,"2016-01-02 12:15:35",steaming,25.0,21.03,0,0.00,318.0

+ Response 429 (plain/text)
    + Body

            Requests per hour limit exceeded.


### Get Specific Report [GET /reports/{id}]

Get Specific Report data.

+ Parameters
    - id: `1` - The ID of the Report

+ Response 200 (application/json)
    + Attributes
        - Include Report

+ Response 429 (plain/text)
    + Body

            Requests per hour limit exceeded.


# Group Users

## Users Collection [/users]

### Get All Users [GET /users]

Get all Users in Database.

+ Response 200 (application/json)
    + Attributes
        - users (array[User])

+ Response 429 (plain/text)
    + Body

            Requests per hour limit exceeded.


### Get Specific User [GET /users/{id}]

Get Specific User data.

+ Parameters
    - id: `1` - The ID of the User

+ Response 200 (application/json)
    + Attributes
        - Include User

+ Response 429 (plain/text)
    + Body

            Requests per hour limit exceeded.

### Get Specific User Requests [GET /users/{id}/requests]

Get Specific User data with all User Requests.

+ Parameters
    - id: `1` - The ID of the User

+ Response 200 (application/json)
    + Attributes
        - Include User
        - requests (array[Request])

+ Response 429 (plain/text)
    + Body

            Requests per hour limit exceeded.

# Data Structures

## Vessel (object)
- id: `1` (number) - The ID of the Vessel
- imo: `9327475` (number) - Unique Identification number of the Vessel
- name: `Vessel A` (string) - The Name of the Vessel
- email: `vessela@dynamarine.com` (string) - Unique email of the Vessel

## Report (object)
- id: `1` (number) - The ID of the Report
- conditionType: `steaming` (string) - The condition of the Vessel. Possible Values (steaming, anchor)
- meHours: `24.0` (string) - The Working Hours of the Main Engine
- meCons: `2.20` (string) - The Fuel Consumption of the Main Engine
- auxHours: `0` (number) - The Working Hours of the Auxiliary Engine
- auxCons: `0.00` (string) - The Fuel Consumption of the Auxiliary Engine
- observedDistance: `69.9` (string) - Observation Distance of the Vessel
- created_on: `2016-01-01 10:50:20` (string) - Date Time Report received
- vessel (object)
    - imo: `9327475` (number) - The ID of the Vessel
    - email: `vessela@dynamarine.com` (string) - Unique email of the Vessel

## ReportWihtoutVessel
- id: `1` (number) - The ID of the Report
- conditionType: `steaming` (string) - The condition of the Vessel. Possible Values (steaming, anchor)
- meHours: `24.0` (string) - The Working Hours of the Main Engine
- meCons: `2.20` (string) - The Fuel Consumption of the Main Engine
- auxHours: `0` (number) - The Working Hours of the Auxiliary Engine
- auxCons: `0.00` (string) - The Fuel Consumption of the Auxiliary Engine
- observedDistance: `69.9` (string) - Observation Distance of the Vessel
- created_on: `2016-01-01 10:50:20` (string) - Date Time Report received

## User (object)
- id: `1` (number) - The ID of the User
- ip: `127.1.1.1` (string) - The IP of the User

## Request (object)
- id: `1` (number) - The ID of the Request
- path: `/reports` (string) - Request URI path
- body: `{"vessels":["9327475"],"fuel_consumption":{"main":{"greater":"100"}}}` (string) - Request Parameters in json format
- response: `{"headers":{},"original":{"id":1,"ip":"::1"},"exception":null}` (string) - Response the User got in json format
