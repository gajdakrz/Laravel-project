# Magazines list - based on Laravel

Introdution
===========

This is a simple web application based on Laravel framework
(<https://laravel.com/>) containing basic functions:

-   Login to application with added option login by username

-   Filtering magazines based on multiple parameters

-   Paging results of filtering

Installation
===========

The aplication is based on Laravel 5.8 framework (<https://www.laravel.com/>)
and installation doc on page above.
There is no need to install database. The aplication is based on db sqlite (<https://www.sqlite.org/>) and db is inside application with data (users, magazines,publishers).


Configuration steps
==========

1.  Server<br />
run in terminal in the project name folder:
**_php artisan serve_**

2.  Database<br />
There is posibility to refresh db (run in terminal in the project name folder):
-   and add default records in tables (users, publishers, magazines):<br />
    **_php artisan migrate:refresh --seed_**
-   add only tables without data:<br />
    **_php artisan migrate:refresh_**

How to use
==========

1.  Register and log on to home page. Default is added user:admin, password:admin

2.  Filter magazines based on values: 
-   magazine's id
-   magazine's name/part of the name
-   list of publishers

![screenshot_2019-09-12 11-45-45](https://user-images.githubusercontent.com/51199020/64773900-76952b00-d553-11e9-8578-971c246abecf.png)

License
=======

MIT license was descibed in license.md file.

Contact
=======

Krzysztof Gajda

<gajda.krzysztof@gmail.com>

[www.linkedin.com/in/krzysztofgajda](http://www.linkedin.com/in/krzysztofgajda)
