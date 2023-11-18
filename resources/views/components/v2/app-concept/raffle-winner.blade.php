<!DOCTYPE html>
<html>

<head>
    <title>Winner</title>
    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script
        src="https://cdn.jsdelivr.net/npm/confetti-js@0.0.18/dist/index.min.js">
    </script>
</head>

<body>
    <div class="container text-center">
        <h1 class="display-4 mt-5">Today's Winner - Congratulations!</h1>
        @if($winner)
            <h2 class="text-success">Ticket Number:
                <span class="text-success" style="font-weight: bolder;">{{ $winner->ticket_number }}</span></h2>
        @else
            <h2 class="text-danger">No winner yet</h2>
        @endif
    </div>
    <script>
   window.onload = function () {
        // Create a new confetti generator with the new canvas as the target
        var confettiSettings = { target: 'my-canvas' };
        var confetti = new ConfettiGenerator(confettiSettings);
        confetti.render();
    }

    </script>
    <canvas id="my-canvas" style="position: absolute;
z-index: 9999;"></canvas>
</body>

</html>
