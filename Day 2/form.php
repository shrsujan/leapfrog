<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<form name="frm">
Course : <input type="text" maxlength="10" name="course"/><br/><br/>
Description : <br/><textarea style="width:210px;height:120px;" maxlength="150"></textarea><br/><br/>
Amount : <input type="number" name="amount" style="width:148px;"/><br/><br/>
Duration :
<select>
	<option>1 month</option>
	<option>3 month</option>
	<option>5 month</option>
	<option>1 year</option>
</select>
<br/><br/>
<input type="radio" name="agreement" value="Yes"/>Yes
<input type="radio" name="agreement" value="No"/>No<br/><br/>
<input type="submit" name="save" value="Save"/>
</form>
</body>
</html>