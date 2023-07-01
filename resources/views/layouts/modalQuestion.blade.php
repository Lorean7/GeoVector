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
                                <span class="form-control__label">ФИО*</span>
                                <span class="form-control__field">
                                    <!-- Modifiers-->
                                    <!-- form-control__input_state_invalid - red border, one of the two options to show invalid field-->
                                    <input
                                        type="text"
                                        class="form-control__input"
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
                                <span class="form-control__label">Телефон*</span>
                                <span class="form-control__field">
                                    <!-- Modifiers-->
                                    <!-- form-control__input_state_invalid - red border, one of the two options to show invalid field-->
                                    <input
                                        type="text"
                                        class="form-control__input js-phone-input"
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
                                <span class="form-control__label">E-mail*</span>
                                <span class="form-control__field">
                                    <!-- Modifiers-->
                                    <!-- form-control__input_state_invalid - red border, one of the two options to show invalid field-->
                                    <input
                                        type="email"
                                        class="form-control__input js-email-input"
                                        required="required"
                                        name="email"
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
                                <span class="form-control__label">Комментарий</span>
                                <span class="form-control__field">
                                    <!-- Modifiers-->
                                    <!-- form-control__textarea_state_invalid - red border, one of the two options to show invalid field-->
                                    <textarea class="form-control__textarea" name="comment"></textarea>
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
                                <span class="form-control__label">Прикрепить файл</span>
                                <span class="form-control__field">
                                    <span class="form-control__file">
                                        <!-- begin .file-input-->
                                        <span class="file-input">
                                            <span class="file-input__panel">
                                                <!-- begin .file-panel-->
                                                <span class="file-panel">
                                                    <label class="file-panel__wrapper">
                                                        <input
                                                            type="file"
                                                            class="file-panel__input js-file-input"
                                                            accept=".pdf,.txt,.doc,.png,.jpeg,.jpg"
                                                            multiple="multiple"
                                                        />
                                                        <span class="file-panel__content">
                                                            <span class="file-panel__label"></span>
                                                        </span>
                                                        <span class="file-panel__note"></span>
                                                        <span class="file-panel__control">
                                                            <!-- begin .button-->
                                                            <span
                                                                class="button button_width_full button_style_outline"
                                                            >
                                                                <span class="button__holder">Обзор...</span>
                                                            </span>
                                                            <!-- end .button-->
                                                        </span>
                                                    </label>
                                                </span>
                                                <!-- end .file-panel-->
                                            </span>
                                        </span>
                                        <!-- end .file-input-->
                                    </span>
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
                <div class="form__confirmation-check">
                    <!-- begin .check-elem-->
                    <label class="check-elem check-elem_text-size_s">
                        <input
                            class="check-elem__input"
                            type="checkbox"
                            name="agreement"
                            required="required"
                        />
                        <span class="check-elem__label">
                            Я даю согласие на обработку
                            <a class="link" href="#" target="_blank">персональных данных</a>
                        </span>
                    </label>
                    <!-- end .check-elem-->
                </div>
                <div class="form__controls">
                    <div class="form__submit form__submit_width_l">
                        <!-- begin .button-->
                        <button class="button button_width_full button_size_s" type="submit">
                            <span class="button__holder">Отправить</span>
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
                            <a class="button button_width_full" href="#">
                                <span class="button__holder">Понятно</span>
                            </a>
                            <!-- end .button-->
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- end .form-->
    </div>
</div>