<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require __DIR__ . "/../../shared/head.php";
    ?>
    <title>Urban | Application for This is the sample title</title>
</head>

<body class="bg-[var(--main-bg-yellow)]">
    <?php
    require __DIR__ . "/../../shared/nav/nav-user.php";
    ?>
    <main class="container h-auto mx-auto flex flex-col justify-start items-start mt-10 mb-32 box-border px-4">
        <section class="w-max h-auto mb-10">
            <h3 class="text-lg font-medium text-[var(--main-font-color-90)]">Preview application</h3>
        </section>
        <section class="w-full h-auto flex flex-col justify-start items-start border-t border-b border-[var(--main-font-color-20)] py-6 my-5">
            <h3 class="text-lg text-[var(--main-font-color-90)] font-medium mb-4">This is the sample title</h3>
            <p class="text-sm text-[var(--main-font-color-80)] font-normal line-clamp-5 leading-7 mb-3">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente ipsam hic incidunt dolorem omnis voluptatibus eos similique! Laudantium sed sunt, molestias corrupti esse hic optio quod expedita adipisci! Magnam, quas vitae molestiae earum facilis debitis repellat cum vel nesciunt quasi perspiciatis in. Quam illum maiores sapiente doloremque exercitationem aliquam eaque earum sequi odio tempore molestias nesciunt sed possimus nihil, dolorum ex ducimus odit impedit, enim praesentium explicabo repudiandae voluptatem tenetur doloribus? Distinctio tempore quam harum voluptatibus voluptatum corrupti earum maiores consectetur vero, ad cumque provident aliquid, dolor perspiciatis architecto maxime quisquam ducimus porro animi atque odio quod. Ipsum adipisci molestias modi, fugiat, perspiciatis inventore laboriosam distinctio provident eligendi saepe deserunt aperiam officiis doloremque, quas animi rerum aliquam beatae a maxime corrupti voluptatibus debitis obcaecati? Laborum quos explicabo ex voluptatem deleniti nostrum laboriosam provident ullam dolorum accusantium reprehenderit accusamus ipsa dignissimos, placeat magnam vero quam, repellendus reiciendis cum magni, rem nulla.
            </p>
            <a href="/job" class="text-sm font-normal text-[var(--active-color-brown-low)] hover:text-[var(--active-color-brown)] duration-75 ease-linear underline">
                See more
            </a>
        </section>
        <section class="w-full h-auto flex flex-col justify-start items-start lg:px-20 box-border">
            <div class="w-full h-auto flex justify-start items-center">
                <a href="/user/profile" class="w-10 aspect-square overflow-hidden flex justify-center items-center border border-[var(--main-font-color-20)]
                hover:border-[var(--active-color-brown)] duration-75 ease-linear mr-4">
                    <img src="/assets/images/users/user.png" alt="creator's profile picture" class="min-w-full min-h-full object-cover">
                </a>
                <div class="w-full h-auto flex flex-col justify-start items-start">
                    <p class="text-base font-medium text-[var(--main-font-color-90)]">Luke Fernando
                        <span class="text-sm text-[var(--main-font-color-80)] font-normal ml-2">on 08 Jul, 2024, 01.13 PM</span>
                    </p>
                    <p class="text-sm text-[var(--main-font-color-80)] font-normal">@lukefer</p>
                </div>
                <button class="w-auto h-auto flex justify-start items-start text-[var(--main-font-color-80)] hover:text-[var(--main-font-color-90)]
                duration-75 ease-linear active:scale-95">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-6 h-auto">
                        <path fill="currentColor" d="M20 2H4a2 2 0 0 0-2 2v18l4-4h14a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2"></path>
                    </svg>
                </button>
            </div>
            <div class="w-full h-auto flex flex-col justify-start items-start mt-16">
                <h3 class="text-lg text-[var(--main-font-color-90)] font-medium mb-8">This is the sample offer title</h3>
                <p class="text-base text-[var(--main-font-color-80)] font-normal leading-7">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias autem aperiam molestiae amet cumque explicabo? Ipsum, unde necessitatibus
                    quia nam enim maxime blanditiis quisquam, voluptatum eveniet saepe eaque, adipisci placeat? Animi officiis, consequatur optio unde repellendus
                    ea iste ipsam maiores quae. Sequi ab laudantium iure reprehenderit rerum! Est harum, sit ea esse in voluptates quo soluta, nulla qui aperiam
                    consectetur architecto? Eum minima possimus natus veniam odio exercitationem suscipit voluptatem sequi assumenda temporibus optio voluptates,
                    aspernatur corrupti adipisci sunt molestias est ab nobis quis? Debitis harum tempora minus, cum sit voluptatibus eum. Ea autem cum explicabo
                    odit enim, veniam ullam, hic nobis consequuntur animi vel beatae laudantium architecto? Cum recusandae ex aliquam quisquam maxime libero!
                    Veniam sunt sequi adipisci quaerat id tempora voluptatibus non? Ea neque doloremque dolorum, sunt ad debitis? Delectus similique tempora enim
                    totam facere magni odit eius reiciendis, minus, libero eos corporis veritatis fugiat? Illo sequi ab blanditiis repellat veritatis porro
                    impedit, quasi saepe voluptatem distinctio facilis excepturi tempora vitae necessitatibus odit quis, esse, laborum aut eligendi! Sequi
                    eligendi assumenda sapiente dicta, beatae excepturi nihil ullam, nulla quisquam atque neque saepe pariatur nemo ipsum voluptate. Autem,
                    suscipit. Inventore recusandae illum cupiditate laborum? Eius minima est ex similique.
                </p>
            </div>
            <!-- milestones -->
            <div class="w-full h-auto flex flex-col justify-start items-start mt-10">
                <p class="text-base text-[var(--main-font-color-90)] font-medium mb-5">Milestones</p>
                <div class="w-full h-auto flex flex-col justify-start items-start box-border px-5">
                    <!-- milestone -->
                    <div class="w-full h-auto flex flex-col justify-start items-start relative px-4 my-3
                    before:content-[''] before:absolute before:right-full before:top-1/2 before:-translate-y-1/2 before:w-[1px] before:h-[80%] before:bg-[var(--main-font-color-20)]">
                        <p class="text-base font-medium text-[var(--main-font-color-80)] mb-2">This is the title of this milestone</p>
                        <p class="text-sm font-medium text-[var(--main-font-color-80)] my-1">Duration:
                            <span class="text-sm font-normal text-[var(--main-font-color-80)]">1 month</span>
                        </p>
                        <p class="text-sm font-medium text-[var(--main-font-color-80)] my-1">Fixed price:
                            <span class="text-sm font-normal text-[var(--main-font-color-80)]">$100.00</span>
                        </p>
                    </div>
                    <!-- milestone -->
                    <!-- milestone -->
                    <div class="w-full h-auto flex flex-col justify-start items-start relative px-4 my-3
                    before:content-[''] before:absolute before:right-full before:top-1/2 before:-translate-y-1/2 before:w-[1px] before:h-[80%] before:bg-[var(--main-font-color-20)]">
                        <p class="text-base font-medium text-[var(--main-font-color-80)] mb-2">This is the title of this milestone</p>
                        <p class="text-sm font-medium text-[var(--main-font-color-80)] my-1">Duration:
                            <span class="text-sm font-normal text-[var(--main-font-color-80)]">1 month</span>
                        </p>
                        <p class="text-sm font-medium text-[var(--main-font-color-80)] my-1">Hourly price:
                            <span class="text-sm font-normal text-[var(--main-font-color-80)]">$10.00</span>
                        </p>
                    </div>
                    <!-- milestone -->
                </div>
            </div>
            <!-- milestones -->
            <div class="w-full h-auto flex flex-wrap justify-start items-center mt-16">
                <button class="w-max h-auto flex justify-center items-center text-sm font-medium text-[var(--bg-white-low)] bg-[var(--active-color-brown-low)]
                    hover:bg-[var(--active-color-brown)] active:scale-95 border border-[var(--main-font-color-20)] px-4 py-2 duration-75 ease-linear mx-3 my-3">
                    Hire now
                </button>
                <button class="w-max h-auto flex justify-center items-center text-sm font-medium text-[var(--bg-white-low)] bg-[var(--main-font-color-80)]
                    hover:bg-[var(--main-font-color-90)] active:scale-95 border border-[var(--main-font-color-20)] px-4 py-2 duration-75 ease-linear mx-3 my-3">
                    Add to room
                </button>
            </div>
        </section>
    </main>
    <?php
    require __DIR__ . "/../../shared/footer.php";
    ?>
</body>

</html>