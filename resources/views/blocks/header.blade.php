<header>
    <nav class="header-nav">
        <div class="container">
            <div class="flex justify-between items-center" x-data="{ sideBarOpen: false }">
                <div class="header-nav__burger sm:block md:hidden">
                    <div class="burger-button" @click="sideBarOpen = !sideBarOpen">
                        <img src="img/burger-button.svg" alt="Menu">
                    </div>
                </div>
                <div class="header-nav__left flex items-center">
                    <div class="header-nav__logo">
                        <a href="/"><img src="img/logo.svg" alt="Maxmoll"></a>
                    </div>
                    <div class="header-nav__navigation" :class="{ 'show' : sideBarOpen }">
                        <ul class="flex">
                            <li><a href="/">Условия работы</a></li>
                            <li><a href="/">Обязанности и требования</a></li>
                            <li><a href="/">О «Maxmoll»</a></li>
                        </ul>
                    </div>
                </div>
                <div class="header-nav__right">
                    <button class="button hidden xl:block scrollToFeedback">Заполнить анкету</button>
                    <button class="button sm:block xl:hidden scrollToFeedback">Анкета</button>
                </div>
            </div>
        </div>
    </nav>
    <div class="first-screen flex flex-col justify-between">
        <div class="container">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="first-screen-left">
                    <div class="first-screen-left__content">
                        <div class="first-screen-left__title font-custom">Есть работа!</div>
                        <div class="first-screen-left__subtitle font-custom">Кладовщика комплектовщик
                            (п.Коммунарка)
                        </div>
                        <div class="first-screen-left__options flex flex-col-reverse md:flex-row items-center mt-0 md:mt-6 ">
                            <button class="button button-with-arrow mx-auto md:mx-0 mt-3 md:mt-0 mb-9 md:mb-0 scrollToFeedback">Анкета</button>
                            <div class="italic font-weight-bold md:ml-7 ml-0">Присоединяйтесь к нашей команде уже сейчас
                            </div>
                        </div>
                    </div>
                </div>
                <div class="first-screen-right">
                    <div class="first-screen-right__content">
                        <img src="img/first-screen-main.png" alt="main-image">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="first-screen__description">поселок Коммунарка, улица <br /> Александры Монаховой, 57, вл2</div>
        </div>
    </div>
</header>
