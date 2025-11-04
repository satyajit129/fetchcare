<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FetchCare Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <!-- Left Illustration -->
        <div class="container_content">
            <div class="left">
                <img src="{{ asset('images/picture_1.png') }}" alt="Illustration Placeholder" />
            </div>

            <!-- Right Form -->
            <div class="right">
                <div class="right_side_header">
                    <img src="{{ asset('images/Logo.png') }}" alt="Logo" />
                    <div class="signup-link">
                        <a href="{{ route('signup') }}">Sign Up</a>
                    </div>
                </div>

                <div class="right-content">
                    <div class="form-box">
                        <h3>Welcome to FetchCare!</h3>
                        <p>Please enter your details to login here</p>
                        <a href="{{ route('googleRedirect') }}">
                            <div class="google-btn">
                            <img src="{{ asset('svg/flat-color-icons_google.svg') }}" alt="Google" />
                            <span>Continue with Google</span>
                        </div>
                        </a>
                        

                        <div class="divider">Or Login With</div>

                        {{-- Login Form --}}
                        <form method="POST" action="{{ route('loginRequest') }}">
                            @csrf
                            <div style="display: flex; flex-direction: column; gap: 22px">
                                <input type="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required />
                                <div style="position: relative">
                                    <input type="password" name="password" id="password" placeholder="Password"
                                        style="padding-right: 30px" required />
                                    <span class="togglePassword" data-target="password"
                                        style="
                                            position: absolute;
                                            right: 5px;
                                            top: 53%;
                                            transform: translateY(-50%);
                                            cursor: pointer;
                                        ">
                                        <img src="{{ asset('svg/eye-slash.svg') }}" alt="Toggle password" />
                                    </span>
                                </div>
                                <div
                                    class="custom-control custom-checkbox checkbox-outline-primary d-inline-block mr-3 mb-3">
                                    <input type="checkbox" name="remember" class="custom-control-input"
                                        id="outline-chekbox-primary">
                                    <label class="custom-control-label" for="outline-chekbox-primary">
                                        Remember for 7 Days
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn">Login</button>
                        </form>

                        {{-- Forgot Password --}}
                        <p class="forgot-password">
                            <a href="#">Forgot Password?</a>
                        </p>
                    </div>
                </div>

                <div class="right_content_footer">
                    <p class="copyright">© FetchCare Solutions - 2025</p>
                    <div class="footer_links">
                        <p>Privacy Policy</p>
                        <p>Contact Support</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Toastr CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if (session('success'))
            toastr.success("{{ session('success') }}");
        @endif

        @if (session('error'))
            toastr.error("{{ session('error') }}");
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
    </script>
    <script>
        document.querySelectorAll(".togglePassword").forEach((span) => {
            span.addEventListener("click", () => {
                const input = document.getElementById(span.dataset.target);
                const type =
                    input.getAttribute("type") === "password" ? "text" : "password";
                input.setAttribute("type", type);

                // Optionally toggle icon
                span.querySelector("img").src =
                    type === "password" ?
                    "{{ asset('svg/eye-slash.svg') }}" :
                    "{{ asset('svg/eye-slash.svg') }}";
            });
        });
    </script>
</body>

</html>
