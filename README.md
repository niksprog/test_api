# Vessels Reports API 

Create a **RESTful API** with Laravel 5.5 that serves vessels reports based on the provided csv files.
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
* filterable by: **imo** (one or more), **condition**, **datetime frame** as well as **fuel_consumption** (greater,lower either for meCons or auxCons). The output must contain the reports data along with the vessel name and email from vessels.csv file.
* Create a rate limiter to limit requests per user to **5/hour**. Use the request ip address to define the user. 
* Create a log for the incoming requests (e.g database table, plain text etc.)
* Return the output based on an input parameter that defines the format (JSON, CSV)
* Make the necessary validation for the incoming request values.

Please, fork the repository and create a pull request that contains your implementation. Use your name as the branch name.





In order to setup system copy .env.example to .env and setup variables.
Then just run php artisan migrate:refresh from terminal.
In order to make calls you must put ?api_token= USER_TOKEN_FROM_DB + one of filters or queries bellow


#### Filtering
Every query parameter, except the predefined functions `_fields`, `_with`, `_sort`, `_limit`, `_offset`, `_config` and `_q`, is interpreted as a filter. Be sure to remove additional parameters not meant for filtering before passing them to `parseMultiple`.

```
/api/books?title=The Lord of the Rings
```
All the filters are combined with an `AND` operator.
```
/api/books?title-lk=The Lord*&created_at-min=2014-03-14 12:55:02
```
The above example would result in the following SQL where:
```sql
WHERE `title` LIKE "The Lord%" AND `created_at` >= "2014-03-14 12:55:02"
```
Its also possible to use multiple values for one filter. Multiple values are separated by a pipe `|`.
Multiple values are combined with `OR` except when there is a `-not` suffix, then they are combined with `AND`.
For example all the books with the id 5 or 6:
```
/api/books?id=5|6
```
Or all the books except the ones with id 5 or 6:
```
/api/books?id-not=5|6
```

The same could be achieved using the `-in` suffix:
```
/api/books?id-in=5,6
```
Respectively the `not-in` suffix:
```
/api/books?id-not-in=5,6
```


##### Suffixes
Suffix        | Operator      | Meaning
------------- | ------------- | -------------
-lk           | LIKE          | Same as the SQL `LIKE` operator
-not-lk       | NOT LIKE      | Same as the SQL `NOT LIKE` operator
-in           | IN            | Same as the SQL `IN` operator
-not-in       | NOT IN        | Same as the SQL `NOT IN` operator
-min          | >=            | Greater than or equal to
-max          | <=            | Smaller than or equal to
-st           | <             | Smaller than
-gt           | >             | Greater than
-not          | !=            | Not equal to

#### Sorting
Two ways of sorting, ascending and descending. Every column which should be sorted descending always starts with a `-`.
```
/api/books?_sort=-title,created_at
```

#### Fulltext search
Two implementations of full text search are supported.
You can choose which one to use by changing the `fulltext` option in the config file to either `default` or `native`.

***Note:*** When using an empty `_q` param the search will always return an empty result.

**Limited custom implementation (default)**

A given text is split into keywords which then are searched in the database. Whenever one of the keyword exists, the corresponding row is included in the result set.

```
/api/books?_q=The Lord of the Rings
```
The above example returns every row that contains one of the keywords `The`, `Lord`, `of`, `the`, `Rings` in one of its columns. The columns to consider in full text search are passed to `parseMultiple`.

**Native MySQL implementation**

If your MySQL version supports fulltext search for the engine you use you can use this advanced search in the api handler.  
Just change the `fulltext` config option to `native` and make sure that there is a proper fulltext index on the columns you pass to `parseMultiple`.

Each result will also contain a `_score` column which allows you to sort the results according to how well they match with the search terms. E.g.

```
/api/books?_q=The Lord of the Rings&_sort=-_score
```

You can adjust the name of this column by modifying the `fulltext_score_column` setting in the config file.

#### Limit the result set
To define the maximum amount of datasets in the result, use `_limit`.
```
/api/books?_limit=50
```
To define the offset of the datasets in the result, use `_offset`.
```
/api/books?_offset=20&_limit=50
```
Be aware that in order to use `offset` you always have to specify a `limit` too. MySQL throws an error for offset definition without a limit.

#### Include related models
The api handler also supports Eloquent relationships. So if you want to get all the books with their authors, just add the authors to the `_with` parameter.
```
/api/books?_with=author
```
Relationships, can also be nested:
```
/api/books?_with=author.awards
```

To get this to work though you have to add the `@Relation` annotation to each of your relation methods like:

```php
/**
 * @Relation
 */
public function author() {
    return $this->belongsTo('Author');  
}
```
This is necessary for security reasons, so that only real relation methods can be invoked by using `_with`.

***Note:*** Whenever you limit the fields with `_fields` in combination with `_with`. Under the hood the fields are extended with the primary/foreign keys of the relation. Eloquent needs the linking keys to get related models.

#### Include meta information
It's possible to add additional information to a response. There are currently two types of counts which can be added to the response headers.

The `total-count` which represents the count of all elements of a resource or to be more specific, the count on the originally passed query builder instance.
The `filter-count` which additionally takes filters into account. They can for example be useful to implement pagination.

```
/api/books?id-gt=5&_config=meta-total-count,meta-filter-count
```
All meta fields are provided in the response header by default.
The following custom headers are used:

Config            | Header
----------------- | -------------
meta-total-count  | Meta-Total-Count
meta-filter-count | Meta-Filter-Count

#### Use an envelope for the response
By default meta data is included in the response header. If you want to have everything together in the response body you can request a so called "envelope"
either by including `response-envelope` in the `_config` parameter or by overriding the default `config.php` of the package.

The envelope has the following structure:

```json
{
  "meta": {

  },
  "data": [

  ]
}
```