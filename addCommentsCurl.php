<?php
// TODO: PHP file to send comments to graded test
				$commentResults = array('comment' => $_POST['comment'], 'grade' => $_POST['grade'],
					'maxGrade' => $_POST['maxGrade'], 'studentInput' => $_POST['studentInput']);
        $ch = curl_init(/*NEED URL*/);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $testData);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$result = curl_exec($ch);

	echo $
 ?>
