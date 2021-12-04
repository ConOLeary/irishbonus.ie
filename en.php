
<!DOCTYPE html>
<html>
<head>
<title>Irish Bonus</title>

<?php
/* variables: $subject $bonusgroup $mark $irishbonus $gradelc $gradejc $total $totalgradelc $totalgradejc */

	$mark = $_POST['formMark'];
	$subject = $_POST['formSubject'];


/* define $bonusgroup */

switch ($subject) {
	case "History":
	case "Physics (lc only)":
	case "Science (jc only)":
	case "Latin":
	case "Greek (lc only)":
	case "Classical Studies":
	case "Hebrew Studies":
	case "Geography":
	case "Chemistry (lc only)":
	case "Physics and Chemistry (lc only)":
	case "Biology (lc only)":
	case "Economics (lc only)":
	case "Economic History (lc only)":
	case "Agricultural Science (lc only)":
	case "Agricultural Economics (lc only)":
	case "Home Economics":
	case "Music":
	case "Business":
	case "History and Appreciation of Art (lc only)":
	case "CSPE (jc only)":
	case "Religious Education":
	case "Arabic (lc only)":
	case "LCVP Link Modules (lc only)":
		$bonusgroup = 1;
		break;
	case "French":
	case "German":
	case "Italian":
	case "Spanish":
	case "Mathematics":
	case "Applied Mathematics (lc only)":
	case "Accounting (lc only)":
	case "Engineering (lc only)":
	case "Construction Studies (lc only)":
	case "Materials Technology(wood) (jc only)":
	case "Metalwork (jc only)":
	case "Technology":
	case "Typewriting (jc only)":
	case "Russian (lc only)":
	case "Japanese (lc only)":
		$bonusgroup = 2;
		break;
	case "Art, Craft and Design":
		$bonusgroup = 3;
		break;
}

/* define $gradelc */

if ($mark > -1){
switch ($mark) {
	case 100:
	case 99:
	case 98:
	case 97:
	case 96:
	case 95:
	case 94:
	case 93:
	case 92:
	case 91:
	case 90:
		$gradelc = "A1";
		break;
	case 89:
	case 88:
	case 87:
	case 86:
	case 85:
		$gradelc = "A2";
		break;
	case 84:
	case 83:
	case 82:
	case 81:
	case 80:
		$gradelc = "B1";
		break;
	case 79:
	case 78:
	case 77:
	case 76:
	case 75:
		$gradelc = "B2";
		break;
	case 74:
	case 73:
	case 72:
	case 71:
	case 70:
		$gradelc = "B3";
		break;
	case 69:
	case 68:
	case 67:
	case 66:
	case 65:
		$gradelc = "C1";
		break;
	case 64:
	case 63:
	case 62:
	case 61:
	case 60:
		$gradelc = "C2";
		break;
	case 59:
	case 58:
	case 57:
	case 56:
	case 55:
		$gradelc = "C3";
		break;
	case 54:
	case 53:
	case 52:
	case 51:
	case 50:
		$gradelc = "D1";
		break;
	case 49:
	case 48:
	case 47:
	case 46:
	case 45:
		$gradelc = "D2";
		break;
	case 44:
	case 43:
	case 42:
	case 41:
	case 40:
		$gradelc = "D3";
		break;
	case 39:
	case 38:
	case 37:
	case 36:
	case 35:
	case 34:
	case 33:
	case 32:
	case 31:
	case 30:
	case 29:
	case 28:
	case 27:
	case 26:
	case 25:
		$gradelc = "E";
		break;
	case 24:
	case 23:
	case 22:
	case 21:
	case 20:
	case 19:
	case 18:
	case 17:
	case 16:
	case 15:
	case 14:
	case 13:
	case 12:
	case 11:
	case 10:
		$gradelc = "F";
		break;
	case 9:
	case 8:
	case 7:
	case 6:
	case 5:
	case 4:
	case 3:
	case 2:
	case 1:
	case 0:
		$gradelc = "NG";
		break;
}

/* define $gradejc */

switch ($mark) {
	case 100:
	case 99:
	case 98:
	case 97:
	case 96:
	case 95:
	case 94:
	case 93:
	case 92:
	case 91:
	case 90:
	case 89:
	case 88:
	case 87:
	case 86:
	case 85:
		$gradejc = "A";
		break;
	case 84:
	case 83:
	case 82:
	case 81:
	case 80:
	case 79:
	case 78:
	case 77:
	case 76:
	case 75:
	case 74:
	case 73:
	case 72:
	case 71:
	case 70:
		$gradejc = "B";
		break;
	case 69:
	case 68:
	case 67:
	case 66:
	case 65:
	case 64:
	case 63:
	case 62:
	case 61:
	case 60:
	case 59:
	case 58:
	case 57:
	case 56:
	case 55:
		$gradejc = "C";
		break;
	case 54:
	case 53:
	case 52:
	case 51:
	case 50:
	case 49:
	case 48:
	case 47:
	case 46:
	case 45:
	case 44:
	case 43:
	case 42:
	case 41:
	case 40:
		$gradejc = "D";
		break;
	case 39:
	case 38:
	case 37:
	case 36:
	case 35:
	case 34:
	case 33:
	case 32:
	case 31:
	case 30:
	case 29:
	case 28:
	case 27:
	case 26:
	case 25:
		$gradejc = "E";
		break;
	case 24:
	case 23:
	case 22:
	case 21:
	case 20:
	case 19:
	case 18:
	case 17:
	case 16:
	case 15:
	case 14:
	case 13:
	case 12:
	case 11:
	case 10:
		$gradejc = "F";
		break;
	case 9:
	case 8:
	case 7:
	case 6:
	case 5:
	case 4:
	case 3:
	case 2:
	case 1:
	case 0:
		$gradejc = "NG";
		break;
}
}

/* variables: $subject $bonusgroup $mark $irishbonus $gradelc $gradejc $total $totalgradelc $totalgradejc */

/* 10 */

