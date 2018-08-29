<!DOCTYPE html>
<html>
<head>
  <title>My First HTML</title>
  <meta name="viewport" content="initial-scale=1.0">
  <meta charset="UTF-8">


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<style>
.content {
   max-width: 500px;
    margin: auto;
    background: white;
    padding: 10px;
}
body
{
  background-color: lightblue;
}

table {
    width: 100px;
    background-color: lightgrey;
    border: 2px  black;
    padding: 0;
}
table td {


    border: 2px s black;
    padding: 0;
    margin: 0;
}
  #map {
        height: 200px;
        width: 50%;
        align : right;
       }
</style>
</head>
<body>

<h1 align="center" >Road Corridor Permit Application</h1>

<h2 align="center" >Queensland Government</h2>


<p>This form may be used to apply for works,structures and activities for which approval is required under secion 50
of the Transport infrastructure Act 1994 .This approval includes the construction,maintenance,upgrading or
conducing of those works,structres and activities characterized as ancillary works and enroachmens under the
Transport infrastructure Act 1994.</p>
<p>The form may also be used for the renewal of existing permits.</p>
<p><b>Essential information on Road Corridor Permits and the application process can be found on the
Road Corridor Permit information sheet(available on <a href="https://www.tmr.qld.gov.au">LINK</a> )</b></p>
<p><b>1.Application details</b>,</p>

<label><b>Note:The appicant is the perosn who will hold the permit and wil be legally responcible
for complying with the applicable condtions.A buisiness name is not a legal entity and should not be
entered in this field as the applicant.Where a person or company operates a buisiness
the applicabb is the person or comapny

<table>
<form action="it1.php" method="POST">
<tr> <td style="width: 10%">

<label for="Name"><b>Name *</b></label>
<input name="name" type="text" maxlength="50" style="width: 270px"/>
<tr> <td style="width: 10%">
<label for="Position in company"><b>Position in company *</b></label><br />
<input name="position_in_company" type="text" maxlength="50" style="width: 270px" />
</td> <td style ="width :10%">

<label for="Contact name"><b>Contact name(if any) </b></label><br />
<input name="contact_name" type="text" maxlength="100" style="width: 270px" />
</td> </tr> <tr> <td colspan="2">
<label for="Phone number"><b>Phone number *</b></label><br />
<input name="phone_number" type="text" maxlength="50" style="width: 180px" />
</td> <td style ="width :10%">
<label for="Fax number"><b>Fax number *</b></label><br />
<input name="fax_number" type="text" maxlength="50" style="width: 180px">
</td> <td style ="width :10%">
<label for="Mobile number"><b>Mobile number *</b></label><br />
<input name="mobile_number" type="text" maxlength="50" style="width: 180px">
</td> <td></tr> <tr> <td colspan = "2">
<label for="Postal Address"> <b>Postal address *</b></label>name="postal_address"<br />
<textarea rows="4" cols="50">
</textarea>
</td> <td style ="width :10%">
<label for="Residential address"><b>Residential address *</b></label> name="residental_address"<br />
<textarea rows="4" cols="50">
</textarea>
</td> </tr> <tr> <td colspan = "2">

<label for="Email"><b>Email *</b></label><br />
<input name="email" type="email" maxlength="50" style="width: 270px" />
</td> </tr> <tr>

</table>
</form>


<p><b>2.Are you seeking to renew an existing Road Corridor Permint?</b></p>
<form>
 <input type="radio" name="value" value="Yes" checked> Yes<br>
  <input type="radio" name="value" value="No">No
</form>



<p><b>2a) Existing Road Corridor Permit</b></p>
<table>
    <tbody>
<th>Existing Road corridor Permit No. *</th>
<tr>
        <td><input type="text" /></td>

    </tr>
<th>required expiry date *</th>
 <tr>
        <td><input type="date" size="30"/></td>

    </tr>

    </tbody>
</table>




<p><b>3. Duration of approval sought</b></p>
<p>Please give details of dates (including times if applicable)your Road Corridor Permits is required.</p>


<textarea rows="6" cols="50">
</textarea>





