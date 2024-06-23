<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require __DIR__ . "/../shared/head.php";
    ?>
    <title>Urban | Signin</title>
</head>

<body class="bg-[var(--main-bg-yellow)]">
    <?php
    require __DIR__ . "/../shared/nav/nav-guest.php";
    ?>
    <main class="container mx-auto mt-10 mb-32 relative">
        <header class="w-full flex justify-center items-center">
            <h1 class="text-[var(--main-font-color-90)] font-medium text-xl md:text-2xl">Sign in to your account</h1>
        </header>
        <section class="w-full flex justify-center items-center my-10 md:my-20">
            <div id="signup-options" class="w-full px-3 flex flex-col justify-center items-center">
                <button id="google" class="max-w-[430px] w-full h-[50px] flex justify-center items-center bg-[var(--bg-white-low)] border border-[var(--main-font-color-20)] relative 
            hover:border-[var(--main-font-color-30)] ease-linear duration-75 my-4 active:scale-[.98]">
                    <p class="font-normal text-[var(--main-font-color-90)] text-base">Continue with Google</p>
                    <div class="w-[30px] h-full flex justify-center items-center absolute left-3 top-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48" class="w-full h-auto">
                            <path fill="#ffc107" d="M43.611 20.083H42V20H24v8h11.303c-1.649 4.657-6.08 8-11.303 8c-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C12.955 4 4 12.955 4 24s8.955 20 20 20s20-8.955 20-20c0-1.341-.138-2.65-.389-3.917" />
                            <path fill="#ff3d00" d="m6.306 14.691l6.571 4.819C14.655 15.108 18.961 12 24 12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C16.318 4 9.656 8.337 6.306 14.691" />
                            <path fill="#4caf50" d="M24 44c5.166 0 9.86-1.977 13.409-5.192l-6.19-5.238A11.91 11.91 0 0 1 24 36c-5.202 0-9.619-3.317-11.283-7.946l-6.522 5.025C9.505 39.556 16.227 44 24 44" />
                            <path fill="#1976d2" d="M43.611 20.083H42V20H24v8h11.303a12.04 12.04 0 0 1-4.087 5.571l.003-.002l6.19 5.238C36.971 39.205 44 34 44 24c0-1.341-.138-2.65-.389-3.917" />
                        </svg>
                    </div>
                </button>
                <button id="facebook" class="max-w-[430px] w-full h-[50px] flex justify-center items-center bg-[var(--bg-white-low)] border border-[var(--main-font-color-20)] relative 
            hover:border-[var(--main-font-color-30)] ease-linear duration-75 my-4 active:scale-[.98]">
                    <p class="font-normal text-[var(--main-font-color-90)] text-base">Continue with Facebook</p>
                    <div class="w-[30px] h-full flex justify-center items-center absolute left-3 top-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256" class="w-full h-auto">
                            <path fill="#1877f2" d="M256 128C256 57.308 198.692 0 128 0S0 57.308 0 128c0 63.888 46.808 116.843 108 126.445V165H75.5v-37H108V99.8c0-32.08 19.11-49.8 48.348-49.8C170.352 50 185 52.5 185 52.5V84h-16.14C152.959 84 148 93.867 148 103.99V128h35.5l-5.675 37H148v89.445c61.192-9.602 108-62.556 108-126.445" />
                            <path fill="#fff" d="m177.825 165l5.675-37H148v-24.01C148 93.866 152.959 84 168.86 84H185V52.5S170.352 50 156.347 50C127.11 50 108 67.72 108 99.8V128H75.5v37H108v89.445A129 129 0 0 0 128 256a129 129 0 0 0 20-1.555V165z" />
                        </svg>
                    </div>
                </button>
                <button data-form-toggle id="email-option" class="max-w-[430px] w-full h-[50px] flex justify-center items-center bg-[var(--bg-white-low)] 
                border border-[var(--main-font-color-20)] relative hover:border-[var(--main-font-color-30)] ease-linear duration-75 my-4 active:scale-[.98]">
                    <p class="font-normal text-[var(--main-font-color-90)] text-base">Continue with Email</p>
                    <div class="w-[30px] h-full flex justify-center items-center absolute left-3 top-0 text-[var(--main-font-color-90)]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto">
                            <path fill="currentColor" d="M22 4H2v16h20zm-2 4l-8 5l-8-5V6l8 5l8-5z" />
                        </svg>
                    </div>
                </button>
            </div>
            <div id="signup-form" class="hidden w-full max-w-[900px] h-auto flex-wrap justify-start items-start box-border px-2">
                <div class="w-full h-auto flex justify-start items-center mb-5">
                    <button data-form-toggle class="w-max h-auto flex justify-center items-center text-[var(--main-font-color-80)] hover:text-[var(--main-font-color-90)]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024" class="w-[25px] h-auto">
                            <path fill="currentColor" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64" />
                            <path fill="currentColor" d="m237.248 512l265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312z" />
                        </svg>
                    </button>
                </div>
                <?php
                $regular_form_inputs = [
                    [
                        "input_name" => "Email or username",
                        "input_id" => "email-or-username",
                        "input_type" => "text",
                        "full_width" => true
                    ]
                ];

                foreach ($regular_form_inputs as $input) {
                    extract($input);
                    include __DIR__ . '/components/regular_input.php';
                }
                ?>
                <?php
                $password_form_inputs = [
                    [
                        "input_name" => "Password",
                        "input_id" => "password",
                        "input_type" => "password",
                        "full_width" => true,
                        "instructions" => false
                    ]
                ];

                foreach ($password_form_inputs as $input) {
                    extract($input);
                    include __DIR__ . '/components/password_input.php';
                }
                ?>
                <button id="signin" class="w-full md:w-max py-2 px-2 bg-[var(--active-color-brown-low)] font-normal md:font-medium text-[var(--bg-white-low)] 
                text-sm border border-[var(--main-font-color-20)] hover:bg-[var(--active-color-brown)] hover:border-[--main-font-color-30] 
                ease-linear duration-75 mt-10 mx-2 active:scale-95">
                    Log in
                </button>
            </div>
        </section>
        <section class="w-full h-auto flex justify-center items-center">
            <p class="text-[var(--main-font-color-90)] font-normal text-base">Don't have an account?
                <a href="/signup" class="underline text-base hover:text-[var(--active-color-brown)] ease-linear duration-75">Sign up</a>
            </p>
        </section>
    </main>
    <?php
    require __DIR__ . "/../shared/footer.php";
    ?>
</body>

</html>