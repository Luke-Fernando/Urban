<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require __DIR__ . "/../../shared/head.php";
    ?>
    <title>Urban | All offers</title>
</head>

<body class="bg-[var(--main-bg-yellow)]">
    <?php
    require __DIR__ . "/../../shared/nav/nav-user.php";
    ?>
    <main class="container h-auto mx-auto flex flex-col justify-start items-start mt-10 mb-32 box-border px-4">
        <section class="w-max h-auto mb-5">
            <h3 class="text-lg font-medium text-[var(--main-font-color-90)]">All offers</h3>
        </section>
        <section class="w-full h-auto flex flex-col justify-start items-start my-10 px-8 relative">
            <a href="/offers/create" class="w-max h-auto flex justify-start items-center text-[var(--main-font-color-80)] hover:text-[var(--main-font-color-90)] duration-75 ease-linear">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-8 h-auto mr-2">
                    <path fill="currentColor" d="M21 3H3v18h18zm-4 10h-4v4h-2v-4H7v-2h4V7h2v4h4z" />
                </svg>
                <span class="text-sm text-inherit">Create new offer</span>
            </a>
        </section>
        <?php
        $offers = array(
            array(
                "id" => "1",
                "title" => "This is the sample title",
                "datetime" => "08 Jul, 2024, 01.03 PM",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab repudiandae hic, assumenda sed perferendis ipsam beatae distinctio ipsum quibusdam unde.
                Quia perferendis hic voluptate molestias suscipit tempora enim ipsa dolorum natus at, tenetur fugiat ratione laborum error odit tempore animi repellat
                ea est, ex illo! Quibusdam ipsa saepe quisquam. Error commodi vel laudantium minima explicabo, a soluta vero dolores possimus iure ipsa, fuga
                repudiandae? Distinctio debitis animi sapiente libero dicta nesciunt, iure, et consequatur accusamus labore ad pariatur ut? Deleniti, deserunt! Odio
                repellendus reprehenderit nulla, quia nostrum, incidunt aliquid nihil perspiciatis expedita consectetur voluptate error impedit, magni quidem
                dignissimos! Cupiditate!",
            ),
            array(
                "id" => "1",
                "title" => "This is the sample title",
                "datetime" => "08 Jul, 2024, 01.03 PM",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab repudiandae hic, assumenda sed perferendis ipsam beatae distinctio ipsum quibusdam unde.
                Quia perferendis hic voluptate molestias suscipit tempora enim ipsa dolorum natus at, tenetur fugiat ratione laborum error odit tempore animi repellat
                ea est, ex illo! Quibusdam ipsa saepe quisquam. Error commodi vel laudantium minima explicabo, a soluta vero dolores possimus iure ipsa, fuga
                repudiandae? Distinctio debitis animi sapiente libero dicta nesciunt, iure, et consequatur accusamus labore ad pariatur ut? Deleniti, deserunt! Odio
                repellendus reprehenderit nulla, quia nostrum, incidunt aliquid nihil perspiciatis expedita consectetur voluptate error impedit, magni quidem
                dignissimos! Cupiditate!",
            ),
            array(
                "id" => "1",
                "title" => "This is the sample title",
                "datetime" => "08 Jul, 2024, 01.03 PM",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab repudiandae hic, assumenda sed perferendis ipsam beatae distinctio ipsum quibusdam unde.
                Quia perferendis hic voluptate molestias suscipit tempora enim ipsa dolorum natus at, tenetur fugiat ratione laborum error odit tempore animi repellat
                ea est, ex illo! Quibusdam ipsa saepe quisquam. Error commodi vel laudantium minima explicabo, a soluta vero dolores possimus iure ipsa, fuga
                repudiandae? Distinctio debitis animi sapiente libero dicta nesciunt, iure, et consequatur accusamus labore ad pariatur ut? Deleniti, deserunt! Odio
                repellendus reprehenderit nulla, quia nostrum, incidunt aliquid nihil perspiciatis expedita consectetur voluptate error impedit, magni quidem
                dignissimos! Cupiditate!",
            ),
            array(
                "id" => "1",
                "title" => "This is the sample title",
                "datetime" => "08 Jul, 2024, 01.03 PM",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab repudiandae hic, assumenda sed perferendis ipsam beatae distinctio ipsum quibusdam unde.
                Quia perferendis hic voluptate molestias suscipit tempora enim ipsa dolorum natus at, tenetur fugiat ratione laborum error odit tempore animi repellat
                ea est, ex illo! Quibusdam ipsa saepe quisquam. Error commodi vel laudantium minima explicabo, a soluta vero dolores possimus iure ipsa, fuga
                repudiandae? Distinctio debitis animi sapiente libero dicta nesciunt, iure, et consequatur accusamus labore ad pariatur ut? Deleniti, deserunt! Odio
                repellendus reprehenderit nulla, quia nostrum, incidunt aliquid nihil perspiciatis expedita consectetur voluptate error impedit, magni quidem
                dignissimos! Cupiditate!",
            ),
            array(
                "id" => "1",
                "title" => "This is the sample title",
                "datetime" => "08 Jul, 2024, 01.03 PM",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab repudiandae hic, assumenda sed perferendis ipsam beatae distinctio ipsum quibusdam unde.
                Quia perferendis hic voluptate molestias suscipit tempora enim ipsa dolorum natus at, tenetur fugiat ratione laborum error odit tempore animi repellat
                ea est, ex illo! Quibusdam ipsa saepe quisquam. Error commodi vel laudantium minima explicabo, a soluta vero dolores possimus iure ipsa, fuga
                repudiandae? Distinctio debitis animi sapiente libero dicta nesciunt, iure, et consequatur accusamus labore ad pariatur ut? Deleniti, deserunt! Odio
                repellendus reprehenderit nulla, quia nostrum, incidunt aliquid nihil perspiciatis expedita consectetur voluptate error impedit, magni quidem
                dignissimos! Cupiditate!",
            ),
        );

        foreach ($offers as $offer) {
            $data = $offer;
            require __DIR__ . "/components/offer.php";
        }
        ?>
    </main>
    <?php
    require __DIR__ . "/../../shared/footer.php";
    ?>
</body>

</html>