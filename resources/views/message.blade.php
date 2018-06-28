<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.7.2/socket.io.min.js"></script>
<script type="text/javascript">
    var socket = io('http://localhost:3000');
  
    socket.on('test-channel:App\\Events\\NewMessage', function(data) {
        alert(data.message)
    });
</script>