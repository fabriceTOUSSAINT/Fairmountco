<script type="text/underscore-tpl" id="tplLocation">
	<% if(!model.length){ %>
		<span style="padding-top:0;" class="extra-info">You have to add atleast one location before you can proceed.</span>
	<%} else _.each(model, function(location){ %>
		<div class="sd-entry" data-loc="<%=location.Name %>">
    		<span><%= location.Name %></span>
			<a href="#" data-loc="<%=location.Name %>" class="btn btn-delete"></a>
			<a href="#" data-loc="<%=location.Name %>" class="primary btn-open-edit-vacation">Vacation</a>
			<a href="#" data-loc="<%=location.Name %>" class="primary btn-open-edit-specials">Holidays</a>
			<a href="#" data-loc="<%=location.Name %>" class="primary btn-open-edit-hours">Edit hours</a>
	    </div>
	<% }); %>
</script>
<script id="tplBusinessHours" type="text/underscore-tpl">
	<% _.each(model, function(day){ %>
		<tr data-day="<%= day.Day %>">
			<th class="day"><%= day.Day %></th>
			<td class="hours">
				<% _.each(day.Hours, function(hour,idx){%>
					<div>
					<%= templateEngine('renderHours',{selected:hour.From, name:'From'}) %>
					<%= templateEngine('renderIndication',{selected:hour.FromIndication, name:'FromIndication'}) %>
					<%= templateEngine('renderHours',{selected:hour.To, name:'To'}) %>
					<%= templateEngine('renderIndication',{selected:hour.ToIndication, name:'ToIndication'}) %>
					</div>
				<% }); %>
			</td>
		</tr>
	<% }); %>
</script>
<script id="tplHourSelect" type="text/underscore-tpl">
	<select name="<%= name %>">
		<option value="0"></option>
		<% for(i=1;i<=12;i++){ %>
			<option value="<%= i %>:00" <% if(i+':00'==selected){ %> selected <% } %> ><%= i %>:00</option>
			<option value="<%= i %>:30" <% if(i+':30'==selected){ %> selected <% } %> ><%= i %>:30</option>
		<% } %>
	<select>
</script>
<script id="tplHourIndication" type="text/underscore-tpl">
	<select name="<%= name %>">
		<option valeu="AM" <% if(selected == 'AM'){ %> selected <%}%>>AM</option>
		<option valeu="PM" <% if(selected == 'PM'){ %> selected <%}%>>PM</option>
	</select>
</script>
<script id="tplAddHoliday" type="text/underscore-tpl">
	<tr>
		<td class="date">
			<select name="month">
				<% _.each(['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],function(m){ %>
					<option value="<%= m %>"><%= m %></option>
				<% }); %>
			</select>
			<select name="day">
				<% for(i=1;i<=31;i++){ %>
					<option value="<%= i %>"><%= i %></option>
				<% } %>
			<select>
		</td>
		<td class="hours">
				<div>
					<%= templateEngine('renderHours',{selected:undefined, name:'From'}) %>
					<%= templateEngine('renderIndication',{selected:"AM", name:'FromIndication'}) %>
					<%= templateEngine('renderHours',{selected:undefined, name:'To'}) %>
					<%= templateEngine('renderIndication',{selected:'PM', name:'ToIndication'}) %>
				</div>
		</td>
		<td><a href="#" class="mabel-btn btn-add-special">+</a></td>
	</tr>
</script>
<script id="tplShowHoliday" type="text/underscore-tpl">
	<% _.each(model,function(holiday){ %>
	<tr>
		<th><%= holiday.Month %> <%= holiday.Day %></th>
		<td>
			<% if(holiday.Hours.length === 1 && (holiday.Hours[0].From == 0 || holiday.Hours[0].To == 0)){ %>
				Closed
			<% }else{
			 _.each(holiday.Hours,function(hour){ %>
				<% if(hour.From!=0 && hour.To!=0){ %>
					<%= hour.From %><%=hour.FromIndication%> &mdash; <%= hour.To %><%= hour.ToIndication%><br/>
				<% } %>
			<% });} %>
		</td>
		<td><a data-holiday="<%=holiday.Day%>,<%=holiday.Month%>" href="#" class="btn-delete"></a></td>
	</tr>
	<% }); %>
</script>
<script id="tplAddVacation" type="text/underscore-tpl">
	<tr>
		<td>
			From
			<select name="from">
			<% _.each(['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],function(m){ %>
				<option value="<%= m %>"><%= m %></option>
			<% }); %>
			</select>
			<select name="from-day">
				<% for(i=1;i<=31;i++){ %>
					<option value="<%= i %>"><%= i %></option>
				<% } %>
			<select>
		</td>
		<td>
			To
			<select name="to">
			<% _.each(['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],function(m){ %>
				<option value="<%= m %>"><%= m %></option>
			<% }); %>
			</select>
			<select name="to-day">
				<% for(i=1;i<=31;i++){ %>
					<option value="<%= i %>"><%= i %></option>
				<% } %>
			<select>
		</td>
		<td><a href="#" class="mabel-btn btn-add-vacation">+</a></td>
	</tr>
</script>
<script id="tplShowVacations" type="text/underscore-tpl">
	<% _.each(model,function(vaca){ %>
	<tr>
		<td class="from">
			<span class="fromday"><%= vaca.FromDay %></span> <span class="from"><%= vaca.From %></span>
		</td>
		<td class="to">
			<span class="today"><%= vaca.ToDay %></span> <span class="to"><%= vaca.To %></span>
		</td>
		<td><a href="#" class="btn btn-delete"></a></td>
	</tr>
	<% }); %>
</script>