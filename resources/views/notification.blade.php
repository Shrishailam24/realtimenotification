<!DOCTYPE html>
<head>
  <title>Laravel Real Time Notification Tutorial With Example</title>
  <h1>Laravel Real Time Notification Tutorial With Example</h1>
  <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
  <script>

   var pusher = new Pusher('{{env("e1bf8aa512f5bb5f37bd")}}', {
      cluster: '{{env("ap2")}}',
      encrypted: true
    });

    var channel = pusher.subscribe('notify-channel');
    channel.bind('App\\Events\\Notify', function(data) {
      alert(data.message);
    });
  </script>
</head>