<style>
    .success-order {
        max-width: 536px;
        margin: 0 auto;
        width: 100%;
    }
    .success-order .button {
        width: 100%;
        margin-top: 16px;
    }
    @media screen and (min-width: 568px) {
        .success-order .button {
            margin-top: 32px;
        }
    }
    .success-order__logo {
        text-align: center !important;
        width: 100%;
    }
    .success-order__title {
        color: #030000;
        margin-bottom: 24px;
        margin-top: 24px;
        text-align: center !important;
    }
    @media screen and (min-width: 568px) {
        .success-order__title {
            margin-bottom: 32px;
        }
    }
    .success-order__title span {
        width: 100%;
        text-align: center !important;
        font-size: 20px !important;
        font-family: DM Sans, sans-serif !important;
        font-weight: 500 !important;
        line-height: 26px !important;
        font-style: normal !important;
    }
    @media screen and (min-width: 568px) {
        .success-order__title span {
            font-size: 28px !important;
            font-family: DM Sans, sans-serif !important;
            font-weight: 500 !important;
            line-height: 34px !important;
            font-style: normal !important;
        }
    }
    .success-order__card {
        background-color: #F5F5F5;
        border-radius: 8px;
        padding: 12px;
    }
    .success-order__card p {
        color: #030000 !important;
    }
    .success-order__card:last-of-type {
        margin-top: 8px !important;
    }
    @media screen and (min-width: 568px) {
        .success-order__card {
            padding: 24px;
            margin-top: 8px !important;
        }
    }
    .success-order .card__item {
        padding: 8px 0;
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }
    @media screen and (min-width: 568px) {
        .success-order .card__item {
            padding: 12px 0;
        }
    }
    .success-order .card__item:not(:last-of-type) {
        border-bottom: 1px solid #EAE9E9;
    }
    .success-order .card__item--icon {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background-color: #EAE9E9;
        text-align: center !important;
        padding-top: 8px !important;
    }
    .success-order .card__item--info {
        margin-left: 8px;
    }
    .success-order .card__item--info .info__title {
        color: #8A8A8A;
        font-size: 10px !important;
        font-family: DM Sans, sans-serif !important;
        font-weight: 400 !important;
        line-height: 12px !important;
        font-style: normal !important;
    }
    @media screen and (min-width: 568px) {
        .success-order .card__item--info .info__title {
            font-size: 12px !important;
            font-family: DM Sans, sans-serif !important;
            font-weight: 400 !important;
            line-height: 14px !important;
            font-style: normal !important;
        }
    }
    .success-order .card__item--info .info__desc {
        color: #030000;
        margin-top: 2px;
    }
    @media screen and (min-width: 568px) {
        .success-order .card__item--info .info__desc {
            font-size: 16px !important;
            font-family: DM Sans, sans-serif !important;
            font-weight: 400 !important;
            line-height: 20px !important;
            font-style: normal !important;
            margin-top: 4px !important;
        }
    }
</style>
<div class="success-order">
    <div class="success-order__logo">
        <img src="{{ asset('/assets/images/email/logo-black.png') }}" alt="logo.png">
    </div>
    <p class="success-order__title"><span>Booking confirmation</span></p>
    <div class="success-order__card card">
        <div class="card__item">
            <div class="card__item--icon">
                <img src="{{ asset('/assets/images/email/DateIcon.svg') }}" alt="">
            </div>
            <div class="card__item--info">
                <div class="info__title">Departure Date</div>
                <p class="info__desc">{{ \Carbon\Carbon::parse($order->departure_date)->format('F d, Y') }}</p>
            </div>
        </div>
        <div class="card__item">
            <div class="card__item--icon">
                <img src="{{ asset('/assets/images/email/TimeIcon.svg') }}" alt="">
            </div>
            <div class="card__item--info">
                <div class="info__title">Departure Time</div>
                <p class="info__desc">{{ \Carbon\Carbon::parse($order->departure_time)->format('H:i') }} {{ $order->is_pm ? 'PM' : 'AM' }}</p>
            </div>
        </div>
        <div class="card__item">
            <div class="card__item--icon">
                <img src="{{ asset('/assets/images/email/PickupLocationIcon.svg') }}" alt="">
            </div>
            <div class="card__item--info">
                <div class="info__title">Pick-up Locations</div>
                <p class="info__desc">{{ $order->travel->pickUpLocation?->name }}</p>
            </div>
        </div>
        <div class="card__item">
            <div class="card__item--icon">
                <img src="{{ asset('/assets/images/email/DropOffLocationIcon.svg') }}" alt="">
            </div>
            <div class="card__item--info">
                <div class="info__title">Drop-off Locations</div>
                <p class="info__desc">{{ $order->travel->dropOffLocation?->name }}</p>
            </div>
        </div>
        @if($stops)
            <div class="card__item">
                <div class="card__item--icon">
                    <img src="{{ asset('/assets/images/email/AdditionalStopsIcon.svg') }}" alt="">
                </div>
                <div class="card__item--info">
                    <div class="info__title">Additional stops</div>
                    <p class="info__desc">{{$stops}}</p>
                </div>
            </div>
        @endif
        <div class="card__item">
            <div class="card__item--icon">
                <img src="{{ asset('/assets/images/email/CarTypeIcon.svg') }}" alt="">
            </div>
            <div class="card__item--info">
                <div class="info__title">Car type</div>
                <p class="info__desc">{{ $order->carType?->name }}</p>
            </div>
        </div>
        <div class="card__item">
            <div class="card__item--icon">
                <img src="{{ asset('/assets/images/email/PassengersIcon.svg') }}" alt="">
            </div>
            <div class="card__item--info">
                <div class="info__title">Number of the passengers</div>
                <p class="info__desc">{{ $order->adults }} adults, {{ $order->children }} children</p>
            </div>
        </div>
    </div>
    <div class="success-order__card">
        <p>Driver’s contacts will be sent within 24 hours via whatsapp</p>
    </div>
</div>