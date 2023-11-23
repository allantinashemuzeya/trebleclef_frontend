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
                        data-toggle="modal" data-target="#registerForEvent">
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
    
    <div id="registerForEvent" class="modal animated fadeIn" style="display: none;">

<div class="modal-dialog modal-dialog-centered">

    <!-- Modal content -->
    <div class="modal-content">
        <form class="" wire:submit.prevent="registerForEvent">
            <div class="modal-body">
                <span class="close">×</span>
                <div class="add-edit-event-box">
                    <div class="add-edit-event-content">
                        <h5 class="add-event-title modal-title" style="display: block;">Register for the Event</h5>
                        <h5 class="edit-event-title modal-title" style="display: none;">{{$event->title}} </h5>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex event-title mt-10">
                                        <input id="write-e" type="text" wire:model.defer="fullNameSurname" placeholder="Name and Surname" class="form-control" required name="task" style="margin-top: 20px;margin-bottom: 20px;">
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-12 mt-10">   
                                            
                                    <select class="selectpicker w-100 mb-4 ml-2" data-style="btn btn-outline-primary" wire:model.defer="price_type">
                                        <option value="student">Student</option>
                                        <option value="sibling">Sibling</option>
                                        <option value="parent">Parent</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div class="col-md-6 col-sm-6 col-12 mt-10">
                                    <input id="write-e" type="text" placeholder="Grade"  wire:model.defer="grade" class="form-control" name="task">
                                </div>

                                <div class="col-md-6 col-sm-6 col-12 mt-10">
                                    <input id="numberOfTickets" type="number"wire:model.defer="numberOfTickets" placeholder="Number of tickets" class="form-control" required name="task" style="margin-bottom: 20px;">
                                </div>
                                
                                
                                <div class="col-md-6 col-sm-6 col-12 mt-10">
                                    <select class="selectpicker w-100 mb-4 ml-2" data-style="btn btn-outline-primary" data-live-search="true" wire:model.defer="school" required>
                                        <option value="school" selected>School</option>
                                        @foreach($schools as $school)
                                            <option value="{{$school->id}}">{{$school->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="discard" class="btn btn-danger" data-dismiss="modal">Discard</button>
                <button id="checkoutButton" type="submit" class="btn btn-success"  onclick="pay()" style="display: block;">Buy ticket</button>
            </div>
        </form>
    </div>
</div>
</div>
        <!-- Include the Yoco SDK in your web page -->
    <script src="https://js.yoco.com/sdk/v1/yoco-sdk-web.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{asset('js/notiflix/dist/notiflix-3.2.5.min.js')}}"></script>
    <script>
        function pay() {
            showLoader();
                let yoco = new window.YocoSDK({
                publicKey: "{!! env('YOCO_LIVE_PUBLIC_KEY') !!}",
                });

                const event_title = "{!! $event->title !!} | TCA Events"; 
                const event_id = "{!! $event->id !!}";
                const price_type = "{!! $price_type !!}";
                let numberOfTickets = $('#numberOfTickets').val();
                                
                console.log("{!! $event->event_payment['price_for_student'] !!}")

                let event_price = 0; 
                switch(price_type){
                    case 'parent':
                        event_price = "{!! $event->event_payment['price_for_parent'] !!}" * numberOfTickets;
                    break; 
                    case 'sibling':
                        event_price = "{!! $event->event_payment['price_for_sibling'] !!}" * numberOfTickets;
                    break;
                    case 'student':
                        event_price = "{!! $event->event_payment['price_for_student'] !!}" * numberOfTickets;
                    break;
                    case 'other':
                        event_price = "{!! $event->event_payment['price_for_other'] !!}" * numberOfTickets;
                    break;
                    default:
                        event_price = "{!! $event->event_payment['price_for_student'] !!}" * numberOfTickets;
                }
                const pay_plan_id = "{!! $event->event_payment['id'] !!}";

                $('#registerForEvent').hide()
                if($('.modal-backdrop')){
                    $('.modal-backdrop').hide()
                }
                
                yoco.showPopup({
                    amountInCents: event_price * 100,
                    currency: 'ZAR',
                    name: event_title + '| TCA Events',
                    description: 'Awesome description',
                    callback: async (result) => {
                        console.log(result)
                        if (result.error) {
                            const errorMessage = result.error.message;
                            alert("error occured: " + errorMessage);
                        } else {
                            const results = await axios.post('/payfees/process-payment', {
                                'pay_plan_id': pay_plan_id,
                                'event_id': event_id,
                                '_token': '{{ csrf_token() }}',
                                'cardToken': result.id
                            });

                            if (results.data === 'successful') {
                                showSuccessMessage();
                                hideLoader()
                            } else {
                                showErrorMessage();
                            }
                        }
                    }
                })
                console.log(event_title);
        }
        
        function showLoader () {
            $('#coolLoader').css('display', 'block');
            $('#coolLoader').css('left', '42%');
            $('#coolLoader').css('top', '10px');
        }
        
        function hideLoader () {
            $('#coolLoader').css('display', 'none');
        }
        
        function showSuccessMessage(){
            Swal.fire({
                title: "Good job!",
                text: "Payment successful, thank you! Your tickets have been sent to your mail box.",
                icon: "success"
            });
            setTimeout(function(){
                window.location.reload(); 
            }, 3000)
        }
        function showErrorMessage(message = "Payment failed, please try again."){
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: message,
            });
        }
    </script>
</div>