<p><b>4.Description of works,structures or activities you intend to carry out</b></p>
<p>For example,authorised signs,beehives,construction activity and so on ;or,if road works,the nature of
the road works-for example,roundabouts,media strip and so on.</p>

          <tr>
<textarea rows="6" cols="50">
</textarea>





<p><b>5.Location</b><p>
<p>Please give locations of the activity,works or structure,including :</p>
      <p>. Road name(s)</p>
      <p>. nearest intersection with another road(s)</p>
      <p>. orientation to points of the compass (that is north,south,east,west)</p>
      <p>. GPS coordinates</p>
      <p>. adjacent property description (Iot/registered plan)if known.</p>

<textarea style="float:center"rows="10" cols="30">Details about roads</textarea>

    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 18.4285, lng:84.0617};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
                   map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_jgyvORaD6w0dA5px3yMaeQD2il211XA&callback=initMap">
    </script>





<p><b>6.Details of how you plan to carry out the works,structures or activities</b></p>
<p>Please attach copies of plans and diagrams of works,structures or activities where appropriate,showing how
they will be implemented</p>
<p><b>If the activity is an authorised sign,full details of the propsed sign,including content,
dimension of sign and if appropriate a certified drawing indicating typical fixing of any wires
to support structures,should be included</b></p>
<form action="/action_page.php">
  Select files: <input type="file" id="myFile" name="files" multiple="multiple">
</form>




<p><b>7.I/We the applicants</b></p>
<p>a)request approval/renewal of approval to carry out works,structures or activities as specified in
section 50 of the Transport Infrastructure Act 1994</p>
<p>b)warrant that the information contained within and/or attached to this application is true and accurate to the
best of my/our knowledge</p>

<table >
<tr><th<b>For individual applications</b></th><th>
<tr> <td style="width: 100%">
<label for="Signature"><b>Signature </b></label><br />
<input name="Signature" type="text" maxlength="50" style="width: 200px" />
</td> <td style="width: 50%">
<label for="Date"><b>Date </b></label><br />
<input type = "date" name="Date" type="text" maxlength="50" style="width: 200px" />
</td> </tr> <tr> <td colspan="2">
<label for="For corporate applicants"><b>For corporate applicants </b></label><br />

<label for="Act"><b>Executed in accordance with corporations Act 2001 (Cth)Section 127 by</b></label><br />
</td> </tr> <tr> <td colspan="2">
<label for="Company name"><b>Company name</b></label><br />
<input name="Company name" type="text" maxlength="100" style="width: 400px" />
</td> </tr> <tr> <td style="width:50%">
<label for="ACN"><b>ACN</b></label><br />
<input name="ACN" type="text" maxlength="50" style="width: 200px" />
</td> </tr> <tr> <td colspan="2">
<label for"Director name"><b>Director name[FUll]</b></label><br />
<input name="Director name" type="text" maxlength="50" style="width: 200px" />
</td> <td style ="width :50%">
<label for="Signed(director)"><b>Signed(director)</b></label><br />
<input name="Signed(director)" type="text" maxlength="50" style="width: 200px" />
</td> <td></tr> <tr> <td colspan = "2">
<label for="director/secretary name[full]"><b>director/secretary name[full]</b></label><br />
<input name="director/secretary name[full]" type="text" maxlength="50" style="width: 200px" />
</td> <td style ="width :=50%">
<label for="Signed(director/secretary)"><b>Signed(director/secretary)</b></label><br />
<input name="Signed(director/secretary)" type="text" maxlength="50" style="width: 200px" />
</td>
</table>


<p><b>Privacy Statement :</b></p><p>The department and main roads is collecting the information
ont his form for the purposes of applying for a road corridor permit in accordance with the Transport
Infrastructure Act 1994.The Department of transport and Main Roads usually gives some or all of this information
to Departmwnt of Community Safety ,Queensland Police Service and Regional and City COuncils.Your personal details will
not be disclosed to any other third party without your consent unless required to do so by law.</p>


<form action="file:///C:/Users/saigiriraj/Desktop/thank.html">
    <input type="submit" value="Submit" />
</form>

</body>
</html>






