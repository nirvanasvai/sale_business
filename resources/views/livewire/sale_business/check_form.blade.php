<div class="publish-reset__body">
    <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
        <input type="checkbox" disabled class="custom-control-input" id="rBusiCat"
               wire:model="category_id" value="1">
        <label class="custom-control-label" for="rBusiCat">Категория бизнеса</label>
    </div>
    <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
        <input type="checkbox" disabled class="custom-control-input" id="rBusiName"
               wire:model="title">
        <label class="custom-control-label" for="rBusiName">Название бизнеса</label>
    </div>
    <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
        <input type="checkbox" disabled class="custom-control-input" id="rBusiForm"
               wire:model="metas.franchise">
        <label class="custom-control-label" for="rBusiForm">Форма и возраст</label>
    </div>
    <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
        <input type="checkbox" wire:model="metas.net_profit" disabled class="custom-control-input" id="rBusiFin">
        <label class="custom-control-label" for="rBusiFin">Финансовое состояние</label>
    </div>
    <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
        <input type="checkbox" wire:model="metas.monthly_check" disabled class="custom-control-input" id="rBusiSal">
        <label class="custom-control-label" for="rBusiSal">Продажи</label>
    </div>
    <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
        <input type="checkbox" wire:model="metas.service_per_month" disabled class="custom-control-input" id="rBusiPrem">
        <label class="custom-control-label" for="rBusiPrem">Помещение</label>
    </div>
    <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
        <input type="checkbox" wire:model="metas.wages" disabled class="custom-control-input" id="rBusiPers">
        <label class="custom-control-label" for="rBusiPers">Персонал</label>
    </div>
    <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
        <input type="checkbox" wire:model="metas.equipment_list" disabled class="custom-control-input" id="rBusiEqu">
        <label class="custom-control-label" for="rBusiEqu">Оборудование и мебель</label>
    </div>
    <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
        <input type="checkbox" wire:model="photo_main" disabled class="custom-control-input" id="rBusiPho">
        <label class="custom-control-label" for="rBusiPho">Фотографии</label>
    </div>
    <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
        <input type="checkbox" wire:model="price"  disabled class="custom-control-input" id="rBusiPrice">
        <label class="custom-control-label" for="rBusiPrice">Цена</label>
    </div>
    <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
        <input type="checkbox" wire:model="metas.automation" disabled class="custom-control-input" id="rBusiAuto">
        <label class="custom-control-label" for="rBusiAuto">Автоматизация</label>
    </div>
    <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
        <input type="checkbox" wire:model="metas.seo" disabled class="custom-control-input" id="rBusiMarketing">
        <label class="custom-control-label" for="rBusiMarketing">Маркетинг</label>
    </div>
    <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
        <input type="checkbox"  wire:model="body" disabled class="custom-control-input" id="rBusiDes">
        <label class="custom-control-label" for="rBusiDes">Описание</label>
    </div>
    <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
        <input type="checkbox" disabled class="custom-control-input" id="rBusiCnt">
        <label class="custom-control-label" for="rBusiCnt">Контакты</label>
    </div>
    <div class="text">
        Срок жизни объявления на сайте — 7 дней. Продлить объявление можно в вашем личном
        кабинете
    </div>
</div>
