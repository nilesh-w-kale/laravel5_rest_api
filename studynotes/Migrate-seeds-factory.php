<?php
/*
**	STUDY NOTES
**	https://eloquentbyexample.com/
*/

Migrate Factory & Seeds
--------------------------------------
"
Model Class Belobgs to Row so name should be SINGULAR => Company 
database Table belongs to Rows so name shoulkd Be PULAR => Companies "

1. Create Model & Seed via factory

	Model:
	Run php artisan make:model -a

	Create model using artisan -a 
	That atomatically create the 
	model
	migrate,
	factory,
	Seeds

	Migrate:
	Run php artisan migrate 
	That auto detect which migration need to run

	Seed:
	php artisan db:seed --class=CompanySeeder 

2. Change the table with customised table name

	Table:

	Add protected $table = 'Table_Name' in Model Class
	Add protected $primaryKey = 'column_name' in Model Class
	Add public $timestamp = True/False to include created_at/updated_at column_name
	
	Add const CREATED_AT = 'column_name'
	Add const UPDATED_AT = 'column_name'






"
