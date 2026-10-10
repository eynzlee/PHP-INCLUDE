<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ku Chi Tea Cafe | Register</title>

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
                    Create your café account
                </p>

            </div>


            <form action="login.html" method="get" novalidate>

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
                            placeholder="Choose a username"
                            required
                            minlength="3">

                    </div>

                    <div class="validation-message">
                        Please enter your username.
                    </div>

                </div>


                <!-- EMAIL -->

                <div class="mb-3">

                    <label for="email" class="form-label">
                        Email Address
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-envelope"></i>
                        </span>

                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            placeholder="Enter your email"
                            required>

                    </div>

                    <div class="validation-message">
                        Please enter a valid email address.
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
                            placeholder="Create a password"
                            required
                            minlength="6">

                    </div>

                    <div class="validation-message">
                        Please enter your password.
                    </div>

                </div>


                <!-- CONFIRM PASSWORD -->

                <div class="mb-3">

                    <label for="confirmPassword" class="form-label">
                        Confirm Password
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-shield-check"></i>
                        </span>

                        <input
                            type="password"
                            class="form-control"
                            id="confirmPassword"
                            placeholder="Confirm your password"
                            required
                            minlength="6">

                    </div>

                    <div class="validation-message">
                        Please confirm your password.
                    </div>

                </div>


                <button type="submit" class="btn btn-cafe w-100">
                    Register
                </button>

            </form>


            <p class="text-center account-text mt-4 mb-0">

                Already have an account?

                <a href="login.html">
                    Login
                </a>

            </p>

        </section>

    </main>

</body>

</html>