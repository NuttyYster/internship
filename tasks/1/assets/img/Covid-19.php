<!DOCTYPE html>
<html>
<head>

<title>Covid-19 Self-check form</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, charset=UTF-8">
<style>
body {
	font-family: Arial;
	color: white;
}
.centered{
	position: absolute;
	top: 50%;
	left: 50%;
	transorm: translate(-50%,-50%);
	text-align: center;
}
</style>
</head>
	<h2>Covid-19 Self-check</h2>
<body>
<form action="covid.php" method="post">

<label for='formAge[]'>Which age group do you belong to:</label><br>
	<select multiple="multiple" name="formAge[]">
		<option value="18"> less than 18</option>
		<option value="18-39">18-39</option>
		<option value="40-65">40-65</option>
		<option value="65"> above 65</option>
	</select>

<label for='formGender[]'>Please provide us with the gender you identify as:</label><br>
	<select multiple="multiple" name="formGender[]">
		<option value="M">Male</option>
		<option value="F">Female</option>
		<option value="O">Other</option>
		<option value="R">Rather Not Say</option>
	</select>

<label for='formProvince[]'>In which Province are you currently residing:</label><br>
	<select multiple="multiple" name="formProvince[]">
		<option value="EC">Eastern Cape</option>
		<option value="FS">Free State</option>
		<option value="G">Gauteng</option>
		<option value="KZN">Kwa-Zulu Natal</option>
		<option value="L">Limpopo</option>
		<option value="MP">Mpumalanga</option>
		<option value="NW">North West</option>
		<option value="NC">Northern Cape</option>
		<option value="WC">Western Cape</option>
	</select>

<label for='formMeds[]'>Do you have any other pre-existing medical conditions that we should be aware of:</label><br>
	<select multiple="multiple" name="formMeds[]">
		<option value="Y">Yes</option>
		<option value="N">No</option>
		<option value="NS">Not Sure</option>
	</select>

<label for='formFeel[]'>Do you feel very hot or cold? Are you sweating or shievering? When you touch your forehead, does it feel hot?:</label><br>
	<select multiple="multiple" name="formFeel[]">
		<option value="Y">Yes</option>
		<option value="N">No</option>
	</select>

<label for='formCough[]'>Do you have a cough that recently started?:</label><br>
	<select multiple="multiple" name="formCough[]">
		<option value="Y">Yes</option>
		<option value="N">No</option>
	</select>
	
<label for='formSore[]'>Do you have a sore throat or pain when swallowing?:</label><br>
	<select multiple="multiple" name="formSore[]">
		<option value="Y">Yes</option>
		<option value="N">No</option>
	</select>	
	
<label for='formBreath[]'>Do you have breathlessness or a difficulty breathing, that you've noticed recently?:</label><br>
	<select multiple="multiple" name="formBreath[]">
		<option value="Y">Yes</option>
		<option value="N">No</option>
	</select>	
	
<label for='formAbility[]'>Have you beenin close contact with someone confirmed to be infected with COVID-19?:</label><br>
	<select multiple="multiple" name="formAbility[]">
		<option value="Y">Yes</option>
		<option value="N">No</option>
		<option value="NO">Not Sure</option>
	</select>	
	
<label for='formAccurate[]'>Finally, please confirm that the information you shared is ACCURATE to the best of your knowledge and that you give the National Department of Health permission to contact you if necessary?:</label><br>
	<select multiple="multiple" name="formAccurate[]">
		<option value="Y">Yes</option>
		<option value="N">No</option>
	</select>

</form>
</body>
<html/>