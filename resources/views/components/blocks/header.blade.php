<header>
    <nav class="header-nav">
        <div class="container">
            <div class="flex justify-between items-center">
                <div class="header-nav__burger sm:block md:hidden">
                    <div class="burger-button" id="sidebarButton">
                        <img src="img/burger-button.svg" alt="Menu">
                    </div>
                </div>
                <div class="header-nav__left flex items-center">
                    <div class="header-nav__logo">
                        <a href="/"><img src="img/logo.svg" alt="Maxmoll"></a>
                    </div>
                    <div class="header-nav__navigation sidebar">
                        <div class="close-button md:hidden" id="sidebarButtonClose">
                            <img src="img/close.svg" alt="Menu">
                        </div>
                        <ul class="flex">
                            <li><a href="#conditions">Условия работы</a></li>
                            <li><a href="#responsibilities">Обязанности и требования</a></li>
                            <li><a href="#about">О «Maxmoll»</a></li>
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
                        <div class="first-screen-left__title font-custom">{!! $data['title'] !!}</div>
                        <div class="first-screen-left__subtitle font-custom">{!! $data['subtitle'] !!}</div>
                        <div class="first-screen-left__options flex flex-col-reverse md:flex-row items-center mt-0 md:mt-6 ">
                            <button class="button button-with-arrow mx-auto md:mx-0 mt-3 md:mt-0 mb-9 md:mb-0 scrollToFeedback">Анкета</button>
                            <div class="italic font-weight-bold md:ml-7 ml-0">Присоединяйтесь к нашей команде уже сейчас
                            </div>
                        </div>
                    </div>
                </div>
                <div class="first-screen-right">
                    <div class="first-screen-right__content">
                        <img src="{{ $data['image'] }}" alt="main-image">
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-10">
            <div class="first-screen__description">{!! $data['optional'] !!}</div>
        </div>
    </div>
</header>
