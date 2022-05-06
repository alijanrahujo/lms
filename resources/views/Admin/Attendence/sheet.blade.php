.<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table cellspacing="0" width="60%" style="border:2px solid #0c2a62" >
            <tr>
                <td align="right"  width="100%" colspan="">
                    <div style="width:5%;"></div>
                    <div style="margin:10px 0px; font-weight: bold;" >
                        <font size="6px">New Ora-Tec Online Attendance System</font>
                        <font size="4px" style="float: right;"> <br />Attendance Report<br/>
                        From: 25/12/2021	To: 24/01/2022</font> 
                    <div>
                   
                </td>
            </tr>           @foreach($internee as $internee)
                            @endforeach

                            <tr align="left" style="border:1px #666666 solid;background-color:#FFFFFF;">
                                <td style="text-align:left;padding-left:10px;" colspan="3" >Emp ID # {{$internee->emp_id}}&nbsp;(New Ora-Tec)&nbsp;/&nbsp;Name: {{$internee->name}}  &nbsp;&nbsp;Designation: {{$internee->designation}}&nbsp;/&nbsp;Department:Information Technology &nbsp;/&nbsp;Shift: {{$internee->shift}} </td>
                            </tr>

                            <tr>
                                <td>
                                    <table cellpadding=3 cellspacing=0 width="1000px" border="1">
                                        <tr>
                                            <th class='t_head' width="15%">Date</th>
                                            <th class='t_head' width="14%">Day</th>
                                            <th class='t_head' width="14%">Time In</th>
                                            <th class='t_head' width="14%">Time Out</th>
                                            <th class='t_head' width="14%">Late Arrival</th> 
                                            <th class='t_head' width="14%">Early Left</th>
											<th class='t_head' width="14%">Shift</th>
                                            <th class='t_head' width="15%">Remarks</th>
@foreach($record as $record)            </tr>
<tr>
	<td class='t_body'>{{$record->date}}</td>
	<td class='t_body'>{{$record->day}}</td>
	<td class='t_body'>{{$record->time_in}}</td>
	<td class='t_body'>{{$record->time_out}}</td>
	<td class='t_body'>{{$record->late_arrival}}</td>
	<td class='t_body'>{{$record->early_left}}</td>
	<td class='t_body'>{{$record->shift}}</td>
	<td class='t_body'>{{$record->remarks}}</td>
</tr>
@endforeach
<tr>
    <td colspan="10" style="text-align:left;"><span style="margin-bottom:10px; font-size:18px;"><u>Report Summary</u></span><br>
                                                                                    Total Days=31  &nbsp; &nbsp; &nbsp; 
                                            Working Days=30   &nbsp; &nbsp; &nbsp; 
                                            Holidays=38  &nbsp; &nbsp; &nbsp;
                                            C/L=0  &nbsp; &nbsp; &nbsp;
                                            E/L=0  &nbsp; &nbsp; &nbsp; 
                                            Present Days=24  &nbsp; &nbsp; &nbsp;
                                            Absent=6&nbsp; &nbsp; &nbsp;
											Late arrival=24											 &nbsp; &nbsp; &nbsp;
                                            Early Left=5                                            
	</td>
</tr>
                               
<tr>
    <td colspan="10" align="center" ><strong>System Generated Report, Signature Not Required.</strong></td>
</tr>

</table>

</body>
</html>