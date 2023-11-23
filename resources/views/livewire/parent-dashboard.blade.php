<div class="row layout-top-spacing">
    <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-activity-three">
            <div class="widget-heading">
                <h5 class="">Trebleclef TV</h5>
            </div>
            <div class="widget-content">

                <iframe src="{{route('tca.tv')}}" width="100%" height="400px" frameborder="0" scrolling="auto"></iframe>

            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-activity-three">

            <div class="widget-heading">
                <h5 class="">{{ $raffle['title'] }}</h5>
            </div>

            <div class="widget-content" style="max-height: 609px;border-radius: 150px;" data-toggle="modal" data-target="#joinRaffleModal">
                <img src="/tca_online/main_application/assets/img/raffle.svg" class="card-img-top" alt="widget-card-2"
                     style="position: relative;height: 405px;border-radius: 50px;cursor: pointer;">

            </div>
        </div>
    </div>

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-activity-three">
            <div class="widget-content">
                <div class="row match-height">
                    @php $cardCounter = 0; @endphp
                    @foreach($navigationCards as $nav_card)
                        @if($cardCounter % 4 === 0)
                </div>
                <br>
                <div class="row match-height">
                    @endif

                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="card component-card_2 h-50"
                             style="background-image: url('{{$nav_card->background}}'); background-size: cover;height: 251px !important;">
                            <div class="card-body"
                                 style="bottom: 0px;position: absolute;border-radius: 0px;padding: 0;width: 100%!important;">
                                @php
                                    $routeName = '';
                                    switch ($nav_card->type) {
                                        case 'communications':
                                            $routeName = 'communications';
                                            break;
                                        case 'student_of_the_week':
                                            $routeName = 'student-of-the-week';
                                            break;
                                        case 'events':
                                            $routeName = 'events';
                                            break;
                                        case 'networks':
                                            $routeName = 'networks';
                                            break;
                                        case 'competitions': case 'newsletters':
                                            $routeName = 'communication-by-type';
                                            break;
                                        case 'calendar':
                                            $routeName = 'calendar';
                                            break;
                                        case 'classroom':
                                            $routeName = 'classroom';
                                            break;
                                        case 'foundation':
                                            $routeName = 'foundations';
                                            break;
                                        case 'office':
                                            $routeName = 'office';
                                            break;
                                        case 'gallery':
                                            $routeName = 'gallery';
                                            break;
                                    }
                                @endphp
                                <a href="{{ route($routeName, $nav_card->type === 'newsletters' || $nav_card->type === 'competitions' ? ['NewsLetter', 'Competitions'] : []) }}"
                                   class="btn btn-primary btn-block"
                                   style="width: 100%">{{$nav_card->cardTitle}}</a>
                            </div>
                        </div>
                    </div>
                    @php $cardCounter++; @endphp
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    <div id="joinRaffleModal" class="modal animated fadeIn" style="display: none;">

        <div class="modal-dialog modal-dialog-centered">

            <!-- Modal content -->
            <div class="modal-content">
                <form class="" wire:submit.prevent="joinRuffle">
                    <div class="modal-body">
                        <span class="close">×</span>
                        <div class="add-edit-event-box">
                            <div class="add-edit-event-content">
                                <h5 class="add-event-title modal-title" style="display: block;">Join the Raffle</h5>
                                <h5 class="edit-event-title modal-title" style="display: none;">Edit Events</h5>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="d-flex event-title mt-10">
                                                <input id="write-e" type="text" wire:model.defer="fullNameSurname" placeholder="Student name and surname" class="form-control" required name="task" style="margin-top: 20px;margin-bottom: 20px;">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-12 mt-10">
                                            <input id="write-e" type="text" wire:model.defer="school" placeholder="School" class="form-control" name="task" required>

                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12 mt-10">
                                            <input id="write-e" type="text" placeholder="Grade"  wire:model.defer="grade" class="form-control" name="task" required>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-12 mt-10">
                                            <input id="write-e" type="text" placeholder="Phone number" wire:model.defer="phoneNumber" class="form-control" required name="task" style="margin-top: 20px;margin-bottom: 20px;">
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-12 mt-10">
                                            <input id="numberOfTickets" type="number "wire:model.defer="numberOfTickets" placeholder="Number of tickets" class="form-control" required name="task" style="margin-top: 20px;margin-bottom: 20px;">
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
    <script src="https://js.yoco.com/sdk/v1/yoco-sdk-web.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{asset('js/notiflix/dist/notiflix-3.2.5.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        let yoco = new window.YocoSDK({
            publicKey: "{!! env('YOCO_LIVE_PUBLIC_KEY') !!}",
        });

        function pay(){

          $('#joinRaffleModal').modal('hide');
          // Get the number of tickets
            let numberOfTickets = $('#numberOfTickets').val();
            let pay_plan_id = "{{ $payPlan->drupal_uuid }}";
            let price = "{{ $payPlan->price *  $numberOfTickets }}";
            
            if(price < 1){
                price = "{{ $defaultPrice *  $numberOfTickets }}"
            }
            
            yoco.showPopup({
                amountInCents: price * 100 ,
                currency: 'ZAR',
                name: 'Trebleclef Academy',
                description: 'Awesome description',
                callback: async  (result) =>{
                    // This function returns a token that your server can use to capture a payment
                    if (result.error) {
                        const errorMessage = result.error.message;
                        alert("error occured: " +  errorMessage);
                    } else {

                        const results = await axios.post('/payfees/process-payment',{
                            'pay_plan_id': pay_plan_id, '_token': '{{ csrf_token() }}','cardToken':result.id});

                        // e.g. Message with the new options
                        if(results.data === 'successful'){
                            Swal.fire({
                                title: "Good job!",
                                text: "Payment successful, thank you! Your tickets have been sent to your mail box.",
                                icon: "success"
                            });

                            if( $('#coolLoader')){
                                $('#coolLoader').css('display', 'none');
                            }
                        }else{
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

