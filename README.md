# FAQ Management

Made by Rifat &copy; PONDITs

## Migrations
> User
- name
- email
- password
- role (default: 2) `[1 => 'super-admin', 2 => 'admin']`
> FAQ
- question
- answer
- priority
- publication_status `[0 => Unpublished, 1 => Published]`

Read the [documentation](https://www.example.com) for further inquiry.

## Features
1. Admin Login
    - Dashboard
    - Manage FAQs (CRUD)
    - Drag & Drop to sort quickly
    - Verification message on every action
2. Visitors view
    - Search any FAQ instantly

## Technologies used
- Laravel [v8.4]
- JavaScript
    - jQuery [v3.2.1]
    - DataTable [v1.10.25]
    - jQuery UI [v1.12.1]
    - TypedJS [v2.0.12]
    - metisMenu [v3.3]
    - alertifyJs [v1.13]
- Bootstrap `['home' => v5.0.2, 'admin' => v3.3.7]`
- FontAwesome [v4.7]

## What I learned new
- Laravel components
- Laravel custom error message
    [in `app\Exeptions\Handler.php` add the following code]
    ```
        protected function unauthenticated($request, AuthenticationException $exception)
        {
            return $request->expectsJson()
                ? response()->json(['message' => $exception->getMessage()], 401)
                : redirect()->guest(route('login'))->with('message', 'You need to login first');
        }
    ```

## Live demo
Watch a live demo of this project on — [PONDITs FAQ](https://faq-pondit.herokuapp.com)

# Getting Started
> use following credentials to login:

|**Email**       | **Password** |
|----------------|--------------|
|pondit@admin.com|ponditadmin   |
