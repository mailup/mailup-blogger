<?php
header("Content-Type:text/xml");
echo '<?xml version="1.0" encoding="UTF-8"?>
<Module>
  <ModulePrefs 
		title="__UP_gadgettitle__" 
		screenshot="http://themexdemo.com/Demo/mailup/wp-content/plugins/wp-mailup/images/Logo_transparent_wide.png" 
		thumbnail="http://themexdemo.com/Demo/mailup/wp-content/plugins/wp-mailup/images/Logo_transparent_thumbnail.png" 
		author="ThemEx Group" 
		author_email="info@themexgroup.com" 
		description="Blogger gadget for MailUp Newsletter Service.">
	<Icon>http://themexdemo.com/Demo/mailup/wp-content/plugins/wp-mailup/images/Logo_transparent_icon.png</Icon>
	<Locale lang="en" country="us" />
	<Require feature="setprefs" />
	<Require feature="settitle" />
	<Require feature="minimessage"/>
	<Require feature="dynamic-height"/>
  </ModulePrefs>
  <UserPref name="colorBk" display_name="Background color" datatype="string" default_value="#FFFFFF" />
  <UserPref name="colorFields" display_name="Fields color" datatype="string" default_value="#FFFFFF" />
  <UserPref name="f001" display_name="MailUp console host" />
  <UserPref name="f002" display_name="Subscribe path" datatype="string" default_value="/frontend/xmlSubscribe.aspx" />

  <UserPref name="f004" display_name="Request confirmation by email?" datatype="bool" default_value="true" />
  <UserPref name="f006" display_name="Description" datatype="string" default_value="Our monthly newsletter with a selection of the best posts" />
  <UserPref name="f007" display_name="Submit button" datatype="string" default_value="Submit" />
  
  <UserPref name="f008" display_name="List ID" datatype="string" required="true" default_value="1" />
  <UserPref name="f009" display_name="List displayed Name" datatype="string" default_value="All users" />
  <UserPref name="f010" display_name="Group ID" datatype="string" />
  
  <UserPref name="f011" display_name="Show email?" datatype="bool" default_value="true" />
  <UserPref name="f012" display_name="Required email?" datatype="bool" default_value="true" />
  <UserPref name="f013" display_name="Displayed name - email" datatype="string" default_value="Email" />
 
  <UserPref name="showext1" display_name="Show Ext. 1?" datatype="bool" default_value="true" />
  <UserPref name="reqext1" display_name="Required Ext. 1?" datatype="bool" />
  <UserPref name="codeext1" display_name="Field code Ext. 1" datatype="string" default_value="Campo1" />
  <UserPref name="displayext1" display_name="Displayed name - Ext. 1" datatype="string" default_value="Name" />
  
  <UserPref name="showext2" display_name="Show Ext. 2?" datatype="bool" default_value="true" />
  <UserPref name="reqext2" display_name="Required Ext. 2?" datatype="bool" />
  <UserPref name="codeext2" display_name="Field code Ext. 2" datatype="string" default_value="Campo2" />
  <UserPref name="displayext2" display_name="Displayed name - Ext. 2" datatype="string" default_value="Surname" />
  
  <UserPref name="showmobile" display_name="Show mobile?" datatype="bool" default_value="true" />
  <UserPref name="reqmobile" display_name="Required mobile?" datatype="bool" />
  <UserPref name="displaymobile" display_name="Displayed name - mobile" datatype="string" default_value="Mobile number" />
  
  <UserPref name="successmsg" display_name="Success" datatype="string" default_value="Operation completed" />
  <UserPref name="genericmsg" display_name="Generic error" datatype="string" default_value="Generic error" />
  <UserPref name="invalidmsg" display_name="Invalid address" datatype="string" default_value="Invalid email address or phone number" />
  <UserPref name="alreadymsg" display_name="Already present" datatype="string" default_value="User already subscribed" />
  
  <UserPref name="includeaccept" display_name="Include acceptance of terms and conditions" datatype="bool"  default_value="true" />
  <UserPref name="termsmsg" display_name="Terms and condition" datatype="string" />
  
  <UserPref name="acceptmsg" display_name="Acceptance" datatype="string" default_value="I accept terms and conditions." />
  
  <Content type="html" preferred_width="220">
     <![CDATA[
		<div id="nweb">
		<form action="http://blogger.mailup.com/post.php" method="post" name="subscribeForm" id="subscribeForm" >
			<input type="hidden" name="wpmailup-subscribe" id="wpmailup-subscribe" value="subscribe" />
			<input type="hidden" name="subs_url" id="subs_url" />
			<input type="hidden" name="ListIDPOST" id="ListIDPOSTID" />
			<input type="hidden" name="subs_subsUrl" id="subs_subsUrl" />
			
			<input type="hidden" name="successmsgID" id="successmsgID" />
			<input type="hidden" name="genericmsgID" id="genericmsgID" />
			<input type="hidden" name="invalidmsgID" id="invalidmsgID" />
			<input type="hidden" name="alreadymsgID" id="alreadymsgID" />
			
			<input type="hidden" name="codeext1ID" id="codeext1ID" />
			<input type="hidden" name="codeext2ID" id="codeext2ID" />
			
			<input type="hidden" name="RequestconfirmationbyemailID" id="RequestconfirmationbyemailID" />
			<input type="hidden" name="groupValue" id="groupValueID" />
			

			<table id="subscribeDataTable" style="width:100%;">
				<tbody>
					<tr>
						<th id="title" colspan="2">
							
						</th>
					</tr>
					<tr>
						<th id="description" colspan="2"></th>
					</tr>
					<tr>
						<td id="email" class="td-label">
							<span style="color:#FF0000;"></span>
							<label></label>
						</td>
						<td align="right"><input type="text" style="width:130px" name="sub-email" id="sub-email" /></td>
					</tr>
		
					<tr>
						<td id="mobile" class="td-label">
							<span style="color:#FF0000;"></span>
							<label></label>
						</td>
						<td align="right"><input type="text" style="width:130px" name="sub-phone" id="sub-phone" /></td>
					</tr>
					<tr>
						<td id="ext1" class="td-label">
							<span style="color:#FF0000;"></span>
							<label></label>
						</td>
						<td align="right"><input type="text" style="width:130px" name="sub-ext1" id="sub-ext1" /></td>
					</tr>
					<tr>
						<td id="ext2" class="td-label">
							<span style="color:#FF0000;"></span>
							<label></label>
						</td>
						<td align="right"><input style="width:130px" type="text" name="sub-ext2" id="sub-ext2" /></td>
					</tr>
					<tr>
						<td colspan="2" align="right">
							<textarea disabled="disabled" name="terms-n-con" id="terms-n-con" cols="20" rows="5"></textarea>
						</td>
					</tr>
					<tr>
						<td id="terms" colspan="2">
							<center><label><input name="terms-confirm" id="terms-confirm" type="checkbox" value="yes" /></label></center>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="padding-left:15px;">
							<img id="loading-img" style="visibility:hidden;vertical-align:middle;background:none; position:absolute" src="indicator.white.gif" border="0" />
							<span id="show-response">
								<noscript>Please enable javascript to work with this subscription form.</noscript>
								<div class="ui-widget message-row">
									<div class="ui-corner-all" style="padding: 2px;">
										<p>
											<span style="float: left; margin-right: .3em;"></span>
											<strong></strong>
										</p>
									</div>
								</div>
							</span>
						</td>
					</tr>
					<tr>
						<td class="mailup-widget-button" colspan="2">
							<center><input type="submit" name="submit" value="" /></center>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js"></script>
	<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/themes/smoothness/jquery-ui.css" type="text/css" rel="stylesheet" />
	<style>
	.ui-widget message-row{font-size:10px !important}
	</style>
	<script type="text/javascript">
		gadgets.util.registerOnLoadHandler(gadgets.window.adjustHeight);
		var jQ = jQuery.noConflict();
		/* document.ready starts */
		jQ(document).ready(function(){
		gadgets.window.adjustHeight();
		jQ("#terms-n-con").css("width","220px");
			/*
				load all the userprefs
			*/
			var prefs = new gadgets.Prefs();
			var title = unescape(prefs.getString("gadgettitle"));
			var consolehost = unescape(prefs.getString("f001"));
			var subspath = unescape(prefs.getString("f002"));
			var csscombination = unescape(prefs.getString("csscombination"));
			var confirmation = prefs.getBool("confirmation");
			var description = unescape(prefs.getString("description"));
			var submitbtn = unescape(prefs.getString("f007"));
			var submitbtn = unescape(prefs.getString("f007"));
			/*var listid = prefs.getInt("f008");*/
			
			var Getlistid = unescape(prefs.getString("f008"));
			var group_ValueID = unescape(prefs.getString("f010"));
			
			var listname = unescape(prefs.getString("listname"));
			var groupid = prefs.getInt("groupid");
			
			var showemail = prefs.getBool("f011");
			var reqemail = prefs.getBool("f012");
			var Requestconfirmationbyemail = prefs.getBool("f004");
			
			
			
			var displayemail = unescape(prefs.getString("f013"));
			var colorBk= unescape(prefs.getString("colorBk"));
			var colorFields= unescape(prefs.getString("colorFields"));
			
			var showext1 = prefs.getBool("showext1");
			var reqext1 = prefs.getBool("reqext1");
			var codeext1 = unescape(prefs.getString("codeext1"));
			var displayext1 = prefs.getString("displayext1");
			
			var showext2 = prefs.getBool("showext2");
			var reqext2 = prefs.getBool("reqext2");
			var codeext2 = unescape(prefs.getString("codeext2"));
			var displayext2 = unescape(prefs.getString("displayext2"));
			
			var showmobile = prefs.getBool("showmobile");
			var reqmobile = prefs.getBool("reqmobile");
			var displaymobile = unescape(prefs.getString("displaymobile"));
			
			var successmsg = unescape(prefs.getString("successmsg"));
			var genericmsg = unescape(prefs.getString("genericmsg"));
			var invalidmsg = unescape(prefs.getString("invalidmsg"));
			var alreadymsg = unescape(prefs.getString("alreadymsg"));
			
			var includeaccept = prefs.getBool("includeaccept");
			var termsmsg = unescape(prefs.getString("termsmsg"));
			var acceptmsg = unescape(prefs.getString("acceptmsg"));
			
			/*
				No validation, just only the set part
				set all the userprefs to respective fields
			*/
			
			jQ("#title").html(title);
			jQ("#description").html(description);
			jQ("#terms-n-con").html(termsmsg);
			jQ("input[name=\'submit\']").val(submitbtn);
			
			jQ("#nweb").css("background-color", colorBk);
			jQ("#terms-n-con").css("background-color", colorFields);
			jQ("#sub-ext2").css("background-color", colorFields);
			jQ("#sub-ext1").css("background-color", colorFields);
			jQ("#sub-phone").css("background-color", colorFields);
			jQ("#sub-email").css("background-color", colorFields);
			
			if(consolehost !=""){
				jQ("#subs_url").val(consolehost);
				jQ("#ListIDPOSTID").val(Getlistid);
				
				jQ("#successmsgID").val(successmsg);
				jQ("#genericmsgID").val(genericmsg);
				jQ("#invalidmsgID").val(invalidmsg);
				jQ("#alreadymsgID").val(alreadymsg);
				
				jQ("#codeext1ID").val(codeext1);
				jQ("#codeext2ID").val(codeext2);
				
				jQ("#RequestconfirmationbyemailID").val(Requestconfirmationbyemail);
				jQ("#groupValueID").val(group_ValueID);
				
				//alert(consolehost);
			}

			
			if(consolehost ==""){
				
				jQ("#successmsgID").val(successmsg);
				jQ("#genericmsgID").val(genericmsg);
				jQ("#invalidmsgID").val(invalidmsg);
				jQ("#alreadymsgID").val(alreadymsg);
				jQ("#codeext1ID").val(codeext1);
				jQ("#codeext2ID").val(codeext2);				
				//alert(consolehost);
			}			
			
			if(subspath !=""){
				jQ("#subs_subsUrl").val(subspath);
				//alert(subspath);
			}
			
			if(showemail == true && reqemail == true)
			{
				jQ("#email").find("label").html(displayemail);
				jQ("#email").children("span").html("*");
			}
			else if(showemail == true)
			{
				jQ("#email").find("label").html(displayemail);
			}
			else
			{
				jQ("#email").parent("tr").remove();
			}
			
			if(showmobile == true && reqmobile == true)
			{
				jQ("#mobile").find("label").html(displaymobile);
				jQ("#mobile").find("span").html("*");
			}
			else if(showmobile == true)
			{
				jQ("#mobile").find("label").html(displaymobile);
			}
			else
			{
				jQ("#mobile").parent("tr").remove();
			}
			
			if(showext1 == true && reqext1 == true)
			{
				jQ("#ext1").find("label").html(displayext1);
				jQ("#ext1").find("span").html("*");
			}
			else if(showext1 == true)
			{
				jQ("#ext1").find("label").html(displayext1);
			}
			else
			{
				jQ("#ext1").parent("tr").remove();
			}
			
			if(showext2 == true && reqext2 == true)
			{
				jQ("#ext2").find("label").html(displayext2);
				jQ("#ext2").find("span").html("*");
			}
			else if(showext2 == true)
			{
				jQ("#ext2").find("label").html(displayext2);
			}
			else
			{
				jQ("#ext2").parent("tr").remove();
			}
			
			if(includeaccept == true)
			{
				jQ("#terms-confirm").parent("label").append(acceptmsg);
			}
			else
			{
				jQ("#terms").parent("tr").remove();
				jQ("#terms-n-con").css("display","none");

			}
			
			
			/*
				CSS part
			*/
			jQ("#subscribeDataTable").css("fontSize", "12px");
			jQ(".td-label").css("textAlign", "right");
			
			
			
			/*
				Process subscription form submit
			*/
			
			jQ("#subscribeForm").submit(function(){
				var subs_url = consolehost + subspath;
				//alert(subs_url);
				//return false;
				if(consolehost == "" || subspath== "")
				{
					//alert("sorry");
					//return false;
				}
				
				
				
				var post_data = "?Email=" + jQ("#sub-email").val() + "&sms=" + jQ("#sub-phone").val() + "&List=" + Getlistid + "&csvFldNames=" + codeext1 + ";" + codeext2 + "&csvFldValues=" + jQ("#sub-ext1").val() + ";" + jQ("#sub-ext2").val() + "&retCode=1";
				url = subs_url + post_data;
				var params = {};
				params[gadgets.io.RequestParameters.CONTENT_TYPE] = gadgets.io.ContentType.TEXT;
				params[gadgets.io.RequestParameters.HEADERS] = null;
				params[gadgets.io.RequestParameters.METHOD] = gadgets.io.MethodType.GET;
				
				var email = jQ.trim(jQ("#sub-email").val());
				var mobile = jQ.trim(jQ("#sub-phone").val());
				var extrafield1 = jQ.trim(jQ("#sub-ext1").val());
				var extrafield2 = jQ.trim(jQ("#sub-ext2").val());
				var agreement = jQ("#terms-confirm").is(":checked");
				/*
					validation part
				*/

				if(reqemail ==  true)
				{
					if(!(email.match(/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/)))
					{
						jQ(".message-row > div").removeClass("ui-state-highlight").addClass("ui-state-error").children("p").children("span").removeClass("ui-icon-info").addClass("ui-icon-alert").addClass("ui-icon").next("strong").html("Invalid "+displayemail);
						gadgets.window.adjustHeight();
						jQ(".ui-widget").css("font-size","10px");
						//alert("Invalids "+displayemail);
						return false;
					}
				}
				if(reqmobile == true)
				{
					if(mobile == "")
					{
						jQ(".message-row > div").removeClass("ui-state-highlight").addClass("ui-state-error").children("p").children("span").removeClass("ui-icon-info").addClass("ui-icon-alert").addClass("ui-icon").next("strong").html("Invalid "+displaymobile);
						gadgets.window.adjustHeight();
						jQ(".ui-widget").css("font-size","10px");
						return false;
					}
				}
				if(reqext1 == true)
				{
					if(extrafield1 == "")
					{
						jQ(".message-row > div").removeClass("ui-state-highlight").addClass("ui-state-error").children("p").children("span").removeClass("ui-icon-info").addClass("ui-icon-alert").addClass("ui-icon").next("strong").html(displayext1 + " required!");
						jQ(".ui-widget").css("font-size","10px");
						gadgets.window.adjustHeight();
						return false;
					}
				}
				
				
				if(reqext2 == true)
				{
					if(extrafield2 == "")
					{
						jQ(".message-row > div").removeClass("ui-state-highlight").addClass("ui-state-error").children("p").children("span").removeClass("ui-icon-info").addClass("ui-icon-alert").addClass("ui-icon").next("strong").html(displayext2 + " required!");
						jQ(".ui-widget").css("font-size","10px");
						gadgets.window.adjustHeight();
						return false;
					}
				}
				
				
				
				if(includeaccept == false){
					jQ("#terms-n-con").css("display","none");

				}
				
				if(includeaccept == true){
					
					if(agreement==false){
						jQ(".message-row > div").removeClass("ui-state-highlight").addClass("ui-state-error").children("p").children("span").removeClass("ui-icon-info").addClass("ui-icon-alert").addClass("ui-icon").next("strong").html("Check Terms and conditions!");
						jQ(".ui-widget").css("font-size","10px");
						gadgets.window.adjustHeight();
						return false;
					}
				}
				
				
				
				/*
				gadgets.io.makeRequest(url, function(response){
					console.log(response);
					switch(Number(response.data[0]))
					{
						case 0:
							jQ(".message-row > div").removeClass("ui-state-error").addClass("ui-state-highlight").children("p").children("span").removeClass("ui-icon-alert").addClass("ui-icon-info").addClass("ui-icon").next("strong").html(successmsg);
							break;
						case 1:
							jQ(".message-row > div").removeClass("ui-state-highlight").addClass("ui-state-error").children("p").children("span").removeClass("ui-icon-info").addClass("ui-icon-alert").addClass("ui-icon").next("strong").html(genericmsg);
							break;
						case 2:
							jQ(".message-row > div").removeClass("ui-state-highlight").addClass("ui-state-error").children("p").children("span").removeClass("ui-icon-info").addClass("ui-icon-alert").addClass("ui-icon").next("strong").html(invalidmsg);
							break;
						case 3:
							jQ(".message-row > div").removeClass("ui-state-highlight").addClass("ui-state-error").children("p").children("span").removeClass("ui-icon-info").addClass("ui-icon-alert").addClass("ui-icon").next("strong").html(alreadymsg);
							break;
						default:
							jQ(".message-row > div").removeClass("ui-state-highlight").addClass("ui-state-error").children("p").children("span").removeClass("ui-icon-info").addClass("ui-icon-alert").addClass("ui-icon").next("strong").html(genericmsg);
							break;
					}
				}, params);*/
				else{
				return true;
				}
			});
			
		}); /* document ready ends */
	</script>
     ]]>
  </Content>
</Module>';
?>