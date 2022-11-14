<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pusher Test</title>
</head>
<body>
  <h1>Pusher Private Channel</h1>
  <p>
    Try privating an event to channel <code>EndPool</code>
    with event name <code>my-event</code>.
  </p>
</body>

<script src="https://js.pusher.com/5.0/pusher.min.js"></script>
<script src="{{ asset('js/echo.iife.js') }}"></script>
<script src="{{ asset('js/echo.js') }}"></script>
<script>
  Pusher.logToConsole = true;
  window.Echo = new Echo({
    broadcaster: 'pusher',
    key: '35c43a19fcda7f0ddc7c',
    cluster: 'ap1',
    forceTLS: true
});

  Echo.private('pool.4')
  .listen('EndPool', (e) => {
      alert(e.pool);
  });

</script>
</html>