if ($bonusgroup == 1 && $mark == 0) {
$irishbonus = 0;
}
if ($bonusgroup == 1 && $mark == 1) {
$irishbonus = 0.1;
}
if ($bonusgroup == 1 && $mark == 2) {
$irishbonus = 0.2;
}
if ($bonusgroup == 1 && $mark == 3) {
$irishbonus = 0.3;
}
if ($bonusgroup == 1 && $mark == 4) {
$irishbonus = 0.4;
}
if ($bonusgroup == 1 && $mark == 5) {
$irishbonus = 0.5;
}
if ($bonusgroup == 1 && $mark == 6) {
$irishbonus = 0.6;
}
if ($bonusgroup == 1 && $mark == 7) {
$irishbonus = 0.7;
}
if ($bonusgroup == 1 && $mark == 8) {
$irishbonus = 0.8;
}
if ($bonusgroup == 1 && $mark == 9) {
$irishbonus = 0.9;
}
if ($bonusgroup == 1 && $mark == 10) {
$irishbonus = 1;
}
if ($bonusgroup == 1 && $mark == 11) {
$irishbonus = 1.1;
}
if ($bonusgroup == 1 && $mark == 12) {
$irishbonus = 1.2;
}
if ($bonusgroup == 1 && $mark == 13) {
$irishbonus = 1.3;
}
if ($bonusgroup == 1 && $mark == 14) {
$irishbonus = 1.4;
}
if ($bonusgroup == 1 && $mark == 15) {
$irishbonus = 1.5;
}
if ($bonusgroup == 1 && $mark == 16) {
$irishbonus = 1.6;
}
if ($bonusgroup == 1 && $mark == 17) {
$irishbonus = 1.7;
}
if ($bonusgroup == 1 && $mark == 18) {
$irishbonus = 1.8;
}
if ($bonusgroup == 1 && $mark == 19) {
$irishbonus = 1.9;
}
if ($bonusgroup == 1 && $mark == 20) {
$irishbonus = 2;
}
if ($bonusgroup == 1 && $mark == 21) {
$irishbonus = 2.1;
}
if ($bonusgroup == 1 && $mark == 22) {
$irishbonus = 2.2;
}
if ($bonusgroup == 1 && $mark == 23) {
$irishbonus = 2.3;
}
if ($bonusgroup == 1 && $mark == 24) {
$irishbonus = 2.4;
}
if ($bonusgroup == 1 && $mark == 25) {
$irishbonus = 2.5;
}
if ($bonusgroup == 1 && $mark == 26) {
$irishbonus = 2.6;
}
if ($bonusgroup == 1 && $mark == 27) {
$irishbonus = 2.7;
}
if ($bonusgroup == 1 && $mark == 28) {
$irishbonus = 2.8;
}
if ($bonusgroup == 1 && $mark == 29) {
$irishbonus = 2.9;
}
if ($bonusgroup == 1 && $mark == 30) {
$irishbonus = 3;
}
if ($bonusgroup == 1 && $mark == 31) {
$irishbonus = 3.1;
}
if ($bonusgroup == 1 && $mark == 32) {
$irishbonus = 3.2;
}
if ($bonusgroup == 1 && $mark == 33) {
$irishbonus = 3.3;
}
if ($bonusgroup == 1 && $mark == 34) {
$irishbonus = 3.4;
}
if ($bonusgroup == 1 && $mark == 35) {
$irishbonus = 3.5;
}
if ($bonusgroup == 1 && $mark == 36) {
$irishbonus = 3.6;
}
if ($bonusgroup == 1 && $mark == 37) {
$irishbonus = 3.7;
}
if ($bonusgroup == 1 && $mark == 38) {
$irishbonus = 3.8;
}
if ($bonusgroup == 1 && $mark == 39) {
$irishbonus = 3.9;
}
if ($bonusgroup == 1 && $mark == 40) {
$irishbonus = 4;
}
if ($bonusgroup == 1 && $mark == 41) {
$irishbonus = 4.1;
}
if ($bonusgroup == 1 && $mark == 42) {
$irishbonus = 4.2;
}
if ($bonusgroup == 1 && $mark == 43) {
$irishbonus = 4.3;
}
if ($bonusgroup == 1 && $mark == 44) {
$irishbonus = 4.4;
}
if ($bonusgroup == 1 && $mark == 45) {
$irishbonus = 4.5;
}
if ($bonusgroup == 1 && $mark == 46) {
$irishbonus = 4.6;
}
if ($bonusgroup == 1 && $mark == 47) {
$irishbonus = 4.7;
}
if ($bonusgroup == 1 && $mark == 48) {
$irishbonus = 4.8;
}
if ($bonusgroup == 1 && $mark == 49) {
$irishbonus = 4.9;
}
if ($bonusgroup == 1 && $mark == 50) {
$irishbonus = 5;
}
if ($bonusgroup == 1 && $mark == 51) {
$irishbonus = 5.1;
}
if ($bonusgroup == 1 && $mark == 52) {
$irishbonus = 5.2;
}
if ($bonusgroup == 1 && $mark == 53) {
$irishbonus = 5.3;
}
if ($bonusgroup == 1 && $mark == 54) {
$irishbonus = 5.4;
}
if ($bonusgroup == 1 && $mark == 55) {
$irishbonus = 5.5;
}
if ($bonusgroup == 1 && $mark == 56) {
$irishbonus = 5.6;
}
if ($bonusgroup == 1 && $mark == 57) {
$irishbonus = 5.7;
}
if ($bonusgroup == 1 && $mark == 58) {
$irishbonus = 5.8;
}
if ($bonusgroup == 1 && $mark == 59) {
$irishbonus = 5.9;
}
if ($bonusgroup == 1 && $mark == 60) {
$irishbonus = 6;
}
if ($bonusgroup == 1 && $mark == 61) {
$irishbonus = 6.1;
}
if ($bonusgroup == 1 && $mark == 62) {
$irishbonus = 6.2;
}
if ($bonusgroup == 1 && $mark == 63) {
$irishbonus = 6.3;
}
if ($bonusgroup == 1 && $mark == 64) {
$irishbonus = 6.4;
}
if ($bonusgroup == 1 && $mark == 65) {
$irishbonus = 6.5;
}
if ($bonusgroup == 1 && $mark == 66) {
$irishbonus = 6.6;
}
if ($bonusgroup == 1 && $mark == 67) {
$irishbonus = 6.7;
}
if ($bonusgroup == 1 && $mark == 68) {
$irishbonus = 6.8;
}
if ($bonusgroup == 1 && $mark == 69) {
$irishbonus = 6.9;
}
if ($bonusgroup == 1 && $mark == 70) {
$irishbonus = 7;
}
if ($bonusgroup == 1 && $mark == 71) {
$irishbonus = 7.1;
}
if ($bonusgroup == 1 && $mark == 72) {
$irishbonus = 7.2;
}
if ($bonusgroup == 1 && $mark == 73) {
$irishbonus = 7.3;
}
if ($bonusgroup == 1 && $mark == 74) {
$irishbonus = 7.4;
}
if ($bonusgroup == 1 && $mark == 75) {
$irishbonus = 7.5;
}
if ($bonusgroup == 1 && $mark == 76) {
$irishbonus = 7.296;
}
if ($bonusgroup == 1 && $mark == 77) {
$irishbonus = 7.084;
}
if ($bonusgroup == 1 && $mark == 78) {
$irishbonus = 6.864;
}
if ($bonusgroup == 1 && $mark == 79) {
$irishbonus = 6.636;
}
if ($bonusgroup == 1 && $mark == 80) {
$irishbonus = 6.4;
}
if ($bonusgroup == 1 && $mark == 81) {
$irishbonus = 6.156;
}
if ($bonusgroup == 1 && $mark == 82) {
$irishbonus = 5.904;
}
if ($bonusgroup == 1 && $mark == 83) {
$irishbonus = 5.644;
}
if ($bonusgroup == 1 && $mark == 84) {
$irishbonus = 5.376;
}
if ($bonusgroup == 1 && $mark == 85) {
$irishbonus = 5.1;
}
if ($bonusgroup == 1 && $mark == 86) {
$irishbonus = 4.816;
}
if ($bonusgroup == 1 && $mark == 87) {
$irishbonus = 4.524;
}
if ($bonusgroup == 1 && $mark == 88) {
$irishbonus = 4.224;
}
if ($bonusgroup == 1 && $mark == 89) {
$irishbonus = 3.916;
}
if ($bonusgroup == 1 && $mark == 90) {
$irishbonus = 3.6;
}
if ($bonusgroup == 1 && $mark == 91) {
$irishbonus = 3.276;
}
if ($bonusgroup == 1 && $mark == 92) {
$irishbonus = 2.944;
}
if ($bonusgroup == 1 && $mark == 93) {
$irishbonus = 2.604;
}
if ($bonusgroup == 1 && $mark == 94) {
$irishbonus = 2.256;
}
if ($bonusgroup == 1 && $mark == 95) {
$irishbonus = 1.9;
}
if ($bonusgroup == 1 && $mark == 96) {
$irishbonus = 1.536;
}
if ($bonusgroup == 1 && $mark == 97) {
$irishbonus = 1.164;
}
if ($bonusgroup == 1 && $mark == 98) {
$irishbonus = 0.784;
}
if ($bonusgroup == 1 && $mark == 99) {
$irishbonus = 0.396;
}
if ($bonusgroup == 1 && $mark == 100) {
$irishbonus = 0;
}

