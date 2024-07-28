<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    extract($data);
    require __DIR__ . "/../shared/head.php";
    ?>
    <title>Urban | Reset password</title>
</head>

<body class="bg-[var(--main-bg-yellow)]">
    <?php
    require __DIR__ . "/../shared/nav/nav-guest.php";
    ?>
    <main class="container mx-auto mt-10 mb-32 relative">
        <header class="w-full flex justify-center items-center">
            <h1 class="text-[var(--main-font-color-90)] font-medium text-xl md:text-2xl">Reset password</h1>
        </header>
        <section class="w-full flex justify-center items-center my-10 md:my-20">
            <div id="reset-form" class="flex w-full max-w-[900px] h-auto flex-wrap justify-start items-start box-border px-2">
                <?php
                $regular_form_inputs = [
                    [
                        "input_name" => "Username",
                        "input_id" => "username",
                        "input_type" => "text",
                        "value" => $username,
                        "full_width" => true
                    ],
                    [
                        "input_name" => "Reset token",
                        "input_id" => "reset-token",
                        "input_type" => "text",
                        "value" => $reset_token,
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
                        "input_name" => "New password",
                        "input_id" => "new-password",
                        "input_type" => "password",
                        "full_width" => true,
                        "instructions" => true
                    ],
                    [
                        "input_name" => "Confirm new password",
                        "input_id" => "confirm-new-password",
                        "input_type" => "password",
                        "full_width" => true,
                        "instructions" => true
                    ]
                ];

                foreach ($password_form_inputs as $input) {
                    extract($input);
                    include __DIR__ . '/components/password_input.php';
                }
                ?>
                <button id="reset-password-btn" class="w-full md:w-max py-2 px-2 bg-[var(--active-color-brown-low)] font-normal md:font-medium text-[var(--bg-white-low)] 
                text-sm border border-[var(--main-font-color-20)] hover:bg-[var(--active-color-brown)] hover:border-[--main-font-color-30] 
                ease-linear duration-75 mt-10 mx-2 active:scale-95">
                    Reset password
                </button>
            </div>
        </section>
    </main>
    <?php
    require __DIR__ . "/../shared/footer.php";
    ?>
</body>

</html>