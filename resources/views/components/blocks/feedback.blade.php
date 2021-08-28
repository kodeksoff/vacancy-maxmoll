<section class="feedback" id="feedback">
    <div class="container max-w-7xl">
        <div class="section-header">
            <div class="section-header__title font-custom">Хотите быть в нашей команде?</div>
            <div class="section-header__subtitle max-w-4xl mx-auto">Просто заполните свои данные. Если в момент
                обращения мы не сможем подобрать вам работу, то вы попадаете в кадровый резерв. Мы свяжемся с вами, как
                только появится вакантное место.
            </div>
        </div>
        <div class="section-content">
            <form method="post" id="feedbackForm">
                @csrf
                <div class="flex flex-column lg:flex-row flex-wrap place-content-center">
                    <div class="input-form">

                        <label for="name" class="block text-sm font-medium text-gray-700">Ваше ФИО <span
                                class="text-red-400">*</span></label>
                        <input type="text" name="name" id="name"
                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                               placeholder="ФИО"/>
                    </div>
                    <div class="input-form">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Ваш телефон <span
                                class="text-red-400">*</span></label>
                        <input type="tel" name="phone" id="phone"
                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                               placeholder="+7 (___) ___-__-__"/>
                    </div>
                    <div class="input-form">
                        <label for="email" class="block text-sm font-medium text-gray-700">Ваш E-mail</label>
                        <input type="email" name="email" id="email"
                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                               placeholder="E-mail"/>
                    </div>
                    <div class="input-form">
                        <label for="bday" class="block text-sm font-medium text-gray-700">Дата рождения <span
                                class="text-red-400">*</span></label>
                        <input type="date" name="bday" id="bday"
                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                               required/>
                    </div>
                    <div class="input-form">
                        <label for="experience" class="block text-sm font-medium text-gray-700">Опыт работы</label>
                        <select id="experience" name="experience"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option>До 1 года</option>
                            <option>От 1 до 3 лет</option>
                            <option>Более 5 лет</option>
                        </select>
                    </div>
                    <div class="input-form">
                        <label for="link" class="block text-sm font-medium text-gray-700">Ссылка на резюме</label>
                        <input type="text" name="link" id="link"
                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                               placeholder="www.example.com"/>
                    </div>
                </div>
                <div class="italic mb-7 text-center">Нажимая на кнопку, вы даете <span class="text-indigo-500 underline cursor-pointer" id="showPersonalData">Согласие на обработку персональных данных.</span></div>
                <div class="text-center">
                    <button type="submit" class="button" id="submitButton">
                        Отправить
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
