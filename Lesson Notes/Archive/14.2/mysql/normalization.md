SQL Normalization
=================

"Normalization" of a database schema means optimizing the schema to:
* reduce (or eliminate) duplication of data
* prevent dependency anomalies
* prevent data inconsistancies

There are 5 "Normal" forms, each of higher rigor. Normalization should be viewed in the context of the problem at hand. All 5 forms are not always required and it even makes sense to "de-normalize" a schema to either increase performance or enhance the usability of a database.

1st Normal Form
---------------
* You can't have two columns with the same name

2nd Normal Form
---------------
* All columns should be facts about the primary record of insterest, not about attributes of the primary record of interest

3rd Normal Form
---------------

4th Normal Form
---------------

5th Normal Form
---------------


I used these resources:
http://www.bkent.net/Doc/simple5.htm
