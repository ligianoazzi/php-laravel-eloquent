 - Mass Assignment
 you can determine what fields can be filled by the forms
 ex. not expose a field "status"


 - Conventions
 ex. name Model: Post Table: posts, PK: id

 - Mutators
 acessors modified the data between DB and user
 mutators modified data before insert data on DB

 - Scopes
Functions to leave easy call some queries, similar procedures in Sql

 - Soft Deleting 
It's similar a default scope, will create a field in the table similar (deleted_at = datetime) but will not effectively delete.

 - One to one
Public config hasone in a model and public config belongsto in the other model
Coloca um hasone em uma e um belongs to na outra
Uma faz referência  a outra 
