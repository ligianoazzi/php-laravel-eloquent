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

 - One to Many 
Ele fez a ligação nas migrations e depois nas modela
A parte fraca recebe belongs to e a parte forte hasmany
Ele carregou em memória um post é um líder é usou um associate (no tinker)

 - Many to many
Tags e posts 
Criou uma tabela povo sem modelo
As relações são feitas nas modela tag é post
Belongs to many, fazendo referência a outra tabela
Detach pra remover
Outro method é o sinc, vc passa uma lista de ida, ele deleta todas as ligações e assume a lista

 - Polimorphic
Ex. Relação entre post e like (post tem modelo pra texto e image)
Nas models de post (text) e (image) 
Function likes , this morphMany(Likes)

Polymorphic many to many
Criou uma tabela 
usa morphToMany
