# PHP

> Writing in php is server side code. which means all code would be handled in the server side, and sent to the client ready to read.
> Brackets does not mix well with php, there for we would work with other editors.

## Installations: 

- XMAPP : https://www.apachefriends.org/index.html
- Visual code: https://code.visualstudio.com/download

> XMAPP gives us apache server, that can work with php.
> after installing, you will have a directory in this path: C:\xampp\htdocs
> and opening them on the browser "localhost" + relative url, will open the project. 
> In order for the server to work, we need to run apache server in the XMAPP program.

## Validations

We will always validate inputs on the server side, because that on the client side, every thing is editable.

It is recommended to validate on JS as well, to give the user an immidiate indication that the date is invalid.

## Session

A session is saved on the server side, and is per browser. 
The cookie saves a key for the user, and when the server gets this key, 
it knows to send back information that relevant to the specific user. 
> The cookie is being sent to the server on every request! 