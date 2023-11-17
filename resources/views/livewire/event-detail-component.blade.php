<div class="row layout-top-spacing">
    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-activity-three">
            <div class="widget-heading">
                <h5 class="">{{ $event->title }}</h5>
            </div>

            <div class="widget-content"
                 style="max-height: 500px;border-radius: 150px;"
                 data-toggle="modal" data-target="#joinRaffleModal">
                <div class="card">
                    @if(str_contains( $event->event_banner,'.mp4') ||
                        str_contains( $event->event_banner,'.mov')
                    )
                        <video controls autoplay muted
                               class="img-fluid card-img-top"
                               style="max-height:500px;max-width:100%; width:100%">
                            <source src="{{$event->event_banner}}"
                                    type="video/mp4"/>
                        </video>
                    @else
                        <img class="img-fluid card-img-top"
                             src="{{$event->event_banner}}"
                             alt="Blog Detail Pic"
                             style="max-height:450px;max-width:100%; width:100%"/>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-activity-three"
             style="max-height: 500px;overflow-y: scroll; overflow-x: hidden;">
            <div class="widget-heading">
                <h5 class="">Other Events</h5>
            </div>

            <div class="widget-content">
                <div class="row match-height">
                    @php $cardCounter = 0; @endphp
                    @foreach($events as $event)
                        @if($cardCounter % 4 === 0)
                </div>
                <br>
                <div class="row match-height">
                    @endif
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="card component-card_2 "
                             style="background-image: url('{{$event->event_banner}}'); background-size: cover;height: 190px !important;">
                            <div class="card-body"
                                 style="bottom: 0;position: absolute;border-radius: 0;padding: 0;width: 100%!important;">
                                <a href="{{ route('lesson', $event->id) }}"
                                   class="btn btn-danger btn-block"
                                   style="width: 100%">{{$event->title}}</a>
                            </div>
                        </div>
                    </div>

                    @php $cardCounter++; @endphp
                    @endforeach
                </div>
            </div>
        </div>


    </div>

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">

        <div class="widget widget-activity-three">
            <div class="widget-heading">
                <h5 class="">Payment - This is a paid event</h5>
            </div>

            <div class="widget-content">
                <button id="checkout-button"
                        class="btn btn-outline-success mb-2"
                        onclick="pay({{json_encode($event->event_payment['price'])}})">
                    PAY
                </button>
            </div>
        </div>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-activity-three">
            <div class="widget-heading">
                <h5 class="">Overview</h5>
            </div>

            <div class="widget-content">
                <div class="row match-height" style="margin-left: 16px;">
                    {!! $event->event_description !!}
                </div>
            </div>
        </div>
    </div>

    <!-- Include the Yoco SDK in your web page -->
    <script src="https://js.yoco.com/sdk/v1/yoco-sdk-web.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{asset('js/notiflix/dist/notiflix-3.2.5.min.js')}}"></script>


    <!-- Create a pay button that will open the popup-->
    {{-- <button id="checkout-button">Pay</button>--}}
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>

        function pay(event_price) {
            {{--console.log({!! json_encode($pay_plan) !!})--}}

            let yoco = new window.YocoSDK({
                publicKey: "{!! env('YOCO_TEST_PUBLIC_KEY') !!}",
            });

            let event_title = "{!! $event->title !!}"
            yoco.showPopup({
                amountInCents: event_price * 100,
                currency: 'ZAR',
                name: event_title + '| TCA Events',
                description: 'Awesome description',
                callback: async (result) => {
                    // This function returns a token that your server can use to capture a payment

                    if (result.error) {
                        const errorMessage = result.error.message;
                        alert("error occured: " + errorMessage);
                    } else {
                        let payPlan = "{!! json_encode($event->event_payment) !!}";
                        const results = await axios.post('/payfees/process-payment', {
                            'payPlan': payPlan,
                            '_token': '{{ csrf_token() }}',
                            'cardToken': result.id
                        });

                        // e.g. Message with the new options
                        if (results.data === 'successful') {
                            Swal.fire({
                                title: "Good job!",
                                text: "Payment successful, thank you! Your tickets have been sent to your mail box.",
                                icon: "success"
                            });

                            if ($('#coolLoader')) {
                                $('#coolLoader').css('display', 'none');
                            }
                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "Oops...",
                                text: "Something went wrong!",
                            });
                        }
                    }
                }
            })

            $('#coolLoader').css('display', 'block');
            $('#coolLoader').css('left', '42%');
            $('#coolLoader').css('top', '10px');
        }
    </script>
</div>


