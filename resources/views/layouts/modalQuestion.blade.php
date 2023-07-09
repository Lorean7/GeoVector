<div class="modal" id="modalQuestion">
    <div class="modal__header">
        <div class="modal__title">
            <!-- begin .title-->
            <h3 class="title title_size_h3">Задать вопрос</h3>
            <!-- end .title-->
        </div>
    </div>
    <div class="modal__content">
        <!-- begin .form-->
        <!-- Modifiers-->
        <!-- form_messages_shown - display the messages element. this will automatically display all the .form__message elements-->
        <form class="form form_type_close form_controls_full modal__form" id="formQuestion">
            @csrf
            <!-- messages can be placed before or after the form-->
            <div class="form__messages">
                <!-- Modifiers-->
                <!-- form__message_style_error - red color-->
                <div class="form__message">Сообщение формы</div>
            </div>
            <div class="form__main">
                <div class="form__inputs">
                    <div class="form__line">
                        <!-- begin .form-control-->
                        <div class="form-control">
                            <label class="form-control__holder">
                                <span class="form-control__field">
                                    <!-- Modifiers-->
                                    <!-- form-control__input_state_invalid - red border, one of the two options to show invalid field-->
                                    <input
                                        type="text"
                                        class="form-control__input js-name-quest"
                                        placeholder="Имя*"
                                        required="required"
                                        name="name"
                                    />
                                </span>
                                <span class="form-control__messages">
                                    <span
                                        style="display: none"
                                        class="form-control__message form-control__message_style_error"
                                    >
                                        Ошибка поля
                                    </span>
                                </span>
                            </label>
                        </div>
                        <!-- end .form-control-->
                    </div>
                    <div class="form__line">
                        <!-- begin .form-control-->
                        <div class="form-control">
                            <label class="form-control__holder">
                                <span class="form-control__field">
                                    <!-- Modifiers-->
                                    <!-- form-control__input_state_invalid - red border, one of the two options to show invalid field-->
                                    <input
                                        type="tel"
                                        class="form-control__input js-phone-input js-phone-quest"
                                        placeholder="+7 (___)___-__-__"
                                        required="required"
                                        name="phone"
                                    />
                                </span>
                                <span class="form-control__messages">
                                    <span
                                        style="display: none"
                                        class="form-control__message form-control__message_style_error"
                                    >
                                        Ошибка поля
                                    </span>
                                </span>
                            </label>
                        </div>
                        <!-- end .form-control-->
                    </div>
                    <div class="form__line">
                        <!-- begin .form-control-->
                        <div class="form-control">
                            <label class="form-control__holder">
                                <span class="form-control__field">
                                    <!-- Modifiers-->
                                    <!-- form-control__input_state_invalid - red border, one of the two options to show invalid field-->
                                    <input
                                        type="text"
                                        class="form-control__input js-adress-input js-adress-quest"
                                        placeholder="Адрес вызова*"
                                        required="required"
                                        name="address"
                                    />
                                </span>
                                <span class="form-control__messages">
                                    <span
                                        style="display: none"
                                        class="form-control__message form-control__message_style_error"
                                    >
                                        Ошибка поля
                                    </span>
                                </span>
                            </label>
                        </div>
                        <!-- end .form-control-->
                    </div>
                    <div class="form__line">
                        <!-- begin .form-control-->
                        <div class="form-control">
                            <label class="form-control__holder">
                                <span class="form-control__field">
                                    <!-- Modifiers-->
                                    <!-- form-control__textarea_state_invalid - red border, one of the two options to show invalid field-->
                                    <textarea
                                        class="form-control__textarea js-comment-quest"
                                        placeholder="Сообщение"
                                        name="comment"
                                    ></textarea>
                                </span>
                                <span class="form-control__messages">
                                    <span
                                        style="display: none"
                                        class="form-control__message form-control__message_style_error"
                                    >
                                        Ошибка поля
                                    </span>
                                </span>
                            </label>
                        </div>
                        <!-- end .form-control-->
                    </div>
                </div>
                <div class="form__controls">
                    <div class="form__submit form__submit_width_l">
                        <!-- begin .button-->
                        <button
                            class="button button_size_l button_type_order button_align_center"
                            type="submit"
                        >
                            Отправить заявку
                        </button>
                        <!-- end .button-->
                    </div>
                </div>
            </div>
            <div class="form__final">
                <div class="form__illustration">
                    <img
                        src="assets/blocks/form/images/check.svg"
                        alt="Успех!"
                        class="form__image"
                        title=""
                    />
                </div>
                <div class="form__message-wrapper">
                    <div class="form__title">
                        <!-- begin .title-->
                        <h3 class="title title_size_h4">Ваша заявка успешно отправлена</h3>
                        <!-- end .title-->
                    </div>
                    <div class="form__text">Форма успешно отправлена</div>
                    <div class="form__controls">
                        <div class="form__control">
                            <!-- begin .button-->
                            <a class="button button_width_full" href="#">Понятно</a>
                            <!-- end .button-->
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- end .form-->
    </div>
</div>