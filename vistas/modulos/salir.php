<?php

session_destroy();

echo '<script>

	window.location = "login";

</script>';
header("Refresh:0");