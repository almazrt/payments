
## Тестовое задание

Имеется система настроек пользователя
Задача: Реализовать систему подтверждения смены конкретной настройки пользователя по коду из смс / email / telegram с возможностью выбора пользователем другого метода

Какие вы выделили бы слои, абстракции, таблицы?

Реализуйте данную схему без интеграции конкретных сервисов / ORM / прочее на уровне интерфейсов / контроллеров

Нужна реализация на уровне интерфейсов / контроллеров
Конкретная реализация не нужна, если имеется ввиду прикрутить базу данных и/или какой-то сервис


## Схема работы

- Пользователь хочет изменить настройку, для этого выбирает метод подтверждения своего действия (email, sms, telegram), нажимает "Изменить". Ему появляется сообщение что отправлен код подтверждения, 
управление попадает в ConfirmationController::store, генерится код и отправляется. 
- Далее пользователь вводит значение настройки и код подтверждения, который пришел ему на выбранное устройство.
В результате, управление попадает в UserSettingsController::update, если код совпадает, значение сохраняется.

Таблицы, предполагаю, будут для запросов подтверждений - confirmations, для настроек пользователей user_settings.
