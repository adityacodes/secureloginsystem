@foreach($orders as $order)
<div id="" class="easyui-panel geth" style="width:740px;height:140px;padding:10px;">
	<table style="width:100%">
		<tr>

			<td width="80%" onclick="$('#OrderDetailBox').dialog('open')">You confirmed funds reception (Request for help {{ $order->or_id}})</td>
			<td><a href="#" onclick="$('#OrderMessageBox').dialog('open')" class="easyui-linkbutton">message 0/0</a></td>

		</tr>
	</table>
	<table  onclick="$('#OrderDetailBox').dialog('open')" style="width:100%">
		<tr>
			<td width="10%"><img style="height: 40px" src="{{asset('easyui/themes/icons/2.png')}}"><br>Number:{{ $order->or_as_id}}</td>
			<td width="20%">Date of creating:<br>{{ $order->created_at }}</td>
			<td width="20%">Great Tobin ><br>Bitcoin </td>
			<td width="20%">{{ $order->or_amount }}<br>Confirmation: <img src="{{asset('easyui/themes/icons/file.png')}}"> </td>
			<td width="20%">Confirmation:<br>> {{Auth::user()->name}}<br>Bitcoin </td>
			<td width="10%"><img style="height: 40px" src="{{asset('easyui/themes/icons/printout.png')}}"><br><a href="#" onclick="$('#OrderDetailBox').dialog('open')" class="easyui-linkbutton">Details>></a></td>

		</tr>
	</table>
</div>
@endforeach