<div data-portfolio="general-id" data-portfolio-add="general-id" class="w-full h-auto flex flex-col justify-center items-center relative
                    before:content-[''] before:absolute before:right-full before:top-1/2 before:-translate-y-1/2 before:w-[1px] before:h-full
                    before:bg-[var(--main-font-color-20)] my-4">
    <div data-editor-expand-trigger="general-id" class="w-full h-auto flex justify-start items-center hover:bg-[var(--main-font-color-10)] duration-75
                        ease-linear px-4 py-2 cursor-default">
        <div class="w-10 aspect-square overflow-hidden flex justify-center items-center border border-[var(--main-font-color-20)]
                            hover:border-[var(--active-color-brown)] duration-75 ease-linear pointer-events-none">
            <img src="/assets/images/portfolios/default.png" alt="portfolio picture" class="min-w-full min-h-full object-cover">
        </div>
        <div class="w-full h-auto flex flex-col justify-start items-start pl-5 pointer-events-none">
            <p data-editor-title-display="title-id" class="text-base font-medium text-[var(--main-font-color-80)] line-clamp-1">This will be your title</p>
        </div>
        <button data-editor-remove-portfolio="general-id" class="w-max h-auto flex justify-center items-center text-[var(--active-color-brown-low)] hover:text-[var(--active-color-brown)]
                            duration-75 ease-linear">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-8 h-auto pointer-events-none">
                <path fill="currentColor" d="M9 17h2V8H9zm4 0h2V8h-2zm-8 4V6H4V4h5V3h6v1h5v2h-1v15z"></path>
            </svg>
        </button>
    </div>
    <div data-editor-expand-content="general-id" data-show="true" class="w-full h-auto flex justify-start md:items-center items-start flex-wrap px-4 duration-700 
                        ease-linear max-h-0 overflow-hidden">
        <label data-editor-image-label="general-id" for="image-id" class="w-52 aspect-[5/7] flex justify-center items-center overflow-hidden md:mr-5 border border-dashed
                            border-[var(--main-font-color-80)] p-3">
            <img data-editor-image="image-id" src="/assets/images/portfolios/default.png" alt="portfolio picture" class="min-w-full min-h-full object-cover">
            <input data-editor-image-input="image-id" type="file" id="image-id" class="hidden" accept="image/*">
        </label>
        <div class="w-full md:flex-1 h-auto flex justify-start items-start flex-wrap">
            <div class="w-full h-auto flex justify-start items-start px-4">
                <label data-editor-title-label="general-id" for="title-id" class="w-full h-auto my-4">
                    <p class="text-sm font-normal text-[var(--main-font-color-90)] mb-3">Title</p>
                    <input data-editor-title="general-id" value="" type="text" id="title-id" class="w-full h-[40px] bg-[var(--bg-white-low)]
                                        outline-none border-none ring-1 ring-[var(--main-font-color-20)] px-3 focus:ring-[var(--active-color-brown)]
                                        text-sm text-[var(--main-font-color-90)]">
                </label>
            </div>
            <div class="w-full h-auto flex justify-start items-start px-4">
                <label data-editor-link-label="general-id" for="link-id" class="w-full h-auto my-4">
                    <p class="text-sm font-normal text-[var(--main-font-color-90)] mb-3">Link</p>
                    <input data-editor-link="general-id" value="" type="text" id="link-id" class="w-full h-[40px] bg-[var(--bg-white-low)]
                                        outline-none border-none ring-1 ring-[var(--main-font-color-20)] px-3 focus:ring-[var(--active-color-brown)]
                                        text-sm text-[var(--main-font-color-90)]">
                </label>
            </div>
        </div>
    </div>
</div>