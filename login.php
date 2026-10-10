<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kū Chí Tea Café | Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="style.css">
</head>

<body class="auth-page">

    <main class="auth-wrapper">

        <section class="auth-card">

            <div class="text-center mb-4">

                <h1 class="brand-title">
                    Ku Chi Tea Cafe
                </h1>

                <p class="brand-subtitle">
                    Welcome to your favorite tea place
                </p>

            </div>


            <form action="index.html" method="get" novalidate>

                <!-- USERNAME -->

                <div class="mb-3">

                    <label for="username" class="form-label">
                        Username
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-person"></i>
                        </span>

                        <input
                            type="text"
                            class="form-control"
                            id="username"
                            placeholder="Enter your username"
                            required
                            minlength="3">

                    </div>

                    <div class="validation-message">
                        Please enter your username.
                    </div>

                </div>


                <!-- PASSWORD -->

                <div class="mb-3">

                    <label for="password" class="form-label">
                        Password
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-lock"></i>
                        </span>

                        <input
                            type="password"
                            class="form-control"
                            id="password"
                            placeholder="Enter your password"
                            required
                            minlength="6">

                    </div>

                    <div class="validation-message">
                        Please enter your password.
                    </div>

                </div>


                <button type="submit" class="btn btn-cafe w-100">
                    Login
                </button>

            </form>


            <p class="text-center account-text mt-4 mb-0">

                Don't have an account?

                <a href="register.html">
                    Register
                </a>

            </p>

        </section>

    </main>

</body>

</html>