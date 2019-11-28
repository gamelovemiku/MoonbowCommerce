<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="https://unpkg.com/buefy/dist/buefy.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" integrity="sha256-PF6MatZtiJ8/c9O9HQ8uSUXr++R9KBYu4gbNG5511WE=" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Pridi:400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css" integrity="sha256-a2tobsqlbgLsWs7ZVUGgP5IvWZsx8bTNQpzsqCSm5mk=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/2.5.94/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">

    <script src="https://kit.fontawesome.com/3df40fb6d5.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://unpkg.com/vue"></script>
    <script src="https://unpkg.com/buefy/dist/buefy.min.js"></script>

</head>

<style>
    html, div, textarea, select {
        font-family: 'Segoe UI', 'Pridi', sans-serif;
    }

    a.button, button {
        font-family: 'Segoe UI', 'Pridi', sans-serif;
        font-weight: 400;
    }

    .navbar.is-spaced {
        padding: 1rem 0rem;
    }

    section.section.with-nav {
        padding: 1.5rem 1.5rem;
    }

    .card {
        border-radius: 1rem;
        box-shadow: 0px 0px 32px -9px rgba(143,143,143,1);
    }

    .box {
        border-radius: 1rem;
        box-shadow: 0px 0px 32px -9px rgba(143,143,143,1);
    }

    img {
        border-radius: 1rem 1rem 0px 0px;
    }

</style>

<body>

    @include('components.navbar')

    <main class="view">
        @yield('content')
    </main>
</body>

</html>
