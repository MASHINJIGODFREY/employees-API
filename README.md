
# Employees API

An Application Programming Interface (API) for managing employees records. Handles requests for retrieving, storing, updating, and deleting records of employees to/from the database.


[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)
[![Contributions](https://img.shields.io/badge/all%20contributors%20-%201%20-%208A2BE2
)](https://choosealicense.com/licenses/mit/)

## Authors

- [@mashinjigodfrey](https://github.com/MASHINJIGODFREY)


## Features

- User Authentication
- SQlite Database


## API Reference

#### User Login

```http
  POST /api/login
```

| Form-Key | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `email` | `varchar(100)` | `E-Mail Address of a User` |
| `password` | `varchar(100)` | `Password of the User` |

#### Get all employees records

```http
  GET /api/employee
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `N/A` | `N/A` | `N/A` |

#### Store employee records

```http
  POST /api/employee
```

| Form-Key | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `name` | `varchar(100)` | `Name of an employee` |
| `age` | `int(2)` | `Age of an employee` |
| `job` | `varchar(50)` | `Job of an employee` |
| `salary` | `varchar(30)` | `Salary of an employee` |

#### Get records of an employee

```http
  GET /api/employee/${id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `integer` | **Required**. Id of employee to fetch |

#### Update records of an employee

```http
  PATCH /api/employee/${id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `integer` | **Required**. Id of employee to fetch |

| Form-Key | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `name` | `varchar(100)` | `Name of an employee` |
| `age` | `int(2)` | `Age of an employee` |
| `job` | `varchar(50)` | `Job of an employee` |
| `salary` | `varchar(30)` | `Salary of an employee` |

#### Delete records of an employee

```http
  DELETE /api/employee/${id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `integer` | **Required**. Id of employee to fetch |
