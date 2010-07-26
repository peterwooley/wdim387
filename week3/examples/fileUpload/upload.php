<?php
if (count($_FILES)) {
	echo json_encode(var_dump($_FILES));
} else {
	echo json_encode("Error: Nothing was uploaded.");
}