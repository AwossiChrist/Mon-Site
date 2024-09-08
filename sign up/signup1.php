<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form - Bootstrap 5</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="container" style="margin-top: 10em;">
        <!-- Sign up form -->
        <form>
            <!-- Sign up card -->
            <div class="card person-card">
                <div class="card-body text-center">
                    <!-- Sex image -->
                    <img id="img_sex" class="person-img"
                        src="https://visualpharm.com/assets/217/Life%20Cycle-595b40b75ba036ed117d9ef0.svg" alt="Avatar">
                    <h2 id="who_message" class="card-title">Who are you ?</h2>
                    <!-- First row (on medium screen) -->
                    <div class="row">
                        <div class="col-md-2">
                            <select id="input_sex" class="form-select">
                                <option value="Mr.">Mr.</option>
                                <option value="Ms.">Ms.</option>
                            </select>
                        </div>
                        <div class="col-md-5">
                            <input id="first_name" type="text" class="form-control" placeholder="First name">
                            <div id="first_name_feedback" class="invalid-feedback">
                                <!-- Feedback message -->
                            </div>
                        </div>
                        <div class="col-md-5">
                            <input id="last_name" type="text" class="form-control" placeholder="Last name">
                            <div id="last_name_feedback" class="invalid-feedback">
                                <!-- Feedback message -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">How to contact you ?</h2>
                            <div class="mb-3">
                                <label for="email" class="col-form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="example@gmail.com" required>
                                <div class="invalid-feedback">
                                    <!-- Feedback message -->
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="tel" class="col-form-label">Phone number</label>
                                <input type="text" class="form-control" id="tel" placeholder="+33 6 99 99 99 99" required>
                                <div class="invalid-feedback">
                                    <!-- Feedback message -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <div class="col-md-6 mt-3">
                    <div class="card"> 
                        <div class="card-body">
                            <h2 class="card-title">Securize your account !</h2>
                            <div class="mb-3">
                                <label for="password" class="col-form-label">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Type your password" required>
                                <div class="invalid-feedback">
                                    <!-- Feedback message -->
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password_conf" class="col-form-label">Password (confirm)</label>
                                <input type="password" class="form-control" id="password_conf" placeholder="Type your password again" required>
                                <div class="invalid-feedback">
                                    <!-- Feedback message -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 2em;" class="text-center">
                <button type="button" class="btn btn-secondary btn-lg w-50 ">Sign up !</button>
            </div>
            <div style="margin-top: 2em;" class="text-center">
                <a href="/login/login.html"><button type="button" class="btn btn-success btn-lg w-10 ">log in!</button></a>
            </div>
        </form>
    </div>

    <!-- jQuery and Bootstrap 5 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="signup.js"></script>
</body>
</html>