/* 5 */

if ($bonusgroup == 2 && $mark == 0) {
$irishbonus = 0;
}
if ($bonusgroup == 2 && $mark == 1) {
$irishbonus = 0.05;
}
if ($bonusgroup == 2 && $mark == 2) {
$irishbonus = 0.1;
}
if ($bonusgroup == 2 && $mark == 3) {
$irishbonus = 0.15;
}
if ($bonusgroup == 2 && $mark == 4) {
$irishbonus = 0.2;
}
if ($bonusgroup == 2 && $mark == 5) {
$irishbonus = 0.25;
}
if ($bonusgroup == 2 && $mark == 6) {
$irishbonus = 0.3;
}
if ($bonusgroup == 2 && $mark == 7) {
$irishbonus = 0.35;
}
if ($bonusgroup == 2 && $mark == 8) {
$irishbonus = 0.4;
}
if ($bonusgroup == 2 && $mark == 9) {
$irishbonus = 0.45;
}
if ($bonusgroup == 2 && $mark == 10) {
$irishbonus = 0.5;
}
if ($bonusgroup == 2 && $mark == 11) {
$irishbonus = 0.55;
}
if ($bonusgroup == 2 && $mark == 12) {
$irishbonus = 0.6;
}
if ($bonusgroup == 2 && $mark == 13) {
$irishbonus = 0.65;
}
if ($bonusgroup == 2 && $mark == 14) {
$irishbonus = 0.7;
}
if ($bonusgroup == 2 && $mark == 15) {
$irishbonus = 0.75;
}
if ($bonusgroup == 2 && $mark == 16) {
$irishbonus = 0.8;
}
if ($bonusgroup == 2 && $mark == 17) {
$irishbonus = 0.85;
}
if ($bonusgroup == 2 && $mark == 18) {
$irishbonus = 0.9;
}
if ($bonusgroup == 2 && $mark == 19) {
$irishbonus = 0.95;
}
if ($bonusgroup == 2 && $mark == 20) {
$irishbonus = 1;
}
if ($bonusgroup == 2 && $mark == 21) {
$irishbonus = 1.5;
}
if ($bonusgroup == 2 && $mark == 22) {
$irishbonus = 1.1;
}
if ($bonusgroup == 2 && $mark == 23) {
$irishbonus = 1.15;
}
if ($bonusgroup == 2 && $mark == 24) {
$irishbonus = 1.2;
}
if ($bonusgroup == 2 && $mark == 25) {
$irishbonus = 1.25;
}
if ($bonusgroup == 2 && $mark == 26) {
$irishbonus = 1.3;
}
if ($bonusgroup == 2 && $mark == 27) {
$irishbonus = 1.35;
}
if ($bonusgroup == 2 && $mark == 28) {
$irishbonus = 1.4;
}
if ($bonusgroup == 2 && $mark == 29) {
$irishbonus = 1.45;
}
if ($bonusgroup == 2 && $mark == 30) {
$irishbonus = 1.5;
}
if ($bonusgroup == 2 && $mark == 31) {
$irishbonus = 1.55;
}
if ($bonusgroup == 2 && $mark == 32) {
$irishbonus = 1.6;
}
if ($bonusgroup == 2 && $mark == 33) {
$irishbonus = 1.65;
}
if ($bonusgroup == 2 && $mark == 34) {
$irishbonus = 1.7;
}
if ($bonusgroup == 2 && $mark == 35) {
$irishbonus = 1.75;
}
if ($bonusgroup == 2 && $mark == 36) {
$irishbonus = 1.8;
}
if ($bonusgroup == 2 && $mark == 37) {
$irishbonus = 1.85;
}
if ($bonusgroup == 2 && $mark == 38) {
$irishbonus = 1.9;
}
if ($bonusgroup == 2 && $mark == 39) {
$irishbonus = 1.95;
}
if ($bonusgroup == 2 && $mark == 40) {
$irishbonus = 2;
}
if ($bonusgroup == 2 && $mark == 41) {
$irishbonus = 2.05;
}
if ($bonusgroup == 2 && $mark == 42) {
$irishbonus = 2.1;
}
if ($bonusgroup == 2 && $mark == 43) {
$irishbonus = 2.15;
}
if ($bonusgroup == 2 && $mark == 44) {
$irishbonus = 2.2;
}
if ($bonusgroup == 2 && $mark == 45) {
$irishbonus = 2.25;
}
if ($bonusgroup == 2 && $mark == 46) {
$irishbonus = 2.3;
}
if ($bonusgroup == 2 && $mark == 47) {
$irishbonus = 2.35;
}
if ($bonusgroup == 2 && $mark == 48) {
$irishbonus = 2.4;
}
if ($bonusgroup == 2 && $mark == 49) {
$irishbonus = 2.45;
}
if ($bonusgroup == 2 && $mark == 50) {
$irishbonus = 2.5;
}
if ($bonusgroup == 2 && $mark == 51) {
$irishbonus = 2.55;
}
if ($bonusgroup == 2 && $mark == 52) {
$irishbonus = 2.6;
}
if ($bonusgroup == 2 && $mark == 53) {
$irishbonus = 2.65;
}
if ($bonusgroup == 2 && $mark == 54) {
$irishbonus = 2.7;
}
if ($bonusgroup == 2 && $mark == 55) {
$irishbonus = 2.75;
}
if ($bonusgroup == 2 && $mark == 56) {
$irishbonus = 2.8;
}
if ($bonusgroup == 2 && $mark == 57) {
$irishbonus = 2.85;
}
if ($bonusgroup == 2 && $mark == 58) {
$irishbonus = 2.9;
}
if ($bonusgroup == 2 && $mark == 59) {
$irishbonus = 2.95;
}
if ($bonusgroup == 2 && $mark == 60) {
$irishbonus = 3;
}
if ($bonusgroup == 2 && $mark == 61) {
$irishbonus = 3.05;
}
if ($bonusgroup == 2 && $mark == 62) {
$irishbonus = 3.1;
}
if ($bonusgroup == 2 && $mark == 63) {
$irishbonus = 3.15;
}
if ($bonusgroup == 2 && $mark == 64) {
$irishbonus = 3.2;
}
if ($bonusgroup == 2 && $mark == 65) {
$irishbonus = 3.25;
}
if ($bonusgroup == 2 && $mark == 66) {
$irishbonus = 3.3;
}
if ($bonusgroup == 2 && $mark == 67) {
$irishbonus = 3.35;
}
if ($bonusgroup == 2 && $mark == 68) {
$irishbonus = 3.4;
}
if ($bonusgroup == 2 && $mark == 69) {
$irishbonus = 3.45;
}
if ($bonusgroup == 2 && $mark == 70) {
$irishbonus = 3.5;
}
if ($bonusgroup == 2 && $mark == 71) {
$irishbonus = 3.55;
}
if ($bonusgroup == 2 && $mark == 72) {
$irishbonus = 3.6;
}
if ($bonusgroup == 2 && $mark == 73) {
$irishbonus = 3.65;
}
if ($bonusgroup == 2 && $mark == 74) {
$irishbonus = 3.7;
}
if ($bonusgroup == 2 && $mark == 75) {
$irishbonus = 3.75;
}
if ($bonusgroup == 2 && $mark == 76) {
$irishbonus = 3.648;
}
if ($bonusgroup == 2 && $mark == 77) {
$irishbonus = 3.542;
}
if ($bonusgroup == 2 && $mark == 78) {
$irishbonus = 3.432;
}
if ($bonusgroup == 2 && $mark == 79) {
$irishbonus = 3.318;
}
if ($bonusgroup == 2 && $mark == 80) {
$irishbonus = 3.2;
}
if ($bonusgroup == 2 && $mark == 81) {
$irishbonus = 3.078;
}
if ($bonusgroup == 2 && $mark == 82) {
$irishbonus = 2.952;
}
if ($bonusgroup == 2 && $mark == 83) {
$irishbonus = 2.822;
}
if ($bonusgroup == 2 && $mark == 84) {
$irishbonus = 2.688;
}
if ($bonusgroup == 2 && $mark == 85) {
$irishbonus = 2.55;
}
if ($bonusgroup == 2 && $mark == 86) {
$irishbonus = 2.408;
}
if ($bonusgroup == 2 && $mark == 87) {
$irishbonus = 2.262;
}
if ($bonusgroup == 2 && $mark == 88) {
$irishbonus = 2.112;
}
if ($bonusgroup == 2 && $mark == 89) {
$irishbonus = 1.958;
}
if ($bonusgroup == 2 && $mark == 90) {
$irishbonus = 1.8;
}
if ($bonusgroup == 2 && $mark == 91) {
$irishbonus = 1.638;
}
if ($bonusgroup == 2 && $mark == 92) {
$irishbonus = 1.472;
}
if ($bonusgroup == 2 && $mark == 93) {
$irishbonus = 1.302;
}
if ($bonusgroup == 2 && $mark == 94) {
$irishbonus = 1.128;
}
if ($bonusgroup == 2 && $mark == 95) {
$irishbonus = 0.95;
}
if ($bonusgroup == 2 && $mark == 96) {
$irishbonus = 0.768;
}
if ($bonusgroup == 2 && $mark == 97) {
$irishbonus = 0.582;
}
if ($bonusgroup == 2 && $mark == 98) {
$irishbonus = 0.392;
}
if ($bonusgroup == 2 && $mark == 99) {
$irishbonus = 0.198;
}
if ($bonusgroup == 2 && $mark == 100) {
$irishbonus = 0;
}
/* 3 */
if ($bonusgroup == 3 && $mark == 0) {
$irishbonus = 0;
}
if ($bonusgroup == 3 && $mark == 1) {
$irishbonus = 0.03;
}
if ($bonusgroup == 3 && $mark == 2) {
$irishbonus = 0.06;
}
if ($bonusgroup == 3 && $mark == 3) {
$irishbonus = 0.09;
}
if ($bonusgroup == 3 && $mark == 4) {
$irishbonus = 0.12;
}
if ($bonusgroup == 3 && $mark == 5) {
$irishbonus = 0.15;
}
if ($bonusgroup == 3 && $mark == 6) {
$irishbonus = 0.18;
}
if ($bonusgroup == 3 && $mark == 7) {
$irishbonus = 0.21;
}
if ($bonusgroup == 3 && $mark == 8) {
$irishbonus = 0.24;
}
if ($bonusgroup == 3 && $mark == 9) {
$irishbonus = 0.27;
}
if ($bonusgroup == 3 && $mark == 10) {
$irishbonus = 0.3;
}
if ($bonusgroup == 3 && $mark == 11) {
$irishbonus = 0.33;
}
if ($bonusgroup == 3 && $mark == 12) {
$irishbonus = 0.36;
}
if ($bonusgroup == 3 && $mark == 13) {
$irishbonus = 0.39;
}
if ($bonusgroup == 3 && $mark == 14) {
$irishbonus = 0.42;
}
if ($bonusgroup == 3 && $mark == 15) {
$irishbonus = 0.45;
}
if ($bonusgroup == 3 && $mark == 16) {
$irishbonus = 0.48;
}
if ($bonusgroup == 3 && $mark == 17) {
$irishbonus = 0.51;
}
if ($bonusgroup == 3 && $mark == 18) {
$irishbonus = 0.54;
}
if ($bonusgroup == 3 && $mark == 19) {
$irishbonus = 0.57;
}
if ($bonusgroup == 3 && $mark == 20) {
$irishbonus = 0.6;
}
if ($bonusgroup == 3 && $mark == 21) {
$irishbonus = 0.63;
}
if ($bonusgroup == 3 && $mark == 22) {
$irishbonus = 0.66;
}
if ($bonusgroup == 3 && $mark == 23) {
$irishbonus = 0.69;
}
if ($bonusgroup == 3 && $mark == 24) {
$irishbonus = 0.72;
}
if ($bonusgroup == 3 && $mark == 25) {
$irishbonus = 0.75;
}
if ($bonusgroup == 3 && $mark == 26) {
$irishbonus = 0.78;
}
if ($bonusgroup == 3 && $mark == 27) {
$irishbonus = 0.81;
}
if ($bonusgroup == 3 && $mark == 28) {
$irishbonus = 0.84;
}
if ($bonusgroup == 3 && $mark == 29) {
$irishbonus = 0.87;
}
if ($bonusgroup == 3 && $mark == 30) {
$irishbonus = 0.9;
}
if ($bonusgroup == 3 && $mark == 31) {
$irishbonus = 0.93;
}
if ($bonusgroup == 3 && $mark == 32) {
$irishbonus = 0.96;
}
if ($bonusgroup == 3 && $mark == 33) {
$irishbonus = 0.99;
}
if ($bonusgroup == 3 && $mark == 34) {
$irishbonus = 1.02;
}
if ($bonusgroup == 3 && $mark == 35) {
$irishbonus = 1.05;
}
if ($bonusgroup == 3 && $mark == 36) {
$irishbonus = 1.08;
}
if ($bonusgroup == 3 && $mark == 37) {
$irishbonus = 1.11;
}
if ($bonusgroup == 3 && $mark == 38) {
$irishbonus = 1.14;
}
if ($bonusgroup == 3 && $mark == 39) {
$irishbonus = 1.17;
}
if ($bonusgroup == 3 && $mark == 40) {
$irishbonus = 1.2;
}
if ($bonusgroup == 3 && $mark == 41) {
$irishbonus = 1.23;
}
if ($bonusgroup == 3 && $mark == 42) {
$irishbonus = 1.26;
}
if ($bonusgroup == 3 && $mark == 43) {
$irishbonus = 1.29;
}
if ($bonusgroup == 3 && $mark == 44) {
$irishbonus = 1.32;
}
if ($bonusgroup == 3 && $mark == 45) {
$irishbonus = 1.35;
}
if ($bonusgroup == 3 && $mark == 46) {
$irishbonus = 1.38;
}
if ($bonusgroup == 3 && $mark == 47) {
$irishbonus = 1.41;
}
if ($bonusgroup == 3 && $mark == 48) {
$irishbonus = 1.44;
}
if ($bonusgroup == 3 && $mark == 49) {
$irishbonus = 1.47;
}
if ($bonusgroup == 3 && $mark == 50) {
$irishbonus = 1.5;
}
if ($bonusgroup == 3 && $mark == 51) {
$irishbonus = 1.53;
}
if ($bonusgroup == 3 && $mark == 52) {
$irishbonus = 1.56;
}
if ($bonusgroup == 3 && $mark == 53) {
$irishbonus = 1.59;
}
if ($bonusgroup == 3 && $mark == 54) {
$irishbonus = 1.62;
}
if ($bonusgroup == 3 && $mark == 55) {
$irishbonus = 1.65;
}
if ($bonusgroup == 3 && $mark == 56) {
$irishbonus = 1.68;
}
if ($bonusgroup == 3 && $mark == 57) {
$irishbonus = 1.71;
}
if ($bonusgroup == 3 && $mark == 58) {
$irishbonus = 1.74;
}
if ($bonusgroup == 3 && $mark == 59) {
$irishbonus = 1.77;
}
if ($bonusgroup == 3 && $mark == 60) {
$irishbonus = 1.8;
}
if ($bonusgroup == 3 && $mark == 61) {
$irishbonus = 1.83;
}
if ($bonusgroup == 3 && $mark == 62) {
$irishbonus = 1.86;
}
if ($bonusgroup == 3 && $mark == 63) {
$irishbonus = 1.89;
}
if ($bonusgroup == 3 && $mark == 64) {
$irishbonus = 1.92;
}
if ($bonusgroup == 3 && $mark == 65) {
$irishbonus = 1.95;
}
if ($bonusgroup == 3 && $mark == 66) {
$irishbonus = 1.98;
}
if ($bonusgroup == 3 && $mark == 67) {
$irishbonus = 2.01;
}
if ($bonusgroup == 3 && $mark == 68) {
$irishbonus = 2.04;
}
if ($bonusgroup == 3 && $mark == 69) {
$irishbonus = 2.07;
}
if ($bonusgroup == 3 && $mark == 70) {
$irishbonus = 2.1;
}
if ($bonusgroup == 3 && $mark == 71) {
$irishbonus = 2.13;
}
if ($bonusgroup == 3 && $mark == 72) {
$irishbonus = 2.16;
}
if ($bonusgroup == 3 && $mark == 73) {
$irishbonus = 2.19;
}
if ($bonusgroup == 3 && $mark == 74) {
$irishbonus = 2.22;
}
if ($bonusgroup == 3 && $mark == 75) {
$irishbonus = 2.25;
}
if ($bonusgroup == 3 && $mark == 76) {
$irishbonus = 2.1888;
}
if ($bonusgroup == 3 && $mark == 77) {
$irishbonus = 2.1252;
}
if ($bonusgroup == 3 && $mark == 78) {
$irishbonus = 2.0592;
}
if ($bonusgroup == 3 && $mark == 79) {
$irishbonus = 1.9908;
}
if ($bonusgroup == 3 && $mark == 80) {
$irishbonus = 1.92;
}
if ($bonusgroup == 3 && $mark == 81) {
$irishbonus = 1.8468;
}
if ($bonusgroup == 3 && $mark == 82) {
$irishbonus = 1.7712;
}
if ($bonusgroup == 3 && $mark == 83) {
$irishbonus = 1.6932;
}
if ($bonusgroup == 3 && $mark == 84) {
$irishbonus = 1.6128;
}
if ($bonusgroup == 3 && $mark == 85) {
$irishbonus = 1.53;
}
if ($bonusgroup == 3 && $mark == 86) {
$irishbonus = 1.4448;
}
if ($bonusgroup == 3 && $mark == 87) {
$irishbonus = 1.3572;
}
if ($bonusgroup == 3 && $mark == 88) {
$irishbonus = 1.2672;
}
if ($bonusgroup == 3 && $mark == 89) {
$irishbonus = 1.1748;
}
if ($bonusgroup == 3 && $mark == 90) {
$irishbonus = 1.08;
}
if ($bonusgroup == 3 && $mark == 91) {
$irishbonus = 0.9828;
}
if ($bonusgroup == 3 && $mark == 92) {
$irishbonus = 0.8832;
}
if ($bonusgroup == 3 && $mark == 93) {
$irishbonus = 0.7812;
}
if ($bonusgroup == 3 && $mark == 94) {
$irishbonus = 0.6768;
}
if ($bonusgroup == 3 && $mark == 95) {
$irishbonus = 0.57;
}
if ($bonusgroup == 3 && $mark == 96) {
$irishbonus = 0.4608;
}
if ($bonusgroup == 3 && $mark == 97) {
$irishbonus = 0.3492;
}
if ($bonusgroup == 3 && $mark == 98) {
$irishbonus = 0.2352;
}
if ($bonusgroup == 3 && $mark == 99) {
$irishbonus = 0.1188;
}
if ($bonusgroup == 3 && $mark == 100) {
$irishbonus = 0;
}

