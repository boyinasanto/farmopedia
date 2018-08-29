


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

<form action="it1.php" method="POST">
<table>
<label><b>Name></b></label>
<input type="text" name="name" required maxlength="50" style="width: 270px"/>
<tr> <td style="width: 10%">
<label><b>Position in company *</b></label><br />
<input type="text" name="position_in_company" required  maxlength="50" style="width: 270px" />
<tr> <td style="width: 10%">

<label><b>Contact name(if any) </b></label><br />
<input type="text" name="contact_name"  maxlength="100" style="width: 270px" />
<tr> <td style="width: 10%">
<label><b>Phone number *</b></label><br />
<input type="text" name="phone_number" required  maxlength="50" style="width: 180px" />
<tr> <td style="width: 10%">
<label><b>Fax number *</b></label><br />
<input type="text" name="fax_number" required maxlength="50" style="width: 180px">
<tr> <td style="width: 10%">
<label><b>Mobile number *</b></label><br />
<input type="text" name="mobile_number"required  maxlength="50" style="width: 180px">
</td> <td></tr> <tr> <td colspan = "2">
<label><b>Postal address *</b></label><br />
<textarea rows="4" cols="50" name="postal_address"></textarea>

</td> <td style ="width :10%">
<label><b>Residential address *</b></label><br />
<textarea rows="4" cols="50" name="residental_address"></textarea>
</td> </tr> <tr> <td colspan = "2">


<label><b>Email *</b></label><br />
<input type="email" name="email"  maxlength="50" style="width: 270px" />
</td> </tr> <tr>
</table>


<p><b>2.Are you seeking to renew an existing Road Corridor Permint?</b></p>
<table>
 <input type="radio" name="yes" value="Yes" checked> Yes :continue to 2a)<br>
  <input type="radio" name="no" value="No">No :continue to 3
</table>




<p><b>2a) Existing Road Corridor Permit</b></p>

    <tbody>
Existing Road corridor Permit No. *</th>

        <td><input type="text" name="corridor_permit_no" /></td>

    </tr>

<th>required expiry date *</th>
 <tr>
        <td><input type="date" name="date" size="30"/></td>

    </tr>

    </tbody>






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

  Select files: <input type="file" id="myFile" name="files" multiple="multiple">





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

<label "Act"><b>Executed in accordance with corporations Act 2001 (Cth)Section 127 by</b></label><br />
</td> </tr> <tr> <td colspan="2">
<label "Company name"><b>Company name</b></label><br />
<input type="text" name="company_name"  maxlength="100" style="width: 400px" />
</td> </tr> <tr> <td style="width:50%">
<label><b>ACN</b></label><br />
<input type="text" name="acn"  maxlength="50" style="width: 200px" />
</td> </tr> <tr> <td colspan="2">
<label><b>Director name[FUll]</b></label><br />
<input type="text" name="director_name"  maxlength="50" style="width: 200px" />
</td> <td style ="width :50%">

<label> <b>director/secretary name[full]</b></label><br />
<input  type="text" name="director_secretary_name_full" maxlength="50" style="width: 200px" />
</td> <td style ="width :=50%">

</td>
</table>


<p><b>Privacy Statement :</b></p><p>The department and main roads is collecting the information
ont his form for the purposes of applying for a road corridor permit in accordance with the Transport
Infrastructure Act 1994.The Department of transport and Main Roads usually gives some or all of this information
to Departmwnt of Community Safety ,Queensland Police Service and Regional and City COuncils.Your personal details will
not be disclosed to any other third party without your consent unless required to do so by law.</p>


<input type="submit" value="Submit" />

	 </form>
	 </body>
</html>


