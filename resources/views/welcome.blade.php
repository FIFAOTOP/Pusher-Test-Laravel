<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('35c43a19fcda7f0ddc7c', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('StatusLiked');
    channel.bind('status-liked', function(data) {
      alert(JSON.stringify(data));
    });
  </script>
</head>
<body>
  <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code>StatusLiked</code>
    with event name <code>status-liked</code>
    .
  </p>
  <a href="/Hi">click</a>
</body>