/* 0 */

if ($bonusgroup == 4) {
$irishbonus = 0;
}

/* define $total */

if ($mark > -1) {
$total = $mark + $irishbonus;
}

/* define $totalgradelc */

if ($mark > -1){
switch ($total) {
	case 100:
	case ($total > 99 || $total == 99 && $total < 100):
	case ($total > 98 || $total == 98 && $total < 99):
	case ($total > 97 || $total == 97 && $total < 98):
	case ($total > 96 || $total == 96 && $total < 97):
	case ($total > 95 || $total == 95 && $total < 96):
	case ($total > 94 || $total == 94 && $total < 95):
	case ($total > 93 || $total == 93 && $total < 94):
	case ($total > 92 || $total == 92 && $total < 93):
	case ($total > 91 || $total == 91 && $total < 92):
	case ($total > 90 || $total == 90 && $total < 91):
		$totalgradelc = "A1";
		break;
	case ($total > 89 || $total == 89 && $total < 90):
	case ($total > 88 || $total == 88 && $total < 89):
	case ($total > 87 || $total == 87 && $total < 88):
	case ($total > 86 || $total == 86 && $total < 87):
	case ($total > 85 || $total == 85 && $total < 86):
		$totalgradelc = "A2";
		break;
	case ($total > 84 || $total == 84 && $total < 85):
	case ($total > 83 || $total == 83 && $total < 84):
	case ($total > 82 || $total == 82 && $total < 83):
	case ($total > 81 || $total == 81 && $total < 82):
	case ($total > 80 || $total == 80 && $total < 81):
		$totalgradelc = "B1";
		break;
	case ($total > 79 || $total == 79 && $total < 80):
	case ($total > 78 || $total == 78 && $total < 79):
	case ($total > 77 || $total == 77 && $total < 78):
	case ($total > 76 || $total == 76 && $total < 77):
	case ($total > 75 || $total == 75 && $total < 76):
		$totalgradelc = "B2";
		break;
	case ($total > 74 || $total == 74 && $total < 75):
	case ($total > 73 || $total == 73 && $total < 74):
	case ($total > 72 || $total == 72 && $total < 73):
	case ($total > 71 || $total == 71 && $total < 72):
	case ($total > 70 || $total == 70 && $total < 71):
		$totalgradelc = "B3";
		break;
	case ($total > 69 || $total == 69 && $total < 70):
	case ($total > 68 || $total == 68 && $total < 69):
	case ($total > 67 || $total == 67 && $total < 68):
	case ($total > 66 || $total == 66 && $total < 67):
	case ($total > 65 || $total == 65 && $total < 66):
		$totalgradelc = "C1";
		break;
	case ($total > 64 || $total == 64 && $total < 65):
	case ($total > 63 || $total == 63 && $total < 64):
	case ($total > 62 || $total == 62 && $total < 63):
	case ($total > 61 || $total == 61 && $total < 62):
	case ($total > 60 || $total == 60 && $total < 61):
		$totalgradelc = "C2";
		break;
	case ($total > 59 || $total == 59 && $total < 60):
	case ($total > 58 || $total == 58 && $total < 59):
	case ($total > 57 || $total == 57 && $total < 58):
	case ($total > 56 || $total == 56 && $total < 57):
	case ($total > 55 || $total == 55 && $total < 56):
		$totalgradelc = "C3";
		break;
	case ($total > 54 || $total == 54 && $total < 55):
	case ($total > 53 || $total == 53 && $total < 54):
	case ($total > 52 || $total == 52 && $total < 53):
	case ($total > 51 || $total == 51 && $total < 52):
	case ($total > 50 || $total == 50 && $total < 51):
		$totalgradelc = "D1";
		break;
	case ($total > 49 || $total == 49 && $total < 50):
	case ($total > 48 || $total == 48 && $total < 49):
	case ($total > 47 || $total == 47 && $total < 48):
	case ($total > 46 || $total == 46 && $total < 47):
	case ($total > 45 || $total == 45 && $total < 46):
		$totalgradelc = "D2";
		break;
	case ($total > 44 || $total == 44 && $total < 45):
	case ($total > 43 || $total == 43 && $total < 44):
	case ($total > 42 || $total == 42 && $total < 43):
	case ($total > 41 || $total == 41 && $total < 42):
	case ($total > 40 || $total == 40 && $total < 41):
		$totalgradelc = "D3";
		break;
	case ($total > 39 || $total == 39 && $total < 40):
	case ($total > 38 || $total == 38 && $total < 39):
	case ($total > 37 || $total == 37 && $total < 38):
	case ($total > 36 || $total == 36 && $total < 37):
	case ($total > 35 || $total == 35 && $total < 36):
	case ($total > 34 || $total == 34 && $total < 35):
	case ($total > 33 || $total == 33 && $total < 34):
	case ($total > 32 || $total == 32 && $total < 33):
	case ($total > 31 || $total == 31 && $total < 32):
	case ($total > 30 || $total == 30 && $total < 31):
	case ($total > 29 || $total == 29 && $total < 30):
	case ($total > 28 || $total == 28 && $total < 29):
	case ($total > 27 || $total == 27 && $total < 28):
	case ($total > 26 || $total == 26 && $total < 27):
	case ($total > 25 || $total == 25 && $total < 26):
		$totalgradelc = "E";
		break;
	case ($total > 24 || $total == 24 && $total < 25):
	case ($total > 23 || $total == 23 && $total < 24):
	case ($total > 22 || $total == 22 && $total < 23):
	case ($total > 21 || $total == 21 && $total < 22):
	case ($total > 20 || $total == 20 && $total < 21):
	case ($total > 19 || $total == 19 && $total < 20):
	case ($total > 18 || $total == 18 && $total < 19):
	case ($total > 17 || $total == 17 && $total < 18):
	case ($total > 16 || $total == 16 && $total < 17):
	case ($total > 15 || $total == 15 && $total < 16):
	case ($total > 14 || $total == 14 && $total < 15):
	case ($total > 13 || $total == 13 && $total < 14):
	case ($total > 12 || $total == 12 && $total < 13):
	case ($total > 11 || $total == 11 && $total < 12):
	case ($total > 10 || $total == 10 && $total < 11):
		$totalgradelc = "F";
		break;
	case ($total > 9 || $total == 9 && $total < 10):
	case ($total > 8 || $total == 8 && $total < 9):
	case ($total > 7 || $total == 7 && $total < 8):
	case ($total > 6 || $total == 6 && $total < 7):
	case ($total > 5 || $total == 5 && $total < 6):
	case ($total > 4 || $total == 4 && $total < 5):
	case ($total > 3 || $total == 3 && $total < 4):
	case ($total > 2 || $total == 2 && $total < 3):
	case ($total > 1 || $total == 1 && $total < 2):
	case ($total > 0 || $total == 0 && $total < 1):
	default:
		$totalgradelc = "NG";
		break;
}

/* define $totalgradejc */

if ($mark > -1){
switch ($total) {
	case ($total > 99 || $total == 99 && $total < 100):
	case ($total > 98 || $total == 98 && $total < 99):
	case ($total > 97 || $total == 97 && $total < 98):
	case ($total > 96 || $total == 96 && $total < 97):
	case ($total > 95 || $total == 95 && $total < 96):
	case ($total > 94 || $total == 94 && $total < 95):
	case ($total > 93 || $total == 93 && $total < 94):
	case ($total > 92 || $total == 92 && $total < 93):
	case ($total > 91 || $total == 91 && $total < 92):
	case ($total > 90 || $total == 90 && $total < 91):
	case ($total > 89 || $total == 89 && $total < 90):
	case ($total > 88 || $total == 88 && $total < 89):
	case ($total > 87 || $total == 87 && $total < 88):
	case ($total > 86 || $total == 86 && $total < 87):
	case ($total > 85 || $total == 85 && $total < 86):
		$totalgradejc = "A";
		break;
	case ($total > 84 || $total == 84 && $total < 85):
	case ($total > 83 || $total == 83 && $total < 84):
	case ($total > 82 || $total == 82 && $total < 83):
	case ($total > 81 || $total == 81 && $total < 82):
	case ($total > 80 || $total == 80 && $total < 81):
	case ($total > 79 || $total == 79 && $total < 80):
	case ($total > 78 || $total == 78 && $total < 79):
	case ($total > 77 || $total == 77 && $total < 78):
	case ($total > 76 || $total == 76 && $total < 77):
	case ($total > 75 || $total == 75 && $total < 76):
	case ($total > 74 || $total == 74 && $total < 75):
	case ($total > 73 || $total == 73 && $total < 74):
	case ($total > 72 || $total == 72 && $total < 73):
	case ($total > 71 || $total == 71 && $total < 72):
	case ($total > 70 || $total == 70 && $total < 71):
		$totalgradejc = "B";
		break;
	case ($total > 69 || $total == 69 && $total < 70):
	case ($total > 68 || $total == 68 && $total < 69):
	case ($total > 67 || $total == 67 && $total < 68):
	case ($total > 66 || $total == 66 && $total < 67):
	case ($total > 65 || $total == 65 && $total < 66):
	case ($total > 64 || $total == 64 && $total < 65):
	case ($total > 63 || $total == 63 && $total < 64):
	case ($total > 62 || $total == 62 && $total < 63):
	case ($total > 61 || $total == 61 && $total < 62):
	case ($total > 60 || $total == 60 && $total < 61):
	case ($total > 59 || $total == 59 && $total < 60):
	case ($total > 58 || $total == 58 && $total < 59):
	case ($total > 57 || $total == 57 && $total < 58):
	case ($total > 56 || $total == 56 && $total < 57):
	case ($total > 55 || $total == 55 && $total < 56):
		$totalgradejc = "C";
		break;
	case ($total > 54 || $total == 54 && $total < 55):
	case ($total > 53 || $total == 53 && $total < 54):
	case ($total > 52 || $total == 52 && $total < 53):
	case ($total > 51 || $total == 51 && $total < 52):
	case ($total > 50 || $total == 50 && $total < 51):
	case ($total > 49 || $total == 49 && $total < 50):
	case ($total > 48 || $total == 48 && $total < 49):
	case ($total > 47 || $total == 47 && $total < 48):
	case ($total > 46 || $total == 46 && $total < 47):
	case ($total > 45 || $total == 45 && $total < 46):
	case ($total > 44 || $total == 44 && $total < 45):
	case ($total > 43 || $total == 43 && $total < 44):
	case ($total > 42 || $total == 42 && $total < 43):
	case ($total > 41 || $total == 41 && $total < 42):
	case ($total > 40 || $total == 40 && $total < 41):
		$totalgradejc = "D";
		break;
	case ($total > 39 || $total == 39 && $total < 40):
	case ($total > 38 || $total == 38 && $total < 39):
	case ($total > 37 || $total == 37 && $total < 38):
	case ($total > 36 || $total == 36 && $total < 37):
	case ($total > 35 || $total == 35 && $total < 36):
	case ($total > 34 || $total == 34 && $total < 35):
	case ($total > 33 || $total == 33 && $total < 34):
	case ($total > 32 || $total == 32 && $total < 33):
	case ($total > 31 || $total == 31 && $total < 32):
	case ($total > 30 || $total == 30 && $total < 31):
	case ($total > 29 || $total == 29 && $total < 30):
	case ($total > 28 || $total == 28 && $total < 29):
	case ($total > 27 || $total == 27 && $total < 28):
	case ($total > 26 || $total == 26 && $total < 27):
	case ($total > 25 || $total == 25 && $total < 26):
		$totalgradejc = "E";
		break;
	case ($total > 24 || $total == 24 && $total < 25):
	case ($total > 23 || $total == 23 && $total < 24):
	case ($total > 22 || $total == 22 && $total < 23):
	case ($total > 21 || $total == 21 && $total < 22):
	case ($total > 20 || $total == 20 && $total < 21):
	case ($total > 19 || $total == 19 && $total < 20):
	case ($total > 18 || $total == 18 && $total < 19):
	case ($total > 17 || $total == 17 && $total < 18):
	case ($total > 16 || $total == 16 && $total < 17):
	case ($total > 15 || $total == 15 && $total < 16):
	case ($total > 14 || $total == 14 && $total < 15):
	case ($total > 13 || $total == 13 && $total < 14):
	case ($total > 12 || $total == 12 && $total < 13):
	case ($total > 11 || $total == 11 && $total < 12):
	case ($total > 10 || $total == 10 && $total < 11):
		$totalgradejc = "F";
		break;
	case ($total > 9 || $total == 9 && $total < 10):
	case ($total > 8 || $total == 8 && $total < 9):
	case ($total > 7 || $total == 7 && $total < 8):
	case ($total > 6 || $total == 6 && $total < 7):
	case ($total > 5 || $total == 5 && $total < 6):
	case ($total > 4 || $total == 4 && $total < 5):
	case ($total > 3 || $total == 3 && $total < 4):
	case ($total > 2 || $total == 2 && $total < 3):
	case ($total > 1 || $total == 1 && $total < 2):
	case ($total > 0 || $total == 0 && $total < 1):
	default:
		$totalgradejc = "NG";
		break;
}
}

?>

</head>

<body background="http://www.neenahpaper.com/images/finepaper/chips/classic_linen/classic_linen.solar_white.linen.1884.818.jpg">
<div align= 'center'>
<p style="color:green; font-size:30px;"><strong>Irish Bonus</strong></h1>
<div id="text2" style="font-size: 17px;">
<p>The Irish Bonus calculator adds the marks gained for doing </p>
<p>your exam through Irish and shows you the grade achieved </p>
<p>with and without these extra marks added to your results.</p>
</div>
<br>
<div id="text" style="font-size: 20px;">
<p>Choose your subject from the drop down menu. </p>
<p>Enter your mark and press submit. </p>
</div>
<br>
<form action="" method="post">
<strong>   Select Subject:</strong>
<select name="formSubject" class="dropdown">
  <option value=">>>">">>>"</option>
  <option value="Accounting (lc only)">Accounting (lc only)</option>
  <option value="Agricultural Science (lc only)">Agricultural Science (lc only)</option>
  <option value="Agricultural Economics (lc only)">Agricultural Economics (lc only)</option>
  <option value="Applied Mathematics (lc only)">Applied Mathematics (lc only)</option>
  <option value="Arabic (lc only)">Arabic (lc only)</option>
  <option value="Art, Craft and Design">Art, Craft and Design</option>
  <option value="Biology (lc only)">Biology (lc only)</option>
  <option value="Business">Business</option>
  <option value="Chemistry (lc only)">Chemistry (lc only)</option>
  <option value="CSPE (jc only)">CSPE (jc only)</option>
  <option value="Classical Studies">Classical Studies</option>
  <option value="Construction Studies (lc only)">Construction Studies (lc only)</option>
  <option value="Economics (lc only)">Economics (lc only)</option>
  <option value="Economic History (lc only)">Economic History (lc only)</option>
  <option value="Engineering (lc only)">Engineering (lc only)</option>
  <option value="French">French</option>
  <option value="Geography">Geography</option>
  <option value="German">German</option>
  <option value="Greek (lc only)">Greek (lc only)</option>
  <option value="Hebrew Studies">Hebrew Studies</option>
  <option value="Home Economics">Home Economics</option>
  <option value="History">History</option>
  <option value="History and Appreciation of Art (lc only)">History and Appreciation of Art (lc only)</option>
  <option value="Italian">Italian</option>
  <option value="Japanese (lc only)">Japanese (lc only)</option>
  <option value="Latin">Latin</option>
  <option value="LCVP Link Modules (lc only)">LCVP Link Modules (lc only)</option>
  <option value="Mathematics">Mathematics</option>
  <option value="Materials Technology(wood) (jc only)">Materials Technology(wood) (jc only)</option>
  <option value="Metalwork (jc only)">Metalwork (jc only)</option>
  <option value="Music">Music</option>
  <option value="Physics (lc only)">Physics (lc only)</option>
  <option value="Physics and Chemistry (lc only)">Physics and Chemistry (lc only)</option>
  <option value="Religious Education">Religious Education</option>
  <option value="Russian (lc only)">Russian (lc only)</option>
  <option value="Science (jc only)">Science (jc only)</option>
  <option value="Spanish">Spanish</option>
  <option value="Technology">Technology</option>
  <option value="Typewriting (jc only)">Typewriting (jc only)</option>
</select>

<table width="300px">
<tr>
<td valign="top">
<strong>Insert Mark:</strong>
<input type="text" name="formMark" maxlength="2" size="4" value="<?=$mark;?>"/>
</td>
</tr>
</table>

<input type="submit" />
</form>

<br>
<br>

<table border="1" width="450px" bgcolor="white">
	<tr>
		<th height="30"><?php if ($subject != ">>>") {echo $subject;} ?></th>
		<th height="30">Original</th>
		<th height="30">Irish Bonus</th>
		<th height="30" style="color: green">Total</th>
	</tr>
	<tr>
		<td height="30"><strong>Mark</strong></td>
		<td height="30"><?php if ($subject != ">>>") {echo $mark;} ?></td>
		<td height="30"><?php if ($subject != ">>>") {echo $irishbonus;} ?></td>
		<td height="30" style="color: green"><?php if ($subject != ">>>") {echo $total;} ?></td>
	</tr>
	<tr>
		<td height="30"><strong>Junior Certificate Grade</strong></td>
		<td height="30"><?php if ($subject != ">>>") {echo $gradejc;} ?></td>
		<td height="30"></td>
		<td height="30" style="color: green"><?php if ($subject != ">>>") {echo $totalgradejc;} ?></td>
	</tr>
	<tr>
		<td height="30"><strong>Leaving Certificate Grade</strong></td>
		<td height="30"><?php if ($subject != ">>>") {echo $gradelc;} ?></td>
		<td height="30"></td>
		<td height="30" style="color: green"><?php if ($subject != ">>>") {echo $totalgradelc;} ?></td>
	</tr>
	</table>

<br>
<br>
<a href="http://www.irishbonus.ie"><p style="font-size: 20px;"><strong>Gaeilge</strong></p></a>
<br>
<br>
<br>
<br>
<a href = "mailto: irishbonusinfo@gmail.com"><p style="font-size: 15px;">irishbonusinfo@gmail.com</p></a>
</div>
</body>
</html>